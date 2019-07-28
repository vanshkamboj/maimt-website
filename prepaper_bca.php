<?php
include("header.html");
?>
<div class="container my-4"style='padding-bottom:125px'>
<div class="list-group">
  <button type="button" class="list-group-item  text-center list-group-item-action active">
    Semester 1
  </button>
  $dirs = glob("*.*");
//print_r( $dirs);
//echo  $dirs[0] . ", " . $dirs[1] . " and " . $dirs[2] . ".";
foreach ($dirs as $value) {
   
echo ' <button type="button" class="list-group-item list-group-item-action"><b>BCA-111 </b>$value</button>
 ;


}

?>
 
</div>
</div>

<?php
include("footer.html");
?>