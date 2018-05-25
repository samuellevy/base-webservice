<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Novo serviço</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($services, ['type'=>'file']) ?>

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
            <div class="col-md-4">
              <div class="form-group">

              <!-- <select name="tab_id" class="form-control" id="tab-id">
                <optgroup label="teste">
                <?php foreach($services_tabs as $tab):?>
                  <option value="<?=$tab->id?>"><?=$tab->name?></option>
                <?php endforeach;?>
                </optgroup>
              </select> -->


                <?php echo $this->Form->control('tab_id', ['class'=>'form-control', 'label'=>'Services', 'options'=>$services_tabs]);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Arquivo</label><br/>
                <figure class="form-box-img">
                  <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Services']);?>
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
