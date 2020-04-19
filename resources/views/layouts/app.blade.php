{{-- <!doctype html>
<html {!! get_language_attributes() !!}>

  <body @php(body_class())>
    <div id="app">
      @php(wp_body_open())
      @php(do_action('get_header'))
      @include('partials.header')

      <div>
        <main class="main">
          @yield('content')
        </main>

        @hasSection('sidebar')
          <aside class="sidebar">
            @yield('sidebar')
          </aside>
        @endif
      </div>

      @php(do_action('get_footer'))
      @include('partials.footer')
    </div>

    @php(wp_footer())
    {!! $foot_scripts !!}
  </body>
</html> --}}



@include('partials.header')

<div class="">
  <main class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
</div>

@include('partials.footer')

