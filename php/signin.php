<?php
	error_reporting(E_ALL);
	session_start();

	include "./connection.php";
	$link = mysqli_connect($host,$user,$password,$dbName) or die("Помилка ".mysqli_connect_error($link));
	$login='';
	$password='';

	if(isset($_POST['enter'])){
		if(!empty($_POST['login'])  && !empty($_POST['password'])){
			$login = $_POST['login'];
			$password = $_POST['password'];

			/*перевірка на правильність полів*/
			$login = trim($login);
			$login = htmlentities($login);

			$password = trim($password);
			$password = htmlentities($password);

			 $result1 = mysqli_query($link,"SELECT * FROM users WHERE login='$login'");
			 $result2 = mysqli_query($link,"SELECT * FROM users WHERE email='$login'");

			 if (mysqli_num_rows($result1) > 0 ){
    			$myrow = mysqli_fetch_array($result1);
    			if($myrow['password'] == $password){
    				$_SESSION['login'] = $myrow['login'];

				header("Location: ../index.php");
    			}
    		}elseif(mysqli_num_rows($result2) > 0){
				$myrow = mysqli_fetch_array($result2);
    			if($myrow['password'] == $password){
    				$_SESSION['login'] = $myrow['login'];

				header("Location: ../index.php");
    			}
    		}
    		else{
				echo("<script LANGUAGE='JavaScript'>
    			window.alert('Логін або пароль не правильний');
    			window.location.href='auth.php';
    			</script>");
			}
		}else{
			
			echo("<script LANGUAGE='JavaScript'>
    			window.alert('Не всі поля заповнені');
    			window.location.href='auth.php';
    			</script>");

		}
		}
	



 ?>