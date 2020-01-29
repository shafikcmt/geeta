<?php

//report.php


	include('database_connection.php');
	require_once 'pdf.php';
	session_start();
	$output = '';
	
			$pdf = new Pdf();
		
	        get_attendance_percentage($connect, $row["student_id"]);
			
			$file_name = 'Attendance Report.pdf';
			$pdf->loadHtml($output);
			$pdf->render();
			$pdf->stream($file_name, array("Attachment" => false));
			exit(0);
	
?>
