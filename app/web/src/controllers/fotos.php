  
<?php
//$rm = $_POST['rm'];
$rm = 85;
$rm = md5($USER_IDs);
$info = pathinfo($_FILES['foto']['USER_NOME']);
$ext = $info['extension']; // get the extension of the file
$novoNome = "foto_".$rm.'.'.$ext; 
$target = '../../fotos/'.$novoNome;
move_uploaded_file( $_FILES['foto']['tmp_name'], $target);
header('Location: /alohaphp/home.php');
?>