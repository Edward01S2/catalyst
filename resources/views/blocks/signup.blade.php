<div class="bg-white">
  <div class="container mx-auto px-4 py-8 pb-16 sm:px-6 lg:px-8 lg:pt-12 lg:pb-16">
    <div class="flex flex-col">
      <h3 class="uppercase text-c-blue-200 text-xl font-heebo font-medium text-center px-8 mb-8 tracking-wider lg:text-2xl">{!! $title !!}</h3>
      <div class=""">
        @include('forms.form', ['form' => $form])
      </div>
    </div>
  </div>
</div>