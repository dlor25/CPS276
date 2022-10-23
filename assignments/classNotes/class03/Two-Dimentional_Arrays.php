<?php
//* Two Dimentional Arrays

// Two dimentional arrays are important in this class.
// When retrieving data from the database, your results will be in the form
// of a two dimentional array.

// Here is a long way of createing a two dimentional array.
$records=[];
$row['first']='steve';
$row['last']='jones';
$records[] = $row;
$row['first']='carl';
$row['last']='smith';
$records[] = $row;
$row['first']='joe';
$row['last']='jackson';
$records[] = $row;

print_r($records);

echo('<hr>');

// Here is a way to create a two dimentional array in one statement
$myBooks = array(
    array(
        "title" => "The Grapes of Wrath",
        "author" => "John Steinbeck",
        "pubYear" => 1939
    ),
    array(
        "title" => "Travels With Charley",
        "author" => "John Steinbeck",
        "pubYear" => 1962
    ),
    array(
        "title" => "The Trial",
        "author" => "Franz Kafka",
        "pubYear" => 1925
    ),
    array(
        "title" => "The Hobbit",
        "author" => "J. R. R. Tolkien",
        "pubYear" => 1937
    ),
    array(
        "title" => "A Tale of Two Cities",
        "author" => "Charles Dickens",
        "pubYear" => 1859
        )
    );
print_r($myBooks);
echo('<hr>');

// Normally, you wont leave a print_r command in your production code.
// Lets display this two dimentional array as an html table
?>
<table border=1 cellspacing=0 cellpadding=2>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
    </tr>
    <? foreach ($myBooks as $book) { ?>
        <tr>
            <!-- The equal sign in this php expression is short hand for 'echo'  -->
            <td><?=$book['title']?></td>
            <td><?=$book['author']?></td>
            <td><?=$book['pubYear']?></td>
        </tr>
    <? } ?>
</table>