<?
$row = 15;
$cell = 5;
?>

<table border=1 cellspacing=2 cellpadding=2>
    <? for ($counter=1;$counter<=$row;$counter++) { ?>
        <tr>
                <? for ($counter1=1;$counter1<=$cell;$counter1++) { ?>
                    <td>Row <? echo($counter) ?> Cell <? echo($counter1) ?></td>
                        <? } ?>
        </tr>
    <? } ?>
</table>