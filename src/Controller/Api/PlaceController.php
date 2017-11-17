<?php
namespace App\Controller\Api;

use Awallef\GoogleMaps\Http\Api;
use App\Controller\Api\AppController as AppController;

class PlaceController extends AppController
{
  public $url = 'https://maps.googleapis.com/maps/api/place/';

  public function initialize()
  {
    parent::initialize();
    $this->Auth->allow(['textsearch']);
    $this->loadModel('Awallef/GoogleMaps.Places');
  }

  public function textsearch($query)
  {
    //debug($this->Places->newEntity());

    //$place = $this->Places->find('textsearch');
    $place = $this->Places->find()
    ->where([
      'address' => 'ouchy lausanne'
    ])
    ->toArray();
    debug($place);

    /*
    $api  = new Api();
    $place = $api->query('place','textsearch', [
      'query' => trim($query),
      'radius' => '500',
    ]);
    */
    //debug($place);
  }

}
