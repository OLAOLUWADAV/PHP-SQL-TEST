<?php
class Fruits {
    public $type;
    public $color;
    public $taste;
    public $season;
    public $region;
    public $description;


    public function __construct($type, $color, $taste, 
                                $season, $region,$description) {
        $this->type = $type;
        $this->color = $color;
        $this->taste = $taste;
        $this->season = $season;
        $this->region = $region;
        $this->description =$description;
        $this->displayDetails();
    }


    public function displayDetails() {
        echo "F Details:\n";
        echo "type: " . $this->type . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "taste: " . $this->taste . "<br>";
        echo "season: " . $this->season . " <br>";
        echo "region: " .$this->region ."<br>";
        echo "description" .$this->description."<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
}


$cars = [
    new Fruits('Cashew',  'Black',"Sweet", "Dry",'South west','foundly called cashew sweet comes in Sperical shape','<br><br>'),
    new Fruits('Tigernut', 'White','Bitter', "Rainy",'North','foundly called gbofio sweet comes in circular shape','<br><br>'),
    new Fruits('African Giant Star Apple', 'Cream','sweet',"dry",'West','Also Known as agabalumo sweet comes in circular shape','<br><br>'),
    new Fruits('Orange', '', 'Yellow','sweet',"Rainy",'East','popularly called Osa sweet comes in circular shape','<br><br>'),
    ];

?>
