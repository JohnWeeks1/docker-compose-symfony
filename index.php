<?php

class Controller {
    public function greet() {
        return "Hello World.";
    }
}

$con = new Controller();
$con->greet();
