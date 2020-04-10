<?php
namespace Post\Model;

use Zend\Db\TableGateway\TableGateway;

class RecordTable {
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
    
    
	function selectAll(){
            
            /*
        $adapter = $this->tableGateway->adapter;
	$sql = "SELECT * FROM Records";
	$rows = $adapter->query($sql, array());

        return $rows;
          */
        return $this->tableGateway->select();
	}

        
        //salvataggio dati su tabella  
	function saveData($post){
            $data = [
                'titolo' => $post->getTitolo(),
            ];
            
            return $this->tableGateway->insert($data);
	}
        //cancellazione dati row
	function deleteData($postId){
            $data = [
                'id' => $postId,
            ];
            
            return $this->tableGateway->delete($data);
	}
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

