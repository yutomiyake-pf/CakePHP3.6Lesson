<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bidmesseges Controller
 *
 * @property \App\Model\Table\BidmessegesTable $Bidmesseges
 *
 * @method \App\Model\Entity\Bidmessege[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidmessegesController extends AuctionBaseController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bidinfos', 'Users']
        ];
        $bidmesseges = $this->paginate($this->Bidmesseges);

        $this->set(compact('bidmesseges'));
    }

    /**
     * View method
     *
     * @param string|null $id Bidmessege id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidmessege = $this->Bidmesseges->get($id, [
            'contain' => ['Bidinfos', 'Users']
        ]);

        $this->set('bidmessege', $bidmessege);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidmessege = $this->Bidmesseges->newEntity();
        if ($this->request->is('post')) {
            $bidmessege = $this->Bidmesseges->patchEntity($bidmessege, $this->request->getData());
            if ($this->Bidmesseges->save($bidmessege)) {
                $this->Flash->success(__('The bidmessege has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidmessege could not be saved. Please, try again.'));
        }
        $bidinfos = $this->Bidmesseges->Bidinfos->find('list', ['limit' => 200]);
        $users = $this->Bidmesseges->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidmessege', 'bidinfos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bidmessege id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidmessege = $this->Bidmesseges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidmessege = $this->Bidmesseges->patchEntity($bidmessege, $this->request->getData());
            if ($this->Bidmesseges->save($bidmessege)) {
                $this->Flash->success(__('The bidmessege has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidmessege could not be saved. Please, try again.'));
        }
        $bidinfos = $this->Bidmesseges->Bidinfos->find('list', ['limit' => 200]);
        $users = $this->Bidmesseges->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidmessege', 'bidinfos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bidmessege id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidmessege = $this->Bidmesseges->get($id);
        if ($this->Bidmesseges->delete($bidmessege)) {
            $this->Flash->success(__('The bidmessege has been deleted.'));
        } else {
            $this->Flash->error(__('The bidmessege could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
