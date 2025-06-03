<?php
	abstract class Conexao
	{
		protected $db = null;
		
		public function __construct()
		{
			$parametros = "mysql:host=localhost;dbname=bancopi;charset=utf8mb4";
			try
			{
				$this -> db = new PDO($parametros, "root", "");
			}
			catch (PDOException $e)
			{
				die("Problema com conexão do banco de dados");
				echo $e -> getCode();
				echo $e -> getMessage();
			}
		}
	}
?>