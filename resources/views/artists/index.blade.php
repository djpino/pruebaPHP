<!DOCTYPE HTML>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <title>Artista {{$artist->name}}</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/misEstilos.css" />
  </head>
  <body>
    <div id="wrapper">
      <div class="container" id="artist">
        <div class="row mbottom20">
          <div class="col-sm-3">
            <div class="text-center">
              <img src="{{ $artist->images[2]->url }}" class="img-thumbnail" alt="{{ $artist->name }}">
            </div>
          </div>
          <div class="col-sm-9">
            <h1>{{ $artist->name }}</h1>
            <p><a href="/">Volver a los albunes</a></p>
          </div>
        </div>
        <div class="row">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Foto</th>
                  <th scope="col">Albúm</th>
                  <th scope="col">Canción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($albums as $album)
                <tr>
                  <th><img src="{{ $album->images[2]->url }}" alt="" /></th>
                  <td>{{ $album->name }}</td>
                  <td>{{ $album->total_tracks }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

