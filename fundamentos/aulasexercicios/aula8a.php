<?php
    // MODELO DO MEU OBJETO
    class Garrafa{
        // ATRIBUTOS (Características)
        public $cor;
        public $tipo_material;
        public $volume;
        public $tipo_liquido;

        // MÉTODO (Ação)
        function __construct($cor, $tipo_material, $volume, $tipo_liquido) {
           $this->cor = $cor;
           $this->tipo_material = $tipo_material;
           $this->volume = $volume;
           $this->tipo_liquido = $tipo_liquido;
        }

        function status_tampado($tampa){
            if ($tampa == true){
                echo "A garrafa está tampada!";
            }
            else {
                echo "A garrafa está destampada!";
            }
        }

        function apresentar_garrafa(){
            echo "A garrafa é: <br>";
            echo "
            <br>Cor: $this->cor
            <br>Tipo de Material: $this->tipo_material
            <br>Volume: $this->volume ml
            <br>Tipo de Líquido: $this->tipo_liquido
            ";
        }

    }

    



?>