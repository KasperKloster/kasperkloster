@extends('layouts.main')

@push('seo')
  <title>@lang('work.work') | Kasper Kloster</title>
  <meta description="@lang('index.meta_desc')"/>
@endpush

@section('content')
<main id="main" class="h-auto bg-primaryBlack-900">
  <section id="top" class="bg-gray-800 h-auto py-4 px-36">
    <header class="text-center">
      <h1 class="text-4xl text-gray-100 uppercase font-titillium font-bold">
        @lang('work.work')
      </h1>
      <p class="text-gray-100">@lang('work.lead')</p>
    </header>
  </section>

  <section id="bandmate" class="bg-pink-500 work-section">
    <article>
    <h2><a href="https://bandmate.dk" target="_blank" rel="noopener">Bandmate</a></h2>
    <p class="mb-2">@lang('work.bandmate_desc')</p>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">Type</dt>
      <dd class="w-full md:w-5/6 ml-auto">Website</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.language')</dt>
      <dd class="w-full md:w-5/6 ml-auto">PHP, HTML, CSS, Blade, Schema</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.technologies_used')</dt>
      <dd class="w-full md:w-5/6 ml-auto">Laravel, Materialzecss, Ticketmaster API.</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">URL</dt>
      <dd class="w-full md:w-5/6 ml-auto">
        <a class="text-blue-700 hover:text-blue-900" href="https://bandmate.dk" target="_blank" rel="noopener">
         https://bandmate.dk
       </a>
     </dd>
    </dl>
    </article>
  </section>

  <section id="travelound" class="bg-green-500 work-section">
    <article>
    <h2><a href="https://travelround.io" target="_blank" rel="noopener">Travelround</a></h2>
    <p class="mb-2">@lang('work.travel_desc')</p>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">Type</dt>
      <dd class="w-full md:w-5/6 ml-auto">Website</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.language')</dt>
      <dd class="w-full md:w-5/6 ml-auto">PHP, HTML, CSS, Blade, JavaScript, MySQL</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.technologies_used')</dt>
      <dd class="w-full md:w-5/6 ml-auto">Laravel, Bootstrap, jQuery, Ajax, Mapbox, Rome2Rio API, Google AdSense</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">URL</dt>
      <dd class="w-full md:w-5/6 ml-auto">
        <a class="text-blue-700 hover:text-blue-900" href="https://travelround.io" target="_blank" rel="noopener">
         https://travelround.io
       </a>
     </dd>
    </dl>
    </article>
  </section>

  <section id="onlinemind" class="bg-purple-500 work-section">
    <article>
    <h2><a href="https://onlinemind.dk" target="_blank" rel="noopener">OnlineMind</a></h2>
    <p class="mb-2">@lang('work.onlinemind_desc')</p>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">Type</dt>
      <dd class="w-full md:w-5/6 ml-auto">Website</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.language')</dt>
      <dd class="w-full md:w-5/6 ml-auto">PHP, HTML, CSS, Blade, JavaScript</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.technologies_used')</dt>
      <dd class="w-full md:w-5/6 ml-auto">Laravel, Bootstrap, jQuery, Mailchimp, Mailgun</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">URL</dt>
      <dd class="w-full md:w-5/6 ml-auto">
        <a class="text-blue-700 hover:text-blue-900" href="https://onlinemind.dk" target="_blank" rel="noopener">
         https://onlinemind.dk
       </a>
     </dd>
    </dl>
    </article>
  </section>

  <section id="funktdesign" class="bg-yellow-500 work-section">
    <article>
    <h2><a href="https://funktdesign.eu" target="_blank" rel="noopener">FunktDesign</a></h2>
    <p class="mb-2"></p>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">Type</dt>
      <dd class="w-full md:w-5/6 ml-auto">Website</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.language')</dt>
      <dd class="w-full md:w-5/6 ml-auto">PHP, HTML, CSS, MySQL, JavaScript</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">@lang('work.technologies_used')</dt>
      <dd class="w-full md:w-5/6 ml-auto">Laravel, Bootstrap, jQuery, Ajax, Stripe Api, Mailgun</dd>
    </dl>
    <dl class="flex flex-wrap">
      <dt class="w-full md:w-1/6 font-bold">URL</dt>
      <dd class="w-full md:w-5/6 ml-auto">
        <a class="text-blue-700 hover:text-blue-900" href="https://funktdesign.eu" target="_blank" rel="noopener">
         https://funktdesign.eu
       </a>
       /
       <a class="text-blue-700 hover:text-blue-900" href="https://funktdesign.dk" target="_blank" rel="noopener">
        https://funktdesign.dk
      </a>
     </dd>
    </dl>
    </article>
  </section>
</main>

@include('partials._playNavbar', ['page' => 'work'])
@stop
