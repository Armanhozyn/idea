<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Idea</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js',]); ?>
</head>

<body class="bg-background text-foreground">
    <?php if (isset($component)) { $__componentOriginal716b2e1b28998879cf545b7ca2032129 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal716b2e1b28998879cf545b7ca2032129 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal716b2e1b28998879cf545b7ca2032129)): ?>
<?php $attributes = $__attributesOriginal716b2e1b28998879cf545b7ca2032129; ?>
<?php unset($__attributesOriginal716b2e1b28998879cf545b7ca2032129); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal716b2e1b28998879cf545b7ca2032129)): ?>
<?php $component = $__componentOriginal716b2e1b28998879cf545b7ca2032129; ?>
<?php unset($__componentOriginal716b2e1b28998879cf545b7ca2032129); ?>
<?php endif; ?>

    <main class="max-w-7xl mx-auto px-6">
        <?php echo e($slot); ?>

    </main>

    <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <div 
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 3000)"
        x-transition.opacity.duration.300ms
        class="bg-primary px-4 py-3 absolute bottom-4 right-4 rounded-lg"> 
        <?php echo e($value); ?>

        </div>
    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
</body>

</html>

<?php /**PATH C:\laragon\www\idea\resources\views/components/layout/layout.blade.php ENDPATH**/ ?>