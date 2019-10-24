<?php


namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;

/**
 * @ORM\Entity
 * @ORM\Table(name="student")
 */

class student
{

    //les propriétés
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    private $id;


    /**
     * @ORM\Column(name="nom")
     */
    private $nom;
    /**
     * @ORM\Column(name="prenom")
     */
    private $prenom;
    /**
     * @ORM\Column(name="date_naissance" ,type="date")
     */
    private $date_naissance;
    /**
     * @ORM\Column(name="nationalite" )
     */

    private $nationalite;
    /**
     * @ORM\Column(name="mail")
     */
    private $mail;
    /**
     * @ORM\Column(name="situation")
     */
    private $situation;
    /**
     * @ORM\Column(name="remarques")
     */
    private $remarques;


    /**
     * @ORM\ManyToMany(targetEntity="Training",inversedBy="student")
     * @ORM\JoinTable(name="training_student",
     *      joinColumns={@ORM\JoinColumn(name="training_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="student_id", referencedColumnName="id")}
     *      )
     */
    private $trainings;

    public function __construct() {
        $this->trainings = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getTrainings()
    {
        return $this->trainings;
    }

    /**
     * @param mixed $trainings
     */
    public function setTrainings($trainings): void
    {
        $this->trainings = $trainings;
    }


    //getter+setter

    /**
     * @return mixed
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom():string
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom ): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom():string
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance():\DateTime
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance): void
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return mixed
     */
    public function getNationalite():string
    {
        return $this->nationalite;
    }

    /**
     * @param mixed $nationalite
     */
    public function setNationalite($nationalite): void
    {
        $this->nationalite = $nationalite;
    }

    /**
     * @return mixed
     */
    public function getMail():string
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getSituation():string
    {
        return $this->situation;
    }

    /**
     * @param mixed $situation
     */
    public function setSituation($situation): void
    {
        $this->situation = $situation;
    }

    /**
     * @return mixed
     */
    public function getRemarques():string
    {
        return $this->remarques;
    }

    /**
     * @param mixed $remarques
     */
    public function setRemarques($remarques): void
    {
        $this->remarques = $remarques;
    }


}