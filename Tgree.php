<?php
require_once "exampe.php";
class Tgree implements A {
	public $res;
	
    public function summa($one, $two)

   {
        $this->res = $one+$two;
    }
	
	
	
	   public function umn($one, $two)

    {
        $this->res = $one*$two;
    }
	
	
	   public function minus($one, $two)

    {
        $this->res = $one-$two;
    }
	
	
	   public function delenie($one, $two)

   {
        $this->res = $one/$two;
    }
	
	
	   public function showres()

    {
      return  $this->res ;
    }
	
	} /* class*/
?>