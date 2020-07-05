<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ArticleModel {
    public static function index(){
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function save($data){
        $judul = $data['judul'];
        $isi = $data['isi'];
        $slug = str_replace(" ","-",strtolower($judul));
        $user_id = 1;

        $article = DB::table('articles')->insert([
            'judul' => $judul,
            'isi' => $isi,
            'slug' => $slug,
            'user_id' => $user_id
        ]);
        return $article;
    }

    public static function show($id){
        $content = DB::table('articles')->where('id', $id)->first();
        return $content;
    }

    public static function update($data, $id){
        $judul = $data['judul'];
        $isi = $data['isi'];
        $slug = str_replace(" ","-",strtolower($judul));

        $article = DB::table('articles')
            ->where('id', $id)
            ->update([
            'judul' => $judul,
            'isi' => $isi,
            'slug' => $slug,
        ]);
    }

    public static function destroy($id){
        DB::table('articles')->where('id', $id)->delete();
    }
}
