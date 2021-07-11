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
            <input type="text" value="display" value="start" disabled>
        </div> <!--check-->
        <div class="row">
            <input type="submit" value="AC" value="clear-all">
            <input type="submit" value="C" value="clear">
            <input type="submit" value="Ans" value="previous-result">
            <input type="submit" value="/" value="divide">
          </div>
        <div class="row">
          <input type="submit" value="7" value="seven">
          <input type="submit" value="8" value="eight">
          <input type="submit" value="9" value="nine">
          <input type="submit" value="*" value="multiply">
        </div>
        <div class="row">
          <input type="submit" value="4" value="four">
          <input type="submit" value="5" value="five">
          <input type="submit" value="6" value="six">
          <input type="submit" value="-" value="substract">
        </div>
        <div class="row">
          <input type="submit" value="1" value="one">
          <input type="submit" value="2" value="two">
          <input type="submit" value="3" value="three">
          <input type="submit" value="+" value="add" class="tall">
        </div>
        <div class="row">
          <input type="submit" value="0" value="zero">
          <input type="submit" value="." value="decimal">
          <input type="submit" value="=" value="equals">
          
        </div>
</form>
    </main>
 
 
  </body>
</html>