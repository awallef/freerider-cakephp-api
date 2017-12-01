<?php
namespace App\Controller\Api;

use Cake\Event\Event;
use Cake\Network\Exception\BadRequestException;
use App\Controller\Api\AppController as AppController;

class PlacesController extends AppController
{
  public $url = 'https://maps.googleapis.com/maps/api/place/';

  public function initialize()
  {
    parent::initialize();
    $this->loadModel('Awallef/GoogleMaps.Places');

    // actions
    $this->Auth->allow(['nearby','search','view','index']);
    $this->Crud->mapAction('search','Crud.Index');
    $this->Crud->mapAction('nearby','Crud.Index');
    $this->Crud->mapAction('view','Crud.View');
  }

  public function index()
  {
    $this->loadModel('Awallef/GoogleMaps.Geocodes');
    debug($this->Places->find('textsearch')->where([
      'query' => 'auberge du chêne, suisse'
    ])->first());
  }

  public function search($query)
  {
    if(empty($query)) throw new BadRequestException("missing search url arg.");

    $this->Crud->action()->findMethod('textsearch');
    $this->Crud->on('beforePaginate', function(Event $event) use($query){
      $event->getSubject()->query->where(['query' => $query]);
    });
    return $this->Crud->execute();
  }

  public function nearby($location, $radius = 500)
  {
    if(empty($location)) throw new BadRequestException("missing location url arg.");

    $this->Crud->action()->findMethod('nearbysearch');
    $this->Crud->on('beforePaginate', function(Event $event) use($radius, $location){
      $event->getSubject()->query->where([
        'radius' => $radius,
        'location' => $location
      ]);
    });
    return $this->Crud->execute();
  }
}
