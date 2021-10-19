
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(is_home()): ?>
<?php echo $__env->make('partials.marca', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<span class="pointer-sombra"></span>
<div class="scrollContainer is-relative" style="background: transparent !important;z-index: 2;">
  <?php if(is_home()): ?>
<div class="has-background-dark" style="height: 100%;width:100vw;position: fixed;z-index:-1">
  <div class="is-flex padre-voltis" data-aos data-scroll data-scroll-speed="10" data-scroll-direction="horizontal" style="z-index: 1;mix-blend-mode: color-burn;position: fixed;top: 0;left: 0;width: 360vw;height: 200vh">
    <div class="bg-hero is-parallax-cover" style="margin-left:-150vw;mix-blend-mode: color-burn;background: url(<?php echo e(home_url('/app/uploads/2021/04/06.png')); ?>) center center / cover no-repeat;"></div>
    <div class="bg-hero is-parallax-cover" style="    transform: rotatez(
      180deg
      ) rotateX(
      180deg
      );mix-blend-mode: color-burn;background: url(<?php echo e(home_url('/app/uploads/2021/04/06.png')); ?>) center center / cover no-repeat;"></div>
      <div class="bg-hero is-parallax-cover" style="mix-blend-mode: color-burn;background: url(<?php echo e(home_url('/app/uploads/2021/04/06.png')); ?>) center center / cover no-repeat;"></div>
  </div>
</div>
<?php endif; ?>
<main class="main" style="background: transparent !important;">
  <?php echo $__env->yieldContent('content'); ?>
</main>

<?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
<aside class="sidebar">
  <?php echo $__env->yieldContent('sidebar'); ?>
</aside>
<?php endif; ?>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div><?php /**PATH /home/diversad/cointrader.salvatori.co/web/app/themes/cointraders/resources/views/layouts/app.blade.php ENDPATH**/ ?>