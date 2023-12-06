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

    <main>
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <h1 class="m-3 text-white bg-dark p-1 opacity-75">Онлайн курсы - это не круто!</h1>
        </section>
        <section id="about">
            <div class="container">
                <h2 class="m3">
                    О нас
                </h2>
            <div class="row mb-3">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 1</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 2</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
</div>


<div class="row mb-3">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 3</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 4</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
</div>
            </div>
        </section>


        <section id="courses">
    <div class="container">
                <h2 class="m3">Наши курсы</h2>
            <div class="d-flex" style="justify-content: center;">
            <?php $__currentLoopData = $all_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <img src="/images/<?php echo e($item->image); ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo e($item->title); ?></h5>
            <p class="card-text"><?php echo e($item->description); ?></p>
            <p class="card-text"><b>Стоимость курса <?php echo e($item->cost); ?>₽</b></p>
            <p class="card-text"><b>Продолжительность курса <?php echo e($item->duration); ?></b> недель(-и/-я)</p>
            <a href="#" class="btn btn-primary">Потратить деньги и время</a>
        </div>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
</div>
<?php echo e($all_courses->links('pagination::bootstrap-5')); ?>

            </div>
        </section>


        <section id="enroll">
            <div class="container">
                <!-- <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
            <form class="w-50 my-0 mx-auto" action="/enroll" method="POST">
              <?php echo csrf_field(); ?>
            <h2 class="m-3">Записаться на курс</h2>
  <div class="mb-3">
    <label for="Email" class="form-label">Введите свою почту</label>
    <input type="email" class="form-control" id="Email"  name="email">
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger mt-3"  role="alert">
    <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Введите свое имя</label>
    <input type="text" class="form-control" id="name" name="name" >
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger mt-3"  role="alert">
    <?php echo e($message); ?>

    </div>
    
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

  <div class="mb-3">
    <label for="name" class="form-label" name="course">Выберите курс</label>
    <select class="form-select" aria-label="Default select example" name="course">
  <?php $__currentLoopData = $all_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->title); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  
</select>
  <button type="submit" class="btn btn-primary">Записаться</button>
            </form>

            </div>
        </section>




    </main>

</body>
</html>
<?php /**PATH W:\domains\shayaxmetov-laravel\resources\views/index.blade.php ENDPATH**/ ?>