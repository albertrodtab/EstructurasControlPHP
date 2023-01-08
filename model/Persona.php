<?php



class persona {

    public $nombre;

    public $edad;
    public $fechanacimiento ;

    public function __construct($nombre, $edad, $fechanacimiento){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->fechanacimiento = $fechanacimiento;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function calculaedad($fechanacimiento){
        $fecha_nacimiento = $fechanacimiento;
        $dia_actual = date("Y-m-d");
        $edad_diff = date_diff(date_create($fecha_nacimiento), date_create($dia_actual));
        return $edad_diff->format('%y');
    }





}
