<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index($isPublished = true)
    {
        return response(Review::paginate(20))
            ->header('Content-Type', 'application/json');

    }

    public static function uiIndex(){
        $reviews = Review::where('isPublished', '=', 1)->paginate(12);
        foreach ($reviews as $review) {
            $review = Review::withImgs($review);
        }
        return view('reviews', $reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create(Request $request)
    {
        return response(json_encode(['result' => Review::insert([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'city' => $request->input('city'),
            'meta_description' => $request->input('meta_description'),

            'images' => $request->input('images'),
            'content' => $request->input('content'),
            'isPublished' => $request->input('isPublished') ?? false,
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
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public static function show(Request $request)
    {
//        return (Review::where('id', '=', $request->input('id'))->first());
        return Review::withImgs(Review::where('id', '=', $request->input('id'))->first());

    }


    public static function uiShow($id)
    {

        return view('review', ['review' => Review::withImgs(Review::where('id', '=', $id)->first()), 'lastReviews' => self::lastReviews($id)]);

    }

    public static function lastReviews($id){

        $reviews =  Review::limit(10)->where('id', '!=', $id)->get();
        foreach ($reviews as $review) {
            $review = Review::withImgs($review);
        }
        return $reviews;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public static function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public static function update(Request $request)
    {

        $res = Review::find($request->input('id'))->update([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'meta_description' => $request->input('meta_description'),

            'city' => $request->input('city'),
            'images' => $request->input('images'),
            'content' => $request->input('content'),
            'isPublished' => $request->input('isPublished') ?? false,
        ]);
        if ($res) {
            return response(json_encode(['result' => $res]))
                ->header('Content-Type', 'application/json');

        }
    }


    /**
     * @param Request $request
     * @return string
     */
    public static function destroy(Request $request)
    {
//        return  $request->input('id');
        return ''.Review::find($request->input('id'))->first()->delete();

    }
}
