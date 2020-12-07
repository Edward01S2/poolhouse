<nav id="nav" x-data="{open: false}" class="z-50 w-full">
  <div class="container px-4 py-4 mx-auto sm:px-6 lg:px-8 md:py-6 lg:py-8">
    <div class="flex items-center justify-between">

      <div class="lg:flex-shrink-0">
        <div class="flex items-center flex-shrink-0 md:justify-center">
          <a href="{{ home_url('/') }}" class="hover:opacity-50">
            <img id="logo-main" class="w-auto h-4 xl:h-6" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>
      </div>

      <div class="items-center hidden nav-container md:flex md:space-x-6 xl:space-x-8">
        @foreach ($navigation as $item)
          <a class="nav-link text-sm tracking-widest text-white focus:outline-none group transition duration-150 ease-in-out border-transparent border-b-3 hover:border-white {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" target="{!! $item->target !!}">
            <div class="nav-text group-hover:font-bold">{{ $item->label }}</div>
          </a>
        @endforeach
      </div>

      <div class="flex items-center md:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" class="inline-flex items-center justify-center mr-auto text-white transition duration-150 ease-in-out rounded-md focus:outline-none hover:text-c-red-100" aria-label="Main menu" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <svg :class="{'hidden': open, 'block': !open }" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <!-- Icon when menu is open. -->
          <svg :class="{'block': open, 'hidden': !open }" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div :class="{'block': open, 'hidden': !open }" class="bg-black shadow-md md:hidden" x-cloak>
    <div @click.away="open = false" class="py-12 pt-4 md:px-2">
      <ul class="flex flex-col space-y-6">
        @foreach ($navigation as $item)
          <li class="group relative px-4 transition duration-150 ease-in-out {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a @click="open = false" class="inline-block text-lg tracking-wider text-white transition duration-300 ease-in-out border-transparent border-b-3 hover:font-bold hover:border-white focus:outline-none md:text-base" href="{{ $item->url }}">
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>