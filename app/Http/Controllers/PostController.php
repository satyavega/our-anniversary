<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\User;
use App\Models\Logo;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Kyslik\ColumnSortable\Sortable;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */public function index(Request $request): View
{
    $logos = Logo::all();
    $title = "Moment";
    $categorySlug = request('category');
    $authorUsername = request('author');

    // 🔥 LATEST POSTS (4 TERAKHIR) — tetap terbaru (untuk sidebar / section lain)
    $latestPosts = Post::with(['author', 'category'])
        ->orderBy('id', 'desc')
        ->take(4)
        ->get();

    $categories = Category::all();

    if ($categorySlug) {
        $category = Category::where('slug', $categorySlug)->first();
        $title = "Moments By Category: " . $category->name;
    } elseif ($authorUsername) {
        $author = User::where('username', $authorUsername)->first();
        $title = "Moments By Author: " . $author->name;
    }

    $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->orderBy('id', 'asc') // 🔥 tetap urut lama → baru
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null;
    }

    // 🔥 CATEGORY POSTS (urut lama → baru)
    $categoryPosts = [];
    foreach ($categories as $category) {
        $categoryPosts[$category->id] = Post::where('category_id', $category->id)
            ->with(['author', 'category'])
            ->orderBy('id', 'asc')
            ->take(3)
            ->get();
    }

    return view('pages.moment', compact('logos'), [
        'title' => $title,
        'cari' => $cari,

        // 🔥 INI YANG PALING PENTING
        // SEMUA POST: dari pertama upload → terakhir upload
        'posts' => $searchResults
            ? $searchResults
            : Post::with(['author', 'category'])
                ->orderBy('id', 'asc')
                ->get(),

        'latestPosts' => $latestPosts,
        'categories' => $categories,
        'categoryPosts' => $categoryPosts,
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post, Request $request)
    {
        $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
        $logos = Logo::all();

        return view('pages.post',compact('logos'), [
            "title" => "Single Post",
            "post" => $post,
            'cari' => $cari,
            'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),


        ]);
    }
    /**
     * menampilkan postingan berdasarkan kategori
     */
    public function getPostsByCategory(Category $category, Request $request)
    {
        $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
        $logos = Logo::all();
        $posts = $category->posts;

        return view('pages.moment.category', compact('posts', 'category'), [
            "title" => "Category Posts",
        'logos' => Logo::all(),
        'cari' => $cari,
        'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),



        ]);
    }
    /**
     * menampilkan postingan berdasarkan user
     */

    public function getPostsByUser(User $user, Request $request)
    {
        $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
        $logos = Logo::all();
        $posts = $user->posts;

        return view('pages.moment.user', compact('posts','user'), [
            "title" => "User Posts",
        'logos' => Logo::all(),
        'cari' => $cari,
        'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),


        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
