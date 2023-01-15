## Calculator App
---

## Code:

```php
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
```

### Task

- Create a new class called "CalculatorApp"
- The class should have a public function called "calculate" that takes 3 parameters: $operation, $a and $b
- The "calculate" function should use the Calculator class to perform the specified operation (add, subtract, multiply or divide) and return the result
- The CalculatorApp class should also have a public function called "history" that returns an array of all the previous calculations performed

### Expected Output

```
5  
-1  
30  
4
```