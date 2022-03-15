<?php 
    namespace App\Db;

    use Execption;  //Classe de Tratamento de exceções
    use \PDO;   //Classe de comunicação com o banco de dados
    use PDOException;   //Classe de tratamento de exceções do banco de dados
    use PDOStatement;   //Classe de comunicação com métodos do banco de dados

    class Database //nome do arquivo, precisa ser igual 
    {
         /** 
         * Host de conexão com o banco de dados
         *@var string
        **/
        const HOST = 'localhost';

        /**
         * *Usuário do banco de dados
         *  @var string
         */
        const USER = 'root';
        
        /**
         * *Senha de acesso do banco de dados
         *  @var string
         */
        const PASS = '';

        /** 
        *Nome do banco de dadods
        * @var string
         */
        const NAME = 'firt_crude';

        /**
         * Nome da tabela a ser manipulada
         *  @var stribng
         */
        private $table;

        /**
         * Instancia do PDO para conexão com o banco de dados
         *  @var PDO
         */
        private $connection;

        /**
         * Define a tabela e instancia a conexão
         *  @param string $table
         */
        public function __contruct($table = null){
            $this->table = $table;
            $this->setConnection();
        }
        
        private function setConnection(){
            try{
                $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, .self::USER,.self::PASS);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die('ERROR: ' . $e->getMessage());
            }
        }
    }
?>