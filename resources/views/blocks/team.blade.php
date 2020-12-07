<div id="team" class="{{ $block->classes }}">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24">
      <div class="prose text-white max-w-none lg:prose-lg">
        {!! $content !!}
      </div>
      <div class="grid grid-cols-1 gap-8 px-4 pt-8 md:pt-12 lg:pt-16 md:grid-cols-3 md:px-2 lg:px-0 lg:grid-cols-4">
        @foreach($team as $item)
          <div>
            <div class='mb-2 aspect-w-4 aspect-h-4 lg:mb-4'>
              <img class="object-cover object-center w-full h-full" src="{!! $item['image']['url'] !!}" alt="">
            </div>
            <div class="text-white lg:text-lg">{!! $item['name'] !!}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
