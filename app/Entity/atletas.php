<?php


namespace App\Entity;
use App\Db\Database;
use \PDO;
class Atletas{
    public $id;
    public $nome;
    public $modalidade;
    public $medalha;

    public function Cadastrar()
    {
        $obDatabase = new Database('atletas');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'modalidade' => $this->modalidade,
            'medalha' => $this->medalha,


        ]);
        return true;
    }

    public static function getAtletas ($where = null, $order = null, $limit = null){
        return (new Database('atletas'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
                                       
    }

    public static function getatleta($id){
        return (new Database('atletas'))->select('id = '.$id)->fetchObject(self::class);
      }

    public function atualizar(){
        return (new Database('atletas'))->update('id = '.$this->id,[
            'nome' => $this->nome,
            'modalidade' => $this->modalidade,
            'medalha' => $this->medalha,
                                                                  ]);
      }
      public function deletar(){
        return (new Database('atletas'))->delete('id = '.$this->id);
      }
}