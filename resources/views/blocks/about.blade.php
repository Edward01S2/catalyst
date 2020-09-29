<div class="relative overflow-hidden bg-c-gray-400">
  <img class="absolute w-full h-full top-0 bottom-0 right-0 opacity-25 z-20 object-cover object-center md:opacity-50 md:w-1/2" src="{!! $image['url'] !!}" alt="">
  <div class="container mx-auto px-4 z-30 flex sm:px-6 md:items-center lg:px-8">
      <div class="text-white py-12 md:py-16 lg:py-20 relative z-30 md:w-2/3 md:order-1 lg:pr-16 xl:w-3/5">
        <h2 class="text-2xl mb-4 md:text-3xl xl:text-4xl">{!! $title !!}</h2>
        <p class="prose-lg xl:prose-xl">{!! $content !!}</p>
      </div>
  </div>
</div>