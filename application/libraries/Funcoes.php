<?php

/*
 * Biblioteca De funções 
 * Wesley da silva pereira
 * criada somente para essa aplicação
 * 08-01-2017
 */

Class Funcoes  {

    public function FormataData($data) {
        
      //$data->setTimezone(new DateTimeZone("UTC"));
      return date('d/m/Y', strtotime($data));
    }
    public function FormataDataSql($data,$tipo) { 
       /* $nova_data=date('Y-m-d', strtotime($data));
        return $nova_data; */
        $data1=str_split($data);
       // transforma a data em array
     //reorganiza e separa esse array
    $dia=$data1[0].$data1[1];
    $mes=$data1[3].$data1[4];
    $ano=$data1[6].$data[7].$data1[8].$data1[9];
    if($tipo==1)
        {
           //se tipo igual a 1 a retorna  o tipo do banco de dados que é Y-m-d
           return  $data2=$ano.'-'.$mes.'-'.$dia; ;
        } 
    if($tipo==2)
        {
           //se tipo igual a 1 a retorna  o tipo do banco de dados que é Y-m-d
           return  $data2=$dia.'/'.$mes.'/'.$ano; ;
        }        
          
    }

   
}


