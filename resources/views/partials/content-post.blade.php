<div class="rp-item flex flex-col mb-8 md:flex-row md:mb-0">
  <div class="rp-content bg-white py-4 order-2 md:py-6 md:w-1/2 md:overflow-hidden lg:py-12">
    <div class="rp-cont">
      <div class="rp-cat text-c-blue-200 text-sm mb-1 md:text-sm">
        @if($post['date'])
        <div>{!! $post['date'] !!}</div>
        @else
        <span>\</span>
        <a class="text-xs hover:underline lg:text-sm" href="/category/{!! $post['cat'][0]->slug !!}">{!! $post['cat'][0]->name !!}</a>
        <span>\</span>
        @endif
      </div>
      <a href="{!! $post['link'] !!}">
        <h3 class="text-xl mb-4 leading-tight lg:text-2xl xl:text-3xl hover:text-c-blue-400 transform transition duration-300">
          {!! $post['title'] !!}
        </h3>
      </a>
      <p class="prose max-w-none xl:prose-lg">{!! $post['excerpt'] !!}</p>
      <a class="inline-flex items-center font-medium font-heebo tracking-wider transform text-c-blue-200 transition duration-300 hover:translate-x-2 xl:text-lg" href="{!! $post['link']  !!}">
        <span class="mr-2">Read More</span>
        <svg class="w-6 h-6 xl:h-8 xl:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
      </a>
    </div>
  </div>
  <div class="rp-image order-1 relative md:w-1/2">
    <a href="{!! $post['link'] !!}">
      <img class="object-cover w-full h-48 object-center md:absolute md:h-full" src="{!! $post['image'] !!}" alt="">
    </a>
  </div>
</div>

