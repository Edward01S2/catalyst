<div class="insight-block bg-c-blue-50">
  <div class="container mx-auto px-4 pt-8 sm:px-6 md:pt-12 md:pb-16 lg:px-8">
    <h2 class="text-center text-c-blue-200 uppercase font-heebo font-medium tracking-wide mb-6 text-lg md:text-2xl lg:mb-12">{!! $title !!}</h2>
    <div class="rp-container flex flex-col lg:grid lg:grid-cols-1 lg:flex-none xl:grid-cols-2 xl:grid-row-4">
      @foreach($posts['posts'] as $post)
        @if($loop->index == 0)
          <div class="rp-main relative flex flex-col border border-gray-200 mb-8 lg:mb-0 xl:col-span-2 xl:row-span-2 xl:flex-row xl:border-0">
            <div class="rp-content p-4 order-2 bg-white md:p-6 md:overflow-y-scroll xl:w-1/2 xl:pt-6 xl:border-b xl:border-gray-200">
              <div class="text-c-blue-200 text-sm md:text-base lg:mb-2 xl:mb-1">
                <div>{!! $post['date'] !!}</div>
              </div>
              <a href="{!! $post['link'] !!}" class="hover:text-c-blue-400 transiton duration-300">
                <h3 class="text-xl leading-tight mb-0 md:text-3xl md:mb-8">
                  {!! $post['title'] !!}
                  <svg class="w-6 h-6 text-c-blue-200 inline md:h-8 md:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </h3>
              </a>
            </div>
            <div class="rp-image order-1 relative xl:w-1/2">
              <a href="{!! $post['link'] !!}">
                <img class="object-cover w-full h-48 object-center md:h-64 lg:h-96 xl:h-72" src="{!! $post['image'] !!}" alt="">
              </a>
            </div>
          </div>
        @endif
        @if($loop->index > 0)
          @include('partials.content-post', ['post' => $post ])
        @endif

      @endforeach
    </div>
  </div>
</div>