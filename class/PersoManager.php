<?php 


class PersoManager 
{
    private $database;
    private $aliveHeroes = [];

    public function __construct($database)
    {
        $this->database = $database;
    }
 

    public function ajouter(Personnage $perso)
    {
        $dtb = $this->database->prepare('INSERT INTO personnage(nom, classe, vie, degats) VALUES(:nom, :classe, :vie, :degats)');
        $dtb->execute([
            'nom'=> $perso->getNom(),
            'classe'=>$perso->getClasse(),
            'vie'=>$perso->getVie(),
            'degats'=>$perso->getDegats()
        ]);
        $id = $this->database->lastInsertId();
        $perso->setId($id);

    }

    public function findAllAlive()
    {
        $listeperso = $this->database->query('SELECT * FROM personnage WHERE vie > 0');
        $personnages = $listeperso->fetchAll();
    
        foreach($personnages as $perso) {
            $newPerso = new Personnage($perso);
            $newPerso->setId($perso['id']);
            $this->aliveHeroes[] = $newPerso;
        }

  

        return $this->aliveHeroes;
    }


        public function find($id)
        {
           $request = $this->database->prepare('SELECT * FROM personnage WHERE id = :id');
           $request->execute([
            'id' => $id
           ]);

           $infoPerso = $request->fetch();
           
           $hero = new Personnage($infoPerso);
           return $hero;
        }


        public function update(Personnage $hero)
        {
            $query = $this->database->prepare('UPDATE personnage SET vie = :vie WHERE id = :id');
            $query->bindValue(':id', $hero->getId());
            $query->bindValue(':vie', $hero->getVie());
            $query->execute();  
        }

        public function pretyDump($data){
            highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
        }

}



?>