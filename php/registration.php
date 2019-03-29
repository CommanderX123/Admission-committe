<?php 
	error_reporting(E_ALL);
	session_start();
	include "./connection.php";
	$link = mysqli_connect($host,$user,$password,$dbName) or die("Помилка ".mysqli_connect_error($link));

	$login='';
	$password='';
	$email='';
	
	if(isset($_POST['commit'])){
		if($_POST['login'] != '' && $_POST['password'] != ''
								  && $_POST['email'] != ''){
			$login = $_POST['login'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			/*перевірка на правильність полів*/
			$login = trim($login);
			$login = htmlentities($login);

			$password = trim($password);
			$password = htmlentities($password);

			$email = trim($email);
			$email = htmlentities($email);

			 $result = mysqli_query($link,"SELECT id FROM users WHERE login='$login'");
			 $myrow = mysqli_fetch_array($result);
			 if (!empty($myrow['id'])) {
    			echo("<script LANGUAGE='JavaScript'>
    			window.alert('Такий логін вже існує');
    			window.location.href='reg.php';
    			</script>");
    			exit(0);
    		}else{
			$query = "INSERT INTO users (login,email,password) VALUES ('$login','$email','$password')";
			$result = mysqli_query($link,$query) or die("Помилка ".mysqli_error($link));
			if($result){
				$_SESSION['login'] = $login;
				header("Location: ../index.php");
			}
		}
		}else{
			
			echo("<script LANGUAGE='JavaScript'>
    			window.alert('Не всі поля заповнені');
    			window.location.href='reg.php';
    			</script>");

		}
	}
?>