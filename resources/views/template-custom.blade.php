{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="relative overflow-hidden hero-bg">
    <div class="container relative z-30 px-4 mx-auto sm:px-6 lg:px-8">
        <div class="relative z-30 pb-12 text-white title-container pt-36">
          <h1 class="mb-4 text-4xl leading-none lg:text-5xl">{!! get_the_title() !!}</h1>
        </div>
    </div>
  </div>

  <div class="pb-8 bg-white border-b border-gray-400 xl:pb-0">
    <div class="container px-4 py-4 mx-auto sm:px-6 sm:py-6 lg:px-8 lg:py-8 xl:py-16">
      <div class="prose max-w-none">
        @php(the_content())
      </div>
    </div>
  </div>

  @endwhile
@endsection
