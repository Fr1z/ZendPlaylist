<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Post;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\ModuleManager\Feature\ConfigProviderInterface;


class Module implements ConfigProviderInterface
{
    const VERSION = '3.1.4dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
      public function getServiceConfig(){
        return[
            'factories' => [
                Model\RecordTable::class => function($container){
                    $tableGateway = $container->get(Model\RecordTableGateway::class);
                    return new Model\RecordTable($tableGateway);
                    
                },
                Model\RecordTableGateway::class => function($container){
                    $adapter = $container->get(AdapterInterface::class);
                    $resultSetProto = new ResultSet();
                    $resultSetProto->setArrayObjectPrototype(New Model\Record);
                    return new TableGateway('record', $adapter, null, $resultSetProto);
                }
            ]
        ];
        
    }
    public function getControllerConfig() {
        return [
          'factories' => [
              Controller\IndexController::class => 
                function($container){
                    return new Controller\IndexController($container->get(Model\RecordTable::class));
                }
           ],
        ];
    }
	
}
