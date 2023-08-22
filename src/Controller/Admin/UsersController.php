<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $key = $this->request->getQuery('key');
        if($key){
            $query = $this->Users->find('all')
                                    ->where(['OR'=>['firsname like'=> '%'.$key.'%',
                                                    'lastname like'=> '%'.$key.'%',
                                                    'email like'=> '%'.$key.'%']]);
           // $query = $this->Users->findByEmailOrFirsnameOrLastname($key,$key,$key);
        }else{
            $query = $this->Users;
        }

        $users = $this->paginate($query);

        $this->set(compact('users'));       
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Flash->success(__('Successfully logged out.'));

            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }

}
