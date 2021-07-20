<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Articles;

class CreateArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function one()
    {
        return view('createarticle');
        //->with('articles',Articles::orderBy('updated_at','DESC')->get());
    }


        public function create(Request $req){
            $data=$req->only('title','content');
            Articles::create($data);
            // dd($data);
           return redirect()->route('articles');
        }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('article.create');

    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {

    //         $request->validate([
    //             'title'=>'required',
    //             'content'=>'required'
    //             // 'image'=>'required|mimes:jpg,png,jpeg|max:5048'
    //         ]);
    //         // $newImageName= uniqid().'-'.$request->title.'.'.
    //         // $request->image->extension();
    //         // $request->image->move(public_path('images',$newImageName));



    //         Articles::create([
    //               'title'=>$request->input('title'),
    //               'content'=> $request->input('description'),
    //               'slug' => SlugService::createSlug(Post::class,'slug',$request->title),
    //             //   'image_path'=>$newImageName,
    //               'user_id' =>auth()->user()->id
    //         ]);

    //         return redirect('/article')->with('message','Your article has been added!');

    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($slug)
    // {
    //     return view('article.show')
    //     ->with('post',Articles::where('slug',$slug)->first());
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($slug)
    // {
    //     return view('article.edit')->with('post',Articles::where('slug',$slug)->first());

    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $slug)
    // {
    //     $request->validate([
    //         'title'=>'required',
    //         'content'=>'required',

    //     ]);
    //     Articles::where('slug',$slug)->update([
    //         'title'=>$request->input('title'),
    //         'content'=> $request->input('content'),
    //         'slug' => SlugService::createSlug(Post::class,'slug',$request->title),

    //         'user_id' =>auth()->user()->id
    //     ]);
    //     return redirect('/article')->with('message','Your post has been updated!');


    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($slug)
    // {
    //     $post=Articles::where('slug',$slug);
    //     $post->delete();

    //     return redirect('/article')->with('message','Your post has been deleted!');

    // }
}
