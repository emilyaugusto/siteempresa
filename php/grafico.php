<?php
  $servername = "localhost";
  $username = "root";
  $password = "vertrigo";
  $dbname = "questionario";

  // Cria a conexão
  $conn = new mysqli($servername, $username, $password, $dbname);
 

   //Recebe os valores do formulário HTML
  //$pergunta1 = $_POST['p1'];
  //$pergunta2 = $_POST['p2'];
  //$pergunta3 = $_POST['p3'];
  //$pergunta4 = $_POST['p4']; 

  // Insere os valores no banco de dados
  //$sql = "INSERT INTO sobre VALUES ";
//$sql .= "('', $pergunta1',
			 //'$pergunta2',
			 //'$pergunta3',
			 //'$pergunta4')";
 

//mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
//mysqli_close($conn);
//echo "Aviso cadastrado com sucesso!";


 //if ($conn->query($sql) === TRUE) {
  //echo "Dados inseridos com sucesso!";
 //
 //} else {
  // echo "Erro ao inserir dados: " . $conn->error;
 //}

//  Fecha a conexão
 //$conn->close();//




 // Verifica a conexão
 //if ($conn->connect_error) {
  //die("Conexão falhou: " . $conn->connect_error);
// }


 SetFileFormat("png");

#Indicamos o título do gráfico e o título dos dados no eixo X e Y do mesmo
$grafico->SetTitle("Gráfico de exemplo");
$grafico->SetXTitle("Eixo X");
$grafico->SetYTitle("Eixo Y");


#Definimos os dados do gráfico
$dados = array(
		array('$pergunta1', 10),
		array('$pergunta2', 5),
		array('$pergunta3', 4),
		array('$pergunta4', 8),
		
);

$grafico->SetDataValues($dados);

#Exibimos o gráfico
$grafico->DrawGraph();
?>


