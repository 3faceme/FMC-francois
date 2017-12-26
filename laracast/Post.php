<?php

class Post
{
public $title;
public $published;

public function __construct($title, $published){
$this->title = $title;
$this->published = $published;
}
}


$posts = [
new Post('My first post', true),
new Post('My second post', true),
new Post('My third post', true),
new Post('My fourth post', false)
];

//var_dump($posts);

$unpublishedposts = array_filter($posts, function($post){
return !$post->published;
});

//var_dump($unpublishedposts);

$publishedposts = array_filter($posts, function($post){
return $post->published;
});

//var_dump($publishedposts);


$modified = array_map(function ($post) {
return ['title' => $post->title ];
}, $posts);

//var_dump($modified);

$titles = array_column($posts, 'title');

var_dump($titles);

