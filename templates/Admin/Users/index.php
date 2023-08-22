<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
$roleid = $this->Identity->get('usertype'); 
$userid = $this->Identity->get('id');
//$currentuser = $this->Identity->getIdentity();
if($roleid==1){ 

    echo $this->element('user_profile',['id'=>$userid]);
    
 } elseif($roleid==0){ 

    echo $this->element('admin');

} ?>
