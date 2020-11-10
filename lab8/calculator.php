<?php 

abstract class Operation {
  protected $operand_1;
  protected $operand_2;
  public function __construct($o1, $o2) {
    // Make sure we're working with numbers...
    if (!is_numeric($o1) || !is_numeric($o2)) {
      throw new Exception('Non-numeric operand.');
    }
    
    // Assign passed values to member variables
    $this->operand_1 = $o1;
    $this->operand_2 = $o2;
  }
  public abstract function operate();
  public abstract function getEquation(); 
}

abstract class OneOperation {
  protected $operand_1;
  public function __construct($o1) {
    // Make sure we're working with numbers...
    if (!is_numeric($o1)) {
      throw new Exception('Non-numeric operand.');
    }
    
    // Assign passed values to member variables
    $this->operand_1 = $o1;
  }
  public abstract function operate();
  public abstract function getEquation(); 
}

// Addition subclass inherits from Operation
class Addition extends Operation {
  public function operate() {
    return $this->operand_1 + $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
  }
}


// Add subclasses for Subtraction, Multiplication and Division here

// Addition subclass inherits from Operation
class Subtraction extends Operation {
  public function operate() {
    return $this->operand_1 - $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Multiplication extends Operation {
  public function operate() {
    return $this->operand_1 * $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Division extends Operation {
  public function operate() {
    return $this->operand_1 / $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Exponential extends Operation {
  public function operate() {
    return pow($this->operand_1, $this->operand_2);
  }
  public function getEquation() {
    return $this->operand_1 . ' ^ ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

//classes extending the OneOperation abstract class
class Squared extends OneOperation {
  public function operate() {
    return pow($this->operand_1, 2);
  }
  public function getEquation() {
    return $this->operand_1 . ' ^ ' . 2 . ' = ' . $this->operate();
  }
}

class tenPow extends OneOperation {
  public function operate() {
    return pow(10, $this->operand_1);
  }
  public function getEquation() {
    return 10 . ' ^ ' . $this->operand_1 . ' = ' . $this->operate();
  }
}

class ePow extends OneOperation {
  public function operate() {
    return exp($this->operand_1);
  }
  public function getEquation() {
    return 'e' . ' ^ ' . $this->operand_1 . ' = ' . $this->operate();
  }
}

class logBase10 extends OneOperation {
  public function operate() {
    return log10($this->operand_1);
  }
  public function getEquation() {
    return 'log' . ' _ ' . 10 . '(' . $this->operand_1 . ')' . ' = ' . $this->operate();
  }
}

class logBaseE extends OneOperation {
  public function operate() {
    return log($this->operand_1);
  }
  public function getEquation() {
    return 'log' . ' _ ' . 'e' . '(' . $this->operand_1 . ')' . ' = ' . $this->operate();
  }
}

class squareroot extends OneOperation {
  public function operate() {
    return pow($this->operand_1, .5);
  }
  public function getEquation() {
    return $this->operand_1 . ' ^ ' . 1 . '/' . 2 . ' = ' . $this->operate();
  }
}

class Sin extends SingleOperation {
  public function operate() {
    return sin($this->operand_1);
  }
  public function getEquation() {
    return "Sin(" . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Cos extends SingleOperation {
  public function operate() {
    return cos($this->operand_1);
  }
  public function getEquation() {
    return "Cos(" . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Tan extends SingleOperation {
  public function operate() {
    return tan($this->operand_1);
  }
  public function getEquation() {
    return "Tan(" . $this->operand_1 . ') = ' . $this->operate();
  }
}
// Some debugs - uncomment these to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";


// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();


// Instantiate an object for each operation based on the values returned on the form
// For example, check to make sure that $_POST is set and then check its value and 
// instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs
// We might cover such a way on Tuesday...

  try {
    if (isset($_POST['add']) && $_POST['add'] == 'Add') {
      $op = new Addition($o1, $o2);
    }
    if (isset($_POST['sub']) && $_POST['sub'] == 'Subtract') {
      $op = new Subtraction($o1, $o2);
    }
    if (isset($_POST['mult']) && $_POST['mult'] == 'Multiply') {
      $op = new Multiplication($o1, $o2);
    }
    if (isset($_POST['divi']) && $_POST['divi'] == 'Divide') {
      $op = new Division($o1, $o2);
    }
    if (isset($_POST['exponent']) && $_POST['exponent'] == 'x^y') {
      $op = new Exponential($o1, $o2);
    }
    if (isset($_POST['squared']) && $_POST['squared'] == 'x^2') {
      $op = new squared($o1);
    }
    if (isset($_POST['powTen']) && $_POST['powTen'] == '10^x') {
      $op = new tenPow($o1);
    }
    if (isset($_POST['powE']) && $_POST['powE'] == 'e^x') {
      $op = new ePow($o1);
    }
    if (isset($_POST['log10']) && $_POST['log10'] == 'log') {
      $op = new logBase10($o1);
    }
    if (isset($_POST['logE']) && $_POST['logE'] == 'nl') {
      $op = new logBaseE($o1);
    }
    if (isset($_POST['squareroot']) && $_POST['squareroot'] == 'Square root') {
      $op = new squareroot($o1);
    }
    if (isset($_POST['sin']) && $_POST['sin'] == 'Sin') {
      $op = new Sin($o1);
    }

    if (isset($_POST['cos']) && $_POST['cos'] == 'Cos') {
      $op = new Cos($o1);
    }

    if (isset($_POST['tan']) && $_POST['tan'] == 'Tan') {
      $op = new Tan($o1);
    }


// Put code for subtraction, multiplication, and division here


  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>PHP Calculator</title>
</head>
<body>
  <pre id="result">
  <?php 
    if (isset($op)) {
      try {
        echo $op->getEquation();
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }

    foreach($err as $error) {
        echo $error . "\n";
    } 
  ?>
  </pre>
  <form method="post" action="calculator.php">
    <input type="text" name="op1" id="name" value="" />
    <input type="text" name="op2" id="name" value="" />
    <br/>
    <!-- Only one of these will be set with their respective value at a time -->
    <input type="submit" name="add" value="Add" />  
    <input type="submit" name="sub" value="Subtract" />  
    <input type="submit" name="mult" value="Multiply" />  
    <input type="submit" name="divi" value="Divide" />
    <input type="submit" name="exponent" value="x^y" />  
    <input type="submit" name="squared" value="x^2" />
    <input type="submit" name="powTen" value="10^x" />
    <input type="submit" name="powE" value="e^x" />
    <input type="submit" name="log10" value="log" />
    <input type="submit" name="squareroot" value="Square root" />
    <input type="submit" name="sin" value="Sin" />  
    <input type="submit" name="cos" value="Cos" />  
    <input type="submit" name="tan" value="Tan" /> 
    
  </form>
</body>
</html>

