<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Imovels Controller
 *
 * @method \App\Model\Entity\Imovel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImovelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pessoas'],
        ];
        $imovels = $this->paginate($this->Imovels);

        $this->set(compact('imovels'));
    }

    /**
     * View method
     *
     * @param string|null $id Imovel id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imovel = $this->Imovels->get($id, [
            'contain' => ['Pessoas'],
        ]);

        $this->set(compact('imovel'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imovel = $this->Imovels->newEmptyEntity();
        if ($this->request->is('post')) {
            $imovel = $this->Imovels->patchEntity($imovel, $this->request->getData());
            if ($this->Imovels->save($imovel)) {
                $this->Flash->success(__('O imovel foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O imovel não foi salvo. Por favor, tente novamente.'));
        }
        $pessoas = $this->Imovels->Pessoas->find('list', ['limit' => 200])->all();
        $this->set(compact('imovel', 'pessoas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Imovel id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imovel = $this->Imovels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imovel = $this->Imovels->patchEntity($imovel, $this->request->getData());
            if ($this->Imovels->save($imovel)) {
                $this->Flash->success(__('O imovel foi editado!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O imovel não foi editado. Por favor, tente novamente.'));
        }
        $pessoas = $this->Imovels->Pessoas->find('list', ['limit' => 200])->all();
        $this->set(compact('imovel', 'pessoas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Imovel id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imovel = $this->Imovels->get($id);
        if ($this->Imovels->delete($imovel)) {
            $this->Flash->success(__('O imovel foi excluido!'));
        } else {
            $this->Flash->error(__('O imovel não foi excluido. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
