@if($show)
<div class="{{ $block->classes }}">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24">
      @if($video)
        <a href="{!! $video !!}" class="group" data-lity>
          <div class="aspect-w-16 aspect-h-9">
            <img class="object-cover object-center w-full h-full" src="{!! $poster['url'] !!}" alt="">
            <div class="flex items-center justify-center w-full h-full">
              <div class="p-3 transition duration-300 transform rounded-full bg-c-gray-200 group-hover:scale-110">
                <svg class="h-8 ml-1 text-black fill-current w-7 md:h-10 md:w-9 lg:h-12 lg:w-11 xl:h-14 xl:w-13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6z"/></svg>
              </div>
            </div>
          </div>
        </a>
      @endif
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
@endif
