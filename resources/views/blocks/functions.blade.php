<div class="bg-white">
  <div class="container mx-auto px-4 py-4 pb-8 sm:px-6 md:pt-8 md:pb-12 lg:pb-16 lg:px-8 ">
    <h2 class="text-3xl mb-4 md:text-4xl md:mb-8">{!! $title !!}</h2>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-0">
      {{-- @dump($functions) --}}
      {{-- @dump($info) --}}
      @if($info)
      @foreach($info as $func)
        <div class="border border-gray-200 md:border-none" style="background-color: {!! $func['bg'] !!}">
          <div class="p-4 md:p-6 lg:p-8 lg:pb-2" style="color: {!! $func['text'] !!}">
            <h3 class="text-xl mb-2 lg:text-2xl">
              {{-- <a class="inline-block transition transform duration-300 hover:-translate-y-px" href="{!! $func['link'] !!}">{!! $func['title'] !!}</a> --}}
              {!! $func['title'] !!}
            </h3>
            <p class="lg:text-lg">{!! $func['excerpt'] !!}</p>
            {{-- <a class="block flex items-center group transform transition duration-300 hover:translate-x-2" href="{!! $func['link'] !!}">
              <span class="mr-2 tracking-wider font-bold lg:text-lg">Learn more</span>
              <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> --}}
          </div>
          <div class="overflow-hidden h-60 lg:h-72 xl:h-84">
            <img class="w-full object-contain" src="{!! $func['image'] !!}" alt="">
          </div>
        </div>
      @endforeach
      @endif
  </div>
</div>