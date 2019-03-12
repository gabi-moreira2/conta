<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Exemplo1</title>
    </head>
    <body>
        <fieldset>
            <legend>Cadastro</legend>
            <?php
                if(empty($_GET)){
            ?>
            <form action="cadastro.php" method="GET">
                <label>Tipo de conta:</label><br/>
                <input type="radio" name="conta" value = "poupanca"/>Poupança  
                <input type="radio" name="conta" value = "corrente"/>Corrente<br/>
                <input type="submit" value="Próximo"/>
            </form>
            <?php
                } else{
            ?>
            <form action="insere_cadastro.php" method="POST">
                <input type="text" name="cliente" placeholder="Nome do cliente"/><br/><br/>
                <input type="number" name="nro" placeholder="Número da conta"/><br/><br/>
                <input type="date" name="data_abertura" placeholder="Data de abertura da conta"/><br/><br/>
                <input type="number" name="saldo" placeholder="Saldo inicial"/><br/><br/>
            <?php
                
                if($_GET["conta"] == "corrente"){
            ?>
            <input type="number" name="taxa_manutencao" placeholder="Taxa de manutenção"/><br/><br/>
            <input type="number" name="taxa_operacao" placeholder="Taxa de operação (%)"/><br/><br/>

            <?php
                } else{
                    
            ?>
            <input type="number" name="taxa_rendimento" placeholder="Taxa de rendimento"/><br/><br/>
            <?php
                }
            ?>
            <input type="hidden" name="conta" value="<?php echo $_GET["conta"];?>"/><br/><br/>
            <button>Próximo</button>
            </form>
            <?php
                }
            ?>            
        </fieldset>
    </body>
</html>