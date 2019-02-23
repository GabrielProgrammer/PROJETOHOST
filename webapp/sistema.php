<?php


//Constantes da conexão
define("DB_HOST","localhost");
define("DB_NAME","tech");
define("DB_USER","root");
define("DB_PASS","");

//Criamos uma classe pra o sistema
class sistema
{
  //Definimos o método private para o $db_connection
  private $db_connection = null;

  //Criaremos uma conexão com o banco de dados, usando PDO
  private function databaseConnection()
        {
        // Conexao berta
        if ($this->db_connection != null)
            {
            return true;
            }
        else
            {
            // Criando a conexao com banco de dados, usando constantes
            try
                {
                $this->db_connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';', DB_USER, DB_PASS);
                return true;
                // Tratamento de erro, caso falhe a conexao
                }
            catch (PDOException $e)
                {
                $this->errors[] = MESSAGE_DATABASE_ERROR;
                return false;
                }
            }
        }


//Criar função que acessa o sua tabela
public function buscarPilotos($nome_piloto)
{
  //Chamamos a conexão com o banco
  $this->databaseConnection();

  //Selecionaremos a tabela com o nome do piloto passado pela função, faremos uso de Prepared statements para uma melhor segurança
  $pilotos = $this->db_connection->prepare('SELECT * FROM servico WHERE nome_piloto = :nomedopiloto');

  //Usaremos o bindValue para passar o nome do piloto à conexão
  $pilotos->bindValue(':nomedopiloto', $nome_piloto, PDO::PARAM_STR);

  //Executar a ação para nos retornar a query
  $pilotos->execute();

  //Vamos usar o fetchAll para nos retornar uma array com os dados do piloto
  $piloto_encontrados = $pilotos->fetchAll();

  //Vamos usar a Foreach para nos listar este piloto num formato HTML, usando divs html (pode ser tabelas ou o que quiser, vou só ilustrar) 

  foreach($piloto_encontrados as $pilot)
  {
    echo '<div id="nomedopiloto">'.$pilot["nome"].'</div>
  <div id="idadedopiloto">'.$pilot["idade"].'</div>
  <div id="alturadopiloto">'.$pilot["altura"].'</div>';
  }
}


}

                ?>