@extends('layouts.main')

@push('seo')
  <title>@lang('about.about') | Kasper Kloster</title>
  <meta description="@lang('index.meta_desc')"/>
@endpush

@section('content')
<main id="main" class="relative h-screen overflow-hidden bg-primaryBlack-900 text-gray-100">
  <div id="credits" class="absolute left-24 md:left-38">

    <header class="mb-6 text-center">
      <h1 class="font-bold">Created by</h1>
      <p><i>Kasper Kloster</i></p>
    </header>

    <section class="relative text-center md:text-justify">

      <article>
        <dl class="flex flex-wrap mb-6">
          <dt class="w-full md:w-1/2 font-bold">@lang('about.contact')</dt>
          <dd class="w-full md:w-1/2 ml-auto">kasperkloster@gmail.com</dd>
        </dl>
        <dl class="flex flex-wrap mb-6">
          <dt class="w-full md:w-1/2 font-bold">@lang('about.skills')</dt>
          <dd class="w-full md:w-1/2 ml-auto">Coding<br/>SEO<br/>Webdesign<br/>Graphic Design<br/>Online Marketing</dd>
        </dl>
        <dl class="flex flex-wrap mb-6">
          <dt class="w-full md:w-1/2 font-bold">@lang('about.languages')</dt>
          <dd class="w-full md:w-1/2 ml-auto">PHP<br/>JavaScript<br/>HTML<br/>CSS<br/>MySQL<br/>Python</dd>
        </dl>
        <dl class="flex flex-wrap mb-6">
          <dt class="w-full md:w-1/2 font-bold">@lang('about.technologies')</dt>
          <dd class="w-full md:w-1/2 ml-auto">Laravel<br/>Git<br/>jQuery<br/>Tailwind<br/>Bootstrap<br/>Materialize<br/>APIs<br/>MySQL<br/>UNIX<br/>Nginx</dd>
        </dl>
        <dl class="flex flex-wrap mb-6">
          <dt class="w-full md:w-1/2 font-bold">@lang('about.favorite_tools')</dt>
          <dd class="w-full md:w-1/2 ml-auto">aHrefs<br/>Excel<br/>Illustrator<br/>Photoshop<br/>Adobe XD<br/>Google Search Console<br/>Google Analytics<br/>Google Tag Manager</dd>
        </dl>
        <dl class="flex flex-wrap mb-6">
          <dt class="w-full md:w-1/2 font-bold">@lang('about.special_thanks')</dt>
          <dd class="w-full md:w-1/2 ml-auto">Google</dd>
        </dl>
      </article>
    </section>
  </div>
</main>
@include('partials._playNavbar', ['page' => 'about'])
@stop

{{--

</main>

<!-- Nav -->
<nav id="subpage-menu" class="closed">
  <div id="subpage-menu-btn">
    <i class="fas fa-pause fa-2x"></i>
  </div>
  <ul>
    @php $locale = session()->get('locale'); @endphp
    <a href="{{ route('index', $locale)}}">
      <li><i class="fas fa-home fa-2x"></i></li>
    </a>
    <a href="{{ route('work', $locale) }}">
      <li><i class="fas fa-paint-brush fa-2x"></i></li>
    </a>
  </ul>
</nav>

</main>
@stop

@push('scripts')
<script nonce="{{ csp_nonce() }}">
  $(document).ready(function(){
    $('body').addClass("overflow-hidden").hide().fadeIn(3600);
    // Start animation
    $("#credits").animate({ "top": "-900px" }, 26000, 'linear' );
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
        $("#credits").animate({ "top": "-900px" }, 26000, 'linear' );
        $("#credits").removeClass("blurred-bg");
      }
    });
  });
</script>
@endpush --}}
