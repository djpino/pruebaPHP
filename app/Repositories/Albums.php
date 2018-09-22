<?php

namespace App\Repositories;

use App\Repositories\ConfigParams;
use GuzzleHttp\Client;

/**
 * Clase albumes
 */
class Albums {

  protected $client;

  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * Consulto los nuevos albumes de lanzamiento y los retorno
   * @return array
   */
  public function all() {

    $config = new ConfigParams;

    $response = $this->client->request('GET', 'browse/new-releases', [
        'headers' => [
            'Authorization' => 'Bearer ' . $config->token,
        ]
    ]);

    $albums = json_decode($response->getBody()->getContents());

    return $albums->albums->items;
  }

}
