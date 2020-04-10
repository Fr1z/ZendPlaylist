<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Post\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Application\Model\PlaylistTable;

class IndexController extends AbstractActionController
{
    
    protected $table;
    
    function __construct($applicationtab){
	$this->table = $applicationtab;
    }
    
    public function indexAction()
    {
        $records = $this->table->selectAll();
        //$records =
        //$resultSet = $this->PlaylistTable->selectAll();
        //$ret = array('list' => $resultSet, 'form' => "formModel", );
        return new ViewModel(['records' => $records]);
    }
    
    public function addAction(){
        $form = new \Post\Form\PostForm;
        $request = $this->getRequest();
        
        if(!$request->isPost()){
            return new ViewModel(['form' => $form]);
        }
        
        $postrecord = new \Post\Model\Record();
        $form->setData($request->getPost());
        if (!$form->isValid()){
            exit('campo non valido');
        }
        $postrecord->exchangeArray($form->getData());
        $this->table->saveData($postrecord);
        
        return $this->redirect()->toRoute('post', 
                [
                    'controller' => 'index',
                    'action' => 'add',
                ]);
    }
    public function deleteAction(){
        //prende da GET /id
        $id = (int) $this->params()->fromRoute('id', 0);
        //prende da POST
        //$id = (int) $this->params()->fromPost('id', 0);

        if ($id<1){
            exit("error invalid ID".$id);          
        }
        $result = $this->table->deleteData($id);
        return new ViewModel([
            'id' => $id,
            'result' => $result,
        ]);
    }
}
