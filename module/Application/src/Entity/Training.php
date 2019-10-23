<?php

namespace  Application\Entity;



class Training
{
    private  $startdate;
    private  $enddate;
    private  $duration;
    private  $nbr;

    /**
     * @return mixed
     */
    public function getEnddate():\DateTime
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
    public function getDuration():int
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
    public function getStartdate():\DateTime
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