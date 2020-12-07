<?php $__env->startSection('title'); ?>
 UTS AGUS RUSDIANA
<?php $__env->stopSection(); ?>
<?php $__env->startSection('intro-header'); ?>
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('<?php echo e(asset
 
('images/home-bg.jpg')); ?>') no-repeat bottom center;">
    <div class="container text-center">
      <h1>Belajar Koding Mulai Dari Nol</h1>
      <p class="lead">Bangun karir Kamu di bidang kreatif digital untuk menjadi seorang profesional</p>
    </div>
  </header>

 
<?php $__env->startSection('content'); ?>
    <!-- Main -->
    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Halaman Home</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END : Main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("tema.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web-agus-rusdiana\web-app\resources\views/welcome.blade.php ENDPATH**/ ?>