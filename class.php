<?php

    class cuentaBancaria{
        public $titular;
        public $cantidad;

        function __construct($titular,$cantidad=0){
            $this->titular=$titular;
            $this->cantidad=$cantidad;

        }
        public function ingreso($ingreso=0){
            $this->cantidad+=$ingreso;
        }
        public function retiro($retirada=0){
            $this->cantidad-=$ingreso;
        }
        public function notificar($mensaje){
            if ($this->cantidad = 0){
                echo ('Tienes 0€ en el banco');
            }
        }

    }
    
    $cuenta1 = new CuentaBancaria ('Jose Antonio',2000);

    $cuenta1->ingreso(200);echo '<br>';

?>