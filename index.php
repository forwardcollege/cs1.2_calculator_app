<!DOCTYPE html>
<html>
    <body>
    <?php

    class Calculator {

        public static function add($a, $b) {
        return $a + $b;
        }

        public static function subtract($a, $b) {
            return $a - $b;
        }

        public static function multiply($a, $b) {
        return $a * $b;
        }

        public static function divide($a, $b) {
            return $a / $b;
        }
    }

    class CalculatorApp {
        private $history = array();

        // Only change code below this line
        
        
        
        // Only change code above this line

        public function history() {
            return $this->history;
        }
    }

    $calculatorApp = new CalculatorApp();
    $calculatorApp->calculate('add', 2, 3); 
    $calculatorApp->calculate('subtract', 2, 3);
    $calculatorApp->calculate('multiply', 5, 6);
    $calculatorApp->calculate('divide', 8, 2);

    foreach( $calculatorApp->history() as $item ) 
    {
        echo $item['result'] . '<br />'; 
    }

    ?>
    </body>
</html>