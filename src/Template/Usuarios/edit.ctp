<div class="content">
    <?php
    $aplicacion = $this->request->session()->read("aplicacion");
    $this->Html->addCrumb($aplicacion,'/');
    $this->Html->addCrumb('Usuarios', '/usuarios/index/');

    echo $this->Html->getCrumbList();
    ?>
</div>

<div class="container">
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                    <h3 class="panel-title">Editar Usuario</h3>
                </div>
                <div class="col col-xs-6 text-right">
                    <?= $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-list']), ['controller'=>'Usuarios','action' => 'index'],['escape' => false,'class'=>'btn btn-default']) ?>
                </div>
            </div>
        </div>
        <div class="panel-body">
             <?= $this->Form->create($usuario) ?>   
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <?=$this->Form->input('email',array('class'=>'form-control'))?>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <?php
                    echo $this->Form->input('password',array('class' => 'form-control','label'=>'Password'));
                    ?>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?=$this->Form->input('rol',array('type'=>'select',
                        'options'=>["admin" => "Admin","usuario"=>"Usuario"],'class' => 'form-control','label'=>'Rol'))?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <?=$this->Form->input('nombre',array('class' => 'form-control','label'=>'Nombre'))?>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">
                    <?=$this->Form->input('telefono',array('class' => 'form-control','label'=>'Telefono'))?>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <?=$this->Form->input('direccion',array('class' => 'form-control','label'=>'Direccion'))?>
                </div>

            </div>
            <div class="row">
                <hr>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-info']) ?>
                    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'],['class'=>'btn btn-danger']) ?>

                </div>
            </div>
             <?= $this->Form->end() ?>
        </div>
    </div>
</div>
