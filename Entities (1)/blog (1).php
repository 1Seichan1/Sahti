<?PHP
	class blog{
        private  $id = null;
		private  $nom = null;
		private  $titre_blog = null;
		private  $description = null;
		private  $image = null;
		private  $categorie = null;
		
		

		
		function __construct(string $nom, string $titre_blog, string $description,string $image,string $categorie){
			
			$this->nom=$nom;
			$this->titre_blog=$titre_blog;
			$this->description=$description;
			$this->image=$image;
			$this->categorie=$categorie;
			
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
		function getImage(): string{
			return $this->image;
		}
		function getCategorie(): string{
			return $this->categorie;
		}
		
		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setTitre_blog(string $titre_blog): void{
			$this->titre_blog;
		}
		function setDescription(string $description): void{
			$this->description;
		}
		function setImage(string $image): void{
			$this->image;
		}
		function setCategorie(string $categorie): void{
			$this->categorie;
		}
		
	}
?>