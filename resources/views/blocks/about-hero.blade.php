<div class="relative overflow-hidden" style="{!! $bg !!}">
  <div class="container relative z-30 px-4 mx-auto sm:px-6 lg:px-8">
      <div class="relative z-30 pb-12 text-white title-container pt-36 lg:mx-auto lg:max-w-2xl xl:max-w-3xl">
        @if($super)
          <div class="mb-1 text-sm lg:text-base">{!! $super !!}</div>
        @endif
        <h1 class="mb-4 text-4xl leading-none lg:text-5xl">{!! $title !!}</h1>
        <p class="prose text-white max-w-none xl:prose-lg">{!! $content !!}</p>
      </div>

  </div>
</div>