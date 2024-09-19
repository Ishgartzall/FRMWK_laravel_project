<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Framework based programming Laravel Project of Victor Lequeux Audran

Welcome to the Github repository of the Laravel project of Victor Lequeux Audran done for the course Framework Based Programmming at ITS !

## Use of Tailwind template and Blade component

In order to have a functional and clear Website, I used the PHP code of free pages templates in my views from the website Tailwind.

<p align="center">
    <img src = "img/capture_posts.jpg">
</p>

And to avoid redundancy between my pages I used Blade Components to factorize my code for common elements like the navigation bar and the header   

<p align="center">
    <img src = "img/capture_blade_components.jpg">
</p>

## Database 

My database is handled by Table plus and is using SQLite.

<p align="center">
    <img src = "img/capture_table_plus_home.jpg">
    <img src = "img/capture_database_posts.jpg">
</p>

To interact with  my database I am using Eloquent ORM models.  

<p align="center">
    <img src = "img/capture_eloquent_ORM_model.jpg">
</p>

### Commits History 
Regarding the code pushed on Github, please be aware that all the commits before the one named "Merge branch 'recovered work'" (Sep 19 2024 - id : c55d8411d7fe51dc48da76154c67618c94d596e8) are not to consider : I had issues setting up this repository (that's why I will start explaining my modifications from this commit  and not before).
<ul>

<li> No more 404 when cliking navbar from a post - 19 sep 2024 - 69b9bfcc2021056bc02b631c6ba6e535d5696d02 : this commits was to had '/' in all the line with an href going to another page of my navbar.blade.php component to avoid 404 error when clicking on another page from the page of a specific post </li> 

<li> Test - 19 sep 2024 - ef36231231839d6626220d073d4cbe16e27f094a : I wasn't sure if my merge worked so I tried modifiying just this README.md files to see if it uploaded it on Github and it worked </li> 

<li> Merge branch 'recovered work' - 19 sep 2024 - c55d8411d7fe51dc48da76154c67618c94d596e8 : as I said I had issues before I lost my work and I had to recover it so I worked on a detached head, this commits was to reattach my recovered work to the main branch.
c55d8411d7fe51dc48da76154c67618c94d596e8 </li>
</ul>
