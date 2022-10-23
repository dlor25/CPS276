<?

print_r($_REQUEST);

$firstNameField = !empty($_REQUEST['firstNameField']) ? $_REQUEST['firstNameField'] : '';

?>

<html>
    <form action='testpage.php' method='post'>
        <input value="<"