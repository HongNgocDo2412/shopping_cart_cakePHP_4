<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\EventInterface;
/**
 * Productoptions Controller
 *
 * @property \App\Model\Table\ProductoptionsTable $Productoptions
 * @method \App\Model\Entity\Productoption[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products'],
        ];
        $productoptions = $this->paginate($this->Productoptions);

        $this->set(compact('productoptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Productoption id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productoption = $this->Productoptions->get($id, [
            'contain' => ['Products', 'Orderproducts'],
        ]);

        $this->set(compact('productoption'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productoption = $this->Productoptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $productoption = $this->Productoptions->patchEntity($productoption, $this->request->getData());
            if ($this->Productoptions->save($productoption)) {
                $this->Flash->success(__('The productoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productoption could not be saved. Please, try again.'));
        }
        $products = $this->Productoptions->Products->find('list', ['limit' => 200]);
        $this->set(compact('productoption', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Productoption id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productoption = $this->Productoptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productoption = $this->Productoptions->patchEntity($productoption, $this->request->getData());
            if ($this->Productoptions->save($productoption)) {
                $this->Flash->success(__('The productoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productoption could not be saved. Please, try again.'));
        }
        $products = $this->Productoptions->Products->find('list', ['limit' => 200]);
        $this->set(compact('productoption', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Productoption id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productoption = $this->Productoptions->get($id);
        if ($this->Productoptions->delete($productoption)) {
            $this->Flash->success(__('The productoption has been deleted.'));
        } else {
            $this->Flash->error(__('The productoption could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
