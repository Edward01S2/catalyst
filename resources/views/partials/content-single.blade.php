<div class="relative overflow-hidden bg-c-gray-300">
  <div class="relative container mx-auto px-4 z-30 flex flex-col sm:px-6 lg:px-8">
      <div class="absolute top-0 w-3/4 right-0 h-full bg-top bg-cover bg-no-repeat" style="background-image:url('{!! $blog_bg !!}')">
        {{-- <img :class="{'ml-auto' : left}" class="object-cover object-center" src="{!! $image['url'] !!}" alt=""> --}}
      </div>
      <div class="text-white pt-28 pb-4 md:w-1/2">
        <h1 class="text-3xl">{!! $blog_title !!}</h1>
      </div>
  </div>
</div>

<article @php post_class() @endphp>
  <div class="bg-white">
    <div class=>
      <header class="relative">
        <div class="absolute top-0 right-0 w-3/4 h-full bg-center bg-cover bg-no-repeat z-20 opacity-50 lg:w-1/2 lg:opacity-75" style="background-image:url('{!! $image !!}')"></div>
        <div class="blog-header container mx-auto px-4 sm:px-6 relative z-30 pt-8 pb-4 mb-4 md:pt-12 md:mb-8 lg:px-0 lg:max-w-3xl lg:mx-auto xl:pt-16 xl:pb-8 xl:max-w-4xl">
          <div class="text-c-blue-200 text-sm">
            <a class="font-bold text-c-blue-200" href="{!! $blog !!}">Blog</a>
            <span>\</span>
            <a href="{!! $cat['link'] !!}">{!! $cat['name'] !!}</a>
            <span>\</span>
          </div>
          <h1 class="entry-title text-3xl leading-tight py-2 md:text-4xl md:max-w-lg lg:text-5xl lg:max-w-2xl">
            {!! $title !!}
          </h1>
          <time class="updated text-sm text-gray-600" datetime="{{ get_post_time('c', true) }}">
            {{ get_the_date() }}
          </time>
        </div>
      </header>

      <div class="container mx-auto px-4 sm:px-6 lg:px-0 lg:max-w-3xl lg:mx-auto xl:max-w-4xl">
        <div class="entry-content pb-8">
          <div class="prose">
            @php the_content()@endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</article>

<div class="bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-center text-c-blue-200 uppercase text-2xl mb-8 font-heebo font-medium tracking-wider">Related Posts</h2>
    <div class="rp-container flex flex-col lg:grid lg:grid-cols-1 lg:flex-none xl:grid-cols-2">
      @foreach($posts as $post)
        @include('partials.content-post', ['post' => $post ])
      @endforeach
    </div>
    <div class="text-center pb-12 lg:py-16">
      <a class="uppercase px-4 py-2 border-2 border-c-blue-200 inline-block font-medium group hover:bg-c-blue-200 hover:text-white" href="{!! $blog !!}">
        More From the Blog
        <svg class="w-6 h-6 text-c-blue-200 inline group-hover:text-white" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
      </a>
    </div>
  </div>
</div>

{{-- @dump($posts) --}}

{{-- @include('blocks.contact', ['form' => 2, 'title' => get_field('Contact Title', 'options'), 'subtitle' => get_field('Contact Subtitle', 'options')]) --}}
@include('blocks.signup', ['form' => 1, 'title' => get_field('Signup Title', 'options')])
