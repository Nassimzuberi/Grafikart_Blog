<?php
namespace App\Table;
use App\App;
class Article extends Table{

    public static function getLast(){
        return App::getDb()->query("
SELECT articles.id,articles.titre,articles.contenu,categorie.titre as categorie 
FROM articles 
LEFT JOIN Categorie 
ON category_id = categorie.id"
            ,__CLASS__);

    }
    public function getUrl(){
        return 'index.php?p=article&id='. $this->id;
    }

    public function getExtrait(){
        $html = '<p>'. substr($this->contenu,0,400) . '...</p>';
        $html .= '<p><a href="'. $this->url . '">Voir la suite</a></p>';
        return $html;
    }
}