<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */


namespace Application\src\Entity\Training;
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Date;
use Zend\View\Model\ViewModel;



use Application\Entity\Training;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {



        $nbr_student=3;
        $stat_d=new \DateTime("2019-10-22");
        $end_d=new \DateTime("2019-10-25");
        $duration= $stat_d->diff($end_d)->days+1;

        $trainig=new Training();

        $trainig->setStartdate($stat_d);
        $trainig->setEnddate($end_d);
        $trainig->setDuration($duration);
        $trainig->setNbr($nbr_student);




//

//        $result=['nbr'=> $trainig->getNbr(),
//            'duration'=>$trainig->getDuration(),
//            'startd'=>$trainig->getStartdate(),
//            'endd'=>$trainig->getEnddate()  ];



        return new ViewModel(['trainig'=>$trainig]);



    }
    public function secondAction()
    {

        $nbr_student=3;
        $stat_d=new \DateTime("2019-10-26");
        $end_d=new \DateTime("2019-10-29");
        $duration= $stat_d->diff($end_d)->days+1;

        $trainig=new Training();

        $trainig->setStartdate($stat_d);
        $trainig->setEnddate($end_d);
        $trainig->setDuration($duration);
        $trainig->setNbr($nbr_student);





//

        $result=['nbr'=> $trainig->getNbr(),
            'duration'=>$trainig->getDuration(),
            'startd'=>$trainig->getStartdate(),
            'endd'=>$trainig->getEnddate()  ];



        return new ViewModel(['res'=>$result]);
    }

}
