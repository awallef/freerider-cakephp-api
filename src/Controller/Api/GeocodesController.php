<?php
namespace App\Controller\Api;

use \Cake\Event\Event;
use App\Controller\Api\AppController as AppController;

class PlaceController extends AppController
{
  public $url = 'https://maps.googleapis.com/maps/api/place/';

  public function initialize()
  {
    parent::initialize();
    $this->Auth->allow(['textsearch']);
    $this->loadModel('Awallef/GoogleMaps.Geocodes');
    $this->loadModel('Awallef/GoogleMaps.Places');
  }

  public function textsearch($query)
  {
    /*
    $api  = new Api();
    $place = $api->query('place','textsearch', [
      'query' => trim($query),
      'radius' => '500',
    ]);
    debug($place);
    */


    /*
    // geocode
    $location = $this->Geocodes->find()
    ->where([
      'address' => 'ouchy lausanne'
    ])
    ->first();
    debug($location);
    */

    // geocode
    $location = $this->Geocodes->get('ouchy lausanne');
    debug($location);

    /*
    $place = $this->Places->find('textsearch')
    ->where([
      'query' => 'lausanne'
    ])
    ->first();
    debug($place);
    */

    /*
    $place = $this->Places->get('ChIJ5aeJzT4pjEcRXu7iysk_F-s');
    debug($place);
    */
  }

}
