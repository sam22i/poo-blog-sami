<?php

require_once('libraries/database.php');

class Comment {

/**
 * retourne un commentaire de la base de données grâce à son identifiant
 * @param integer $id
 * @return array/bool le commentaire ok si on le trouve, false si on ne le trouve pas 
 */

public function find(int $id) {
    
    $pdo = getpdo();
    $query = $pdo->prepare('SELECT * FROM comments WHERE id = :id');
    $query->execute(['id' => $id]);
    $comment = $query->fetch();

    return $comment;

}

/**
 * supprime un commentaire grâce à son identifiant 
 * 
 * @param integer $id
 * @return void
 */

 public function delete(int $id) : void{

    $pdo = getPdo();
    $query = $pdo->prepare('DELETE FROM comments WHERE id = :id');
    $query->execute(['id' => $id]);

}


/**
 * rteourne la liste des commentaires d'un
 *
 * @param integer $article_id
 * @return array
 */
public function findAllwithArticle(int $article_id) : array{
    $pdo = getPdo();
    $query = $pdo->prepare("SELECT * FROM comments WHERE article_id = :article_id");
    $query->execute(['article_id' => $article_id]);
    $commentaires = $query->fetchAll();
    
    return $commentaires;

}

/**
 * insert un commentaire dans la base de données 
 * @param string $author
 * @param string $content 
 * @param string $article_id 
 * @return void
 */

public function insert (string $autor, string $content, int $article_id) : void {

    $pdo = getPdo();
    $query = $pdo->prepare('INSERT INTO comments SET author = :author, content = :content, article_id = :article_id, created_at = NOW()');
    $query->execute(compact('author', 'content', 'article_id'));


}

}
