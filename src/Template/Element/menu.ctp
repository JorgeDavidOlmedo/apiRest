<div>
<div class="container-fuild">
    <?php if(isset($current_user)): ?>
    <nav id="top-menu" class="navbar navbar-inverse navbar-static">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php echo $this->Html->link('JorgeApp',array('controller'=>'pages', 'action'=>'index'), array('class'=>'navbar-brand', 'title'=>__("JorgeApp", true)));?>
            </div>
            <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                            <?php echo  "Usuarios" ?>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">

                        <li><a  <?= $this->Html->link($this->Html->tag('span','',['class' => '']).'Usuario', ['controller' => 'usuarios','action' => 'index'],['escape' => false])?></a></li>

                        </ul>
                    </li>

                </ul>

                <ul id="topmenu-dropdown" class="nav navbar-nav navbar-right">
                    <li id="fat-menu" class="dropdown">
                        <a id="myAccountMenu" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">

                            <span id="username"><strong>Hola&nbsp;<?= $this->request->session()->read('Auth.User')['nombre']?> </strong></span>&nbsp;
                           </a>


                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">

                            <?php $id_usuario = $this->request->session()->read('Auth.User.id');?>

                            <li role="presentation" style="  border-top: 1px solid #ccc;
                            padding-top: 10px;"><?php echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-off']).' Salir',array('controller'=>'usuarios', 'action'=>'logout'), ['escape' => false]);?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php endif; ?>


