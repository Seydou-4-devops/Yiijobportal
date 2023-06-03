<?php

namespace frontend\controllers;

use frontend\models\Posts;

use yii\web\Controller;

/**
 * PostsController implements the CRUD actions for Posts model.
 */
class PostDetailController extends Controller
{
   
    public function actionPost($id)
    {
        $post = Posts::findOne(['id'=>$id]);

        return $this->render('post-detail', ['post'=>$post]);

    }

   



}
