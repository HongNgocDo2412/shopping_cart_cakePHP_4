<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
// use Cake\Auth\DefaultPasswordHasher;


class UsersController extends AppcakeController {

////////////////////////////////////////////////////////////////////////////////

    // public function login()
    // {
    //     // $passwordHasher = new DefaultPasswordHasher();
    //     // echo $passwordHasher->hash('admin');
    //     // $this->loadComponent('Auth');

    //     if($this->request->is('post')){
    //         $user = $this->Auth->identify();
    //         if($user){
    //             $this->Auth->setUser($user);
    //             return $this->redirect(['controller' => 'products']);
    //         }
    //         // Bad Login
    //         $this->Flash->error('Incorrect Login');
    //     }
    // }
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);

                if ($user['active'] == 1) {
                    return $this->redirect(['controller' => 'admin/Admin', 'action' => 'index']);
                }else {
                    return $this->redirect(['controller' => 'Products', 'action' => 'index']);
                }
            } else {
                $this->Flash->error("Incorrect username or password !");
            }
        }
    }

////////////////////////////////////////////////////////////////////////////////

    public function logout()
    {
        $this->Flash->success('Good-Bye');
        return $this->redirect($this->Auth->logout());
    }
    public function signup(){
        $user = $this->Users->newEmptyEntity();
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if($this->Users->save($user)){
                $this->Flash->success('You are registered and can login');
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error('You are not registered');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialzie', ['user']);
    }

////////////////////////////////////////////////////////////////////////////////

}
