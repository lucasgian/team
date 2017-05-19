<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Team Controller
 *
 * @property \App\Model\Table\TeamTable $Team
 *
 * @method \App\Model\Entity\Team[] paginate($object = null, array $settings = [])
 */
class TeamController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $team = $this->paginate($this->Team);

        $this->set(compact('team'));
        $this->set('_serialize', ['team']);
    }

    public function index2()
    {
        $this->paginate = [
            'conditions' => [
                'Team.id' => $this->Auth->user('id'),
            ]
        ];
        $this->set('team', $this->paginate($this->Team));
    }

    public function admin()
    {
        $team = $this->paginate($this->Team);

        $this->set(compact('team'));
        $this->set('_serialize', ['team']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $team = $this->Team->get($id, [
            'contain' => []
        ]);

        $this->set('team', $team);
        $this->set('_serialize', ['team']);
    }

    public function tags()
    {
        $tags = $this->request->getParam('pass');
        $team = $this->Team->find('tagged', [
            'tags' => $tags
        ]);
        $this->set(compact('team', 'tags'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $team = $this->Team->newEntity();
        if ($this->request->is('post')) {
            $team = $this->Team->patchEntity($team, $this->request->getData());
            if ($this->Team->save($team)) {
                $this->Flash->success(__('The team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team could not be saved. Please, try again.'));
        }
        $this->set(compact('team'));
        $this->set('_serialize', ['team']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $team = $this->Team->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $team = $this->Team->patchEntity($team, $this->request->getData());
            if ($this->Team->save($team)) {
                $this->Flash->success(__('The team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team could not be saved. Please, try again.'));
        }
        $this->set(compact('team'));
        $this->set('_serialize', ['team']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $team = $this->Team->get($id);
        if ($this->Team->delete($team)) {
            $this->Flash->success(__('The team has been deleted.'));
        } else {
            $this->Flash->error(__('The team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function isAuthorized($user)
    {
        $action = $this->request->params['action'];
        // As ações add e index são permitidas sempre.
        if(in_array($action, ['index', 'add', 'tags'])) 
            return true;
        

        if($user['role_id'] == 1) 
            return true;
        
        return false;
    }
}
