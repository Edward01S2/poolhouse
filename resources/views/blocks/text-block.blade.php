@if($show)
  <div id="{!! $block->block->id !!}" class="{{ $block->classes }} text-block">
    <div class="container px-4 mx-auto sm:px-6 lg:px-8">
      <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24">
        <div class="mx-auto prose text-white max-w-none md:max-w-2xl lg:prose-lg lg:max-w-3xl">
          {!! $content !!}
        </div>
      </div>
    </div>

    <div>
      <InnerBlocks />
    </div>
  </div>
@endif