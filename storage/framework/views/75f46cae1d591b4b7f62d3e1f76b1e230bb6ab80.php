<body>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
<div class="container-form-auth">
        <form action="#" method="post">
            <?php echo csrf_field(); ?>
            <label for="email" class="email">Введите вашу почту</label>
            <input type="email" class="email" name="email">
            <label for="password" class="password">Введите пароль</label>
            <input type="password" class="password" name="password">
            <button type="submit" class="button">Авторизироваться</button>
            <p class="auth-text">Вас нет в системе?<a href="<?php echo e(route('reg')); ?>">Зарегистрироваться</a></p>
        </form>
</div>
</body><?php /**PATH W:\domains\shayaxmetov-laravel\resources\views/auth.blade.php ENDPATH**/ ?>