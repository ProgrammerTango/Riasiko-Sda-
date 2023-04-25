<?php

// Connect to the Excel file
$excel_file = 'data.xlsx';
$worksheet_name = 'Sheet1';

try {
	$pdo = new PDO("odbc:Driver={Microsoft Excel Driver (*.xls, *.xlsx, *.xlsm, *.xlsb)};DBQ=$excel_file;ReadOnly=False;");
} catch (PDOException $e) {
	die("Error connecting to Excel file: " . $e->getMessage());
}

// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert the form data into the Excel file
$stmt = $pdo->prepare("INSERT INTO [$Sheet1$] (Name, Email, Phone) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $phone]);

// Close the database connection
$pdo = null;

// Redirect the user back to the form page
header("Location: index.html");
exit();

?>
