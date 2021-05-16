<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
            <div> Name | Date | Time </div>
            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div> <?php echo e($appointment->name); ?>  | <?php echo e($appointment->time); ?>   | <?php echo e($appointment->date); ?>  </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH C:\Users\md\Desktop\webimp-laravel\appointment\resources\views/appointment/index.blade.php ENDPATH**/ ?>