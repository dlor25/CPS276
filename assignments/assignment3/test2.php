<?php
    class Car {
    public $color;
    public $make;
    public $model;
    public $year;
    }

    $beetle = new Car();
    $beetle->color ="red";
    $beetle->make ="Honda";
    $beetle->model ="Civic";
    $beetle->year ="1991";
    echo $beetle->color."<br>";
    print_r($beetle);
    //echo "<pre>";
    
    

?>