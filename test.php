<?php

declare(strict_types=1);
/*
interface PersonaInterface{
    public function getNombre():string;
    public function getEdad():int;
}
class Persona implements PersonaInterface{
    public function __construct(protected int $edad, protected string  $nombre, protected string $sexo){

    }
    public function getNombre(): string{
        return $this->nombre;

    }
    public function getEdad():int{
        return $this->edad;
    }
}

class Alumno extends Persona{
    public function __construct(protected int $edad, protected string $nombre, protected string $sexo,
                                protected string $especialidad)
                    {

                    }
    public function getEdad(): int{
        return 30;
    }
    public function getEspecialidad(){
        return $this->especialidad;
    }

}
class Fibonacci{

    public function __construct(){
    
    }
    public function fibona(int $n){
      
        if($n==0){
            return 0;
        }
        if($n==1){
            return 1;
        }
        if($n>=2){
            return $this->fibona($n-1)+$this->fibona($n-2);
        }
        
    }
    
  
}
$alumno1= new Alumno(23,'Armando','Masculino','Programación');
$array=["letra1"=>"h","letra2"=>"o","l3"=>"l","l4"=>"a"];

echo $alumno1->getNombre();
echo $alumno1->getEdad();
echo $alumno1->getEspecialidad();
$fibonacci= new Fibonacci();
echo "<br>";
for( $i=0;$i<=10;$i++){
    echo $fibonacci->fibona($i)."-";
}
echo "<br>";
foreach($array as $key =>$value){
    echo "Clave: ".$key." valor: ".$value."<br>";
}

*/
 $nombre= $_GET['nombre'];
 $edad=$_GET['edad'];

echo "Te llamas ".$nombre. " y tu edad es". $edad;


?>