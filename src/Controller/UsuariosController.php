<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Log\Log;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Email\Email;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;
use Cake\Auth\DefaultPasswordHasher;


/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{

        public function beforeFilter(Event $event)
    {

        parent::beforeFilter($event);
        $this->Auth->allow(['login']);
    }




    public function datos()
    {
        $usuario = $this->Usuarios->get($this->Auth->user('id'));


        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

        public  function isAuthorized($user=null)

    {
        if(isset($user['rol']) && $user['rol']==='user')
        {
            if(in_array($this->request->action,['home']))
            {
                return true;
            }
        }
        return parent::isAuthorized();
    }


    public function login()
    {

        if($this->request->is('post'))
        {

          $user  = $this->Auth->identify();

           if($user){

             $this->Auth->setUser($user);
             $this->request->session()->write("aplicacion","JorgeApp");
             return $this->redirect($this->Auth->redirectUrl());

           }else{
             $this->Flash->error('Datos incorrectos',['key'=>'auth']);
           }
        }


        if($this->request->session()->read('Auth.User'))
        {
            $this->request->session()->write("aplicacion","JorgeApp");
            return $this->redirect($this->Auth->redirectUrl());

        }

    }


    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $id_empresa = $this->request->session()->read('id_empresa');

               $this->paginate = [
                   'conditions'=>array('and'=>array('Usuarios.estado'=>1)),
                    'order'=>['Usuarios.id DESC'],
                    'limit'=>25];

        $usuarios = $this->paginate($this->Usuarios);
        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */

    public function add()
    {

        $usuario = $this->Usuarios->newEntity();

        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El Usuario se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('No se puedo guardar el registro.'));
            }

        }

        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El Usuario se edito correctamente.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('No se pudo editar el registro.'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
       // $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('El Usuario se borro correctamente.'));
        } else {
            $this->Flash->error(__('No se pudo borrar el registro'));
        }

        return $this->redirect(['action' => 'index']);
    }


      /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function users()
    {
         $this->response->header(array(
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Headers' => 'Content-Type'
        ));

        $results=null;
        $connection = ConnectionManager::get('default');
        $id_empresa = $this->request->session()->read('id_empresa');


  
        $sql="SELECT * FROM usuarios";

        $results = $connection->execute($sql);

        $resultado_valor = array();
        foreach ($results as $value){
            $resultado_valor[] = array("id"=>$value['id'],
                "nombre"=> $value['nombre']);
        }

        $valores = $resultado_valor;
        $this->set([
            'valores' => $valores,
            '_serialize' => ['valores']
        ]);
        $this->viewClass = 'Json';
        $this->render();

    }


}
