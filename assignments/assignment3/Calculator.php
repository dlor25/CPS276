<?
class Calculator {
    public function calc ($str = null, $num1 = null, $num2 = null) {
        if($str == '+' || $str == '-' || $str == '*' || $str == '/') {
            if(is_numeric($num1) && is_numeric($num2)){
                if($str == '+') {
                    echo('The sum of the numbers is ');
                    echo($num1 + $num2 . '<br>');
                }

                elseif($str == '-') {
                    echo('The difference of the numbers is ');
                    echo($num1 - $num2.'<br>');
                }
                
                elseif($str == '*') {
                    echo('The product of the numbers is ');
                    echo($num1 * $num2.'<br>');
                }
    
                elseif($str == '/' && $num2 == 0) {
                    echo('Cannot divide by zero <br>');
                }
    
                elseif($str == '/' && $num2 != 0) {
                    echo('The division of the numbers is ');
                    echo($num1 / $num2.'<br>');
                }
                
            }
            else
                echo('You must enter a string and two numbers <br>');

        }
        else
            echo('You must enter a string and two numbers <br>');
    }
};


?>