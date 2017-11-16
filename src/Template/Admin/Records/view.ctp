<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?= __('Records') ?>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <?= $this->Html->link('<i class="material-icons">mode_edit</i> '.__('Edit'),['action'=>'edit', $record->id], ['class' => '','escape'=>false]) ?>
        <?= $this->Html->link('<i class="material-icons">delete</i> '.__('Delete'),['action'=>'delete', $record->id], ['class' => '','escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?>
      </li>
    </ul>
  </div>
</nav>
<div class="utils--spacer-default"></div>
<div class="row no-gutters">
  <div class="col-11 mx-auto ">

    <div class="card">

      <!-- CONTENT -->
      <div class="card-body">
        <figure class="figure figure--table">

        <table class="table">
          <tbody>
                                                <tr>
              <th scope="row"><?= __('Id') ?></th>
              <td><?= h($record->id) ?></td>
            </tr>
                                                <tr>
              <th scope="row"><?= __('User') ?></th>
              <td><?= $record->has('user') ? $this->Html->link($record->user->username, ['controller' => 'Users', 'action' => 'view', $record->user->id]) : '' ?></td>
            </tr>
                                                <tr>
              <th scope="row"><?= __('From') ?></th>
              <td><?= h($record->from) ?></td>
            </tr>
                                                <tr>
              <th scope="row"><?= __('Line') ?></th>
              <td><?= $record->has('line') ? $this->Html->link($record->line->name, ['controller' => 'Lines', 'action' => 'view', $record->line->id]) : '' ?></td>
            </tr>
                                                <tr>
              <th scope="row"><?= __('To') ?></th>
              <td><?= h($record->to) ?></td>
            </tr>
                                                                                    <tr>
              <th scope="row"><?= __('Stops') ?></th>
              <td><?= $this->Number->format($record->stops) ?></td>
            </tr>
                                                            <tr>
              <th scope="row"><?= __('Date') ?></th>
              <td><?= h($record->date) ?></td>
            </tr>
                                                            <tr>
              <th scope="row"><?= __('Ticket Inspector') ?></th>
              <td><?= $record->ticket_inspector ? __('Yes') : __('No'); ?></td>
            </tr>
                                  </tbody>
        </table>
      </figure>

              </div>
    </div>
  </div>
</div>
<div class="row no-gutters">
  <div class="col-11 mx-auto ">
      </div>
</div>
<div class="utils--spacer-default"></div>
