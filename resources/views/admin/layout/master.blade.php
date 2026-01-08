<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') | Admin SiJitu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="icon" href="{{ asset('admin/dist/assets/images/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">
  
  <link rel="stylesheet" href="{{ asset('admin/dist/assets/fonts/tabler-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/dist/assets/fonts/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/dist/assets/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/dist/assets/fonts/material.css') }}">
  
  <link rel="stylesheet" href="{{ asset('admin/dist/assets/css/style.css') }}" id="main-style-link">
  <link rel="stylesheet" href="{{ asset('admin/dist/assets/css/style-preset.css') }}">
  
  @stack('css')
</head>

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <div class="loader-bg">
    <div class="loader-track"><div class="loader-fill"></div></div>
  </div>

  @include('admin.partials.sidebar')
  @include('admin.partials.nav')

  <div class="pc-container">
    <div class="pc-content">
        @yield('content')
    </div>
  </div>

  @include('admin.partials.footer')

  <script src="{{ asset('admin/dist/assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('admin/dist/assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('admin/dist/assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/dist/assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('admin/dist/assets/js/pcoded.js') }}"></script>
  <script src="{{ asset('admin/dist/assets/js/plugins/feather.min.js') }}"></script>
  
  <script>
    layout_change('light');
    change_box_container('false');
    layout_rtl_change('false');
    preset_change("preset-1");
    font_change("Public-Sans");
  </script>

  @stack('js')
</body>
</html>