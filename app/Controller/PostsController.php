<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 11/09/2019
 * Time: 20:03
 */

namespace App\Controller;

use \App;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this ->loadModel('Post');
        $this ->loadModel('Categorie');


    }
    public function index(){
        $posts = $this->Post->last();
        $categorie = $this->Categorie->all();
        $this->render('posts.index',
            compact('posts','categorie')
        );
    }

    public function categorie(){
        $categorie = $this->Categorie->find($_GET['id']);
        if($categorie == false){
            $this->notFound();
        }
        $article = $this->Post->lastByCategory($_GET['id']);
        $category = $this->Categorie->all();
        $this->render('posts.categorie',
            compact('article','category', 'categorie')
        );


    }
    public function show(){
        $post = $this->Post->findWithCategory($_GET['id']);
        if($post == false){
            $this->notFound();
        }
        $this->render('posts.single',
            compact('post')
        );
    }
}