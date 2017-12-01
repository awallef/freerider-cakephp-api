<?php
namespace App\Controller\Api;

use Cake\Controller\Controller;

class AppController extends Controller
{
  use \Crud\Controller\ControllerTrait;

  public $paginate = [
    'page' => 1,
    'limit' => 100,
    'maxLimit' => 100,
  ];

  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('RequestHandler');
    $this->loadComponent('Crud.Crud', [
      'actions' => [],
      'listeners' => [
        //'CrudCache',
        'Crud.Api',
        'Crud.ApiPagination',
        //'Crud.ApiQueryLog',
        'Crud.Search'
      ]
    ]);
    $this->loadComponent('Auth', [
      'storage' => 'Memory',
      'authenticate' => [
        'ADmad/JwtAuth.Jwt' => [
          'parameter' => 'token',
          'userModel' => 'Users',
          'scope' => ['Users.active' => 1],
          'fields' => [
            'username' => 'id'
          ],
          'queryDatasource' => true
        ],
        'Form' => [
          'fields' => [
            'username' => 'email'
          ]
        ],
      ],
      'unauthorizedRedirect' => false,
      'checkAuthIn' => 'Controller.initialize',
      'authorize' => ['Simple']
    ]);
  }

}
