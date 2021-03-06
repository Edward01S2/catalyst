<div class="hero_carousel">
  @foreach ($slides as $slide)
    <div id="slide-bg" class="relative flex w-full h-full" style="{!! $slide['gradient'] !!}">
      <div>
        <video class="absolute z-10 object-cover object-center w-full h-full opacity-50 carousel-image md:opacity-100" autoplay loop muted poster="{!! $slide['video poster']['url'] !!}">
          <source id="bg-vid" src="{!! $slide['video']['url'] !!}" type="video/mp4">
        </video>
        {{-- <div id="video-src" class="hidden" data-desktop="{!! $slide['video desktop']['url'] !!}" data-mobile="{!! $slide['video']['url'] !!}"></div> --}}
      </div>
      <div class="container relative flex flex-col mx-auto md:flex-row">
        <div class="relative z-20 order-2 pb-12 text-white md:order-1 md:pb-20 xl:pb-32">
          <div class="container px-4 mx-auto pt-36 sm:px-6 md:pt-36 lg:px-8 lg:pt-40 xl:mr-0 xl:pt-48">
            <div class="md:max-w-lg lg:max-w-xl xl:max-w-2xl">
              <h1 class="mb-4 text-3xl leading-tight lg:text-4xl xl:text-5xl">{!! $slide['title'] !!}</h1>
              <p class="mb-4 prose-lg lg:pr-8 xl:prose-xl">{!! $slide['content'] !!}</p>
              @if($slide['link'])
                <div class="flex">
                  <a class="inline-block mr-2 font-bold tracking-wider transition duration-300 transform xl:text-xl hover:translate-x-2" href="{!! $slide['link']['url'] !!}">
                    {!! $slide['link']['title'] !!}
                    <svg class="inline-block w-6 h-6 xl:h-8 xl:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                  </a> 
                </div>
              @endif
            </div>
          </div>
        </div>
        {{-- <div class="absolute top-0 left-0 right-0 z-10 order-1 ml-auto opacity-25 md:order-2 md:mt-0 md:pb-16 md:opacity-100 md:w-1/2 xl:relative xl:h-120 xl:pb-0">
          <img class="relative object-contain w-auto h-56 ml-auto carousel-image md:h-auto lg:ml-auto lg:h-116 xl:h-full xl:w-full xl:object-cover xl:object-center" src="{!! $slide['bg image']['url'] !!}" alt="">
          {{-- <video autoplay controls> 
            <source src="{!! $slide['video']['url'] !!}">
          </video>
        </div> --}}
      </div>
    </div>
  @endforeach
</div>
