<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Albums;

class AlbumsController extends Controller {

  protected $albums;

  /**
   * Constructor
   * @param Albums $albums clase albumes
   */
  public function __construct(Albums $albums) {
    $this->albums = $albums;
  }

  /**
   * Consulto y retorno todos los albumes de lanzamiento
   * @return array con todos los albumes
   */
  public function index() {
    $albums = $this->albums->all();
    return view('albums.index', compact('albums'));
  }

}
