@include('layouts.sidebar')
@include('layouts.navbar')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
      @yield('content')
      <link href="{{ asset(path: 'assets/css/app.css') }}" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    </div>

    @include('layouts.footer')
  </div>
