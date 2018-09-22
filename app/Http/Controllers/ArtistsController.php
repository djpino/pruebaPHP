<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Artists;

class ArtistsController extends Controller {

  protected $artist;

  /**
   * Constructor
   * @param Artists $artist
   */
  public function __construct(Artists $artist) {
    $this->artist = $artist;
  }

  /**
   * Ver los datos de un artista por id
   * @param string $id del artista
   * @return array
   */
  public function show($id) {
    $artist = $this->artist->find($id);
    $albums = $this->artist->findAlbums($id);
    return view('artists.index', compact('artist', 'albums'));
  }

}
