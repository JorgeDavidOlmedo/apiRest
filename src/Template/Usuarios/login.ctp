<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a class="active" id="login-form-link">Login</a>
                            </div>
                           
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?= $this->Flash->render('auth') ?>
                                <?= $this->Form->create() ?>
                                
                                    <div class="form-group">
                                        <?= $this->Form->input('email',['class'=>"form-control input-lg", 'placeholder'=>"Email",'label'=>false,'required']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?= $this->Form->input('password',['class'=>"form-control input-lg", 'placeholder'=>"Password",'label'=>false,'required']); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                    </div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
      

    </style>