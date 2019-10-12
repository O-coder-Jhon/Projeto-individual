<?php
session_start();
if(isset($_SESSION['user-logado'])){
    header('Location:cadastrar.php');
    unset($_SESSION['user-logado']);
}

?>
<?php
$host= "localhost";
$user="root";
$senha="";
$dbname="clinica";

$con = mysqli_connect($host, $user, $senha, $dbname) or die(mysqli_error());
mysqli_select_db($con, $dbname)or die(mysqli_error());
?>

<?php
$login = $_POST["usuario"];
$pass = $_POST["senha"];
$sql = "SELECT * FROM adm WHERE usuario = '$login' AND pass = '$pass'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
if($row > 0){
    session_start();
    $_SESSION['user-logado'] = true;
    header("Location:cadastrar.php ");
    
}else{
    echo "LOGIN OU SENHA INCORRETO";
    //header("Location:login.php");
    
}