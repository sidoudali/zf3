<?php

namespace  Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;


/**
 * @ORM\Entity
 * @ORM\Table(name="training")
 */
class Training
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */

    private $id;

    /**
     * @ORM\Column(name="description")
     */

    private  $description;
    /**
     * @ORM\Column(name="title")
     */
    private  $title;
    /**
     * @ORM\Column(name="started_at",type="datetime")
     */
    private  $startdate;
    /**
     * @ORM\Column(name="finished_at",type="datetime")
     */
    private  $enddate;



    /**
     * @ORM\Column(name="nb_students")
     */
    private  $nbr;

    /**
     * @ORM\ManyToMany(targetEntity="student",inversedBy="Training")
     * @ORM\JoinTable(name="training_student",
     *      joinColumns={@ORM\JoinColumn(name="student_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="training_id", referencedColumnName="id")}
     *      )
     */
    private $students;

    /**
     * @return ArrayCollection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param ArrayCollection $students
     */
    public function setStudents(ArrayCollection $students): void
    {
        $this->students = $students;
    }

    public function __construct() {
        $this->students = new ArrayCollection();
    }

    private  $duration;


    /**
     * @return mixed
     */
    public function getDescription():string
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTitle():string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }




    /**
     * @return mixed
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param mixed $enddate
     */
    public function setEnddate(\DateTime $enddate): void
    {
        $this->enddate = $enddate;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getNbr()
    {
        return $this->nbr;
    }

    /**
     * @param mixed $nbr
     */
    public function setNbr(int $nbr): void
    {
        $this->nbr = $nbr;
    }
    /**
     * @return mixed
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param mixed $startdate
     */
    public function setStartdate(\DateTime $startdate): void
    {
        $this->startdate = $startdate;
    }



}