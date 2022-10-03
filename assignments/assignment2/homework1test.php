<?php

@$outer = $_GET["number1"];
@$inner = $_GET["number2"];

?>

<!DOCTYPE html>
<form action="homework1test.php" method="get">

    Number One: <input type="text" name="number1">

    <br>

    Number Two: <input type="text" name="number2">
    <input type="submit" value="Submit">

</form>

<ul>
    <? for ($counter=1;$counter<=$outer;$counter++) { ?>
        <li>
            <? echo($counter); ?>
                <ul>
                    <? for ($counter1=1;$counter1<=$inner;$counter1++) { ?> 
                        <li>
                            <? echo($counter1); ?>
                        </li>
                    <? } ?>
                </ul>
        </li>
        <? } ?>
</ul>


</html>