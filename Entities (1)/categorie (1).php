<?PHP
	class categorie{
        private  $id = null;
		private  $cat = null;
		
		
		

		
		function __construct(string $cat){
			
			$this->cat=$cat;
			
		}
		
		function getId(): int{
			return $this->id;
		}
		function getCat(): string{
			return $this->cat;
		}
		
		
		function setCat(string $cat): void{
			$this->cat=$cat;
		}
		
		
	}
?>