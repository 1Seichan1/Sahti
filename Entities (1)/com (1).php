<?PHP
	class com{
        private  $id = null;
		private  $com = null;
		
		
		

		
		function __construct(string $com){
			
			$this->com=$com;
			
		}
		
		function getId(): int{
			return $this->id;
		}
		function getCom(): string{
			return $this->com;
		}
		
		
		function setCom(string $com): void{
			$this->com=$com;
		}
		
		
	}
?>