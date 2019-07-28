
<?php
//error_reporting(0);
include 'header.html';
set_time_limit(20);


   // getting temporary source of excel file
  include("PHPExcel-1.8/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load('uploads/text.xlsx'); // create object of PHPExcel library by using load() method and in load method define path of selected file
   echo "<h3 class='mt-3'><center>Econtent</center></h3>";

  echo '<div class="container"> <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Topic</th>
      <th scope="col">Link</th>
      <th scope="col">Video</th>
    </tr>
  </thead>
  </div>';
 
  //$output .= "<label class='text-success'>Data Inserted</label><br />";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   
   for($row=2; $row<=$highestRow; $row++)
   {
    
    $topic = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
    $link = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
    $video = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
    
    // echo "<table class='table responsive'>";

    //  echo "<tr>";
    //     echo "<td>$topic</td>";
    //     echo "<td><a href='$link'>$link</a></td>";
    //     echo "<td><a href='$video'>$video</a></td>";
    //     echo "</tr>";
    //     echo "</table>";
       
  echo"<div class='container'style='padding-bottom:49px' > <table class='table'>
  <tbody>
    <tr class='row'>
      <td class='col-sm-4'>$topic</td>
      <td class='col-sm-4' style='overflow-X:hidden;'>$link</td>
      <td class='col-sm-4' style='overflow-X:hidden;'><a href='$video'>$video</a></td>
    </tr>
  </tbody>
</table>
</div>";


    //echo $query
    //;
   
   }
  } 
 
 


//error_reporting(0);
include 'footer.html';
?>