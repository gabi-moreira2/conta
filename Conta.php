<?php
    //Classe Conta  ->Só irá agrupar os atributos em comum
    class Conta{

        //Atributos
        private $nome;
        private $nro;
        private $data_abertura;
        protected $saldo;

        //Método construtor
        protected function __construct($nome, $nro, $data_abertura, $saldo){

            $this->nome = $nome;
            $this->nro = $nro;
            $this->data_abertura = $data_abertura;
            $this->saldo = $saldo;
        }

        public function get_nome(){     //Métodos GET: Servem para disponibilizar acesso a esses elementos (que são private)(Só pode ler! - não escreve-)
            return($this->nome);
        }
        public function get_nro(){  //Método GET: São tags filhas, portanto não conseguem acessar os atributos private, para conseguir acessar tem q usar o GET
            return($this->nro);
        }
        public function get_data_abertura(){
            return($this->data_abertura);
        }

        public function get_saldo(){
            return($this->saldo);
        }
        
    }
?>