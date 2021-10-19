
@include('partials.header')
@if (is_home())
@include('partials.marca')
@endif

<span class="pointer-sombra"></span>
<div class="scrollContainer is-relative" style="background: transparent !important;z-index: 2;">
  @if (is_home())
<div class="has-background-dark" style="height: 100%;width:100vw;position: fixed;z-index:-1">
  <div class="is-flex padre-voltis" data-aos data-scroll data-scroll-speed="10" data-scroll-direction="horizontal" style="z-index: 1;mix-blend-mode: color-burn;position: fixed;top: 0;left: 0;width: 360vw;height: 200vh">
    <div class="bg-hero is-parallax-cover" style="margin-left:-150vw;mix-blend-mode: color-burn;background: url({{home_url('/app/uploads/2021/04/06.png')}}) center center / cover no-repeat;"></div>
    <div class="bg-hero is-parallax-cover" style="    transform: rotatez(
      180deg
      ) rotateX(
      180deg
      );mix-blend-mode: color-burn;background: url({{home_url('/app/uploads/2021/04/06.png')}}) center center / cover no-repeat;"></div>
      <div class="bg-hero is-parallax-cover" style="mix-blend-mode: color-burn;background: url({{home_url('/app/uploads/2021/04/06.png')}}) center center / cover no-repeat;"></div>
  </div>
</div>
@endif
<main class="main" style="background: transparent !important;">
  @yield('content')
</main>

@hasSection('sidebar')
<aside class="sidebar">
  @yield('sidebar')
</aside>
@endif

@include('partials.footer')

</div>