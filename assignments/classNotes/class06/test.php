<?
echo(exec('whoami'));
echo('<br>');

if (@file_put_contents('readme.txt','hello world 2') === false) {
    echo('could not write');
}

$x = file_get_contents('readme.txt');

echo($x);