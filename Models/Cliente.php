
<?php

class Cliente
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {
        
        $resultado = $this->mysql->query('SELECT id,nome,sobrenome,email,idade from clientes;');
        $Cadastro = $resultado->fetch_all(MYSQLI_ASSOC);

        return $Cadastro;
    }
  
    public function adicionar(string $nome, string $sobrenome, string $email, int $idade) : void
    {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL); 
                $insereCadastro = $this->mysql->prepare("INSERT INTO clientes(nome,sobrenome,email,idade) VALUES(?,?,?,?);");
                $insereCadastro ->bind_param('ssss',$nome,$sobrenome,$email,$idade);
                $insereCadastro ->execute();
    }

    
    public function remover(string $id): void
    {
        $removerCliente = $this->mysql->prepare('DELETE FROM clientes WHERE id = ?');
        $removerCliente->bind_param('s', $id);
        $removerCliente->execute();
    }

        public function editar(string $id ,string $nome, string $sobrenome, string $email, string $idade) :void                       
        {
            
        $editaCliente = $this->mysql->prepare('UPDATE clientes SET nome = ?, 
        sobrenome = ?, email = ?, idade = ? WHERE id = ?');
        $editaCliente->bind_param('sssss', $nome, $sobrenome, $email, $idade,$id);
        $editaCliente->execute();
        }

        public function encontrarPorId(string $id): array
        {
            $selecionaArtigo = $this->mysql->prepare("SELECT id, nome, sobrenome, email, idade FROM Clientes WHERE id = ?");
            $selecionaArtigo->bind_param('s', $id);
            $selecionaArtigo->execute();
            $artigo = $selecionaArtigo->get_result()->fetch_assoc();
            return $artigo;
        }

}

