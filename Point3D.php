<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getXYZ()
    {
        array_push($this->array, $this->getX(), $this->getY(), $this->getZ());
        return $this->array;
    }

    public function toString()
    {
        foreach ($this->getXYZ() as $value){
            echo $value;
            echo " ";
        }
    }

}