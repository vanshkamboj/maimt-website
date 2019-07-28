<?php
include("header.html");
?>
<style type="text/css">
  .card{
    /* opacity: 0.4;  */
    background-color:rgba(153, 142, 142, 0.801);
    
      
      -webkit-transition: width 2s, height 4s; /* For Safari 3.1 to 6.0 */
      transition: width 2s, height 4s;
}
/*.card:hover {
      width: 300px;
      height: 300px;
}*/

.section{
  background-image: url("glasspen.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 70vh;
}



a {
    color: #067e78;
    
  }
  a:hover {
    color: rgb(31, 13, 3);
    text-decoration: none;
  }
  
  
</style>
<div class="section">
<div class="container" >	
<div class="row" id="row1">
	<div class="col-lg-2"></div>
<div class="col-lg-4 mt-5">
	<div class="card"id="mca">

  <div class="card-body">
<h1><center><a href="semesters.php">MCA</a></center></h1>
  </div>
</div>
</div>
<div class="col-lg-4 mt-5">
	<div class="card" id="mba">

  <div class="card-body">
    <h1><center><a href="semesters.php">MBA</a></center></h1>
  </div>
</div>
</div>
<div class="col-lg-2"></div>
</div>

<div class="row" id="row2">
	<div class="col-lg-2"></div>
<div class="col-lg-4 my-5 ">
	<div class="card"id="bca">

  <div class="card-body">
    <h1><center><a href="semesters.php">BCA</a></center></h1>
  </div>
</div>
</div>
<div class="col-lg-4 my-5">
	<div class="card" id="bba">

  <div class="card-body">
    <h1><center><a href="semesters.php">BBA</a></center></h1>
  </div>
</div>
</div> 
<div class="col-lg-2"></div>
</div>
</div>
</div>
<?php
include("footer.html");
?>