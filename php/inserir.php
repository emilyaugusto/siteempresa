/<?php
  $servername = "localhost";
  $username = "root";
  $password = "vertrigo";
  $dbname = "questionario";

  // Cria a conexão
  //$conn = new mysqli($servername, $username, $password, $dbname);


  // Recebe os valores do formulário HTML
  //$pergunta1 = $_POST['p1'];
  //$pergunta2 = $_POST['p2'];
  //$pergunta3 = $_POST['p3'];
  //$pergunta4 = $_POST['p4'];

  // Insere os valores no banco de dados
  //$sql = "INSERT INTO sobre (p1,p2,p3,p4,p5) VALUES = ('', $pergunta1','$pergunta2','$pergunta3','$pergunta4')";
 

//mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
//mysqli_close($conn);
//echo "Aviso cadastrado com sucesso!";


 //if ($conn->query($sql) === TRUE) {
  //echo "Dados inseridos com sucesso!";
 //} else {
   //echo "Erro ao inserir dados: " . $conn->error;
 //}






 // Verifica a conexão
 //if ($conn->connect_error) {
  //die("Conexão falhou: " . $conn->connect_error);
 //}

 //  Fecha a conexão
 //$conn->close();
//

/* altere aqui as perguntas do forms*/
$pergunta1 = $_POST['p1'];
$pergunta2 = $_POST['p2'];
$pergunta3 = $_POST['p3'];
$pergunta4 = $_POST['p4'];


$strcon = mysqli_connect('localhost','root','vertrigo','questionario') or
die('Erro ao conectar ao banco de dados');

/* aqui são as variaveis das novas perguntas */
$sql = "INSERT INTO sobre VALUES ";
$sql .= "('', '$pergunta1', '$pergunta2', '$pergunta3', '$pergunta4')";
 
/* aqui conexão com o banco*/
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
?>