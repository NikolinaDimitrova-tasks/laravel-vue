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
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <?php if(Route::has('login')): ?>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

            <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <section id="app">
         <app></app>
       
      </section>





        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\md\Desktop\webimp-laravel\appointment\resources\views/welcome.blade.php ENDPATH**/ ?>