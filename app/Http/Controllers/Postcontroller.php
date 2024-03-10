<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $allposts = [
            ['id'=>1 , 'title'=> 'The first post' ,'postedBy'=> 'jemes'  ,'created at'=> now()],
            ['id'=>2 , 'title'=> 'The Second post' ,'postedBy'=> 'weilam'  ,'created at'=> now()],
            ['id'=>3 , 'title'=> 'The Third post' ,'postedBy'=> 'mark'  ,'created at'=> now()],
            ['id'=>4 , 'title'=> 'The fourth post' ,'postedBy'=> 'osman'  ,'created at'=> now()],
        ];
        return view('posts.index' ,['posts'=> $allposts]);
    }
    public function show($postID){
        $singlePost = [
            'id'=>1 , 'title'=> 'The first post' ,'postedBy'=> 'jemes'  ,'created at'=> now() ,'description'=> ' This is the description of the Post'
        ];
        return view('posts.show' , ['post'=> $singlePost]);
    }
}
