<footer>
  <div class="bg-c-gray-300 text-c-gray-100">
    <div class="border-b border-c-gray-200"></div>
    <div class="container mx-auto px-4 pt-8 sm:px-6 md:pb-12 lg:px-8 lg:py-6">
      <div class="text-p-gray-200 lg:flex lg:items-center lg:justify-between">
        <div class="grid grid-cols-2 gap-2 md:grid-cols-none md:flex md:justify-center lg:order-2">
          @foreach($nav as $i)
            <a class="text-center font-regular tracking-wider px-4 py-1 hover:text-white" href="{!! $i['url'] !!}">{!! $i['title'] !!}</a>
          @endforeach
        </div>
        <div class="text-center py-8 tracking-wider md:pb-0 md:pt-4 lg:order-1 lg:py-0">
          <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
          {!! $copyright !!}
        </div>
      </div>
    </div>
  </div>
</footer>
