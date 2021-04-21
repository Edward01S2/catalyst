@extends('layouts.app')

@section('content')
{{-- @dump($posts) --}}
<div class="relative overflow-hidden bg-c-gray-300">
  <div class="container z-30 flex flex-col px-4 mx-auto sm:px-6 lg:px-8">
      <div class="absolute top-0 right-0 w-3/4 h-full bg-top bg-no-repeat bg-cover" style="background-image:url('{!! $blog_bg !!}')">
        {{-- <img :class="{'ml-auto' : left}" class="object-cover object-center" src="{!! $image['url'] !!}" alt=""> --}}
      </div>
      <div class="invisible pb-4 text-white pt-28 md:w-1/2">
        <a href="{!! $blog !!}">
          <h1 class="text-3xl text-center md:text-left md:text-4xl">{!! $blog_title !!}</h1>
        </a>
      </div>
  </div>
</div>
  {{-- @include('partials.page-header') --}}
  <div class="bg-white">
    <div class="container px-4 pt-4 mx-auto sm:px-6 sm:pt-6 lg:px-8 lg:pt-8 xl:pt-16">
      @if (! have_posts())
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
      @endif
      
      <div class="flex flex-col rp-container lg:grid lg:grid-cols-1 lg:flex-none">
      @foreach($posts['posts'] as $post)

        @include('partials.content-post', ['post' => $post ])
  
      @endforeach
      </div>

      <div class="pt-4 pb-12 text-center border-b border-gray-400 rp-button md:py-12">
        @if($posts['load'])
        <button class="px-10 py-2 leading-none tracking-wider uppercase transition duration-300 border-2 ajax-load border-c-blue-200 group hover:bg-c-blue-200 hover:text-white" data-page="{!! $posts['page'] !!}" data-posts="{!! $posts['count'] !!}">
          <span class="inline-block mr-2">Load More</span>
          <svg class="inline w-6 h-6 transition duration-300 text-c-blue-200 group-hover:text-white md:h-8 md:w-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </button>
        <svg class="hidden w-12 h-12 mx-auto loading-anim" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><g><linearGradient id="linear-gradient"><stop offset="0%" stop-color="#ffffff" fill-opacity="0"/><stop offset="100%" stop-color="#218dcc" fill-opacity="1"/></linearGradient><path d="M63.85 0A63.85 63.85 0 1 1 0 63.85 63.85 63.85 0 0 1 63.85 0zm.65 19.5a44 44 0 1 1-44 44 44 44 0 0 1 44-44z" fill="url(#linear-gradient)" fill-rule="evenodd"/><animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1080ms" repeatCount="indefinite"></animateTransform></g></svg>
        @endif
      </div>

    </div>
  </div>

  {{-- @dump($posts); --}}


{{-- @include('blocks.contact', ['form' => 2, 'title' => get_field('Contact Title', 'options'), 'subtitle' => get_field('Contact Subtitle', 'options')]) --}}
@include('blocks.signup', ['form' => 1, 'title' => get_field('Signup Title', 'options')])

@endsection

{{-- @section('sidebar')
  @include('partials.sidebar')
@endsection --}}
