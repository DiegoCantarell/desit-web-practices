<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
	
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	title:{
		text:"Cantidad de votos por partido"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Votos"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: [
            <?php
            include "class/sql.php";
            include "class/personas.php";
            include "class/partidos.php";
            $partidos = new partidos();
            $PRI = $partidos->getNumeroVotos(1);
            $PAN = $partidos->getNumeroVotos(2);
            $PRD = $partidos->getNumeroVotos(3);
            $NULO = $partidos->getNumeroVotos(4);
            

			echo "{ y: $PRI, label: 'PRI' },";
			echo "{ y: $PAN, label: 'PAN' },";
			echo "{ y: $PRD, label: 'PRD' },";
			echo "{ y: $NULO, label: 'NULO' },";
            ?>
			
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>