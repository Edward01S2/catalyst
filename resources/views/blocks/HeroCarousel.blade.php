@if ($slides)
  <div class="hero_carousel">
    @foreach ($slides as $slide)
      <div class="w-full min-h-full md:h-auto" style="{!! $slide['gradient'] !!}">
        <div class="flex flex-col md:flex-row container mx-auto xl:relative">
          <div class="text-white order-2 pb-12 relative z-20 md:w-1/2 md:order-1 xl:pb-16">
            <div class="container mx-auto px-4 pt-36 sm:px-6 md:pt-36 lg:px-8 lg:pt-40 xl:w-640 xl:ml-auto xl:mr-0">
              <h1 class="text-3xl leading-tight mb-4 max-w-xs lg:text-4xl lg:max-w-md xl:text-5xl xl:max-w-lg">{!! $slide['title'] !!}</h1>
              <p class="mb-4 max-w-md lg:pr-8 xl:text-xl xl:max-w-lg">{!! $slide['content'] !!}</p>
              <div class="flex">
                <a class="inline-block mr-2 font-bold tracking-wider xl:text-xl hover:translate-x-2 transform transition duration-300" href="{!! $slide['link']['url'] !!}">
                  {!! $slide['link']['title'] !!}
                  <svg class="w-6 h-6 inline-block xl:h-8 xl:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a> 
              </div>
            </div>
          </div>
          <div class="order-1 ml-auto absolute opacity-25 z-10 top-0 right-0 left-0 md:order-2 md:mt-0 md:pb-16 md:opacity-100 md:w-1/2 xl:relative xl:h-120 xl:pb-0">
            <img class="w-auto h-56 ml-auto md:h-auto object-contain lg:ml-auto lg:h-116 xl:h-full xl:w-full xl:object-cover xl:object-center" src="{!! $slide['bg image']['url'] !!}" alt="">
          </div>
        </div>
      </div>
    @endforeach
  </div>
@else
  <p>No slides found!</p>
@endif
