<?php
return [
  'Menus' => [

    /* Menu superuser
    *************************/
    'superuser' => [
      '<i class="material-icons">photo</i><p>'.__('Attachments').'</p>' => ['controller' => 'Attachments', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
      '<i class="material-icons">person</i><p>'.__('Users').'</p>' => ['controller' => 'Users', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
      '<i class="material-icons">rowing</i> '.__('Exemple').'<b class="caret"></b></p>' => [
        'collapse' => [
          __('List') => ['controller' => 'Bravos', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
          __('Types') => ['controller' => 'BravoTypes', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
      ]],
    ],

    /* Menu admin
    *************************/
    'admin' => [
      '<i class="material-icons">directions_bus</i>'.__('Stations').'</p>' => ['controller' => 'Stations', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
      '<i class="material-icons">timeline</i>'.__('Lines').'</p>' => ['controller' => 'Lines', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
      '<i class="material-icons">save</i>'.__('Records').'</p>' => ['controller' => 'Records', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
      //'<i class="material-icons">photo</i><p>'.__('Attachments').'</p>' => ['controller' => 'Attachments', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
      '<i class="material-icons">supervisor_account</i>'.__('Users').'</p>' => ['controller' => 'Users', 'action' => 'index','prefix' => 'admin', 'plugin' => false],
    ],
]];
