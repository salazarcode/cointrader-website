  <?php if(get_post_type() === 'post'): ?>
    <?php echo $__env->make('components.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php else: ?>
    <?php echo $__env->make('components.category-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

<?php /**PATH /var/www/html/app/themes/cointraders/resources/views/partials/content-search.blade.php ENDPATH**/ ?>