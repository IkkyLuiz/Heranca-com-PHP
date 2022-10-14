<?php
	class Pessoa{
		public $nome = "Pedro";
		public $idade = 18;
		public $sexo = "M";
		
		function fazerAniversario($idade){
			$this-> idade + 1;
		}
	}
	
	class Aluno extends Pessoa{
		public $matricula = 1;
		public $curso = "Informática";
		
		function cancelarMatricula($matricula){
			$this->matricula = null;
		}
	}
	
	$p1 = new Pessoa();
	$a1 = new Aluno();
	
	print_r($a1);
	
	
	?>
