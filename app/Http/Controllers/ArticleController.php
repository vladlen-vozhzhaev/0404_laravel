<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function addArticle(Request $request){
        $title = $request->title;
        $article = $request->article;
        $author = $request->author;
        $articleModel = new Article();
        $articleModel->title = $title;
        $articleModel->article = $article;
        $articleModel->author = $author;
        $articleModel->save();
        return 'success';
    }
    public function getArticleById(Request $request){
        $articleId = $request->id;
        $article = Article::where('id', $articleId)->first();
        $comments = Comment::where('article_id', $articleId)->get();
        foreach ($comments as $comment){
            $userId = $comment->user_id;
            $user = User::where('id', $userId)->first();
            $userName = $user->name;
            $comment->username = $userName;
        }
        return view('pages.article', ['article'=>$article, 'comments'=>$comments]);
    }
    public function getArticles(){
        $articles = Article::all();
        return view('pages.articles', ['articles'=>$articles]);
    }
    public function deleteArticle(Request $request){
        $articleId = $request->id;
        $article = Article::where('id', $articleId);
        $article->delete();
        return redirect()->intended('/');
    }
}
