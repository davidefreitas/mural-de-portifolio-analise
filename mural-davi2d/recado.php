<?php
class Recado {
    public $id;
    public $nome;
    public $email;
    public $mensagem;

    public function __construct($nome, $email, $mensagem){
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }

    public function salvar($conexao){
        $sql = "INSERT INTO recados (nome,email,mensagem) VALUES (
                '".mysqli_real_escape_string($conexao,$this->nome)."',
                '".mysqli_real_escape_string($conexao,$this->email)."',
                '".mysqli_real_escape_string($conexao,$this->mensagem)."')";
        mysqli_query($conexao,$sql);
    }
}
?>
