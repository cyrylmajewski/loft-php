<?php
$mysql_host = 'localhost';
$port = '3306';
$username = 'root';
$password = 'root';
$database = 'burgers'; //'burgers'


 try {
	 $pdo = new PDO('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
	 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 $stmt = $pdo->query('SELECT id, name, email FROM forms');

	 foreach($stmt as $row)
	 {
		 print_r($row);
	 }
 } catch(PDOException $e) {
 		echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
 }
//
//   if (!empty($_POST)) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $sql = "INSERT INTO `forms` (`name`, `email`, `sales`) VALUES( '$name', '$email', 1 )";
//
//     $sales = $pdo->exec($sql);
//
//     if(isset($_POST)) {
//
//         if(true)
//         {
//             $_SESSION['flash'] = 'Запись добавлена';
//             header("Location: ".$_SERVER['REQUEST_URI']);
//         }
//     }
//
//     if($sales > 0)
//     {
//       echo 'Pomyślnie dodano: '.$sales.' rekordów';
//     }
//     else
//     {
//       echo 'Wystąpił błąd podczas dodawania rekordów!';
//     }
//
//   }
//   echo "</pre>";
?>
