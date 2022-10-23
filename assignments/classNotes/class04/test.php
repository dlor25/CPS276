<?

class Car {
    public $year = 2000;
    public function sayHi() {
        return 'i am a car';
    }
}

class Honda extends Car {
    public $isCivic = 'yes';
    public function sayHi() {
        return 'i am a Honda';
    }

}

class Toyota extends Car {
    public $isTersel = false;
}

$x = new Honda();
echo($x->year);
echo($x->isCivic);
echo($x->sayHi());









?>