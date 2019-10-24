<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */


namespace Application\src\Entity\Training;
namespace Application\src\Entity\student;

namespace Application\Controller;
use Doctrine\ORM\Mapping as ORM;

use Application\Entity\student;
use Doctrine\ORM\EntityNotFoundException;
use Zend\Mvc\Controller\AbstractActionController;
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

        $student=$this->entityManager->getRepository(student::class)
            ->findall();



        if ($student==null)
        {
            throw new EntityNotFoundException('NOT FOUND');
        }

        return new ViewModel(['trainigs'=>$trainigs,'student'=>$student]);
    }


    public function trainingAction()
    {

        $id=$this->params()->fromRoute('id');



        $trainig = $this->entityManager->getRepository(Training::class)
            ->find($id);
        if ($trainig==null)
        {
        throw new EntityNotFoundException('NOT FOUND');
        }


        return new ViewModel(['trainig'=>$trainig]);
    }
    public function traininglisteAction()
    {

       // $id=$this->params()->fromRoute('id');



        $trainig = $this->entityManager->getRepository(Training::class)
            ->findall();
        if ($trainig==null)
        {
            throw new EntityNotFoundException('NOT FOUND');
        }


        return new ViewModel(['trainig'=>$trainig]);
    }
    public function studentlisteAction()
    {

        // $id=$this->params()->fromRoute('id');



        $student = $this->entityManager->getRepository(student::class)
            ->findall();
        if ($student==null)
        {
            throw new EntityNotFoundException('NOT FOUND');
        }


        return new ViewModel(['students'=>$student]);
    }

    public function studentAction()
    {

        $student=$this->entityManager->getRepository(student::class)
            ->findall();



        if ($student==null)
        {
            throw new EntityNotFoundException('NOT FOUND');
        }


        return new ViewModel(['student'=>$student]);
    }



    }

