<?php

    class cuentaBancaria{ //Creamos clase 
        public $titular;
        public $cantidad;

        function __construct($titular,$cantidad=0){
            $this->titular=$titular;
            $this->cantidad=$cantidad;

        }
        public function ingreso($ingreso=0){
            $this->cantidad+=$ingreso; //Suma la cantidad + el ingreso
            if ($ingreso > 0) {
                $this->notificar('Has ingresado '. $ingreso.' €'.'<br>Tienes en total '.$this->cantidad.' €');
            }
        }
        public function retiro($retiro=0){
            $this->cantidad-=$retiro; //Resta la cantidad - el retiro
            if ($retiro > 0) {
                $this->notificar('Has retirado '. $retiro.' €'.'<br> Tienes en total '. $this->cantidad.' €');
            } elseif ($cantidad < $retiro) {
                $this->notificar('No tienes tanto dinero perro');
            }   
        }
        public function notificar($mensaje){    
            echo ($mensaje); 
        }
    }
    
    $cuenta1 = new CuentaBancaria ('Jose Antonio',400); //Parametros que se pondran en titular y cantidad
    $cuenta1->ingreso();echo '<br>'; //Valores que queramos ingresar
    $cuenta1->retiro(500);echo '<br>'; //Valores que queremos retirar
?>

