<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Application\Model\PlaylistTable;

class IndexController extends AbstractActionController
{
    /*
    protected $PlaylistTable;
    function __construct(ApplicationTable $applicationtab){
		$this->$PlaylistTable = $applicationtab;
    }
    */
    public function indexAction()
    {
        //$resultSet = $this->PlaylistTable->selectAll();
        //$ret = array('list' => $resultSet, 'form' => "formModel", );
        return new ViewModel();
    }
}
