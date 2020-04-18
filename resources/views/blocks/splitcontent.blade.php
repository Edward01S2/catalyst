<div class="split_content">
  <div class="w-full" style="{!! $gradient !!}">
    <div class="flex flex-col lg:flex-row container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:w-1/2">
        <div class="overflow-hidden relative w-full flex justify-center lg:h-full lg:items-center">
          <img class="w-full h-auto md:h-72 md:object-contain md:object-center lg:h-full lg:object-contain xl:object-cover " src="{!! $image['url'] !!}" alt="">
        </div>
      </div>
      <div class="lg:w-1/2 flex flex-col pb-16 md:flex-row md:items-center lg:py-24 lg:pl-8">
        <div class="text-white">
          <h2 class="text-2xl mb-4 md:text-3xl xl:text-4xl">{!! $title !!}</h2>
          <div class="mb-4 text-xl">
            {!! $content !!}
          </div>
          <div class="flex">
            <a class="inline-block mr-2 font-bold tracking-wider xl:text-xl transform transition duration-300 hover:translate-x-2" href="{!! $link['url'] !!}">
              {!! $link['title'] !!}
              <svg class="w-6 h-6 inline-block xl:h-8 xl:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>