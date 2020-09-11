<div class="{{ $block->classes }} bg-white" style="background-color: {!! $bg !!};">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 lg:pb-8">
    <div class="pt-8 pb-12 lg:pb-8">
      <h3 class="text-3xl mb-4 md:text-4xl lg:mb-8">{!! $title !!}</h3>
      <div class="flex flex-col space-y-6 lg:max-w-2xl lg:mx-auto xl:max-w-3xl">
        @foreach($items as $item)
          <div>
            <div class="prose max-w-none mb-2">
              {!! $item['content'] !!}
            </div>
            @if($item['link'])
            <a class="inline-flex items-center font-medium text-c-blue-200 hover:underline" href="{!! $item['link']['url'] !!}" target="_blank">
              {!! $item['link']['title'] !!}
              <svg class="h-4 w-4 fill-current ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
              </svg>
            </a>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
