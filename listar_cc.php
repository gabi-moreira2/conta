<?php
    include("ContaCorrente.php");
    session_start();

    //print_r($_SESSION); //

?>
<table border="1">
    <tr>
        <th>Cliente</th>
        <th>Número da conta</th>
        <th>Data de abertura</th>
        <th>Saldo inicial</th>
        <th>Taxa de manutenção</th>
        <th>Taxa de operação</th>
        <th>Ação</th>
    </tr>
    <?php
        foreach($_SESSION["cc"] as $i=>$c){     //i = indice, c = valor(conta)  //Em cada vez que o laço roda -> Pega o indice do vetor(1) e o valor do vetor(c)
            $c->exibe_dados($i);  //Roda o exibe_dados() do elemento($c)
        }
    ?>
</table>
<br/>
<a href="cadastro.php">Voltar para cadastro</a>