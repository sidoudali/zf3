<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */


namespace Application\src\Entity\Training;
namespace Application\Controller;
use Doctrine\ORM\EntityNotFoundException;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Date;
use Zend\View\Model\ViewModel;



use Application\Entity\Training;

class IndexController extends AbstractActionController
{
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager
     */

    private $entityManager;

    // Constructor method is used to inject dependencies to the controller.
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }



    public function indexAction()
    {


        $trainigs = $this->entityManager->getRepository(Training::class)
            ->findall();






//        $trainig=new Training();
//
//        $trainig->setStartdate($stat_d);
//        $trainig->setEnddate($end_d);
//        $trainig->setDuration($duration);
//        $trainig->setNbr($nbr_student);




//

//        $result=['nbr'=> $trainig->getNbr(),
//            'duration'=>$trainig->getDuration(),
//            'startd'=>$trainig->getStartdate(),
//            'endd'=>$trainig->getEnddate()  ];



    return new ViewModel(['trainigs'=>$trainigs]);





    }

    public function trainingAction()
    {

        $id=$this->params()->fromRoute('id');

//        $nbr_student=3;
//        $stat_d=new \DateTime("2019-10-26");
//        $end_d=new \DateTime("2019-10-29");
//        $duration= $stat_d->diff($end_d)->days+1;
//
//        $trainig=new Training();
//
//        $trainig->setStartdate($stat_d);
//        $trainig->setEnddate($end_d);
//        $trainig->setDuration($duration);
//        $trainig->setNbr($nbr_student);
//
//
//
$trainig = $this->entityManager->getRepository(Training::class)
            ->find($id);
if ($trainig==null)
{
    throw new EntityNotFoundException('NOT FOUND');
}
//
////
//
//        $result=['nbr'=> $trainig->getNbr(),
//            'duration'=>$trainig->getDuration(),
//            'startd'=>$trainig->getStartdate(),
//            'endd'=>$trainig->getEnddate()  ];



        return new ViewModel(['trainig'=>$trainig]);
    }

}
