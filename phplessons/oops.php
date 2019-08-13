<?php
    
    interface Shapes{
        public function area($input1, $input2);
        public function perimeter(fff);
    }

    class Square implements Shapes{
        function area($input1, $input2){
            echo $input1*$input1;
        }
    }

    class Rectangle implements Shapes{
        function area($input1, $input2){
            echo $input1*$input2;
        }
    }

    $square=new Square;
    echo $square->area(3,4);

   $rectangle=new Rectangle;
   $rectangle->area(3,4);


    class ChildBehaviour extends Behaviour1, Behaviour2{

    }
    abstract class Calculator{
        //perform the calculation and save the result to $result 
        abstract function calculate();

        function display(){
            echo "fsd";
        }

    }

    abstract class ScientificCalculator extends Calculator{

        var $input1;
        var $input2;
        var $result;
        var $operation;

        function __construct($input1, $input2, $operation){
            $this->input1=$input1;
            $this->input2=$input2;
            $this->operation=$operation;
        }

        // function calculate(){
        //     echo "Logic for operations!";
        // }
    }

    class  NewCal extends ScientificCalculator{
        function calculate(){

        }
    }

    if(isset($_GET['submit'])){
      
        //create a instance variable/ calculator object
        //$calculator= new ScientificCalculator($_GET['input1'], $_GET['input2'], $_GET['operation']);
        //$calculator->calculate();
      //  echo "<br>Outside class:".$calculator->getInput1()."<br>";
       // echo "The result is $calculator->result";
    }

?>
<html>
    <head><title>Calculator</title></head>
    <body>
        <form action="oops.php" method="get">
        Input 1: <input type="number" name="input1" value=""><br>
        Input 2: <input type="number" name="input2" value=""><br>
        <input type="radio" name="operation" value="add">Add<br>
        <input type="radio" name="operation" value="sub">Subtract<br>
        <input type="radio" name="operation" value="mul">Multiply<br>
        <input type="radio" name="operation" value="div">Division<br><br>
        <input type="submit" name="submit" value="Calculate">
        </form>
    </body>
</html>