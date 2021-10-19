

<nav class="navbar is-spaced is-full-width " data-aos="" data-start="top 10%" role="navigation">
  <div class="container">
    <div class="navbar-brand">
      <a  style="pointer-events: auto;"class="level-item has-margin-right-20 has-padding-5" href="<?php echo e(home_url()); ?>">
        <img src="<?php echo e(home_url('/app/uploads/2021/04/logo-primario-2.png')); ?>" width="200">
      </a>
      <div class="is-flex align-items-center has-text-primary">
        <a href="#" class="mx-2 is-small-text" style="pointer-events: auto;">ES</a> /
        <a href="#" class="mx-2 is-small-text" style="pointer-events: auto;">EN</a> /
        <a href="#" class="mx-2 is-small-text" style="pointer-events: auto;">POR</a>
      </div>
    </div>

    <div id="navbar-menu" class="navbar-menu">
      <div class="navbar-start">

      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons is-flex align-items-center">
            <a style="pointer-events: auto;" class="button btn-g is-dark is-marginless">
              Inicia ahora
            </a>
                       
            <div class="is-flex align-items-center justify-center has-margin-left-40">
              <svg style="position: absolute;z-index:-1" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 61 61">
                <defs>
                  <linearGradient id="linear-gradient" x1="0.785" y1="0.359" x2="0.171" y2="1" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#008bff"/>
                    <stop offset="1" stop-color="#114de8"/>
                  </linearGradient>
                </defs>
                <rect id="Rectangle_1" data-name="Rectangle 1" width="61" height="61" rx="30.5" fill="url(#linear-gradient)"/>
              </svg> 
              <div class="open-menu" style="pointer-events: auto;cursor:pointer">
                <svg  data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 61 61">
                      <circle id="Ellipse_1" data-name="Ellipse 1" cx="3.5" cy="3.5" r="3.5" transform="translate(20 19)" fill="#fff"/>
                      <circle id="Ellipse_4" data-name="Ellipse 4" cx="3.5" cy="3.5" r="3.5" transform="translate(20 35)" fill="#fff"/>
                      <circle id="Ellipse_2" data-name="Ellipse 2" cx="3.5" cy="3.5" r="3.5" transform="translate(35 19)" fill="#fff"/>
                      <circle id="Ellipse_3" data-name="Ellipse 3" cx="3.5" cy="3.5" r="3.5" transform="translate(35 35)" fill="#fff"/>
                </svg>
                <span data-feather="x" class="has-text-white" width="25" height="25"></span>
              </div>         
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="menu-desplegable">
  <div class="menu-items-des container">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-item is-flex-desktop', 'echo' => false]); ?>

      <?php endif; ?>
  </div>
</div><?php /**PATH /home/diversad/cointrader.salvatori.co/web/app/themes/cointraders/resources/views/partials/header.blade.php ENDPATH**/ ?>