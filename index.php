<?php

function __autoload($name) {
    $name = array_pop(explode('\\', $name));
    include "classes/$name.php";
}

use messages\Getting;

?>
<h4>Roles</h4>
<?php
echo \Crownlands\BaratheonOfKings\TommenBaratheon::whoami(); echo '<br/>';
echo \Westerlands\Lannister\CerseiLannister::whoami(); echo '<br/>';
echo \Dorne\Martell\DoranMartell::whoami(); echo '<br/>';
echo \Riverlands\Harrenhal\PetyrBaelish::whoami(); echo "<br/>";
echo \Baratheon\StormsEnd\Tomman::whoami();
?>

<h4>Queries</h4>
<?php
Getting::say("Valera");
?>

<h4>Marsenne with yeild</h4>
<?php
    foreach (\Marsenne\MarsenneHelper::getFirts(10) as $marsenne) {
        echo $marsenne."<br/>";
    }
?>
