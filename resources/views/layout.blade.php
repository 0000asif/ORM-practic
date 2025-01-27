<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eloquent CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-9 bg-success-subtle text-center py-3">
        <h2 class="">Eloquent CRUD</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-9 bg-warning-subtle mb-3">
        <h3 class="">@yield('title')</h3>
      </div>
      <div class="row">
        <div class="col-9">
          @if (session('status'))
              <div class="alert alert-info" role="alert">
                {{session('status')}}
              </div>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-9">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
</body>
</html>