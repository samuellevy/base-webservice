<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Novo serviço</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($specialties, ['type'=>'file']) ?>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nome']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('description', ['class'=>'form-control', 'label'=>'Descrição']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Arquivo</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($specialties['files'][0])):?>
                    <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$specialties['files'][0]['id'];?>">Remover</button>
                    <?php echo $this->Html->image('../uploads/files/'.$specialties['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$specialties['files'][0]['id']]);?>
                  <?php else:?>
                    <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Specialty']);?>
                  <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Foto']);?>
                </figure>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?= $this->Form->button(__('Send'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>

          
