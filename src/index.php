<?php

echo phpinfo();
exit;
# testar a conexão
$link = mysqli_connect("db", "root", "root", "teste");

if (!$link) {
    echo "Erro: Erro ao conectar com o MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Conectado com sucesso." . PHP_EOL;
echo "<br>Informações: " . mysqli_get_host_info($link) . PHP_EOL;

/*
# crie uma tabela 'teste' para certificar-se da conexão e busca de dados
$a=mysqli_query($link,"select * from teste");
while ($b = mysqli_fetch_array($a)) {
    
    echo $b['nome']."<br>";
   
}
*/

mysqli_close($link);
?>