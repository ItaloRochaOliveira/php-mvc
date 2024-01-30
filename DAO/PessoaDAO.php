<?php 
class PessoaDAO{
    private $conexao;

    public function PessoaDAO(){
        $this->conexao = new mysqli("localhost", "root", "", "data");
    }

    public function insert(PessoaModel $model){
        $sql = "INSERT INTO pessoa(nome, cpf, data_nascimento) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(1, $model->data_nascimento);

        $stmt->execute();
    }
}
?>