
<?php $__env->startSection('title', 'email'); ?>
 
<?php $__env->startSection('intro-header'); ?>
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('<?php echo e(asset
 
('images/3-bg.jpg')); ?>') no-repeat center center;">
    <div class="container text-center">
      <h1>email</h1>
      
    </div>
  </header>
  <!-- END : Header -->

 
<?php $__env->startSection('content'); ?>
<body class="intro-header text-white" style="background: url('<?php echo e(asset
 
 ('images/1-bg.jpg')); ?>') no-repeat center center;">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tema.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer\web-uts1\web-app\resources\views/form.blade.php ENDPATH**/ ?>