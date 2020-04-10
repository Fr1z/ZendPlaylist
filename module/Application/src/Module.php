<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

//use Zend\Db\ResultSet\ResultSet;
//se Zend\Db\TableGateway\TableGateway;
//use Application\Model\PlaylistTable;
//use Application\Model\Record;

class Module
{
    const VERSION = '3.1.4dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    

    /*
    public function getServiceConfig()
    {
		
	return array(

		'factories' => array(
			'Application\Model\PlaylistTable' => function ($sm) {
                            //$tableGateway = $sm->get('ApplicationTableGateway');
                            $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                            
                            $resultSetPrototype = new ResultSet();
			    $resultSetPrototype->setArrayObjectPrototype(new Record());
                            $tableGateway = new TableGateway('Record', $dbAdapter, null, $resultSetPrototype);
                            $table = new PlaylistTable($tableGateway);
                            return $table;
			},
			/*
			'ApplicationTableGateway' => function ($sm) {
				$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
				$resultSetPrototype = new ResultSet();
				$resultSetPrototype->setArrayObjectPrototype(new Users());
				return new TableGateway('Users', $dbAdapter, null, $resultSetPrototype);
			},
           
                        
		),
	);
		
    }
    */
	
}
