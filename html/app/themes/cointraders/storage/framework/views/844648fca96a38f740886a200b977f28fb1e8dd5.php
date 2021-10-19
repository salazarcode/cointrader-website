

<?php $__env->startSection('content'); ?>

<div class="hero is-medium">
  <div class="hero-body">
    <div class="container">
      <?php if(! have_posts()): ?>
      <div class="columns level">
        <div class="column is-5">
          <h3 class="title is-5">Ups, esto es un error 404. 🤷‍♂️</h3>
          <h1 class="title is-3">Lo que usted está buscando, o bien no existe o simplemente no se encuentra aquí.</h1>
        </div>
        <div class="column is-5">
          <h4 class="title is-4">¿Quiere volver a intentarlo?</h4>
          <?php echo $__env->make('forms.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
      <?php endif; ?>

      <div class="columns is-multiline">
        <div class="column is-12">
          <div class="title is-4">
          Resultados de su búsqueda: <?php echo e(get_search_query()); ?>

          </div>
        </div>
        <?php while(have_posts()): ?> <?php (the_post()); ?>
        <div class="column is-4">
          <?php echo $__env->make('partials.content-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php endwhile; ?>

      </div>

      <?php echo get_the_posts_navigation(); ?>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/themes/cointraders/resources/views/search.blade.php ENDPATH**/ ?>