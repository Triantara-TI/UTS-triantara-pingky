
<?php $__env->startSection('title', 'About Us'); ?>
 
<?php $__env->startSection('intro-header'); ?>
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('<?php echo e(asset
 
('images/about-bg.jpg')); ?>') no-repeat top center;">
    <div class="container text-center">
      <h1>TENTANG KAMI</h1>
      <p class="lead">BELAJAR TEMPLATE</p>
    </div>
  </header>
  <!-- END : Header -->

<?php $__env->startSection('content'); ?>
  <!-- Main -->
  <body class="intro-header text-white" style="background: url('<?php echo e(asset
 
 ('images/about-bg.jpg')); ?>') no-repeat center center;">
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Halaman About Us</h2>
          <p class="lead">DUA MAHASISWA YANG SEDANG BELAJAR FRAMEWORK LARAVEL DAN BOOTSTRAP.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tema.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web-agus-rusdiana\web-app\resources\views/about.blade.php ENDPATH**/ ?>