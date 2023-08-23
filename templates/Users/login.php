<?php
/**
 * @var \App\View\AppView $this
 
 */
?>

    <div class="col-lg-6 col-md-10 content">
        <div class="users form ">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create() ?>
            <fieldset>
                    <legend>Login Panel</legend>
                    
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" required>
                        </div>
                    </div>
                    
                    <?= $this->Form->button(__('Login'),['class' => 'btn btn-primary'])?>
                </fieldset>           
            <?= $this->Form->end() ?>
        </div>
    </div>





