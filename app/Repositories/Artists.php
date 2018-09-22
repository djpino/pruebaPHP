<?php

namespace App\Repositories;

use App\Repositories\ConfigParams;
use GuzzleHttp\Client;

/**
 * Clase artistas
 */
class Artists {

  protected $client;

  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * Consulto y retorno los datos del artista dependiendo del id
   * @param string $id identificador del artista
   * @return type array con los datos del artista
   */
  public function find($id) {

    $config = new ConfigParams;

    $response = $this->client->request('GET', "artists/{$id}", [
        'headers' => [
            'Authorization' => 'Bearer ' . $config->token,
        ]
    ]);

    return json_decode($response->getBody()->getContents());
  }

  /**
   * Consulto y retorno los albumes por artista
   * @param string $id
   * @return array con los albumes del artista
   */
  public function findAlbums($id) {
    $config = new ConfigParams;

    $response = $this->client->request('GET', "artists/{$id}/albums", [
        'headers' => [
            'Authorization' => 'Bearer ' . $config->token,
        ]
    ]);

    $albums = json_decode($response->getBody()->getContents());

    return $albums->items;
  }

}
