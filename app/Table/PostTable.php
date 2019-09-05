<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 31/08/2019
 * Time: 18:28
 */
namespace App\Table;
use \Core\Table\Table;

class PostTable extends Table
{
    /**
     * Recupère les derniers articles
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, articles.date, categorie.titre as categorie
            FROM articles
            LEFT JOIN categorie ON category_id = categorie.id
            ORDER BY articles.date DESC
        ");
    }
}