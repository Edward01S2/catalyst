<div class="bg-c-blue-400">
  <div class="container relative mx-auto px-4 overflow-hidden bg-center bg-no-repeat bg-50% py-8 sm:px-6 md:py-12 lg:py-16 lg:px-8" style="background-image:url(' {!! $image['url'] !!}');">
    {{-- <img class="absolute w-1/2 h-64 mx-auto object-cover left-0 right-0 object-center" src="{!! $image['url'] !!}" alt=""> --}}
    <div class="text-white md:flex md:items-center">
      <div class="pr-12 lg:pr-32 xl:pr-48">
        <h2 class="text-3xl mb-2 md:text-4xl">{!! $title !!}</h2>
      </div>
      <div>
        <div class="md:text-lg xl:text-xl">{!! $content !!}</div>
      </div>
    </div>
  </div>
</div>