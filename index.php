<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Traductor</title>
    <link rel="stylesheet" type="text/css" href="traductor.css">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Nunito+Sans" rel="stylesheet">

  
  </head>
  <body>

    <!--There are probably better ways to do this than hard-code everything in the HTML, but ¯\_(ツ)_/¯ -->


  <div class=" header-trad">
  <div class="container header-">
  <h1>¡Vamos a <span class="lobster">traducir!</span></h1>
  <h3>A que siempre quisiste saber cómo serías de Japonés!</h3>
  <p><a class="btn btn-danger btn-lg" href="#seccion-traductor" role="button">¡Empezar!</a></p>
</div>
</div>


<section id="seccion-traductor">


      <form class="form-horizontal" role="form" method="post" action="traductor.php">
       <div class="form-group">
    <label for="name" class="col-sm-2 control-label lobster2">Tu Nombre aquí: </label>
    <div class="col-sm-8">
      <input type="text" class="form-control2" id="name" name="name" placeholder="" value="">
    </div>
  </div>
      <div id="text">
  <div id="enteredText">Click aquí, y empieza a escribir!</div>
</div>
<div class="container">
  <div id="keyboard">
    <div id="firstrow" class="keyboard-row">
      <kbd class="shifter" id="192">`</kbd>
      <kbd class="shifter" id="49">1</kbd>
      <kbd class="shifter" id="50">2</kbd>
      <kbd class="shifter" id="51">3</kbd>
      <kbd class="shifter" id="52">4</kbd>
      <kbd class="shifter" id="53">5</kbd>
      <kbd class="shifter" id="54">6</kbd>
      <kbd class="shifter" id="55">7</kbd>
      <kbd class="shifter" id="56">8</kbd>
      <kbd class="shifter" id="57">9</kbd>
      <kbd class="shifter" id="48">0</kbd>
      <kbd class="shifter" id="189">-</kbd>
      <kbd class="shifter" id="187">=</kbd>
      <kbd class="long operationKey" id="8">del</kbd>
    </div>
    <div id="secondrow" class="keyboard-row">
      <kbd class="long operationKey" id="9">tab</kbd>
      <kbd id="81">q</kbd>
      <kbd id="87">w</kbd>
      <kbd id="69">e</kbd>
      <kbd id="82">r</kbd>
      <kbd id="84">t</kbd>
      <kbd id="89">y</kbd>
      <kbd id="85">u</kbd>
      <kbd id="73">i</kbd>
      <kbd id="79">o</kbd>
      <kbd id="80">p</kbd>
      <kbd class="shifter" id="219">[</kbd>
      <kbd class="shifter" id="221">]</kbd>
      <kbd class="shifter" id="220">\</kbd>
    </div>
    <div id="thirdrow" class="keyboard-row">
      <kbd class="long operationKey" id="20">caps</kbd>
      <kbd id="65">a</kbd>
      <kbd id="83">s</kbd>
      <kbd id="68">d</kbd>
      <kbd id="70">f</kbd>
      <kbd id="71">g</kbd>
      <kbd id="72">h</kbd>
      <kbd id="74">j</kbd>
      <kbd id="75">k</kbd>
      <kbd id="76">l</kbd>
      <kbd class="shifter" id="186">;</kbd>
      <kbd class="shifter" id="222">'</kbd>
      <kbd class="long operationKey" id="13">return</kbd>
    </div>
    <div id="fourthrow" class="keyboard-row">
      <kbd class="longer operationKey" id="16">shift</kbd>
      <kbd id="90">z</kbd>
      <kbd id="88">x</kbd>
      <kbd id="67">c</kbd>
      <kbd id="86">v</kbd>
      <kbd id="66">b</kbd>
      <kbd id="78">n</kbd>
      <kbd id="77">m</kbd>
      <kbd class="shifter" id="188">,</kbd>
      <kbd class="shifter" id="190">.</kbd>
      <kbd class="shifter" id="191">/</kbd>
      <kbd class="longer operationKey" id="16">shift</kbd>
    </div>
    <div id="fifthrow" class="keyboard-row">
      <kbd class="operationKey" id="188">fn</kbd>
      <kbd class="operationKey" id="17">ctrl</kbd>
      <kbd class="operationKey" id="18">opt</kbd>
      <kbd class="long operationKey" id="91">⌘</kbd>
      <kbd class="spacebar operationKey" id="32">&nbsp;</kbd>
      <kbd class="long operationKey" id="91">⌘</kbd>
      <kbd class="operationKey" id="18">opt</kbd>
      <kbd class="operationKey" id="17">ctrl</kbd>
      <kbd class="operationKey" id="188">fn</kbd>
    </div>
  </div>
</div>


 
  <div class="form-group margen">
    <label for="email" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@domain.com" value="">
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <input id="traducir" name="traducir" type="traducir" value="Traducir" class="btn btn-danger">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-8 col-sm-offset-2">
    </div>
  </div>
</form>
</section>


<script type="text/javascript">
  
  /* 
 * There are probably better ways of doing a lot of this,
 * but I'm just starting to wade into the deep end of
 * of vanilla JavaScript, so ¯\_(ツ)_/¯
 *
 * Inspired by day 1 of Wes Bos's 30 Day JavaScript Challenge
 * https://javascript30.com/
 */
  
var x = 'x';
let theTextBox = document.getElementById('enteredText'); 
let allTheKeys = document.getElementById('keyboard'); 
let changeKeys = document.getElementsByClassName('shifter'); 
let capsLockKey = document.getElementById('20');
let shiftKey = document.getElementById('16');

//Store all the original values of the non-alphabetical keys
var originalShifterArray = []; 
for (i = 0; i<changeKeys.length; i++){
  originalShifterArray.push(changeKeys[i].innerHTML);
}

//Set up an array for the replacement values of the non-alphabetical keys that get subbed in when Shift is pressed
var shifterArray = ['~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|', ':', '"', '<', '>', '?'];




//Function that clears the text box
function clearText(){
  theTextBox.innerHTML = '<br>';
}




//Function that detects keypresses and does the appropriate things
function highlightAndType(e){
  var keyPressed = e.keyCode;
  var charPressed = e.key;
  const keys = document.getElementById(keyPressed);
  
  keys.classList.add('pressed');
  
  
  if(!charPressed){
    theTextBox.innerHTML = "Sorry, this pen doesn't work in your browser. :( <br> Try Chrome, Firefox or Opera.";
    return;
  }
  
  //If the user presses CapsLock or Shift, make the alphabetical keys uppercase
  if (charPressed == 'CapsLock' || charPressed == 'Shift') {
    allTheKeys.classList.add('uppercase');
  } 
  //If the user presses Shift, also replace all non-alphabetical keys with their shifted values
  if (charPressed == 'Shift') {
    for(i = 0; i<changeKeys.length; i++){
      changeKeys[i].innerHTML = shifterArray[i];
    }
  }
  
  //Make sure the key that was typed was a character
  if (e.key.length <= 1){
    console.log(theTextBox.innerHTML);
    if(theTextBox.innerHTML.endsWith('<br>')){
      var newText = theTextBox.innerHTML.slice(0, -4);
      theTextBox.innerHTML = newText;
    }
    theTextBox.innerHTML += e.key;
  //If a backspace was typed, delete the last character in the text box. If shift was also held, delete all text.
  } else if (e.key == 'Backspace'){
    if(shiftKey.classList.contains('pressed')){
      clearText();
    } else {
      var newText = theTextBox.innerHTML.slice(0, -1);
      theTextBox.innerHTML = newText;
    }
  //If the Enter key was typed, remove all text from the text box
  } else if (e.key == 'Enter'){
    theTextBox.innerHTML += '<br><br>';
  }
  //if Tab is pressed, don't tab out of the window. Add extra space to the text box instead
  if(keyPressed == 9){
    e.preventDefault();
    theTextBox.innerHTML += '&emsp;&emsp;';
  }
}




//Function that detects when the user lets off a key and does the appropriate things
function removeKeypress(e){
  var keyDepressed = e.keyCode; 
  console.log(keyDepressed);
  const keys = document.getElementById(keyDepressed);
  console.log(keys);
  
  keys.classList.remove('pressed');
  //If CapsLock or Shift was just let off, and if the other isn't still on, return keys to lowercase
  if(keyDepressed == 20 && !shiftKey.classList.contains('pressed') || keyDepressed == 16 && !capsLockKey.classList.contains('pressed')) {
    allTheKeys.classList.remove('uppercase');
  }
  //If Shift was just let off, replace all non-alphabetical keys with their original values rather than their shifted values
  if(keyDepressed == 16 ) {
    for(i = 0; i<changeKeys.length; i++){
      changeKeys[i].innerHTML = originalShifterArray[i];
    }
  }
}

//Whenever the user presses a key down, run the proper function
window.addEventListener('keydown', highlightAndType );

//Whenever the user lets a key up, run the proper function
window.addEventListener('keyup', removeKeypress );

//Whenever the window is clicked, run the function to clear out the text box
window.addEventListener('click', clearText );
</script>
  </body>
</html>