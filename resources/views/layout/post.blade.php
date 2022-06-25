<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vixiloc Blog | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>

    @include('partial.navbar')

    <div class="container" style="padding-top: 5rem; padding-bottom: 2rem;">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                @yield('title')    
            </div>
            <a href="https://bit.ly/3yiOhnt"><img class="mb-3" src="/img/banner-vixiloc.svg" alt="vixiloc.my.id" width="728" height="90"></a>
        </div>
        <div class="row">
            <div class="col-md-12">               
                @yield('thumbnail')
            </div>
            <a href="https://my.domainesia.com/ref.php?u=19662"><img class="mt-3" src="/img/banner-domainesia.svg" width="728" height="90" alt="Domainesia"></a>
        </div>
        <div class="row">
            <div class="col-md-12">               
                @yield('body')
            </div>
        </div>
        <a href="https://idwebhost.com/aff/22060" target="_blank"><img src="/img/banner-idwebhost.png" alt="Banner IDwebhost" border="0" width="728" height="90" /></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>