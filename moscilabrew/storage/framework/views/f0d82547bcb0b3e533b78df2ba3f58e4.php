<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    
    
    <?php echo $__env->yieldContent('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
  </head>
  <body class=<?php echo $__env->yieldContent('bodyClass'); ?>>
    <?php echo $__env->yieldContent('navbar'); ?>
    
    <?php echo $__env->yieldContent('sideBar'); ?>

    
    <main>
      <?php echo $__env->yieldContent('content'); ?>       
    </main>

    <footer>
      
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>

    
    <?php echo $__env->yieldContent('js'); ?>
  </body>
</html><?php /**PATH C:\Users\Admin\Documents\GitHub\MoscilaBrew\moscilabrew\resources\views/layouts/master.blade.php ENDPATH**/ ?>