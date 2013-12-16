<?php
include 'process_form.php';
if (empty($_POST)):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/basic.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.css" media="screen" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
 
<div class="TTWForm-container">
      
      
     <form action="index.php" class="TTWForm" method="post" validate>
           
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Empresa
               </label>
               <input type="text" name="empresa" id="field1" required>
          </div>
           
           
          <div id="field2-container" class="field f_100">
               <label for="field2">
                    Nome
               </label>
               <input type="text" name="nome" id="field2" required>
          </div>
           
           
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    Email
               </label>
               <input type="email" name="email" id="field3" required>
          </div>
           
           
          <div id="field4-container" class="field f_100">
               <label for="field4">
                    Celular
               </label>
               <input type="text" name="celular" id="field4">
          </div>
           
           
          <div id="field5-container" class="field f_100">
               <label for="field5">
                    Mensagem
               </label>
               <textarea rows="5" cols="20" name="mensagem" id="field5" required></textarea>
          </div>
           
           
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Enviar">
          </div>
     </form>
</div>
 
</body>
</html>
<?php
    else:
        echo "The post have been sent succesfully!";
    endif;
?>
