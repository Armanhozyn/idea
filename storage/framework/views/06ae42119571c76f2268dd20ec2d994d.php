<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/logo.jpg" alt="" width="100" alt="Idea logo">
            </a>
        </div>
        <div class="flex gap-x-5 items-center">
            <?php if(auth()->guard()->check()): ?>
                <form action="/logout" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Logout</button>
                </form>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                <a href="/login">Sign In</a>
                <a href="/register" class="btn">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\idea\resources\views/components/layout/nav.blade.php ENDPATH**/ ?>