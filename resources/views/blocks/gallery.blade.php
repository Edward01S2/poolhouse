<div class="{{ $block->classes }}">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24">

      <div class="relative mb-4 pb-full md:aspect-w-16 md:aspect-h-9 md:mb-6 lg:mb-8 xl:mb-12">
        <img class="absolute inset-0 object-cover object-center w-full h-full" src="{!! $gallery[0]['url'] !!}" alt="">
      </div>

      <div class="grid grid-cols-1 gap-4 md:gap-6 md:grid-cols-3 lg:gap-8 xl:gap-12">
        @foreach($gallery as $item)
          @if($loop->index > 0)
            <div class="relative pb-full">
              <img class="absolute inset-0 object-cover object-center w-full h-full" src="{!! $item['url'] !!}" alt="">
            </div>
          @endif
        @endforeach
      </div>

    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
