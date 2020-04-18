<div class="relative" style="{!! $gradient !!}">
  <div class="absolute top-0 right-0 z-20">
    <img class="md:ml-auto md:w-2/3 xl:w-full" src="{!! $image['url'] !!}" alt="">
  </div>
  <div class="relative container mx-auto px-4 z-30 pt-24 pb-16 sm:px-6 lg:px-8 lg:pt-32 lg:pb-24">
    <div class="text-white lg:max-w-3xl lg:mx-auto xl:max-w-4xl">
      <h1 class="text-4xl text-center mb-4 tracking-wider md:mb-6 md:text-5xl xl:text-6xl">{!! get_the_title() !!}</h1>
      <div class="md:mb-8 md:text-center">
        {!! $content !!}
      </div>
      @include('forms.form', ['form' => $form])
   </div>
  </div>
</div>