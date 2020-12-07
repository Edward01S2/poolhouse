@if($show)
  <div class="{{ $block->classes }}">
    <div class="container px-4 mx-auto sm:px-6 lg:px-8">
      <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 lg:gap-8 lg:grid-cols-3 xl:gap-12">
          @foreach($videos as $video)
            <a class="overflow-hidden duration-300 aspect-w-16 aspect-h-9 video-hover transiton" href="{!! $video['link'] !!}" data-lity>
              <img class="absolute inset-0 object-cover object-center transition duration-300" src="{!! $video['poster']['url'] !!}" alt="">
              <div class="absolute inset-0 flex items-center justify-center w-full h-full">
                <div class="hidden px-4 text-2xl font-bold leading-tight tracking-wide text-center text-white video-text md:px-8">{!! $video['title'] !!}</div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>

    <div>
      <InnerBlocks />
    </div>
  </div>
@endif
