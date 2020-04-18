<div class="bg-c-gray-300">
  <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8 lg:py-16 lg:pb-8">
    <div class="flex flex-col">
      <h3 class="uppercase text-white text-xl font-heebo font-medium text-center mb-2 tracking-wider lg:text-2xl xl:mb-4">{!! $title !!}</h3>
      <p class="text-white mb-8 text-center md:text-lg tracking-wider xl:mb-8">{!!$subtitle !!}</p>
      <div class=""">
        @include('forms.form', ['form' => $form])
      </div>
    </div>
  </div>
</div>