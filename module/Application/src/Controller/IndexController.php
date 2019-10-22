<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Date;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{


    public function indexAction()
    {
        $nbr_student=2;
        $stat_d=new \DateTime("2019-10-22");
        $end_d=new \DateTime("2019-10-25");
        $duration= $stat_d->diff($end_d)->days+1;



//

        $result=['nbr'=> $nbr_student,'duration'=>$duration,'startd'=>$stat_d,'endd'=>$end_d  ];



        return new ViewModel(['res'=>$result]);



    }
    public function secondAction()
    {

        $nbr_student=3;
        $stat_d=new \DateTime("2019-10-26");
        $end_d=new \DateTime("2019-10-29");
        $duration= $stat_d->diff($end_d)->days+1;
        $result=['nbr'=> $nbr_student,'duration'=>$duration,'startd'=>$stat_d,'endd'=>$end_d ];
        return new ViewModel(['res'=>$result]);
    }

}
