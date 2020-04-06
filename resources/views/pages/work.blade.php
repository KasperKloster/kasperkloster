@extends('layouts.main')

@push('seo')
  <title>@lang('work.work') | Kasper Kloster</title>
  <meta description="Kasper Kloster - Webudvikler med expertise i SEO. PHP, MySQL, JavaScript, Grafisk Design">
@endpush

@section('content')
<main>
  <div id="content">
    <aside id="work-sidebar">
      <nav>
        <ul>
          <a href="#first" class="smooth-scroll">
            <li data-toggle="tooltip" data-placement="left" title="Top">
                <i class="fas fa-dot-circle"></i>
            </li>
          </a>
          <a href="#second" class="smooth-scroll">
            <li data-toggle="tooltip" data-placement="left" title="Bandmate">
                <i class="fas fa-dot-circle"></i>
            </li>
          </a>
          <a href="#third" class="smooth-scroll">
            <li data-toggle="tooltip" data-placement="left" title="Travelround">
                <i class="fas fa-dot-circle"></i>
            </li>
          </a>
          <a href="#fourth" class="smooth-scroll">
            <li data-toggle="tooltip" data-placement="left" title="OnlineMind">
                <i class="fas fa-dot-circle"></i>
            </li>
          </a>
        </ul>
      </nav>
    </aside>
    <section id="first" class="work-section">
      <div class="container">
        <article>
          <div class="col-md-10 offset-md-1">
            <h1>@lang('work.work')</h1>
            <p class="lead">
              @lang('work.lead')
            </p>
          </div>
        </article>
      </div>
    </section>
    <section id="second" class="work-section">
      <div class="container">
        <article>
          <div class="row">
            <div class="col-md-7 offset-md-1">
              <div class="text-center">
                <h2><a href="https://bandmate.dk" target="_blank" rel="noopener">Bandmate</a></h2>
              </div>
              <p>
                @lang('work.bandmate_desc')
              </p>
              <dl class="row">
                <dt class="col-sm-3">@lang('work.language')</dt>
                <dd class="col-sm-9">PHP, HTML, CSS, Blade, Schema</dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">@lang('work.technologies_used')</dt>
                <dd class="col-sm-9">Laravel, Materialzecss, Ticketmaster API.</dd>
              </dl>
            </div>

            <div class="col-md-4">
            </div>
          </div>
        </article>
      </div>
    </section>
    <section id="third" class="work-section mb-3 mt-3">
      <div class="container">
        <article>
          <div class="row">
            <div class="col-md-4 offset-md-1">

            </div>
            <div class="col-md-7">
              <div class="text-center">
                <h2>
                  <a href="https://travelround.io" target="_blank" rel="noopener">Travelround</a>
                </h2>
              </div>
              <p>
                @lang('work.travel_desc')
              </p>
              <dl class="row">
                <dt class="col-sm-3">@lang('work.language')</dt>
                <dd class="col-sm-9">PHP, HTML, CSS, Blade, JavaScript, MySQL</dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">@lang('work.technologies_used')</dt>
                <dd class="col-sm-9">Laravel, Bootstrap, jQuery, Mapbox, APIs, Google AdSense</dd>
              </dl>
            </div>
          </div>
        </article>
      </div>
    </section>
    <section id="fourth" class="work-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 offset-md-1">
            <div class="text-center">
              <h2><a href="https://onlinemind.dk" target="_blank" rel="noopener">OnlineMind</a></h2>              
            </div>
            <p>
              @lang('work.onlinemind_desc')
            </p>
            <dl class="row">
              <dt class="col-sm-3">@lang('work.language')</dt>
              <dd class="col-sm-9">PHP, HTML, CSS, Blade, JavaScript</dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-3">@lang('work.technologies_used')</dt>
              <dd class="col-sm-9">Laravel, Bootstrap, jQuery, Mailchimp, Mailgun</dd>
            </dl>
          </div>

          <div class="col-md-4">
          </div>
        </div>
        </article>
      </div>
    </section>
  </div>
  <nav id="subpage-menu" class="closed">
    <div id="subpage-menu-btn">
      <i class="fas fa-bars fa-2x"></i>
    </div>
    @php $locale = session()->get('locale'); @endphp
    <ul>
      @if($locale == 'en')
      <a href="{{ route('index', 'en') }}">
        <li><i class="fas fa-home fa-2x"></i></li>
      </a>
      <a href="{{ route('about', 'en') }}">
        <li><i class="fas fa-brain fa-2x"></i></li>
      </a>
      @else
        <a href="{{ route('index', 'da') }}">
          <li><i class="fas fa-home fa-2x"></i></li>
        </a>
        <a href="{{ route('about', 'da') }}">
          <li><i class="fas fa-brain fa-2x"></i></li>
        </a>
      @endif
    </ul>
  </nav>
</main>
@stop

@push('scripts')
<script>
$(document).ready(function(){
  // Menu
  $("#subpage-menu-btn").click(function() {
    if($("#subpage-menu").hasClass("closed"))
    {
      $("#subpage-menu").removeClass("closed").addClass("active");
      // Replace Icon
      $(this).find("i").removeClass("fa-bars").addClass("fa-times");
      // Blur
      $("#content").addClass("blurred-bg");
    }
    else
    {
      $("#subpage-menu").removeClass("active").addClass("closed");
      $(this).find("i").removeClass("fa-times").addClass("fa-bars");
      $("#content").removeClass("blurred-bg");
    }
  });

  // Tooltip
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  // Smooth scroll
  $(".smooth-scroll").click(function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
@endpush
