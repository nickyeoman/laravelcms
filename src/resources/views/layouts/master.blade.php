<!doctype html>
<html class="no-js" lang="en">

<head>
  @include('head')
</head>

<body>

  <header> 
      @include('nav')
  </header>

  <div id="page">
    <aside id="beforeContent">@yeild('beforecontent')</aside>
    <article>@yeild('content')</article>
    <aside id="afterContent">@yeild('aftercontent')</aside>
  </div>

  <footer>
    @include(footer')
  </footer>

</body></html>
