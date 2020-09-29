<div class="">
  <div class="w-full py-12 md:py-16 lg:py-20" style="{!! $bg!!}">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-white lg:max-w-3xl lg:mx-auto xl:max-w-4xl">
        <h2 class="text-2xl mb-4 md:text-3xl xl:text-4xl">{!! $title !!}</h2>
        <div class="mb-4 prose-lg xl:prose-xl">{!! $content !!}</div>
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