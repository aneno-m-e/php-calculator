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
            <input type="text" id="display" value="start" disabled>
        </div> <!--check-->
        <div class="row">
            <input type="submit" value="AC" id="clear-all">
            <input type="submit" value="C" id="clear">
            <input type="submit" value="Ans" id="previous-result">
            <input type="submit" value="/" id="divide">
          </div>
        <div class="row">
          <input type="submit" value="7" id="seven">
          <input type="submit" value="8" id="eight">
          <input type="submit" value="9" id="nine">
          <input type="submit" value="*" id="multiply">
        </div>
        <div class="row">
          <input type="submit" value="4" id="four">
          <input type="submit" value="5" id="five">
          <input type="submit" value="6" id="six">
          <input type="submit" value="-" id="substract">
        </div>
        <div class="row">
          <input type="submit" value="1" id="one">
          <input type="submit" value="2" id="two">
          <input type="submit" value="3" id="three">
          <input type="submit" value="+" id="add" class="tall">
        </div>
        <div class="row">
          <input type="submit" value="0" id="zero">
          <input type="submit" value="." id="decimal">
          <input type="submit" value="=" id="equals">
          
        </div>
</form>
    </main>
 
 
  </body>
</html>