<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
	print_r('Не POST методы не принимаются');
}
$errors = FALSE;
if(empty($_POST['field-name']) || !isset($_POST['field-name-4']) || empty($_POST['field-email']) || empty($_POST['year']) || empty($_POST['field-bio']) || empty($_POST['checkbox']) || $_POST['checkbox'] == false){
	print_r('Заполните пустые поля!');
	exit();
}
