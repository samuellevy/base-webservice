<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Convênios</h4>
          <p class="category"></p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', ['label'=>'Nome']) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($convenios as $convenio): ?>
                <tr>
                  <td><?= $this->Number->format($convenio->id) ?></td>
                  <td><?= h($convenio->name) ?></td>

                  <td class="actions">
                    <?php //= $this->Html->link(__('Ver'), ['action' => 'view', $convenio->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $convenio->id]) ?>
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $convenio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $convenio->id)]) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <div class="paginator">
            <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
              <?= $this->Paginator->prev('< ' . __('anterior')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('próximo') . ' >') ?>
              <?= $this->Paginator->last(__('último') . ' >>') ?>
              <li><a href="<?= $this->Url->build(["action" => "add"]);?>">Novo</a></li>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            <a href="<?= $this->Url->build(["action" => "../departments"]);?>">Gerenciar departamentos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
