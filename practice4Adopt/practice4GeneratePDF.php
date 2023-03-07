<?php
echo "Hello PDF";
// Sends output inline to browser
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('Hello World');

$mpdf->Output();

?>