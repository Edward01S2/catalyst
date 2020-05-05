<div class="rp-item flex flex-col border border-gray-200 mb-8 md:flex-row lg:mb-0 lg:border-0">
  <div class="rp-content bg-white p-4 order-2 md:p-6 md:w-1/2 md:overflow-hidden">
    <div class="overflow-y-auto md:h-52 xl:h-24">
      <div class="rp-cat text-c-blue-200 text-sm md:text-base lg:mb-2 xl:mb-1 xl:text-sm">
        @if($post['date'])
        <div>{!! $post['date'] !!}</div>
        @else
        <span>\</span>
        <a class="hover:underline" href="/category/{!! $post['cat'][0]->slug !!}">{!! $post['cat'][0]->name !!}</a>
        <span>\</span>
        @endif
      </div>
      <a href="{!! $post['link'] !!}">
        <h3 class="text-xl leading-tight md:text-2xl md:mb-6 xl:mb-0 xl:text-xl hover:text-c-blue-400 transform transition duration-300">
          {!! $post['title'] !!}
          <svg class="w-6 h-6 text-c-blue-200 inline md:h-8 md:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </h3>
      </a>
    </div>
  </div>
  <div class="rp-image order-1 md:w-1/2">
    <a href="{!! $post['link'] !!}">
      <img class="object-cover w-full h-48 object-center md:h-64 xl:h-36" src="{!! $post['image'] !!}" alt="">
    </a>
  </div>
</div>

