<?
$outer = 4;
$inner = 5;
?>

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