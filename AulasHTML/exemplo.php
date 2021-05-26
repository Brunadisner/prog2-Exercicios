<?php
// PDO: PHP Data Objects

////////////////////////////////////////////////////////////// conexao
try{
    $conexao = new PDO("mysql:host=localhost; dbname=pizza", "admpizza", "12345");
}
catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}

////////////////////////////////////////////////////////////// insert
// insert into sabor values (NULL, 'Chocolate', 'Chocolate, mussarela', 'choco.jpg');

$saborNome = "Chocolate branco3"; // viria do $_GET ou do $_POST
$saborIngredientes = "Chocolate branco, mussarela3"; // viria do $_GET ou do $_POST
$saborFoto = "chocob3.jpg"; // viria do $_GET ou do $_POST

// método query
//$conexao->query("insert into sabor values (NULL, '$saborNome', '$saborIngredientes', '$saborFoto')");

// prepared statements
$query = $conexao->prepare("insert into sabor values (NULL, :n, :i, :f)");
$query->bindParam(":n", $saborNome);
$query->bindParam(":i", $saborIngredientes);
$query->bindParam(":f", $saborFoto);
$query->execute();
echo "Linhas afetadas: ".$query->rowCount();

///////////////////////////////////////////////////////////////// update

// update sabor set nome = 'Prestigio', ingredientes = 'Chocolate, coco', nomeImagem = 'presti.jpg' 
// where codigo = 13
// $saborNome = "Prestigio"; // viria do $_GET ou do $_POST
// $saborIngredientes = "Chocolate, coco ralado"; // viria do $_GET ou do $_POST
// $saborFoto = "presti.jpg"; // viria do $_GET ou do $_POST
// $cod = 13;
// $query = $conexao->prepare("update sabor set nome = :n, ingredientes = :i, nomeImagem = :f 
// where codigo = :cod");
// $query->bindParam(":n", $saborNome);
// $query->bindParam(":i", $saborIngredientes);
// $query->bindParam(":f", $saborFoto);
// $query->bindParam(":cod", $cod);
// $query->execute();
// echo "Linhas afetadas: ".$query->rowCount();


////////////////////////////////////////////////////////////////// delete

// delete from sabor where codigo = 14

// $cod = 11;
// $query = $conexao->prepare("delete from sabor where codigo = :cod");
// $query->bindParam(":cod", $cod);
// $query->execute();
// echo "Linhas afetadas: ".$query->rowCount();


///////////////////////////////////////////////////////////////// select

// um registro específico
// select * from sabor where codigo = 10

// $cod = 10;
// $query = $conexao->prepare("select * from sabor where codigo = :cod");
// $query->bindParam(":cod", $cod);
// $query->execute();
// echo "Linhas afetadas: ".$query->rowCount();
// $registro = $query->fetch(PDO::FETCH_ASSOC);
// echo "<br>".$registro['nome']." - ".$registro['ingredientes'];
// echo "<pre>";
// print_r($registro);
// echo "</pre>";


// vários registros (talvez todos)
// select * from sabor
$query = $conexao->prepare("select * from sabor");
$query->execute();
echo "Linhas afetadas: ".$query->rowCount()."<br><br>";
$registros = $query->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($registro);
// echo "</pre>";
foreach($registros as $sabor)
    echo $sabor['codigo'].": ".$sabor['nome']. " - ". $sabor['ingredientes']."<br>";




?>
//exemplo com maysqli
<?php
    $conexao = mysqli_connect("localhost","admpizza","12345","pizza");
    $sql = "select * from sabor";
    $resultado = mysqli_query($conexao,$sql);
    mysqli_close($conexao);
    while($array = mysqli_fetch_array($resultado)){

?>