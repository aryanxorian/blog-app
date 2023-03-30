<?php 
namespace App\Models;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;
    public function __construct($title,$excerpt,$date,$body,$slug){
        $this->title= $title;
        $this->body =$body;
        $this->date =$date;
        $this->excerpt =$excerpt;
        $this->slug=$slug;

    }
    public static function find($slug){
        //from all the blog post find the one that matches the slug that was request
        $posts =static::all();
        return $posts->firstWhere('slug',$slug);

        
    }
    public static function all(){
        return cache()->rememberForever('posts.all',function(){
        return collect(File::files(resource_path("posts")))
        ->map( fn($file) =>YamlFrontMatter::parseFile($file))
        ->map(fn($document)=>new Post($document->title,$document->excerpt,$document->date,$document->body(),$document->slug))
        ->sortByDesc('date');
        });
    }

}