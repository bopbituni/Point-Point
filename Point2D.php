<?php


class Point2D
{
    public $x;
    public $y;

    public $array = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function getXY()
    {
        array_push($this->array, $this->x, $this->y);
        return $this->array;
    }

    public function toString()
    {
        foreach ($this->getXY() as $value){
            echo $value;
            echo " ";
        } ;
    }

}