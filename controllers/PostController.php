<?php

namespace app\controllers;
use app\models\Post;

class PostController extends AppController
{
	public function actionIndex () 
	{
               // $posts = Post::find()->select('id, title, excerpt')->orderBy('id DESC')->all();
            
                $query = Post::find()->select('id, title, excerpt')->orderBy('id DESC');
                $pages = new \yii\data\Pagination(['totalCount'=>$query->count(), 'pageSize'=>2, 'pageSizeParam' => false, 'forcePageParam' => false]);
                $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
                
                //debug($posts);
                return $this->render('index', compact('posts', 'pages'));
	}
	public function actionTest () 
	{
		return $this->render('test');
	}
	public function actionHello () 
	{
		return $this->render('hello');
	}
}