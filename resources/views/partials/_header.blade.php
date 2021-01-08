<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partials._google')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(Session::get('locale') == 'en')
      <link rel="alternate" hreflang="da_DK" href="{{ route(Route::currentRouteName(), 'da')}}" />
    @else
      <link rel="alternate" hreflang="en" href="{{ route(Route::currentRouteName(), 'en')}}" />
    @endif
    <link rel="alternate" href="{{ route(Route::currentRouteName(), 'en')}}" hreflang="x-default" />
    @stack('seo')
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css" integrity="sha512-IejtbqJqhyw0pAfIGrqsO/+9McIyWp3zwz9Y0oKOpsSo9XHOCWwPcS6ezTpdDG5ZIkmMdvkkd1eq7C56fRqYxg==" crossorigin="anonymous" />
    @stack('stylesheets')

    <script type="application/ld+json" nonce="{{ csp_nonce() }}">
    {
      "@context": "http://schema.org/",
      "@type": "Person",
      "name": "Kasper Kloster",
      "email": "mailto:kasperkloster@gmail.com",
      "jobTitle": "Developer",
      "url": "https://kasperkloster.dk",
      "sameAs": [
        "https://dk.linkedin.com/in/kasperkloster",
        "https://github.com/kasperkloster",
        "https://www.behance.net/kasperkloster",
        "https://www.instagram.com/kasperkloster/",
        "https://twitter.com/kasperkloster"
      ]
    }
    </script>
  </head>

  <body>

  <div class="absolute top-2 left-4 inline-block text-left">
    <button type="button" id="lang-dropdown-btn" class="opacity-50 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 hover:opacity-100" aria-haspopup="true" aria-expanded="true">
      <i class="far fa-flag"></i>
      <svg id="flag-chevron" class="-mr-1 ml-2 h-5 w-5 transform rotate-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>

    <div id="lang-options" class="hidden mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
      <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="langDropdownBtn">
        <a href="{{ route(Route::currentRouteName(), 'da')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Dansk</a>
        <a href="{{ route(Route::currentRouteName(), 'en')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">English</a>
      </div>
    </div>
  </div>
