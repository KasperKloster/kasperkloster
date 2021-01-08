<aside id="playNavbar" class="fixed play-navbar z-50 bg-primaryWhite-100 hover:bg-primaryWhite-50 text-primaryBlack-900 rounded-full py-3 px-6 w-48 h-48 cursor-pointer transition duration-500 ease-in-out">
  <svg class="absolute w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
  </svg>

  <ul>
    <a class="playNavbar-item opacity-0 top-full left-1" href="{{ route('index') }}">
      <li>
        <i class="fas fa-home fa-2x"></i>
      </li>
    </a>
    @if($page == 'work')
    <a class="playNavbar-item opacity-0 top-full left-1" href="{{ route('about', Session::get('locale')) }}">
      <li>
        <i class="fas fa-brain fa-2x"></i>
      </li>
    </a>
    @else
    <a class="playNavbar-item opacity-0 top-full left-1" href="{{ route('work', Session::get('locale')) }}">
      <li>
        <i class="fas fa-paint-brush fa-2x"></i>
      </li>
    </a>
    @endif
  </ul>
</aside>
