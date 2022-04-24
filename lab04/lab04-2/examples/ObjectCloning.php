<?php 
    class ObjectTracker {
        private static $nextSerial = 0;
        private $id, $name;

        function __construct($name)
        {
            $this->name = $name;
            $this->id = ++self::$nextSerial;
        }

        function __clone()
        {
            $this->name = "Clone of $this->name";
            $this->id = ++self::$nextSerial;
        }

        function getName() {
            return $this->name;
        }

        function getId() {
            return $this->id;
        }

        function setName($name) {
            $this->name = $name;
        }
    }

    $ot = new ObjectTracker("Hai's object");
    $ot2 = $ot;
    $ot2->setName("Another object");

    print($ot->getId() . " " . $ot->getName() . "<br>");
    print($ot2->getId() . " " . $ot2->getName() . "<br>");

    /**
     * result:
     * 1 Another object
     * 1 Another object
     * explain:
     * when set $ot2 = $ot, the variable $ot2 refers to oject $ot, thus, when change $ot2's name, it actually changes name of $ot
     */
?>