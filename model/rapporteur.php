<?php
	class Rapporteur{
		private $id;
		private $nom;
		private $prenom;
		private $login;
		private $password;
		
		function __construct($id,$nom,$prenom,$login,$password,$issha1=false){
			$this->id=$id;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->login=$login;
			if(!$issha1){
				$this->password=sha512($password);
			}
			else{
				$this->password=$password;
			}
		}
		public function getId(){
			return($this->id);
		}
		public function getNom(){
			return($this->nom);
		}
		public function getPrenom(){
			return($this->prenom);
		}
		public function getLogin(){
			return($this->login);
		}
		public function getPassword(){
			return($this->password);
		}
	}
