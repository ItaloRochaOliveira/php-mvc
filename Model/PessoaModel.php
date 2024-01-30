<?php 
class PessoaModel{
    public $id, $nome, $cpf, $data_nascimento;

    public function save(){
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $dao->insert($this);
    }
}
?>