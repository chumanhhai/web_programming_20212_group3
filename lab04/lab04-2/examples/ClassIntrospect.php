<?php 
    function display_classes() {
        $classes = get_declared_classes();
        foreach($classes as $class) {
            print "Information about $class <br>";
            print "$class methods: <br>";
            $methods = get_class_methods($class);
            if(!count($methods)) {
                print "<i>None</i> <br>";
            } else {
                foreach($methods as $method) {
                    print "<b>$method</b><br>";
                }
            }
            $properties = get_class_vars($class);
            if(!count($properties)) {
                print "<i>None</i> <br>";
            } else {
                foreach($properties as $property) {
                    print "<b>$property</b><br>";
                }
            }
        }
    }

    display_classes();
?>