<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD user</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="<?php echo e(route('m_user.create')); ?>"> Input User</a>
            </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-striped">
        <tr>
            <th width="155px" class="text-center">User id</th>
            <th width="150px" class="text-center">Level id</th>
            <th width="100px"class="text-center">Username</th>
            <th width="200px"class="text-center">Nama</th>
            <th width="150px"class="text-center">Password</th>
            <th class="text-center">Action</th>
        </tr>
        <?php $__currentLoopData = $useri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($m_user->user_id); ?></td>
                <td><?php echo e($m_user->level_id); ?></td>
                <td><?php echo e($m_user->username); ?></td>
                <td><?php echo e($m_user->nama); ?></td>
                <td><?php echo e($m_user->password); ?></td>
                <td class="text-center">
                    <div class="btn-group" role="group" aria-label="User Actions">
                        <a class="btn btn-info btn-sm mr-2" href="<?php echo e(route('m_user.show', $m_user->user_id)); ?>">Show</a>
                        <a class="btn btn-primary btn-sm mr-2" href="<?php echo e(route('m_user.edit', $m_user->user_id)); ?>">Edit</a>
                        <form action="<?php echo e(route('m_user.destroy', $m_user->user_id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </borð>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('m_user/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_POS\resources\views/m_user/index.blade.php ENDPATH**/ ?>