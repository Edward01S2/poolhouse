@if($show)
<div class="{{ $block->classes }}">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:gap-12 xl:gap-16">
        @foreach($items as $item)
          <div class="text-center text-white md:w-1/2 md:mx-auto lg:w-full">
            <div class="relative w-1/2 mx-auto pb-1/2 lg:w-3/5 md:mb-8">
              <div class="absolute inset-0 object-cover object-center lottie" data-animation-path="<?php echo $item['animation']['url'] ?>"></div>
            </div>
            <h3 class="mb-2 text-xl font-bold lg:text-2xl">{!! $item['title'] !!}</h3>
            <p class="">{!! $item['content'] !!}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
@endif
