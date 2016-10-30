<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BaseAdminController;
use App\Http\Requests;
use App\Http\Requests\CreatePostRequest;

class AdminPostsController extends BaseAdminController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);


        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->save($location);

            $post->image = $filename;
        }

        $post->save();

        if($request->tags)
            $post->tags()->sync($request->tags, false);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);


        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        $postags = $post->tags->pluck('name', 'id')->all();

        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'postags'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::findOrFail($id);

        if($post->slug == $request->slug)
        {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required',
                'category_id' => 'required|integer'
                ));
        } else 
        {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id' => 'required|integer'
                ));

            $post->slug = $request->slug;

        }

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->save($location);

            $post->image = $filename;
        }

        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;

        if(isset($request->tags))
            $post->tags()->sync($request->tags); 
        else
            $post->tags()->sync(array());

        $post->save();

        //Session::flash('success', 'Post updated successfully');

        return redirect()->route('posts.index', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
