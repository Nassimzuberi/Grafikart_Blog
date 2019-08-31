<?php
namespace App\Table;
use App\App;
class Articles extends Table{

    protected static $table = 'articles';
    public static function find($id)
    {
        return self::query("
SELECT articles.id,articles.titre,articles.contenu,categorie.titre as categorie 
FROM articles 
LEFT JOIN Categorie ON category_id = categorie.id
WHERE articles.id = ?"
            ,[$id],true);
    }
    public static function getLast(){
        return self::query("
SELECT articles.id,articles.titre,articles.contenu,categorie.titre as categorie 
FROM articles 
LEFT JOIN Categorie ON category_id = categorie.id
ORDER BY articles.date DESC"
        );

    }
    public function getUrl(){
        return 'index.php?p=article&id='. $this->id;
    }

    public static function lastByCategory($category_id)
    {
        return self::query("
SELECT articles.id,articles.titre,articles.contenu,categorie.titre as categorie 
FROM articles 
LEFT JOIN Categorie 
ON category_id = categorie.id
WHERE category_id = ?
ORDER BY articles.date DESC"
            ,[$category_id]);
    }
    public function getExtrait(){
        $html = '<p>'. substr($this->contenu,0,400) . '...</p>';
        $html .= '<p><a href="'. $this->url . '">Voir la suite</a></p>';
        return $html;
    }

    public function getClass(){
        return get_called_class();
    }
}