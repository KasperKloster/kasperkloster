<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php $locale = session()->get('locale'); @endphp
    @if($locale == 'en')
      <link rel="alternate" hreflang="da_DK" href="{{ route(Route::currentRouteName(), 'da')}}" />
    @else
      <link rel="alternate" hreflang="en" href="{{ route(Route::currentRouteName(), 'en')}}" />
    @endif
    <link rel="alternate" href="{{ route(Route::currentRouteName(), 'en')}}" hreflang="x-default" />
    @stack('seo')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Titillium+Web:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" media="all">
    @stack('stylesheets')
  </head>

  <body>
    <div id="topbar" class="position-absolute p-1">
      <div class="dropdown">
        <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-flag"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'da')}}">Dansk</a>
          <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'en')}}" >English</a>
        </div>
      </div>
    </div>
