<div class="relative overflow-hidden" style="{!! $bg !!}">
  <div class="relative container mx-auto px-4 z-30 sm:px-6 lg:px-8">
      <div class="text-white pt-36 pb-12 relative z-30 lg:mx-auto lg:max-w-2xl xl:max-w-3xl">
        @if($super)
          <div class="text-sm mb-1 lg:text-base">{!! $super !!}</div>
        @endif
        <h1 class="text-4xl leading-none mb-4 lg:text-5xl">{!! $title !!}</h1>
        <p class="prose max-w-none text-white xl:prose-lg">{!! $content !!}</p>
      </div>

  </div>
</div>