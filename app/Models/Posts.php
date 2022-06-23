<?php

namespace App\Models;

class Posts
{
    private static
    $blog_posts = [
        [
            'title' => 'blog1',
            'author' => 'vixiloc',
            'slug' => 'blog1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing 
        elit. Autem laboriosam fugit reiciendis id! Sit, nulla 
        asperiores? Animi obcaecati nulla beatae aut natus, pariatur 
        recusandae alias fugiat tenetur sapiente, ipsa cumque impedit 
        nobis laudantium. Quos animi voluptatem explicabo beatae 
        inventore totam iure expedita quibusdam commodi nihil. Optio, 
        voluptas quae? Nihil eum hic reprehenderit sunt, recusandae 
        accusantium fuga atque nemo culpa ea repellat dolorem eligendi 
        quibusdam, amet pariatur aperiam nisi excepturi! Provident 
        asperiores dolore reiciendis, quidem tempore repellat iste 
        ipsum iusto excepturi.'
        ],
        [
            'title' => 'blog2',
            'author' => 'vixiloc',
            'slug' => 'blog2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing 
        elit. Autem laboriosam fugit reiciendis id! Sit, nulla 
        asperiores? Animi obcaecati nulla beatae aut natus, pariatur 
        recusandae alias fugiat tenetur sapiente, ipsa cumque impedit 
        nobis laudantium. Quos animi voluptatem explicabo beatae 
        inventore totam iure expedita quibusdam commodi nihil. Optio, 
        voluptas quae? Nihil eum hic reprehenderit sunt, recusandae 
        accusantium fuga atque nemo culpa ea repellat dolorem eligendi 
        quibusdam, amet pariatur aperiam nisi excepturi! Provident 
        asperiores dolore reiciendis, quidem tempore repellat iste 
        ipsum iusto excepturi.'
        ]
    ];
    public static function all(){
        return self::$blog_posts;//statis menggunakan self kalau dinamis menggunakan $this->
    }

    public static function find($slug){
        $posts= self::$blog_posts;
    $s_post = [];
    foreach (self::$blog_posts as $posts) {
        if ($posts['slug'] === $slug) {
            $s_post = $posts;
        }
    }
    return $s_post;
    }
}
