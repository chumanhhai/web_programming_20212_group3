<?php
    class BaseClass {
        protected $name = "BaseClass";
        function __construct()
        {
            print("In " . $this->name . " constructor <br>");
        }
        function __destruct()
        {
            print("Destroying " . $this->name . "<br>");
        }
    }

    class SubClass extends BaseClass {
        function __construct()
        {
            $this->name = "SubClass";
            parent::__construct();
        }

        function __destruct()
        {
            parent::__destruct();
        }
    }

    $obj1 = new SubClass(); // $name is changed to "SubClass" -> result: "In SubClass constructor/Destroying SubClass"
    $obj2 = new BaseClass(); // result: "In SubClass constructor/In BaseClass constructor/Destroying BaseClass/Destroying SubClass

 
?>