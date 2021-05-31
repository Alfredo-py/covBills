<?php
    include_once("../Modelo/sesion.php");
    class CovBills{
        public $ingresototal = 0;
        public $gastoFijo = 0;
        public $gastoExtra = 0;
        public $sobrante = 0;
        public $ahorro = 0;
    
        function Ingreso_Total($ingreso,$extra){
            $this->$ingresototal = $ingreso + $extra;
            if($this->$ingresototal != 0){
                return $this->$ingresototal;
            }else{
                echo "Usted no ingreso dinero =(";
            }
        }

        function Porcentaje_Salud($aux){
            $this->$ahorro = ($aux * 30)/100;
            return $this->$ahorro;
        }
        
        function Gastos($gastoFijo, $gastoExtra,$total){
            $total -= $gastoFijo;
            $total -= $gastoExtra;
            if ($total > $this->$ahorro){
                $total -= $this->$ahorro;
                $this->$sobrante = $total;
                return $this->$sobrante;
            }else{
                return "Tenemos un problema =(, tus finanzas se estan enfermando".$total;
            }
            
        }

        function Analisis($gastoFijo,$gastoExtra,$total,$ahorro){
            if ($gastoExtra > $gastoFijo){
                echo "tienes un problema al manejar tu dinero, tienes muchos gastos extras.";
                echo "ten en cuenta que de seguir así puede que en algún momento recudas a un credito y no puedas pagarlo.";

            }else if($ahorro > $gastoExtra){
                echo "<h1>Recomendaciones: </h1>";
                echo "estas teniendo un cambio importante en tus finanzas, haz ahorrado hasta el día de hoy: ".$ahorro;
            }else{
                echo "tenemos un problema".$ahorro;
            }

        }

        


        

        

        
       
    }
?>