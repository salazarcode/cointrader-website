<form role="search" method="get" class="form field has-addons" action="<?php echo e(home_url('/')); ?>">
  <div class="control">
    <input type="search" class="search input" placeholder="<?php echo esc_attr_x('Busca algo &hellip;', 'placeholder', 'sage'); ?>" value="<?php echo e(get_search_query()); ?>" name="s">
  </div>
  <div class="control">
    <button class="button has-text-primary" type="submit"> <i data-feather="search"></i></button>
  </div>
</form>
<?php /**PATH /home/diversad/cointrader.salvatori.co/web/app/themes/cointraders/resources/views/forms/search.blade.php ENDPATH**/ ?>