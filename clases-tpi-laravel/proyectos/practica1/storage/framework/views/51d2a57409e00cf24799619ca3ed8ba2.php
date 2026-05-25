<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title','Mi aplicacion'); ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
    <header>
        <?php echo $__env->yieldContent('header'); ?>
    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH /var/www/html/practica1/resources/views/pages/inicio.blade.php ENDPATH**/ ?>