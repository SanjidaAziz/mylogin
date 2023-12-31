<?php
use Cake\TwigView\Twig\Node\Element;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    
<div class="col-lg-8 col-md-10 content">
    <div class="users form ">
        <?= $this->Form->create($user) ?>
        
            <fieldset>
                <legend>Registration Panel</legend>
                <div class="form-group row">
                    <label for="inputFirstname" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input name="firsname" type="text" class="form-control" id="inputFirstname" placeholder="Enter Firstname" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputLirstname" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input name="lastname" type="text" class="form-control" id="inputLirstname" placeholder="Enter Lastname" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Enter Address" required> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Enter phone number" required>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" oninput="checkEmailAvailability()" required>
                        <span id="emailavailability"></span>
        
                    </div>
                </div>
            
                

                <div class="form-group row">
                    <label for="inputDOB" class="col-sm-2 col-form-label">Birthdate</label>
                    <div class="col-sm-10 datepicker input-with-post-icon">
                        <input name="birthday" type="date" class="form-control" id="inputDOB" placeholder="Select date" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" required>
                    </div>
                </div>

                
                <?= $this->Form->button(__('Signup'),['class' => 'btn btn-primary'])?>
            </fieldset>           
        <?= $this->Form->end() ?>
    </div>
</div>





