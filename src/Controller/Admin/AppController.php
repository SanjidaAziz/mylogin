<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Utility\Inflector;

class AppController extends Controller
{

    public function initialize(): void
    {
        
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
   
        $this->loadComponent('Authentication.Authentication');
     
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
      
        $this->Authentication->addUnauthenticatedActions(['login','signup']);

        $this->set('inflector', new Inflector);

    }
}
