<?php if (isset($component)) { $__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757 = $component; } ?>
<?php $component = App\View\Components\Admin\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757)): ?>
<?php $component = $__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757; ?>
<?php unset($__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757); ?>
<?php endif; ?>
    <main>
        <section>
            <div class="container">
                <h2 class="m-3">Список заявок</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Имя клиента</th>
                            <th scope="col">Курс</th>
                            <th scope="col">Дата заявки</th>
                            <th scope="col">Статус заявки</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <th scope="row"><?php echo e($item->id); ?></th>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->course_id); ?></td>
                        <td><?php echo e($item->created_at); ?></td>
                        <td>
                            <?php if($item->is_confirm == 0): ?> 
                            Не подтверждена
                            <?php else: ?> 
                            Подтверждено
                            <?php endif; ?>
                            </td>
                            <td>
                                <a href="/application/<?php echo e($item->id); ?>/confirm">
                                    <img src="images/confirm.png" alt="Подтвердить">
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>


            </div>
        </section>


        <section>
        <h2 class="m-3">Создать курс</h2>
          <form action="create_course" method="get">
            <?php echo csrf_field(); ?>
            <label for="name">Название курса</label>
            <input type="text" class="form-control" id="name"  name="name">
            <label for="description">Описание курса</label>
            <input type="text" class="form-control" id="description"  name="description">
            <label for="cost">Стоимость курса</label>
            <input type="text" class="form-control" id="cost"  name="cost">
            <label for="duration">Длительность</label>
            <input type="text" class="form-control" id="duration"  name="duration">
            <label for="photo">Длительность</label>
            <!-- <input type="file" class="form-control" id="file"  name="file"> -->
            <label for="category">Категория курса</label>
            <select class="form-select" aria-label="Default select example" name="course">
              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->title); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <button type="submit" class="btn btn-primary">Создать курс</button>
              


        

  </div>
        </section>
    </main>
</body>
</html>
<?php /**PATH W:\domains\shayaxmetov-laravel\resources\views/admin/admin.blade.php ENDPATH**/ ?>