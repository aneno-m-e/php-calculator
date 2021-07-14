
<?php

$total_input = [];
$current_input = [];
$previous_input = [];
$result = 0;
print_r($_POST);

function doTheMath ($arr_inputs){
  $arr_inputs = preg_replace("[^0-9\.+\-*\/]", "", $arr_inputs);
  return eval("return " . implode(" ", $arr_inputs) . ";");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
  if(isset($_POST["total_input"]))
    $total_input = json_decode($_POST["total_input"]);
  if(isset($_POST["current_input"]))
    $current_input = json_decode($_POST["current_input"]);
  if (isset($_POST["previous_input"]))
    $previous_input = json_decode($_POST["previous_input"]);
  if (isset($_POST["$result"]))
    $result = json_decode($_POST["$result"]);

if(isset($_POST)) {
 foreach($_POST as $key => $value) {
   if($key != "total_input" && $key != "current_input" && $key != "previous_input" && $key != "result") // Shorter synthax?
   switch($value){
    case "0": //Need to solve is_numeric("0") returning false
    case is_numeric($value):
      array_push($current_input, $value);
      break;
    case ".":
      if(!in_array(".", $current_input)) 
        $current_input[] = $value;
      break;  
    case "+":
    case "-":
    case "*":
    case "/":
      //Need to handle case where a number ends with a period
      if(count($current_input) > 0 && is_numeric($current_input[count($current_input)-1]))
        array_push($total_input, implode("", $current_input), $value);
        $current_input = [];
      break;
    case($value === "="):
      if(count($current_input) === 0) {
        array_pop($total_input);
      } else {
        array_push($total_input, implode("", $current_input));
      }
      $result = doTheMath($total_input);
      echo "Result is " . $result;
      $previous_input = $total_input;
      $current_input = [];
      $total_input = [];
      break;
    case "C":
      $current_input = [];
      break;  
    case "AC":
      $current_input = [];
      $total_input = [];
      break;  
    // case "Ans":
    //   $calculation = $previous_calculation;
    //   break; 
   }
 
 }}
   
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Calculator</title>
    <meta charset="utf-8">
  <link media="screen" rel="stylesheet" href="style.css">
 
  </head>
  <body>
  <!--Header-->
  <header>
  <h1>Calculator</h1>
    
  </header>
   
    <main>

    <form action="" id="calculator" method="post">
        <div id="display">
            <input type="hidden" name="total_input" value='<?php echo json_encode($total_input) ?>' >
            <input type="hidden" name="current_input" value='<?php echo json_encode($current_input) ?>' >
            <input type="hidden" name="previous_input" value='<?php echo json_encode($previous_input) ?>' >
            <input type="hidden" name="result" value='<?php echo json_encode($result) ?>' >
            <p><?= implode("", $total_input) . implode("", $current_input); ?></p>
            <input type="text" name="result" value="<?php echo $result ?>" disabled>
        </div>
        <div class="row">
            <input type="submit" value="AC" name="clear-all">
            <input type="submit" value="C" name="clear">
            <input type="submit" value="Ans" name="previous-result">
            <input type="submit" value="/" name="divide">
          </div>
        <div class="row">
          <input type="submit" value="7" name="seven">
          <input type="submit" value="8" name="eight">
          <input type="submit" value="9" name="nine">
          <input type="submit" value="*" name="multiply">
        </div>
        <div class="row">
          <input type="submit" value="4" name="four">
          <input type="submit" value="5" name="five">
          <input type="submit" value="6" name="six">
          <input type="submit" value="-" name="substract">
        </div>
        <div class="row">
          <input type="submit" value="1" name="one">
          <input type="submit" value="2" name="two">
          <input type="submit" value="3" name="three">
          <input type="submit" value="+" name="add" class="tall">
        </div>
        <div class="row">
          <input type="submit" value="0" name="zero">
          <input type="submit" value="." name="decimal">
          <input type="submit" value="=" name="equals">
          
        </div>
</form>
    </main>
 
 
  </body>

</html>
