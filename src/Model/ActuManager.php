<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 */

namespace Model;


class ActuManager extends EntityManager
{
    const TABLE = 'actu';


    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function ajouter($donnees)
    {
        $requete = $this->conn->prepare("INSERT INTO $this->table (`titre`, `contenu`, `image`) VALUES (\"" . $donnees['titre'] . "\", \"" . $donnees['contenu'] . "\", \"" . $donnees['image'] . "\")");
        return $requete->execute();
    }

    public function recuperer()
    {
        $requete = $this->conn->prepare("SELECT DISTINCT actu.id, actu.titre, actu.contenu, actu.image FROM $this->table");
        $requete->execute();
        $donnees = $requete->fetchAll();
        return $donnees;
    }

    public function utilisation()
    {
        $requete = $this->conn->prepare("SELECT titre, contenu, image FROM $this->table INNER JOIN actualite where $this->table.id = actualite.actualite_id ");
        $requete->execute();
        $donnees = $requete->fetch();
        return $donnees;
    }

    public function update($actu)
    {
        $requete = $this->conn->prepare("UPDATE actualite SET actualite_id = :actu ");
        $requete->bindValue(':actu', $actu);
        return $requete->execute();
    }


    public function supprimer($actu)
    {
        $requete = $this->conn->prepare("DELETE FROM $this->table WHERE id = :actu");
        $requete->bindValue(':actu', $actu);
        return $requete->execute();
    }

}
