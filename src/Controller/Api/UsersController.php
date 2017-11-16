<?php
namespace App\Controller\Api;

use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Cake\Event\Event;
use Firebase\JWT\JWT;
use App\Controller\Api\AppController as AppController;

class UsersController extends AppController
{
  public function login()
  {
    $user = $this->Auth->identify();
    if (!$user) {
      throw new UnauthorizedException('Invalid username or password');
    }
    $this->set([
      'success' => true,
      'data' => [
        //'id' => $user['id'],
        'token' => JWT::encode([
          'sub' => $user['id'],
          'exp' =>  time() + 43200
        ],
        Security::salt())
      ],
      '_serialize' => ['success', 'data']
    ]);
  }
}
