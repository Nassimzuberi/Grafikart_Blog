<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 11/09/2019
 * Time: 20:03
 */

namespace App\Controller;

use \App;
use Core\Database\QueryBuilder;

class DemoController extends AppController{


    public function index(){

        require ROOT. '/Query.php';
        echo \Query::select('id','titre','contenu')->from('articles','Post')->where('Post.category_id = 1')->where('Post.date > NOW()');
    }
}