<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php
        require 'Cliente.php';
        require 'ClientePessoaFisica.php';
        require 'ClientePessoaJuridica.php';
        
        //dados vindos da classe pai cliente
        $clientePai = new Cliente();
        $clientePai->setEndereco('SQS 104 BL E');
        $clientePai->setBairro('Asa Sul');
        echo $clientePai->verEndereco();
        
        //dados vindos da classe filha instanciada clientepessoafisica
        $clientePessoaFisica = new ClientePessoaFisica();
        $clientePessoaFisica->setNome('João Vítor Lima da Silva Gutierre');
        $clientePessoaFisica->setCpf(05422030141);
        $clientePessoaFisica->setEndereco('SQS 104 BLOCO E');
        $clientePessoaFisica->setBairro('Asa Sul');
        echo $clientePessoaFisica->verEndereco();
        
        //dados vindos da classe filha instanciada clientepessoajuridica
        $clientePessoaJuridica = new ClientePessoaJuridica();
        $clientePessoaJuridica->setNomeFantasia('Garibaldo das Custiulimans');
        $clientePessoaJuridica->setCnpj(23042938230923402938423);
        $clientePessoaJuridica->setEndereco('CCLS 104 BLOCO B LOJA 07');
        $clientePessoaJuridica->setBairro('Asa Sul');
        echo $clientePessoaJuridica->verEndereco();
        ?>
    </body>
</html>
