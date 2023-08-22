<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Auth\DefaultPasswordHasher; 

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * 
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /*
   
    */
    /**
     * Index method
     * 
     * 
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

    public function changepassword($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
    
        if ($this->request->is(['patch', 'post', 'put'])) {
            // Get the posted data
            $requestData = $this->request->getData();
    
            // Verify if the current password matches the stored password
            $hasher = new DefaultPasswordHasher();
            if ($hasher->check($requestData['current_password'], $user->password)) {
                // Current password matches
                if ($requestData['new_password'] === $requestData['confirm_password']) {
                    // New password and confirm password match, proceed with password change
                    $user->password = $requestData['new_password'];
    
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('Password has been changed.'));
                        return $this->redirect(['controller' => 'Users','action' => 'index']);
                    } else {
                        $this->Flash->error(__('Password could not be changed. Please try again.'));
                    }
                } else {
                    // New password and confirm password do not match
                    $this->Flash->error(__('New password and confirm password do not match.'));
                }
            } else {
                // Current password does not match
                $this->Flash->error(__('Current password is incorrect.'));
            }
        }
    
        $this->set(compact('user'));       
        
    }

    public function signup()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['controller' => 'Users','action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function login()
    {
         
        
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        

        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect to /articles after login success

            $this->Flash->success(__('Logged in'));
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'index',
            ]);

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
       
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Flash->success(__('Successfully logged out.'));

            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
}
