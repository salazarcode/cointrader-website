
<div class="card has-margin-bottom-30 has-text-white is-full-width">
  <div class="is-relative has-shadow-overlay has-min-height-300" style="background:url(<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>) center center / cover no-repeat;">
  </div>
  <div class="card-content content has-text-weight-bold">
    <div>
        <div class="title is-3"><?= get_the_title(); ?></div>
        <div class="subtitle"><?php the_excerpt(); ?></div>
    </div>
    <a href="<?= get_permalink(); ?>" class="button has-margin-top-20"><i class="has-margin-right-10" data-feather="eye"></i>Ver mas</a>
  </div>
</div>
<?php /**PATH /var/www/html/app/themes/cointraders/resources/views/components/card.blade.php ENDPATH**/ ?>