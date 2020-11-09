<?php 
namespace clases_pdo;
require("../cadena/config.php");

class funcionLog{

    private $usuario;
    private $contra;
    private $pdo;

    public function __construct(){
    $this->pdo = new config();
    }

    public function log($usuario,$contra){
        $pdo = $this->pdo;
        $sql = "SELECT *FROM usuarios WHERE usuario = '$usuario' AND clave = '$contra'";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute();
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

}
 ?>