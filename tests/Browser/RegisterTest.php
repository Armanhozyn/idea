<?php

it('register the user', function () {
    visit('/register')
        ->fill('name', 'Arman')
        ->fill('email','arman@gmail.com')
        ->fill('password', '123456780')
        ->click('Create Account')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user())->toMatchArray([
        'name' => 'Arman',
        'email' => 'arman@gmail.com'
    ]);
});
