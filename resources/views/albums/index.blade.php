<!DOCTYPE HTML>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <title>Albunes de lanzamiento</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/misEstilos.css" />
  </head>
  <body>
    <div id="wrapper">
      <div class="container" id="albums">
        <div class="row mbottom20">
          <div class="col-sm-12">
            <div class="page-header text-center text-uppercase">
              <h1>Lanzamientos</h1>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($albums as $album)
          <div class="col-sm-4 mbottom20">
            <div class="card">
              <img class="card-img-top" src="{{ $album->images[0]->url }}" alt="{{ $album->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $album->name }}</h5>
                <p>
                  @foreach ($album->artists as $artist)
                  <a href="/artist/{{ $artist->id }}" class="btn-primary">{{ $artist->name }}</a>
                  @endforeach
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </body>
</html>