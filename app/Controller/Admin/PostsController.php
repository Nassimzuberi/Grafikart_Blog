<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 11/09/2019
 * Time: 20:03
 */

namespace App\Controller\Admin;
use \App;

class PostsController extends AppController{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));

    }
    public function add(){
        if(!empty($_POST)){
            $result = $this->Post->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);
            if($result){
                return $this->index();

            }

        }
        $this->loadModel('Categorie');
        $categorie = $this->Categorie->extract('id','titre');
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.posts.add', compact('categorie','form'));



    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Post->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);
            if($result){
                return $this->index();
            }

        }
        $this->loadModel('Categorie');
        $categorie = $this->Categorie->extract('id','titre');
        $post = $this->Post->find($_GET['id']);
        $form = new \Core\HTML\BootstrapForm($post);
        $this->render('admin.posts.edit', compact('categorie','form'));


    }

    public function delete(){
        if(!empty($_POST)){
            $this->Post->delete($_POST['id']);
            return $this->index();

        }

    }
}