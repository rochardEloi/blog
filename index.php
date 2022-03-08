<?php
session_start();
include "./class/auth.class.php";

$auth = new Authentificator();
$user = $auth->verifySession();
if($user != null){

}

//Get page title
$utils = new Utils();
$pageTitle = $utils->Variables("site_title");


$article = new Article();
$allArticles = $article->getArticles();

$categories = new Category();
$allCategories = $categories->getCategory();

$type = new Type();
$allType = $type->getType();


//print_r($allArticles);
//$signup = new Signup("Eloi", "Rochard", "eloirochard1234@gmail.com", "1234", "ADMIN", "enable","50949444235");
//$signup->CreateAccount();

//$auth = new Authentificator();
//echo $auth->Authentification("eloirochard1234@gmail.com", "1234");
//echo $auth->verifySession("http://google.com");

//$article = new Article();
//$article->createArticle("Mon Premier Article", "Mon contenu", "Description", 2, "enable");
//$article->updateArticleStatus("disable", 1);



?>