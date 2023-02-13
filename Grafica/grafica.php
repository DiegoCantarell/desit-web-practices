<?php
   include "libchart/classes/libchart.php";
   $chart = new HorizontalBarChart(600, 270);
   $link=mysqli_connect("localhost","root",""); 
   mysqli_select_db($link,"videoteca");
   $result=mysqli_query($link, "select titulo,ranking from pelicula");    
   $dataSet = new XYDataSet();
   while($row = mysqli_fetch_array($result)) 
  { 
   $ti=$row["titulo"];
   $ra= $row["ranking"];
   $dataSet->addPoint(new Point("$ti", $ra));
   }
   $chart->setDataSet($dataSet);
   $chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 240));
   $chart->setTitle("Ranking de peliculas");
   $chart->render("generated/demo2.png");
?>
<html> <head> <title> Videoteca </title></head>
<body>
   <img src="generated/demo2.png" />
</body>
</html>
