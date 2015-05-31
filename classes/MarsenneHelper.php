<?php
namespace Marsenne;

class MarsenneHelper {
    public static function getFirts($number) {
        for ($i = 1; $i <= $number; $i++) {
            $ans = (1<<$i) - 1;
            yield $ans;
        }
    }
}
?>