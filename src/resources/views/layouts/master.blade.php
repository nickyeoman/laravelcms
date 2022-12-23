<!doctype html>
<html class="no-js" lang="en">

<head>
  @include('cms::layouts.head' )
</head>

<body>

  <header> 
      @include('cms::layouts.nav')
  </header>

  @if ( $errors->any() )
    <div class="error-container">
    @foreach ( $errors->all() as $error )
        <div class="error">{{ $error }}</div>
    @endforeach
    </div>
  @endif
  @if ( session()->has('success'))
    <div class="notice">{{ session('success') }}</div>
  @endif

  <div id="page">
    <aside id="beforeContent">@yield('beforecontent')</aside>
    <article>@yield('content')</article>
    <aside id="afterContent">@yield('aftercontent')</aside>
  </div>

  <footer>
    @include('cms::layouts.footer')
  </footer>

</body></html>
