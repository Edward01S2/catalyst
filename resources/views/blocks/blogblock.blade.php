<div class="blogblock bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-center text-xl text-c-blue-200 uppercase py-8 font-heebo font-medium tracking-wider md:py-12 md:text-2xl">
      {!! $title !!}
      @if($blog_title)
        <span class="text-sm block md:inline-block md:pl-2">{!! $blog_title !!}</span>
      @endif
    </h2>
    <div class="rp-container flex flex-col lg:grid lg:grid-cols-1 lg:flex-none xl:grid-cols-8 xl:grid-rows-8">
      @foreach($posts['posts'] as $post)
        @if($loop->index == 0)
          <div class="rp-main relative flex flex-col border border-gray-200 mb-8 lg:mb-0 xl:col-span-4 xl:row-span-8 xl:flex-none xl:border-0 xl:h-120">
            <div class="rp-content p-4 relative order-2 md:p-6 md:overflow-y-scroll xl:pt-0 xl:order-1 xl:absolute xl:top-0 xl:pb-4 xl:z-30 xl:overflow-visble">
              <div class="text-c-blue-200 text-sm md:text-base lg:mb-2 xl:mb-1 xl:text-sm">
                <span>\</span>
                <a class="hover:underline" href="/category/{!! $post['cat'][0]->slug !!}">{!! $post['cat'][0]->name !!}</a>
                <span>\</span>
              </div>
              <a href="{!! $post['link'] !!}">
                <h3 class="text-2xl leading-tight mb-2 md:text-3xl md:max-w-2xl xl:max-w-none hover:text-c-blue-400 transition duration-300">
                  {!! $post['title'] !!}
                  <svg class="w-6 h-6 text-c-blue-200 inline md:h-8 md:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </h3>
              </a>
            </div>
            <div class="rp-image order-1 relative xl:order-2 xl:flex-1 xl:overflow-hidden">
              <a href="{!! $post['link'] !!}">
                <img class="object-cover w-full h-48 object-center md:h-64 lg:h-96 xl:h-full xl:w-full" src="{!! $post['image'] !!}" alt="">
              </a>
            </div>
          </div>
        @endif
        @if($loop->index > 0)
          @include('partials.content-post', ['post' => $post ])
        @endif

      @endforeach
    </div>
    <div class="text-center pb-8 md:pt-8 md:pb-12 lg:pt-12">
      <a class="border-2 border-c-blue-200 px-8 py-2 inline-block font-medium group hover:bg-c-blue-200 hover:text-white transition duration-300 xl:text-lg" href="{!! $link['url'] !!}">
        {!! $link['title'] !!}
        <svg class="w-6 h-6 text-c-blue-200 inline md:h-8 md:w-8 transition duration-300 group-hover:text-white" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
      </a>
    </div>
  </div>
</div>