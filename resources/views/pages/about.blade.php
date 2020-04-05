@extends('layouts.main')

@push('seo')
  <title>@lang('about.about') | Kasper Kloster</title>
  <meta description="Kasper Kloster - Webudvikler med expertise i SEO. PHP, MySQL, JavaScript, Grafisk Design">
@endpush

@section('content')
<main>
  <section id="credits">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 offset-sm-5">
          <dl class="row">
            <dt class="col-sm-3">@lang('about.made_by')</dt>
            <dd class="col-sm-9">Kasper Kloster</dd>

            <dt class="col-sm-3">@lang('about.contact')</dt>
            <dd class="col-sm-9">
              <p>Kasperkloster@gmail.com</p>
            </dd>

            <dt class="col-sm-3">@lang('about.skills')</dt>
            <dd class="col-sm-9">
              <p>Coding<br/>SEO<br/>Webdesign<br/>Graphic Design<br/>Online Marketing</p>
            </dd>

            <dt class="col-sm-3">@lang('about.languages')</dt>
            <dd class="col-sm-9">
              <p>PHP<br/>JavaScript<br/>HTML<br/>CSS<br/>SQL<br/>Python</p>
            </dd>

            <dt class="col-sm-3">@lang('about.technologies')</dt>
            <dd class="col-sm-9">Laravel<br/>jQuery<br/>Bootstrap<br/>Materialize<br/>APIs<br/>MySQL<br/>UNIX<br/>Nginx</dd>

            <dt class="col-sm-3 text-truncate">@lang('about.favorite_tools')</dt>
            <dd class="col-sm-9">aHrefs<br/>Excel<br/>Illustrator<br/>Photoshop<br/>Adobe XD<br/>Google Search Console<br/>Google Analytics</dd>

            <dt class="col-sm-3">@lang('about.special_thanks')</dt>
            <dd class="col-sm-9">
              <dl class="row">
                <dd class="col-sm-8">Google</dd>
              </dl>
            </dd>
          </dl>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 offset-sm-3">
          <h1>Kasper Kloster</h1>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Nav -->
<nav id="subpage-menu" class="closed">
  <div id="subpage-menu-btn">
    <i class="fas fa-pause fa-2x"></i>
  </div>
  <ul>
    @php $locale = session()->get('locale'); @endphp

    @if($locale == 'en')
      <a href="{{ route('index', 'en')}}">
        <li><i class="fas fa-home fa-2x"></i></li>
      </a>
      <a href="{{ route('work', 'en') }}">
        <li><i class="fas fa-paint-brush fa-2x"></i></li>
      </a>
    @else
      <a href="{{ route('index', 'da')}}">
        <li><i class="fas fa-home fa-2x"></i></li>
      </a>
      <a href="{{ route('work', 'da') }}">
        <li><i class="fas fa-paint-brush fa-2x"></i></li>
      </a>
    @endif
  </ul>
</nav>
@stop

@push('scripts')
<script>
  $(document).ready(function(){
    $("body").addClass("overflow-hidden");
    // Start animation
    $("#credits").animate({ "top": "-800px" }, 25000, 'linear' );
    // Pause, and Play animation
    $("#subpage-menu-btn").click(function() {
      if($("#subpage-menu").hasClass("closed"))
      {
        $("#subpage-menu").removeClass("closed").addClass("active");
        // Replace Icon
        $(this).find("i").removeClass("fa-pause").addClass("fa-play");
        // Stop animation
        $("#credits").stop();
        // Blur
        $("#credits").addClass("blurred-bg");
      }
      else
      {
        $("#subpage-menu").removeClass("active").addClass("closed");
        $(this).find("i").removeClass("fa-play").addClass("fa-pause");
        $("#credits").animate({ "top": "-550px" }, 10000 );
        $("#credits").removeClass("blurred-bg");
      }
    });
  });
</script>
@endpush
