<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?= __('Records') ?> <span class="badge badge-info"><?= $this->Paginator->counter('{{count}}')?></span>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <?= $this->Html->link('<i class="material-icons">add</i> '.__('Add'),['action'=>'add'], ['class' => '','escape'=>false]) ?>
      </li>
    </ul>
  </div>
</nav>
<div class="utils--spacer-default"></div>
<div class="row no-gutters">
  <div class="col-11 mx-auto ">
    <?= $this->Flash->render() ?>
    <?= $this->Flash->render('auth') ?>
    <!-- LIST ELEMENT -->
    <div class="card">
      <!-- START CONTEMT -->
      <div class="card-body">
        <?= $this->Form->create('Search', ['novalidate', 'class'=>'', 'role'=>'search']) ?>
        <?= $this->Form->input('q', ['class'=>'form-control', 'placeholder'=>__('Search...'), 'label'=>false]) ?>
        <?= $this->Form->end() ?>
        <figure class="figure figure--table">

        <table id="datatables" class="table table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
          <thead class="thead-default">
            <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('user_id') ?></th>
                            <th><?= $this->Paginator->sort('date') ?></th>
                            <th><?= $this->Paginator->sort('from') ?></th>
                            <th><?= $this->Paginator->sort('line_id') ?></th>
                            <th><?= $this->Paginator->sort('to') ?></th>
                            <th><?= $this->Paginator->sort('stops') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($records as $record): ?>
              <tr>
                                      <td data-title="id"><?= h($record->id) ?></td>
                                              <td data-title="User Id"><?= $record->has('user') ? $this->Html->link($record->user->username, ['controller' => 'Users', 'action' => 'view', $record->user->id]) : '' ?></td>
                                              <td data-title="date"><?= h($record->date) ?></td>
                                            <td data-title="from"><?= h($record->from) ?></td>
                                              <td data-title="Line Id"><?= $record->has('line') ? $this->Html->link($record->line->name, ['controller' => 'Lines', 'action' => 'view', $record->line->id]) : '' ?></td>
                                              <td data-title="to"><?= h($record->to) ?></td>
                                            <td data-title="stops"><?= $this->Number->format($record->stops) ?></td>
                                      <td data-title="actions" class="actions" class="text-right">
                  <div class="btn-group">
                    <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $record->id],['class' => 'btn btn-xs btn-simple btn-info btn-icon edit','escape' => false]) ?>
                    <?= $this->Html->link('<i class="material-icons">mode_edit</i>', ['action' => 'edit', $record->id], ['class' => 'btn btn-xs btn-simple btn-warning btn-icon edit','escape' => false]) ?>
                    <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $record->id], ['class' => 'btn btn-xs btn-simple btn-danger btn-icon remove','escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </figure>
      </div>
      <!-- END CONTEMT -->
      <!-- START FOOTER -->
      <div class="card-footer">
        <div class="row no-gutters">
          <div class="col-6">
            <?=
            $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')])
            ?>
          </div>
          <div class="col-6">
            <nav aria-label="pagination">
              <ul class="pagination justify-content-end">
                <?= $this->Paginator->prev(__('Prev')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next')) ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- END FOOTER -->
    </div><!-- end content-->
  </div><!-- end card-->
</div><!-- end col-xs-12-->
