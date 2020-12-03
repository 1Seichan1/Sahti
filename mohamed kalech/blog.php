<?PHP
	class blog{
        private  $id = null;
		private  $nom = null;
		private  $titre_blog = null;
		private  $description = null;
		

		
		function __construct(string $nom, string $titre_blog, string $description){
			
			$this->nom=$nom;
			$this->titre_blog=$titre_blog;
			$this->description=$description;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getTitre_blog(): string{
			return $this->titre_blog;
		}
		function getDescription(): string{
			return $this->description;
		}
		
		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setTitre_blog(string $titre_blog): void{
			$this->titre_blog;
		}
		function setDescription(string $description): void{
			$this->description=$description;
		}
		
	}
?>