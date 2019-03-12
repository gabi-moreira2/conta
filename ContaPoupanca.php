<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            include_once("Conta.php");

            //Classe Conta Corrente
            class ContaPoupanca extends Conta{
                private $taxa_rendimento;

                //Método Construtor
                public function __construct($nome, $nro, $data_abertura, $saldo, $taxa_rendimento){

                    parent::__construct($nome, $nro, $data_abertura, $saldo);   //Chama a classe Pai
                    $this->taxa_rendimento = $taxa_rendimento;
                }

                //Método listar
                public function exibe_dados(){
                    echo "<tr>
                            <td>".$this->get_nome()."</td>                     
                            <td>".$this->get_nro()."</td>
                            <td>".$this->get_data_abertura()."</td>
                            <td>$this->saldo</td>
                            <td>$this->taxa_rendimento</td>
                            <td>
                                <a href='sacar.php?id=$id'>Sacar</a> / 
                                <a href='depositar.php?id=$id'>Depositar</a>
                            </td>
                        </tr>";
                }
            }
        ?>
    </body>
</html>