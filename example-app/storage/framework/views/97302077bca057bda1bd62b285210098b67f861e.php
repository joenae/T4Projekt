<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard.io | Projectmanagement</title>

  <?php echo $__env->make('layouts.template-parts.head-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">
  

  <?php echo $__env->make('layouts.template-parts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <?php echo $__env->make('layouts.template-parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 

   <!--  Main content -->
    <div class="content">
      <div class="container-fluid">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div> 
  
  </div>
  <?php echo $__env->make('layouts.template-parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- REQUIRED SCRIPTS -->
<?php echo $__env->make('layouts.template-parts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /var/www/html/resources/views/layouts/master.blade.php ENDPATH**/ ?>