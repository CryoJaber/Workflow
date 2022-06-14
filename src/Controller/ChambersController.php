<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chambers Controller
 *
 * @property \App\Model\Table\ChambersTable $Chambers
 * @method \App\Model\Entity\Chamber[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChambersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $chambers = $this->paginate($this->Chambers);

        $this->set(compact('chambers'));
    }

    /**
     * View method
     *
     * @param string|null $id Chamber id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chamber = $this->Chambers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('chamber'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chamber = $this->Chambers->newEmptyEntity();
        if ($this->request->is('post')) {
            $chamber = $this->Chambers->patchEntity($chamber, $this->request->getData());
            if ($this->Chambers->save($chamber)) {
                $this->Flash->success(__('The chamber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chamber could not be saved. Please, try again.'));
        }
        $this->set(compact('chamber'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chamber id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chamber = $this->Chambers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chamber = $this->Chambers->patchEntity($chamber, $this->request->getData());
            if ($this->Chambers->save($chamber)) {
                $this->Flash->success(__('The chamber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chamber could not be saved. Please, try again.'));
        }
        $this->set(compact('chamber'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chamber id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chamber = $this->Chambers->get($id);
        if ($this->Chambers->delete($chamber)) {
            $this->Flash->success(__('The chamber has been deleted.'));
        } else {
            $this->Flash->error(__('The chamber could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



}
