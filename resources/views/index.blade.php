@extends('layouts.app')

@section('content')
{{-- @dump($posts) --}}
<div class="relative overflow-hidden bg-c-gray-300">
  <div class="relative container mx-auto px-4 z-30 flex flex-col sm:px-6 lg:px-8">
      <div class="absolute top-0 w-3/4 right-0 h-full bg-top bg-cover bg-no-repeat" style="background-image:url('{!! $blog_bg !!}')">
        {{-- <img :class="{'ml-auto' : left}" class="object-cover object-center" src="{!! $image['url'] !!}" alt=""> --}}
      </div>
      <div class="text-white pt-28 pb-4 md:w-1/2">
        <a href="{!! $blog !!}">
          <h1 class="text-3xl">{!! $blog_title !!}</h1>
        </a>
      </div>
  </div>
</div>
  {{-- @include('partials.page-header') --}}
  <div class="bg-white">
    <div class="container mx-auto px-4 pt-4 sm:px-6 lg:px-8 lg:pt-8">
      @if (! have_posts())
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
      @endif
      
      <div class="rp-container flex flex-col lg:grid lg:grid-cols-1 lg:flex-none xl:grid-cols-2">
      @foreach($posts['posts'] as $post)
        @if($loop->index == 0)
          <div class="rp-main relative flex flex-col border border-gray-200 mb-8 lg:mb-0 xl:col-span-2 xl:flex-row xl:border-0">
            <div class="rp-content p-4 order-2 md:p-6 md:overflow-y-auto xl:w-1/2 xl:pt-0">
              <div class="text-c-blue-200 text-sm md:text-base lg:mb-2 xl:mb-1">
                <span>\</span>
                <a class="hover:underline" href="{!! $cat['link'] !!}">{!! $post['cat'][0]->name !!}</a>
                <span>\</span>
              </div>
              <a class="hover:text-c-blue-400" href="{!! $post['link'] !!}">
                <h3 class="text-3xl leading-tight mb-4 md:text-4xl md:max-w-2xl">
                  {!! $post['title'] !!}
                </h3>
              </a>
              <div class="text-lg mb-2 xl:leading-8">
                {!! $post['excerpt'] !!}
              </div>

              <a class="text-c-blue-200 font-semibold transform hover:translate-x-2 transition duration-300" href="{!! $post['link'] !!}">
                Read More
                <svg class="w-6 h-6 text-c-blue-200 inline md:h-8 md:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
              </a>
    
            </div>
            <div class="rp-image order-1 relative xl:w-1/2">
              <a href="{!! $post['link'] !!}">
                <img class="object-cover w-full h-48 object-center md:h-64 lg:h-96 xl:h-118" src="{!! $post['image'] !!}" alt="">
                @if($post['feat'])
                  <div class="uppercase absolute px-4 py-2 tracking-widest top-0 right-0 bg-c-blue-100 leading-none text-white">Featured</div>
                @endif
              </a>
            </div>
          </div>
        @endif
        @if($loop->index > 0)
          @include('partials.content-post', ['post' => $post ])
        @endif

      @endforeach
      </div>

      <div class="rp-button text-center pt-4 pb-12 md:pb-20 lg:pt-12">
        @if($posts['load'])
        <button class="ajax-load border-2 border-c-blue-200 px-10 py-2 tracking-wider uppercase leading-none group hover:bg-c-blue-200 hover:text-white transition duration-300" data-page="{!! $posts['page'] !!}" data-posts="{!! $posts['count'] !!}">
          <span class="mr-2 inline-block">Load More</span>
          <svg class="w-6 h-6 text-c-blue-200 inline group-hover:text-white md:h-8 md:w-8 transition duration-300" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </button>
        <svg class="loading-anim mx-auto h-12 w-12 hidden" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><g><linearGradient id="linear-gradient"><stop offset="0%" stop-color="#ffffff" fill-opacity="0"/><stop offset="100%" stop-color="#218dcc" fill-opacity="1"/></linearGradient><path d="M63.85 0A63.85 63.85 0 1 1 0 63.85 63.85 63.85 0 0 1 63.85 0zm.65 19.5a44 44 0 1 1-44 44 44 44 0 0 1 44-44z" fill="url(#linear-gradient)" fill-rule="evenodd"/><animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1080ms" repeatCount="indefinite"></animateTransform></g></svg>
        @endif
      </div>

    </div>
  </div>

  {{-- @dump($posts); --}}


@include('blocks.contact', ['form' => 2, 'title' => get_field('Contact Title', 'options'), 'subtitle' => get_field('Contact Subtitle', 'options')])
@include('blocks.signup', ['form' => 1, 'title' => get_field('Signup Title', 'options')])

@endsection

{{-- @section('sidebar')
  @include('partials.sidebar')
@endsection --}}
