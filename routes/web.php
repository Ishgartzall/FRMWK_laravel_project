<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //NE PAS OUBLIER !



//cette commande veut dire : lorsqu'on accède à l'URL '/' (càd la racine du site), lance la fonction suivante : 
//retourne la view (= la page web avec son code HTML son style CSS, etc... mais écrit en PHP) nommée "Welcome" qui ici est la page d'accueil de Laravel   
Route::get('/', function () {
    return view('home', ['title'=>'Home page']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About page']);
});

Route::get('/posts', function () {
    return view('posts',['title'=>'Blog', 'posts'=> Post::all()]);
});

Route::get('/posts/{post:slug}',function(Post $post){
    
    //$post=Post::find($id);

    return view('post',['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact page']);
});
/* 
//Test d'une route qui renvoie juste une chaine de caractère quand on vas sur l'URL http://127.0.0.1:8000/page_pour_dire_bonjour
Route::get('/test_page_pour_dire_bonjour',function(){
    return 'Bonjour et bienvenue sur mon site';
});

//Si je veux récupérer des infos sur l'utilisateur (son nom par exemple s'il s'est connecté via un formulaire je dois faire comme ceci)
Route::get('/test_recup_info_utilisateur',function(Request $request){
    return [ //si dans l'URL il y a l'info sur le nom par exemple http://127.0.0.1:8000/test_recup_info_utilisateur?name=Jack ça va l'afficher 
        "name" => $request -> input('name','utilisateur par defaut'), //mais si y a rien ça mettra le nom en 2ème paramètre, ici 'utilisateur par defaut' 
    ];
});

//Si je veux des vrais URL bien quali comme on peut trouver en vrai càd type http://127.0.0.1:8000/articles/titre_de_l_article-69 
//càd on veut des URL avec un "slug" (désigne le nom de l'objet concerné) suivi d'un numéro unique (id qui permet de l'identifier)  
Route::get('/test_URL_quali/{slug}-{id}',function(string $slug, string $id){
    return [
        "slug" => $slug,
        'id' => $id
    ];  //le problème pour l'instant c'est que je n'ai pas précisé ce que pouvais être un slug ou un ID du coup si par exemple 
        //je met des tirets dans mon slug ça va croire que tout ce qui est après le 1er tiret est l'id je veux donc pouvoir préciser 
        //les caractéristiques des élements de mon URL pour cela je dois rajouter :
})-> where([
        'id' => '[0-9]+', //mon id est constitué uniquement de chiffres et peut faire plusieurs caractères
        'slug' => '[a-z0-9\-]+' //mon slug peut être constitué de chiffres, de lettres et peut contenir des tirets, le + signifie 'ceci peut être répété pls fois'
]);


//là vu que je veux faire une route et ces sous-routes qui vont toutes commencer par le même URL je peux donc les grouper : toutes les routes 
//créées dans cette fonction prefix commenceront par l'URL /test_articles, pour modifier juste la route "racine" d'URL http://127.0.0.1:8000/test_articles/
//je dois donc seulement écrire Route:get('/',...), pour toute sous route ce sera Route:get('/{slug}-{id}',...) et elle aura pour URL 
//http://127.0.0.1:8000/test_articles/{slug}-{id} 

//Le même principe s'applique pour les noms, tout les noms commenceront par 'route_test_articles_' suivi de 'afficher' ou 'sommaire' par ex

Route::prefix('/test_articles')->name('route_test_articles_')->group(function(){
    //Si je veux URL quali et info utilisateur je dois faire :
    Route::get('/{slug}-{id}',function(string $slug, string $id,Request $request){ //l'ordre ds function n'a pas d'importance
        return [
            "slug" => $slug,
            'id' => $id,
            'name' => $request->input('name','utilisateur par defaut'),
        ];
    })-> where([
        'id' => '[0-9]+', 
        'slug' => '[a-z0-9\-]+' 
        ])->name('afficher');
        //l'URL http://127.0.0.1:8000/test_articles/titre-article-78?name=Jackson me renverra bien le slug, l'id et le nom de l'utilisateur
        
        //si je veux mettre un lien qui renvoi vers une autre page :
        Route::get('/',function(Request $request){
            return [ 
                "link" => \route('route_test_articles_afficher',['slug'=>'article-interessant','id'=>13]), 
            ];
        })->name('racine'); //ici on donne un nom à notre route pr faciliter son utilisation
        //pour que ça fonctionne il faut aussi avoir nommé la route pour afficher un article donc on rajoute -> name dans la route juste avant celle-ci aussi 
        //l'intérêt d'utiliser les noms de route au lieu de juste l'URL est que si je modifie un jour la manière de générer des URL 
        //(par exemple un '/' au lieu de '-' entre slug et id) ça mettra à jour tout seul les URL en changeant juste Route::get('/test_URL_quali_et_info_user/{slug}-{id}'      
});
*/