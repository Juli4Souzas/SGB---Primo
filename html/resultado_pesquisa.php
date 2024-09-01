<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado_pesquisa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h2>Resultado da Pesquisa</h2>
    <?php
    //Verifica de que maneira os arquivos irão ser acessados, nesses caso
    //modo post
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //Criando variaveis das informações do formulário
        $tipo_pesquisa = $_POST["tipo_pesquisa"];
        $termo_pesquisa = $_POST["termo_pesquisa"];
    

    $servername="localhost";//onde se localiza o banco de dados
    $username="root";//nome do usuario do banco de dados
    $password="Primo@123";//nome de usuário do banco de dados
    $dbname="bd_login";//nome do banco de dados

    try {
        /*Nesse comando, você está criando uma nova instância da classe PDO, que é uma classe
         built-in do PHP que permite a comunicação com bancos de dados usando várias interfaces,
         incluindo MySQL, SQLite, PostgreSQL, entre outros. */
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        //TRATAMENTO DE ERRO  Isso é uma boa prática, pois ajuda a lidar com erros de maneira
        //mais robusta e facilita a identificação de problemas no seu código.
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($tipo_pesquisa == "id") {

            /* Este comando prepara uma consulta SQL para selecionar todos os campos da tabela tb_
            cliente onde o id_cliente seja igual ao valor fornecido pelo :termo_pesquisa */
            $stmt = $conn->prepare("SELECT * FROM cadastro_cliente WHERE id_cliente = :termo_pesquisa");

            /**Este comando associa o valor de :termo_pesquisa (o valor do campo de pesquisa) ao parâmetro
             * :termo_pesquisa na consulta preparada. Isso ajuda a proteger contra ataques de injeção SQL e
             * garante que o valor seja tratado corretamente. */
            $stmt->bindParam(':termo_pesquisa', $termo_pesquisa);

        } elseif ($tipo_pesquisa == "nome") {

           // Este comando associa o valor de :termo_pesquisa (o valor do campo de pesquisa)
           //ao parâmetro :termo_pesquisa na consulta preparada. Isso ajuda a proteger contra
           //ataques de injeção SQL e garante que o valor seja tratado corretamente.
            $stmt = $conn->prepare("SELECT * FROM cadastro_cliente WHERE nm_cliente LIKE :termo_pesquisa");

            //ACRESCENTANDO UM CORINGA
            $termo_pesquisa = "%" . $termo_pesquisa . "%";

            /**bindParam(':termo_pesquisa', $termo_pesquisa): Este método é usado para vincular
             *  o valor da variável $termo_pesquisa ao marcador de parâmetro :termo_pesquisa na
             * consulta preparada. Isso significa que o valor contido em $termo_pesquisa será usado
             * na consulta SQL no lugar do marcador :termo_pesquisa quando a consulta for executada. */
            $stmt->bindParam(':termo_pesquisa', $termo_pesquisa);
        }
        //é usado para executar a consulta SQL preparada que foi definida
        //anteriormente usando a classe PDO.
        $stmt->execute();


        //é usado para obter os resultados da consulta SQL executada
        //por meio do objeto Statement $stmt e armazená-los em uma variável $result.
        //fetchAll(PDO::FETCH_ASSOC): Este é um método da classe Statement que recupera
        //todos os resultados da consulta executada e os retorna como um array associativo.
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //$stmt->rowCount() retorna o número de linhas afetadas
        // Neste caso, verifica se o número de linhas retornadas
        //é maior que zero, ou seja, se há resultados da consulta.
        if ($stmt->rowCount() > 0) {
            echo '<table>';
            echo '<tr>';

            //Ele é usado para construir os cabeçalhos da tabela com
            //base nas colunas do banco de dados.
            //$value representa o valor da coluna
            foreach ($result[0] as $key => $value) {
                echo '<th>' . $key . '</th>';
            }
            echo '</tr>';

            //Inicia um loop foreach que percorre cada registro (linha)
            //no array $result. Cada registro é armazenado na variável $row
            foreach ($result as $row) {

                //Abre uma nova linha na tabela HTML para exibir os dados de cada registro.
                echo '<tr>';

                //Dentro deste loop foreach, outro loop está sendo usado para percorrer
                //os valores de cada coluna no registro atual (linha) armazenado na variável $row.
                // Para cada valor, uma célula de dados <td> é gerada na tabela HTML com o conteúdo
                //desse valor.
                foreach ($row as $value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';   
            }
            echo '</table>';
        } else {
            echo "Nenhum resultado encontrado.";
        }
    }catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

    $conn = null;
}
?>  
    
</body>
</html>