<?php

class Bicycle
{

    var $brand;
    var $model;
    var $year;
    var $description = 'Used bicyle';
    var $weight_kg = 0.0;

    function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}

$schwinn= new Bicycle;
$schwinn->brand = 'Schwinn';
$schwinn->model = 'Raptor';
$schwinn->year = '1998';
$schwinn->weight_kg = '1.0';

$rsd= new Bicycle;
$rsd->brand = 'Rubber Side Down';
$rsd->model = 'XT500';
$rsd->year = '2005';
$rsd->weight_kg = '28';

echo $schwinn->name() . "<br />";
echo $rsd->name() . "<br />";

echo $schwinn->weight_kg . "<br />";
echo $schwinn->weight_lbs() . "<br />";

echo $rsd->weight_kg . "<br />";
echo $rsd->weight_lbs() . "<br />";

?>