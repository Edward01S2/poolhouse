<div class="{{ $block->classes }}">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pb-12 md:pb-16 lg:pb-20 xl:pb-24 ">
      <div class="prose text-center text-white max-w-none md:px-8 lg:prose-lg">
        {!! $content !!}
      </div>
      <div class="flex flex-col w-3/4 max-w-xs pt-8 mx-auto divide-y divide-white divide-solid md:max-w-2xl md:flex-row md:divide-y-0 md:divide-x md:space-y-0 md:grid md:grid-cols-2 md:pt-12 xl:max-w-4xl">
        @foreach($logos as $logo)
          <a href="{!! $logo['link'] !!}" class="py-6 md:flex md:items-center hover:opacity-75">
            <img class="w-full h-auto mx-auto md:px-8 lg:px-12" src="{!! $logo['logo']['url'] !!}" alt="">
          </a>
        @endforeach
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
