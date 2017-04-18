<!DOCTYPE html>
<html lang="en-us">

    @include('_partials.head')

  <body class="{{$page->site->theme ?: ''}}">

    @include('_partials.sidebar')

    <!-- Wrap is the content to shift when toggling the sidebar. We wrap the
         content to avoid any CSS collisions with our real content. -->
    <div class="wrap">
      <div class="masthead">
        <div class="container">
          <h3 class="masthead-title">
            <a href="{{ $page->site->baseurl }}/" title="Home">{{ $page->site->title }}</a>
            <small>{{ $page->site->tagline }}</small>
          </h3>
        </div>
      </div>

      <div class="container content">
          @yield('body')
      </div>
    </div>

    <label for="sidebar-checkbox" class="sidebar-toggle"></label>

    <script>
      (function(document) {
        var toggle = document.querySelector('.sidebar-toggle');
        var sidebar = document.querySelector('#sidebar');
        var checkbox = document.querySelector('#sidebar-checkbox');

        document.addEventListener('click', function(e) {
          var target = e.target;

          if(!checkbox.checked ||
             sidebar.contains(target) ||
             (target === checkbox || target === toggle)) return;

          checkbox.checked = false;
        }, false);
      })(document);
    </script>
  </body>
</html>
