<!DOCTYPE html>
<?php
    include("ContaCorrente.php");
    session_start();
?>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <!--Site levelo (tipo o linkdin, mas para a area de informática)-->
    </head>
    <body>
        <h1>Depósito</h1>

        <?php
            if(empty($_POST)){
                $id = $_GET["id"];
                $cc = $_SESSION["cc"][$id];
        ?>

        <form action="depositar.php" method="POST">
            Correntista: <?php echo $cc->get_nome(); ?> <br/>
            CC: (<?php echo $cc->get_nro(); ?>) <br/>
            Saldo: R$<?php echo $cc->get_saldo(); ?> <br/><br/>
            <input type="number" name="valor" placeholder="Valor do depósito"/>
            <input type="hidden" name="id" value="<?php  echo $id; ?>"/>
            <button>Depositar</button>
        </form>

        <?php
            } else{
                //Implementar depósito
                $id = $_POST["id"];
                $valor = $_POST["valor"];
                $_SESSION["cc"][$id]->depositar($valor);
                header("Location: listar_cc.php");
            }
        ?>
    </body>
</html>