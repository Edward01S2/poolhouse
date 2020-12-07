<footer class="bg-white">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col py-12">

      <div class="flex flex-col items-center justify-center space-y-12">
        <div class="">
          <a class="block px-8 py-3 text-white transition duration-300 bg-black border-2 border-transparent rounded-full hover:border-black hover:text-black hover:bg-white" href="{!! $studies['url'] !!}" target="_blank">{!! $studies['title'] !!}</a>
        </div>
        
        <div class="flex flex-col items-center justify-center space-y-12 md:flex-row md:space-y-0 md:justify-between md:w-full">

          @if($social)
            <div class="flex flex-row items-center justify-center space-x-8 md:py-0 lg:py-0 lg:items-start lg:justify-start">
              @foreach($social as $item)
                <a class="hover:opacity-50" href="{!! $item['url'] !!}" target="_blank">
                  <img class="h-8 md:h-6" src="{!! $item['icon']['url'] !!}" alt="">
                  {!! $item['link']['title'] !!}
                </a>
              @endforeach
            </div>
          @endif

          <div>
            <a class="flex items-center space-x-3 text-sm font-semibold text-black uppercase hover:opacity-75" href="{!! $link['url'] !!}" target="_blank">
              <span class="flex-shrink-0">{!! $link['title'] !!}</span>
              <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>
  
</footer>
