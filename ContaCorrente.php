<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            include_once("Conta.php");

            //Classe Conta Corrente
            class ContaCorrente extends Conta{

                //Atributos
                private $taxa_manutencao;
                private $taxa_operacao;

                //Método construtor
                public function __construct($nome, $nro, $data_abertura, $saldo, $taxa_manutencao, $taxa_operacao){

                    parent::__construct($nome, $nro, $data_abertura, $saldo);
                    $this->taxa_manutencao = $taxa_manutencao;
                    $this->taxa_operacao = $taxa_operacao;
                }

                //método sacar
                public function sacar($valor_saque){
                    
                    $this->saldo = $this->saldo - $valor_saque - $valor_saque * ($this->taxa_operacao / 100);
                }

                //Método verificarSaque
                public function verificacao_saque($valor_saque){
                    if(($this->saldo - $valor_saque - $valor_saque * ($this->taxa_operacao / 100)) >= 0){
                        return(true);
                    } else{
                        return(false);
                    }
                }

                //método depositar
                public function depositar($valor_deposito){
                    
                    $this->saldo = $this->saldo + $valor_deposito - $valor_deposito * ($this->taxa_operacao / 100);
                }

                //Método listar
                public function exibe_dados($id){
                    echo "<tr>
                            <td>".$this->get_nome()."</td>
                            <td>".$this->get_nro()."</td>
                            <td>".$this->get_data_abertura()."</td>
                            <td>$this->saldo</td>
                            <td>$this->taxa_manutencao</td>
                            <td>$this->taxa_operacao</td>
                            <td>
                                <a href='sacar.php?id=$id'>Sacar</a> / 
                                <a href='depositar.php?id=$id'>Depositar</a>
                            </td>
                        </tr>";
                    ////Metodo publico p pegar o atributo privado (n da conta) e trava p ninguem mexer mais
                }
            }
        ?>
    </body>
</html>