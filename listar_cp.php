<?php
    include("ContaPoupanca.php");
    session_start();
?>
<table border="1">
    <tr>
        <th>Cliente</th>
        <th>Número da conta</th>
        <th>Data de abertura</th>
        <th>Saldo inicial</th>
        <th>Taxa de rendimento</th>
        <th>Ação</th>
    </tr>
    <?php
        foreach($_SESSION["cp"] as $i=>$p){
            $p->exibe_dados($i);
        }
    ?>
</table>
<br/>
<a href="cadastro.php">Voltar para cadastro</a>