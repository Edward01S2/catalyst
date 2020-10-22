<div class="{{ $block->classes }}">
  <div class="pb-8 bg-white border-b border-gray-400 xl:pb-0">
    <div class="container px-4 py-4 mx-auto sm:px-6 sm:py-6 lg:px-8 lg:py-8 xl:py-16">
      <div class="grid grid-cols-1 gap-8 service-grid md:grid-rows-4 md:gap-0">
        {{-- @dump($functions) --}}
        {{-- @dump($info) --}}
        @if($items)
        @foreach($items as $func)
          <div class="service-item md:flex">
            <div class="mb-4 service-image md:mb-0 md:w-1/2 md:order-2">
              <img class="object-cover object-center w-full h-full" src="{!! $func['image']['url'] !!}" alt="">
            </div>
            <div class="service-content md:w-1/2 md:flex md:items-center md:order-1">
              <div class="item-padding">
                {{-- <h3 class="mb-2 text-xl lg:text-2xl xl:text-3xl">
                  {!! $func['title'] !!}
                </h3> --}}
                <div class="prose xl:prose-lg">{!! $func['content'] !!}</div>
              </div>
            </div>
          </div>
        @endforeach
        @endif
    </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
