<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2d = new Point2D(5, 10);
$point2d->toString();
echo "<br>";
$point3d = new Point3D(5,10,15);
$point3d->toString();