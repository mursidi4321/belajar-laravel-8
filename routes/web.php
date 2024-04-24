<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Joko ISwanto',
        'email' => 'joko@gmail.com',
        'image' => 'joko.png'
    ]);
});


Route::get('/blog', function () {
    $blog_posts = array(
        [
            'judul' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Sandika',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta numquam quis accusantium. Officia similique culpa architecto perspiciatis laudantium aspernatur quidem tempore, blanditiis aliquam necessitatibus amet itaque possimus accusantium vel nihil praesentium dolor repellat, nobis aut autem numquam. Libero hic harum in natus accusamus? Aliquid expedita saepe eveniet, voluptatem cum, dignissimos quisquam quibusdam unde molestiae laboriosam dolores error nostrum deleniti, excepturi consequatur eos delectus repellendus similique aspernatur veritatis corrupti doloremque? Exercitationem, maxime? Pariatur velit optio tempora alias! Accusantium quaerat molestiae sapiente pariatur, molestias cupiditate, deleniti non id architecto soluta ducimus, laboriosam harum totam dolor. Labore, facilis? Optio placeat est quia non?'
        ],
        [
            'judul' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Mursidi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, debitis sapiente, cupiditate velit veritatis amet eius beatae aliquam fugit, quo blanditiis vel? Iure inventore tempora fuga repellendus magnam sunt repudiandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a inventore, impedit eligendi sit corrupti possimus! Numquam nam modi inventore atque perspiciatis repellat vel consequuntur esse cupiditate quisquam excepturi, debitis, ratione distinctio maxime delectus? Quis dicta at perspiciatis, enim odit architecto earum ullam voluptates necessitatibus ipsum officiis a dolorem eligendi illo omnis? Excepturi sit est impedit dignissimos natus tenetur quod, aperiam aliquid odit numquam ut veritatis quasi, illum, minima officia at ea? Laboriosam, beatae ullam ut a voluptatem saepe quas dolorum error natus, vitae quia ab temporibus reprehenderit exercitationem nostrum molestiae, modi placeat inventore fugiat odit distinctio aspernatur eum porro repudiandae. Sequi magni possimus maxime fugiat cum qui culpa accusamus.'
        ],

    );
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// Single post

route::get('/posts/{slug}', function ($slug) {

    $blog_posts = array(
        [
            'judul' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Sandika',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta numquam quis accusantium. Officia similique culpa architecto perspiciatis laudantium aspernatur quidem tempore, blanditiis aliquam necessitatibus amet itaque possimus accusantium vel nihil praesentium dolor repellat, nobis aut autem numquam. Libero hic harum in natus accusamus? Aliquid expedita saepe eveniet, voluptatem cum, dignissimos quisquam quibusdam unde molestiae laboriosam dolores error nostrum deleniti, excepturi consequatur eos delectus repellendus similique aspernatur veritatis corrupti doloremque? Exercitationem, maxime? Pariatur velit optio tempora alias! Accusantium quaerat molestiae sapiente pariatur, molestias cupiditate, deleniti non id architecto soluta ducimus, laboriosam harum totam dolor. Labore, facilis? Optio placeat est quia non?'
        ],
        [
            'judul' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Mursidi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, debitis sapiente, cupiditate velit veritatis amet eius beatae aliquam fugit, quo blanditiis vel? Iure inventore tempora fuga repellendus magnam sunt repudiandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a inventore, impedit eligendi sit corrupti possimus! Numquam nam modi inventore atque perspiciatis repellat vel consequuntur esse cupiditate quisquam excepturi, debitis, ratione distinctio maxime delectus? Quis dicta at perspiciatis, enim odit architecto earum ullam voluptates necessitatibus ipsum officiis a dolorem eligendi illo omnis? Excepturi sit est impedit dignissimos natus tenetur quod, aperiam aliquid odit numquam ut veritatis quasi, illum, minima officia at ea? Laboriosam, beatae ullam ut a voluptatem saepe quas dolorum error natus, vitae quia ab temporibus reprehenderit exercitationem nostrum molestiae, modi placeat inventore fugiat odit distinctio aspernatur eum porro repudiandae. Sequi magni possimus maxime fugiat cum qui culpa accusamus.'
        ],

    );

    $new_post = array();

    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
