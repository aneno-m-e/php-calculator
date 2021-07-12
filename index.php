
  <?php

// $display=
$calculation = [];
$current_step = [];
$previous_calculation = [];

if(isset($_POST)) {
 foreach($_POST as $key => $value) {
   switch($_POST[$key]){
     case(is_numeric($_POST[$key])):
      break;
    case($_POST[$key] === "."):
      break;  
    case($_POST[$key] === "+"):
      break;
    case($_POST[$key] === "-"):
      break;
    case($_POST[$key] === "*"):
      break;
    case($_POST[$key] === "/"):
      break;
    case($_POST[$key] === "="):
      break;
    case($_POST[$key] === "C"):
      $current_step = [];
      break;  
    case($_POST[$key] === "AC"):
      $calculation = [];
      $current_step = [];
      break;  
    case($_POST[$key] === "Ans"):
      $calculation = $previous_calculation;
      break; 
   }
 }}
   


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
        <div class="row">
            <input type="text" id="display" name="display" value="<?= implode(" ", $calculation) . implode("", $current_step); ?>" disabled>
        </div> <!--check-->
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
