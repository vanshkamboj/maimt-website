<?php
set_time_limit(0);

include 'header.html';


// getting temporary source of excel file
include("PHPExcel-1.8/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code

$objPHPExcel = PHPExcel_IOFactory::load('uploads/upload.xlsx'); // create object of PHPExcel library by using load() method and in load method define path of selected file

echo "<h1 class='mt-3'><center>Econtent</center></h1>";

echo '<table class="table table-bordered table-condensed table-responsive table-striped">
  <thead>
    <tr width="100%">
      <th scope="col" width="25%">Topic</th>
      <th scope="col" width="25%">Book Reference</th>
      <th scope="col" width="25%">Web Reference</th>
      <th scope="col" width="25%">Video Reference</th>
    </tr>
  </thead>
  <tbody>';

foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
  $highestRow = $worksheet->getHighestRow();

  for ($row = 2; $row <= $highestRow; $row++) {

    $topic = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
    $book = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
    $link = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
    $video = $worksheet->getCellByColumnAndRow(3, $row)->getValue();

    if ($topic) {
      echo "<tr width='100%'>
      <td width='25%'>" . htmlspecialchars($topic) . "</td>";

      if ($book) {
        echo "<td width='25%'><a href='$book'>Open PDF</a></td>";
      } else {
        echo "<td width='25%'></td>";
      }

      if ($link) {
        echo "<td width='25%'><a href='$link'>Read</a></td>";
      } else {
        echo "<td width='25%'></td>";
      }

      if ($video) {
        echo "<td width='25%'><a href='$video'>Watch</a></td>";
      } else {
        echo "<td width='25%'></td>";
      }

      echo "</tr>";
    }
  }
}

echo "</tbody>
</table>";

include 'footer.html';
