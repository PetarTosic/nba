<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.heading')
</head>
<body>
  @include('layout.navigation')

  <main>
    @include('layout.session')
    @include('layout.errors')

    @yield('content') 
  </main>
</body>
</html>