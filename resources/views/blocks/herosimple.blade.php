<div x-data="{left: {!! $side !!}}" class="relative overflow-hidden" style="{!! $color !!}">
  <div class="relative container mx-auto px-4 z-30 flex sm:px-6 md:items-center lg:px-8">
      <div :class="{'order-1' : left, 'order-2' : !left}" class="md:w-1/2">
        <img class="absolute w-3/5 h-auto top-0 right-0 opacity-50 z-20 object-cover object-center md:relative md:w-full md:opacity-100 xl:w-full xl:h-108 xl:relative" src="{!! $image['url'] !!}" alt="">
      </div>
      <div :class="{'order-2 md:ml-auto' : left, 'order-1' : !left }" class="text-white pt-32 pb-12 relative z-30 md:w-1/2 lg:pr-16">
        @if($super)
          <div class="text-sm mb-1 lg:text-base">{!! $super !!}</div>
        @endif
        <h1 class="text-3xl leading-none md:text-4xl mb-4">{!! $title !!}</h1>
        <p class="md:text-lg">{!! $content !!}</p>
      </div>

  </div>
</div>