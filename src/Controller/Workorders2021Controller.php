<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;

/**
 * Workorders2021 Controller
 *
 * @property \App\Model\Table\Workorders2021Table $Workorders2021
 * @method \App\Model\Entity\Workorders2021[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Workorders2021Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */




    public function index()
    {
        $workorders2021 = $this->paginate($this->Workorders2021);

        $this->set(compact('workorders2021'));
    }

    /**
     * View method
     *
     * @param string|null $id Workorders2021 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workorders2021 = $this->Workorders2021->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('workorders2021'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workorders2021 = $this->Workorders2021->newEmptyEntity();
        if ($this->request->is('post')) {
            $workorders2021 = $this->Workorders2021->patchEntity($workorders2021, $this->request->getData());
            if ($this->Workorders2021->save($workorders2021)) {
                $this->Flash->success(__('The workorders2021 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The workorders2021 could not be saved. Please, try again.'));
        }
        $this->set(compact('workorders2021'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Workorders2021 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workorders2021 = $this->Workorders2021->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workorders2021 = $this->Workorders2021->patchEntity($workorders2021, $this->request->getData());
            if ($this->Workorders2021->save($workorders2021)) {
                $this->Flash->success(__('The workorders2021 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The workorders2021 could not be saved. Please, try again.'));
        }
        $this->set(compact('workorders2021'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Workorders2021 id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workorders2021 = $this->Workorders2021->get($id);
        if ($this->Workorders2021->delete($workorders2021)) {
            $this->Flash->success(__('The workorders2021 has been deleted.'));
        } else {
            $this->Flash->error(__('The workorders2021 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function chamber_dropdown() 
    {
     


        $dsn = "https://cryo_admin:75EZnesty3@dbase.cryocenter.us:3306/Datacubes";

	ConnectionManager::setConfig('default', ['url' => $dsn]);
	
	$connection = ConnectionManager::get('default');


	$results = $connection->execute('SELECT * FROM chambers')->fetchAll('assoc');

	foreach ($results->chamber_name as $row)
	{
	    $chamber_name = $row['chamber_name'];
	
	    echo '<a href="#' . $chamber_name . '">' . $chamber_name . '</a>';

	}

    }

}
