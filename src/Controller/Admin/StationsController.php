<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Stations Controller
 *
 * @property \App\Model\Table\StationsTable $Stations
 *
 * @method \App\Model\Entity\Station[] paginate($object = null, array $settings = [])
 */
class StationsController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Search.Prg', [
      'actions' => ['index']
    ]);
  }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $query = $this->Stations
        ->find('search',['search' => $this->request->query]);
        $this->set('stations', $this->paginate($query));
    }

    /**
     * View method
     *
     * @param string|null $id Station id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $station = $this->Stations->get($id, [
            'contain' => ['Lines']
        ]);

        $this->set('station', $station);
        $this->set('_serialize', ['station']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $station = $this->Stations->newEntity();
        if ($this->request->is('post')) {
            $station = $this->Stations->patchEntity($station, $this->request->getData());
            if ($this->Stations->save($station)) {
                $this->Flash->success(__('The station has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The station could not be saved. Please, try again.'));
        }
        $lines = $this->Stations->Lines->find('list', ['limit' => 200]);
        $this->set(compact('station', 'lines'));
        $this->set('_serialize', ['station']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Station id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $station = $this->Stations->get($id, [
            'contain' => ['Lines']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $station = $this->Stations->patchEntity($station, $this->request->getData());
            if ($this->Stations->save($station)) {
                $this->Flash->success(__('The station has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The station could not be saved. Please, try again.'));
        }
        $lines = $this->Stations->Lines->find('list', ['limit' => 200]);
        $this->set(compact('station', 'lines'));
        $this->set('_serialize', ['station']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Station id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $station = $this->Stations->get($id);
        if ($this->Stations->delete($station)) {
            $this->Flash->success(__('The station has been deleted.'));
        } else {
            $this->Flash->error(__('The station could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
