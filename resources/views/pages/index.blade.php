@extends('layouts.main')
@php $locale = session()->get('locale'); @endphp
@push('seo')
  <title>Kasper Kloster</title>
  <meta description="Kasper Kloster - Webudvikler med expertise i SEO. PHP, MySQL, JavaScript, Grafisk Design">
  @if($locale == 'da')
  <link rel="canonical" href="{{ route('index') }}" />
  @endif
@endpush

@push('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/front.css') }}" media="all">
@endpush

@section('content')
<main>
  <section class="h-100">
    <header class="container h-100">
      <div class="d-flex align-items-center justify-content-center h-100">
        <div class="d-flex flex-column">
          <nav class="front-navbar">
            <ul>
                @if($locale == 'en')
                <li><a href="{{ route('about', 'en') }}" class="item"><i class="fas fa-brain fa-2x"></i></a></li>
                <li><a href="{{ route('work', 'en') }}" class="item"><i class="fas fa-paint-brush fa-2x"></i></a></li>
                @else
                  <li><a href="{{ route('about', 'da') }}" class="item"><i class="fas fa-brain fa-2x"></i></a></li>
                  <li><a href="{{ route('work', 'da') }}" class="item"><i class="fas fa-paint-brush fa-2x"></i></a></li>
                @endif
              <li><h1>Kasper<br/>Kloster</h1></li>
              <li><a href="#" id="findMe" class="item">@lang('index.find_me')</a></li>
              <li>
                <ul id="findMeSub">
                  <a href="https://dk.linkedin.com/in/kasperkloster" target="_blank" rel="noopener"><li><i class="fab fa-linkedin-in fa-2x"></i></li></a>
                  <a href="https://github.com/kasperkloster" target="_blank" rel="noopener"><li><i class="fab fa-github fa-2x"></i></li></a>
                  <a href="https://www.behance.net/user/?username=kasperkloster" target="_blank" rel="noopener"><li><i class="fab fa-behance fa-2x"></i></li></a>
                  <a href="https://onlinemind.dk" target="_blank" rel="noopener"><li><i class="fas fa-globe fa-2x"></i></li></a>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </section>
</main>
@endsection

@push('scripts')
<script>
  $("h1").click(function(){
    // Open and Closes main
    $(".front-navbar").toggleClass("front-navbar-click");
    // If findMe Menu is open
    if($("#findMeSub").hasClass("show-sub"))
    {
      $("#findMeSub").toggleClass("show-sub");
    }
    // Find Me Menu
    $("#findMe").click(function(event){
      event.preventDefault();
      $("#findMeSub").toggleClass("show-sub");
    });
  });
</script>
@endpush
