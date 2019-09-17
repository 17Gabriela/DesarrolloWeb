<?php 
class Operaciones
{
	private $n, $cadena, $a, $b, $c;
	function __construct($n, $cadena, $a, $b, $c)
	{
		$this->n = $n;		
		$this->cadena = $cadena;
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	public function CalcularFibonacci(){
		echo '<p>La Serie Fibonacci es:</p>';
		if($this->n >=1) echo "0&nbsp;";
        if($this->n >=2) echo "1";
        $a=0;
        $b=1;
        for($i=0 ; $i<$this->n -2 ; $i++){
            $c=$a+$b;
            echo "&nbsp;".$c;
            $a=$b;
            $b=$c;
        }
	}
	public function CalcularMenor(){
		echo 'El número menor es:   ';
		if ($this->a < $this->b and $this->a < $this->c) echo $this->a;
        if ($this->b < $this->a and $this->b < $this->c) echo $this->b;
        if ($this->c < $this->b and $this->c < $this->a) echo $this->c;
	}
	public function Piramide(){
		$cadena = strlen("$this->cadena");
		$a = ($cadena/2)-1;
        for($i=1; $i<=$cadena+1; $i++){
        	echo '<center>'.substr("$this->cadena", $a, $i), "<br><br>".'</center>';
        	if($a== -$a)
				{
					$a=0;
				}
				else
				{
					$a=$a-1;
				}
				$i=$i+1;
			}
        }
	}
?>