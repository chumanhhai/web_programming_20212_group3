<?php 
    class MethodTest {
        function __call($name, $arguments)
        {
            print("Calling method '$name '" . implode(", ", $arguments) . "<br>");
        }

        function __callStatic($name, $arguments)
        {
            print("Calling method '$name '" . implode(", ", $arguments) . "<br>");
        }
    }

    $obj = new MethodTest();
    $obj->runTest("in object context");
    MethodTest::runTest("in static context");
?>