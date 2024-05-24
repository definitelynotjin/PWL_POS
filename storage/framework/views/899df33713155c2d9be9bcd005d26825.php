><html>
    <head>
        <title>Level Pengguna</title>
    </heaad>
    <body>
        <h1>Data User</h1>
        <a href="<?php echo e(route('/user/tambah')); ?>">Tambah User</a>
        <table border="1" cellpadding="2" cellspacing="0" >
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Penguna</th>
                <th>Kode Level</th>
                <th>Kode Nama</th>
                <th>Aksi</th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($d->user_id); ?></td>
                <td><?php echo e($d->username); ?></td>
                <td><?php echo e($d->nama); ?></td>
                <td><?php echo e($d->level_id); ?></td>
                <td><?php echo e($d->level->level_kode); ?></td>
                <td><?php echo e($d->level->level_nama); ?></td>
                <td><a href=<?php echo e(route('/user/ubah', $d->user_id)); ?>>Ubah</a> | <td><a href=<?php echo e(route('/user/hapus', $d->user_id)); ?>>Hapus</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>

</html>
<?php /**PATH C:\laragon\www\PWL_POS\resources\views/user.blade.php ENDPATH**/ ?>