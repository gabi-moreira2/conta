<!DOCTYPE html>
<?php
    include("ContaCorrente.php");
    session_start();
?>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Saque</h1>

        <?php
            if(empty($_POST)){
                //Se o POST estiver vazio
                $id = $_GET["id"];
                $cc = $_SESSION["cc"][$id];
        ?>

        <form action="sacar.php" method="POST">
            Correntista: <?php echo $cc->get_nome(); ?><br/>
            CC: (<?php echo $cc->get_nro(); ?>)
            <br/>
            Saldo: R$<?php echo $cc->get_saldo(); ?><br/><br/>
            <input type="number" name="valor" placeholder="Valor do saque"/>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <button>Sacar</button>
        </form>

        <?php
            } else{
                //Se o POST estiver cheio
                $id = $_POST["id"];
                $valor = $_POST["valor"];
                    
                if($_SESSION["cc"][$id]->verificacao_saque($valor)){    //Isto ($_SESSION["cc"][$id]) é um objeto

                    //Implementar saque
                    $_SESSION["cc"][$id]->sacar($valor);
                    header("Location: listar_cc.php");  //Redirecionador                        

                } else{

                    echo "Valor de saque + taxas é maior que o saldo atual.<br/>";
                    echo "<a href='listar_cc.php'>Voltar para contas</a>";
                }
            }
        ?>

    </body>
</html>