<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?= __('Lines') ?>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <?= $this->Html->link('<i class="material-icons">mode_edit</i> '.__('Edit'),['action'=>'edit', $line->id], ['class' => '','escape'=>false]) ?>
        <?= $this->Html->link('<i class="material-icons">delete</i> '.__('Delete'),['action'=>'delete', $line->id], ['class' => '','escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $line->id)]) ?>
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
              <td><?= h($line->id) ?></td>
            </tr>
                                                <tr>
              <th scope="row"><?= __('Name') ?></th>
              <td><?= h($line->name) ?></td>
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
        <?php if (!empty($line->records)): ?>
      <div class="card  mt-4">
        <div class="card-body">
          <h4 class="card-title"><?= __('Related Records') ?></h4>
          <figure class="figure figure--table">
            <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
              <thead>
                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('User Id') ?></th>
                                    <th><?= __('Date') ?></th>
                                    <th><?= __('From') ?></th>
                                    <th><?= __('Line Id') ?></th>
                                    <th><?= __('To') ?></th>
                                    <th><?= __('Stops') ?></th>
                                    <th><?= __('Ticket Inspector') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($line->records as $records): ?>
                    <tr>
                      <td data-title="Id"><?= h($records->id) ?></td>
                      <td data-title="User Id"><?= h($records->user_id) ?></td>
                      <td data-title="Date"><?= h($records->date) ?></td>
                      <td data-title="From"><?= h($records->from) ?></td>
                      <td data-title="Line Id"><?= h($records->line_id) ?></td>
                      <td data-title="To"><?= h($records->to) ?></td>
                      <td data-title="Stops"><?= h($records->stops) ?></td>
                      <td data-title="Ticket Inspector"><?= h($records->ticket_inspector) ?></td>
                    <td data-title="actions" class="actions" class="text-right">
                      <div class="btn-group">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['controller' => 'Records', 'action' => 'view', $records->id],['class' => 'btn btn-xs btn-simple btn-info btn-icon edit','escape' => false]) ?>
                      </td>
                    </div>
                  </tr >

                <?php endforeach; ?>
              </tbody>
            </table>
          </figure>
        </div>
      </div>
    <?php endif; ?>
        <?php if (!empty($line->stations)): ?>
      <div class="card  mt-4">
        <div class="card-body">
          <h4 class="card-title"><?= __('Related Stations') ?></h4>
          <figure class="figure figure--table">
            <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
              <thead>
                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('Lat') ?></th>
                                    <th><?= __('Lng') ?></th>
                                    <th><?= __('Vicinity') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($line->stations as $stations): ?>
                    <tr>
                      <td data-title="Id"><?= h($stations->id) ?></td>
                      <td data-title="Name"><?= h($stations->name) ?></td>
                      <td data-title="Lat"><?= h($stations->lat) ?></td>
                      <td data-title="Lng"><?= h($stations->lng) ?></td>
                      <td data-title="Vicinity"><?= h($stations->vicinity) ?></td>
                    <td data-title="actions" class="actions" class="text-right">
                      <div class="btn-group">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['controller' => 'Stations', 'action' => 'view', $stations->id],['class' => 'btn btn-xs btn-simple btn-info btn-icon edit','escape' => false]) ?>
                      </td>
                    </div>
                  </tr >

                <?php endforeach; ?>
              </tbody>
            </table>
          </figure>
        </div>
      </div>
    <?php endif; ?>
      </div>
</div>
<div class="utils--spacer-default"></div>
