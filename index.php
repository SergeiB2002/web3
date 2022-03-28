<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
	print_r('Не POST методы не принимаются');
}
$errors = FALSE;
if(empty($_POST['field-name']) || empty($_POST['field-email']) || empty($_POST['year']) || empty($_POST['field-bio']) || empty($_POST['checkbox']) || $_POST['checkbox'] == false || !isset($_POST['field-super']) ){
	print_r('Заполните пустые поля!');
	exit();
}
$name = $_POST['field-name'];
$email = $_POST['field-email'];
$birth_year = $_POST['year'];
$pol = $_POST['radio-pol'];
$limbs = intval($_POST['radio-limb']);
$superpowers = $_POST['field-super'];
$bio= $_POST['field-bio'];
$user = 'u41028';
$pass = '2356452';
$db = new PDO('mysql:host=localhost;dbname=u41028', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
