@if($show)
  <div class="{{ $block->classes }}">
    <div class="container px-4 mx-auto sm:px-6 lg:px-8">
      <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24">
        <div class="md:w-1/4 md:mx-auto lg:max-w-lg xl:max-w-md">
          <div class="relative w-full pb-full">
            <div id="{!! $animation['title'] !!}" class="absolute inset-0 object-cover object-center w-full h-full lottie" data-animation-path="<?php echo $animation['url'] ?>"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
