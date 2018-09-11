<?php


class RaceCar extends car

{
    protected $_bhp;
    protected $_maxSpeed;

    /**
     * @return mixed
     */
    public function getBhp()
    {
        return $this->_bhp;
    }

    /**
     * @param mixed $bhp
     */
    public function setBhp($bhp)
    {
        $this->_bhp = $bhp;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->_maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->_maxSpeed = $maxSpeed;
    }
}