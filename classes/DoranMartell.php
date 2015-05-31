<?php
namespace Dorne\Martell;

use Person;

class DoranMartell extends Person {
    public static function whoami() {
        return "I`m ".array_pop(explode('\\', __CLASS__))." from ".array_pop(explode('\\', __NAMESPACE__));
    }
}