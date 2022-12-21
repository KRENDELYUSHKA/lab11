<?php
if (isset($_POST["go"])) {
    abstract class Animal
    {
        public $food;
        public $location;

        function __construct($food, $location)
        {
            $this->food = $food;
            $this->location = $location;
        }

        abstract function makeNoise();
        abstract function eat();
        abstract function sleep();
    }
    class cat extends Animal
    {
        public $color;

        function __construct($food, $location, $color)
        {
            $this->food = $food;
            $this->location = $location;
            $this->color = $color;
        }
        function makeNoise()
        {
            echo "<br>" . "meow";
        }
        function eat()
        {
            echo "<br>" . "cat eating";
        }
        function sleep()
        {
            echo "<br>" . "cat sleep";
        }
    }
    class dog extends Animal
    {
        public $size;

        function __construct($food, $location, $size)
        {
            $this->food = $food;
            $this->location = $location;
            $this->size = $size;
        }
        function makeNoise()
        {
            echo "<br>" . "bark";
        }
        function eat()
        {
            echo "<br>" . "dog eating";
        }
        function sleep()
        {
            echo "<br>" . "dog sleep";
        }
    }
    class hourse extends Animal
    {
        public $breed;

        function __construct($food, $location, $breed)
        {
            $this->food = $food;
            $this->location = $location;
            $this->breed = $breed;
        }
        function makeNoise()
        {
            echo "<br>" . "i-go-go";
        }
        function eat()
        {
            echo "<br>" . "hourse eating";
        }
        function sleep()
        {
            echo "<br>" . "hourse sleep";
        }
    }
    $class = $_POST["class"];
    $food = $_POST["food"];
    $location = $_POST["location"];
    $third = $_POST["third"];
    if ($class = 'cat') {
        $object = new cat($food, $location, $third);
        echo "<br>" . $object->food;
        echo "<br>" . $object->location;
        echo "<br>" . $object->color;
    }
    if ($class = 'dog') {
        $object = new dog($food, $location, $third);
        echo "<br>" . $object->food;
        echo "<br>" . $object->location;
        echo "<br>" . $object->size;
    }
    if ($class = 'hourse') {
        $object = new hourse($food, $location, $third);
        echo "<br>" . $object->food;
        echo "<br>" . $object->location;
        echo "<br>" . $object->breed;
    }
    if ($class != 'dog' || $class != 'hourse' || $class != 'cat') {
        $object = new cat($food, $location, $third);
    }



    $object->makeNoise();
    $object->eat();
    $object->sleep();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="post">
        <input type="text" name="class">
        <input type="text" name="food">
        <input type="text" name="location">
        <input type="text" name="third">
        <input type="submit" name="go">
    </form>
</body>

</html>

</html>