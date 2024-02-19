<?php

require_once('libraries/database.php');

class Article 
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = getPdo();
  }

 /**
 * retourne la liste des articles classés par date de parution
 *
 * @return array
 */
public function findAll(): array{
    
    $resultats = $this->pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
    // On fouille le résultat pour en extraire les données réelles
    $articles = $resultats->fetchAll();

    return $articles;
}


public function find(int $id, ) : array{

    $pdo = getPdo();

    $query = $pdo->prepare("SELECT * FROM articles WHERE id = :article_id");

    // On exécute la requête en précisant le paramètre :article_id 
    $query->execute(['article_id' => $id]);

    // On fouille le résultat pour en extraire les données réelles de l'article
    $article = $query->fetch();

    return $article;

}

public function delete(int $id) {
    $pdo = getPdo();
    $query = $pdo->prepare('DELETE FROM articles WHERE id = :id');
    $query->execute(['id' => $id]);

}



}