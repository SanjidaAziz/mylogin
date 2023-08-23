<?php
use League\Container\Inflector\Inflector;
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 *
 */
 $username = $this->Identity->get('firsname').' '.$this->Identity->get('lastname');
 $roleid = $this->Identity->get('id'); 
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../webroot/js/jquery-3.7.0.min.js"></script>



    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script>
        echo $this->Html->scriptBlock(sprintf(
            'var csrfToken = %s;',
            json_encode($this->request->getAttribute('csrfToken'))
        ));
        $(document).ready(function() {
        var csrfToken = <?= json_encode($this->request->getAttribute('csrfToken')) ?>;

        $('#email').on('input', function() {
            const email = $(this).val();

            $.ajax({
                type: "POST",
                url: '/check-email-availability',
                data: { email: email, _csrfToken: csrfToken },
                success: function(response) {
                    const availability = response.available;
                    const message = availability ? 'Email is available' : 'Email is not available';
                    $('#emailavailability').text(message);
                }
            });
        });
    });
    </script>
      
    
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
        <?php if ($this->Identity->isLoggedIn()) { ?>
            <?= $this->Html->link(__($username), ['action' => 'index']) ?>
            <?= $this->Html->link(__('Logout'), ['controller'=> 'Users','action' => 'logout']) ?>
        <?php }else{ ?>
            <?= $this->Html->link(__('Login'), ['controller'=> 'Users','action' => 'login']) ?>
            <?= $this->Html->link(__('Signup'), ['controller'=> 'Users','action' => 'signup']) ?>
        <?php } ?>
            
        </div>
    </nav>
    <main class="main">
        <div class="container">
        
            <?= $this->Flash->render() ?>
            <div class="row d-flex justify-content-center">
                <?php if ($this->Identity->isLoggedIn()) echo $this->element('side_menu')?>
                <?php  echo $this->fetch('content')?>  
                
            </div>
        </div>
    </main>
    <footer>
    </footer>

  


</body>
</html>
