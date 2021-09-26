<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class OrdersController extends AppController
{

////////////////////////////////////////////////////////////////////////////////

    public function initialize():void
    {
        parent::initialize();
        $this->loadComponent('Cart');
    }

////////////////////////////////////////////////////////////////////////////////

    public function address()
    {
        $shop = $this->Cart->getcart();
        if(!$shop['Order']['total']) {
            return $this->redirect('/');
        }
      
        $order = $this->Orders->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if (!$order->geterrors()) {

                $order = $this->request->getData();

                if($order['shipping_state'] == 'CA') {
                    $order['tax'] = sprintf('%01.2f', $shop['Order']['subtotal'] * 0.095);
                    $order['total'] = sprintf('%01.2f', $shop['Order']['subtotal'] + $order['tax']);
                } else {
                    $order['tax'] = 0;
                    $order['total'] = $shop['Order']['subtotal'];
                }

                $this->request->getSession()->write('Shop.Order', $order + $shop['Order']);
                return $this->redirect(['action' => 'review']);
            } else {
                $this->Flash->error('The form could not be saved. Please, try again.');
            }
        } else {
            if(!empty($shop['Order'])) {
                $shop['order'] = $this->request->getData('id');
            }
        }
        $this->set(compact('order'));
    }

////////////////////////////////////////////////////////////////////////////////

    public function review()
    {
        $shop = $this->Cart->getcart();
        if(!$shop['Order']['total']) {
            return $this->redirect('/');
        }
        $this->set(compact('shop'));

        $order = $this->Orders->newEntity($shop['Order']);

        if ($this->request->is('post')) {

            $order = $this->Orders->patchEntity($order, $this->request->getData(), ['validate' => 'review']);

            $order->ip_address = $this->request->clientIp();
            $order->remote_host = gethostbyaddr(env('REMOTE_ADDR'));
            $order->referer_session = $this->request->getSession()->read('referer_session');

            $ordersave = $this->Orders->save($order);

            if ($ordersave) {

                $orderproducts = $this->Orders->Orderproducts->newEntities($shop['Orderproducts']);

                foreach ($orderproducts as $orderproduct) {
                    $orderproduct['order_id'] = $ordersave->id;
                    $this->Orders->Orderproducts->save($orderproduct);
                }

                return $this->redirect(['action' => 'success']);
            } else {
                $this->Flash->error('The order could not be placed. Please, try again.');
            }
        }
        $this->set(compact('order'));
    }

////////////////////////////////////////////////////////////////////////////////

    public function success()
    {
        $shop = $this->Cart->getcart();
        $this->Cart->clear();
        if(empty($shop)) {
            return $this->redirect('/');
        }
        $this->set(compact('shop'));
    }

////////////////////////////////////////////////////////////////////////////////

}

