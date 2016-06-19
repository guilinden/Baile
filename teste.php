<?php
function dropdown($titulo){
  Print '<div class="form-group">';
  Print '<label for="sel1">' . $titulo .' :</label>';
  Print '<select class="form-control" id="sel1" name="' . strtolower($titulo) .'">';
  for ($i=1; $i<100 ; $i++) {
    $id = $_GET['id'];
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("baile") or die("Cannot connect to database"); //connect to database
    $query = mysql_query("Select * from elenco Where id='$id'"); // SQL Query
    while($row = mysql_fetch_array($query)){
      $first = strtoupper(substr($titulo, 0, 1));
      $num = 0 - (strlen($titulo) - 1);
      $second = strtolower(substr($titulo,$num));
      $titulo  = $first . $second;
      echo $row[$titulo];
      echo $valor;
      if($i == $valor){
        Print '<option>' . $i . '</option>';
      }
      else
      Print '<option selected>' . $i . '</option>';{

      }

    }
  }
  Print '</select>';
  Print '</div>';
}

 dropdown("Folego");
 dropdown("Velocidade");
 dropdown("Forca");
 dropdown("Drible");
 ?>
