@extends('layouts.main')
@push('seo')
  <title>Kasper Kloster</title>
  <meta description="@lang('index.meta_desc')"/>
@endpush

@section('content')
<main class="h-screen flex items-center justify-center bg-primaryWhite-100">
  <section>
    <header>
      <div class="relative min-h-400 min-w-4/5 md:min-w-420 flex flex-wrap content-center">
        <h1 id="frontH1" class="m-auto z-10 font-titillium font-black text-7xl md:text-9xl text-primaryBlack-900 frontH1Shadow cursor-pointer transition duration-500 ease-in-out">
          Kasper<br/>Kloster
        </h1>
          <nav id="frontNav">
            <ul>
              <li class="absolute transform opacity-0 top-45p left-30p transition-all duration-500 ease-in-out">
                <a href="{{ route('about', Session::get('locale')) }}" class="front-btn">
                  <i class="fas fa-brain fa-2x"></i>
                </a>
              </li>
              <li class="absolute transform opacity-0 top-45p right-47p transition-all duration-500 ease-in-out">
                <a href="{{ route('work', Session::get('locale')) }}" class="front-btn"><i class="fas fa-paint-brush fa-2x"></i></a>
              </li>
              <li class="absolute transform opacity-0 bottom-30p left-30p transition-all duration-500 ease-in-out">
                <button id="socialBtn" class="front-btn relative z-10"><i class="fas fa-hashtag fa-2x"></i></button>

                <ul id="socialList" class="absolute z-0 top-0 left-30p mr-4 flex items-center opacity-0 transition-all duration-500 ease-in-out">
                  <li>
                    <a href="https://dk.linkedin.com/in/kasperkloster" target="_blank" rel="noopener" class="front-social-btn">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://github.com/kasperkloster" target="_blank" rel="noopener" class="front-social-btn">
                      <i class="fab fa-github"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.behance.net/user/?username=kasperkloster" target="_blank" rel="noopener" class="front-social-btn">
                      <i class="fab fa-behance"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://onlinemind.dk/" target="_blank" rel="noopener" class="front-social-btn">
                      <i class="fas fa-globe-europe"></i>
                    </a>
                  </li>
                </ul>

              </li>
            </ul>
          </nav>
      </div>
    </header>
  </section>
</main>
@endsection
