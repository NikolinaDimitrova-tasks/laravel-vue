<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>

<body>
    <div class="container form-container">
     <section id="app" class="form-small">
     
     <app></app>
     </section>

        
        </div>
</body>

</html><?php /**PATH C:\Users\md\Desktop\webimp-laravel\appointment\resources\views/layouts/app.blade.php ENDPATH**/ ?>