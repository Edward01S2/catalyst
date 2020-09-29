<div class="bg-white pb-8 border-b border-gray-400 xl:pb-0">
  <div class="container mx-auto px-4 py-4 sm:px-6 sm:py-6 lg:px-8 lg:py-8 xl:py-16">
    <div class="service-grid grid grid-cols-1 gap-8 md:grid-rows-4 md:gap-0">
      {{-- @dump($functions) --}}
      {{-- @dump($info) --}}
      @if($info)
      @foreach($info as $func)
        <div class="service-item md:flex">
          <div class="service-image mb-4 md:mb-0 md:w-1/2 md:order-2">
            <img class="object-center object-cover w-full h-full" src="{!! $func['image'] !!}" alt="">
          </div>
          <div class="service-content md:w-1/2 md:flex md:items-center md:order-1">
            <div class="item-padding">
              <h3 class="text-xl mb-2 lg:text-2xl xl:text-3xl">
                {!! $func['title'] !!}
              </h3>
              <p class="prose xl:prose-lg">{!! $func['excerpt'] !!}</p>
            </div>
          </div>
        </div>
      @endforeach
      @endif
  </div>
  </div>
</div>