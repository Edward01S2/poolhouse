@if(is_front_page())
  @include('partials.front-page')
@else

  @include('partials.header')

  <div class="pt-8 md:pt-12">
    <main class="main">
      @yield('content')
    </main>
  </div>

  @include('partials.footer')
@endif
