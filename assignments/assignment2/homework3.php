<?
$row = 15;
$column = 5;
?>

<table border=1 cellspacing=2 cellpadding=2>
    <? for ($counter=1;$counter<=$row;$counter++) { ?>
        <tr>
                <? for ($counter1=1;$counter1<=$column;$counter1++) { ?>
                    <td>Row <? echo($counter) ?> Column <? echo($counter1) ?></td>
                        <? } ?>
        </tr>
    <? } ?>
</table>