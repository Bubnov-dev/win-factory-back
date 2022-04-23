<?php

namespace App\Http\Controllers;

use App\Article;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index( $isPublished = 1)
    {
        return response(Article::paginate(20))
            ->header('Content-Type', 'application/json');

    }
    public static function uiIndex( $isPublished = 1)
    {
        return view('articles', Article::where('isPublished', '=', $isPublished)->paginate(12));

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function create(Request $request)
    {
        return response(json_encode(['result' => Article::insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'meta_description' => $request->input('meta_description'),
            'content' => $request->input('content'),
            'main_img' => $request->input('main_img'),
            'isPublished' => $request->input('isPublished') ?? false,
            'created_at' => new \DateTime()

        ])]))
            ->header('Content-Type', 'application/json');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public static function show(Request $request)
    {
        return Article::where('id', '=', $request->input('id'))->first();
    }

    public static function uiShow($id)
    {
        return view('article', ['article' => Article::where('id', '=', $id)->first(), 'lastArticles' => self::lastArticles($id) ]);
     }

    public static function lastArticles($id){
        return Article::where('isPublished', '=', 1)->where('id', '!=', $id)->limit(3)->get();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public static function edit(Request $request)
    {
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public static function update(Request $request)
    {
//        header('Access-Control-Allow-Origin: *');
//        header('Content-type: application/json');

        $res = Article::where('id', '=', $request->input('id'))->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'meta_description' => $request->input('meta_description'),
            'main_img' => $request->input('main_img'),
            'content' => $request->input('content'),
            'isPublished' => $request->input('isPublished') ?? false,
            'updated_at' => new \DateTime()
        ]);
        if ($res) {
            return response(json_encode(['result' => $res]))
                ->header('Content-Type', 'application/json');

        }

    }


    /**
     * @param Request $request
     * @return mixed
     */
    public static function destroy(Request $request)
    {

        return ''.Article::where('id', '=', $request->input('id'))->first()->delete();
    }
}
