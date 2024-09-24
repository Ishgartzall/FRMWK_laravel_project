# Framework based programming Laravel Project of Victor Lequeux Audran

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Welcome to the Github repository of the Laravel project of Victor Lequeux Audran done for the course Framework Based Programmming at ITS !

## Use of Tailwind template and Blade component

In order to have a functional and clear Website, I used the PHP code of free pages templates in my views from the website Tailwind.

<p align="center">
    <img src = "public/img/capture_posts.jpg">
</p>

And to avoid redundancy between my pages I used Blade Components to factorize my code for common elements like the navigation bar and the header   

<p align="center">
    <img src = "public/img/capture_blade_components.jpg">
</p>

## Database 

My database is handled by Table plus and is using SQLite.

<p align="center">
    <img src = "public/img/capture_table_plus_home.jpg">
    <img src = "public/img/capture_database_posts.jpg">
</p>

To interact with  my database I am using Eloquent ORM models.  

<p align="center">
    <img src = "public/img/capture_eloquent_ORM_model.jpg">
</p>

## Post factory

To automatically fill the "posts" table in my database, I created a new factory `PostFactory.php` using Laravel's integrated tool, Eloquent: Factories. 

<p align="center">
    <img src = "public/img/capture_code_PostFactory.jpg">
</p>

I wanted to personalize it so that the names of post's authors sounded french. The PHP library `Fake` allows us to do that by modifying the value of the `APP_FAKER_LOCALE`variable to `fr_FR` in the `.env` file. The results are a blog page filled with 100 posts randomly generated but with french sounding authors :

<p align="center">
    <img src = "public/img/capture_autogen_posts.jpg">
</p>

NOTE : don't forget to add `use Illuminate\Database\Eloquent\Factories\HasFactory;` and `use HasFactory;` in the `Post.php` file located at `app\Models` to inform Laravel that you are using a factory in this model. 


## Commits History

Please note that all commits before the one named **"Merge branch 'recovered work'" (Sep 19, 2024 - ID: c55d8411d7fe51dc48da76154c67618c94d596e8)** are not relevant, as I encountered issues setting up the repository. Therefore, I will start explaining my modifications from this commit onward.

### Key Commits:

- **Implementation of model factory to autogenerate posts**  
  *Date: Sep 24, 2024*  
  This commit adds the possibility to autogenerate posts using the Model Factory features of Laravel.

- **No more 404 errors when clicking the navbar from a post**  
  *Date: Sep 19, 2024 - ID: 69b9bfcc2021056bc02b631c6ba6e535d5696d02*  
  This commit adds a `/` to all lines with an `href` going to another page in my `navbar.blade.php` component. It fixes the issue where clicking on a different page from a specific post resulted in a 404 error.

- **Test**  
  *Date: Sep 19, 2024 - ID: ef36231231839d6626220d073d4cbe16e27f094a*  
  This was a test commit to verify if my merge worked. I made a minor modification to this `README.md` file to ensure it was uploaded correctly to GitHub.

- **Merge branch 'recovered work'**  
  *Date: Sep 19, 2024 - ID: c55d8411d7fe51dc48da76154c67618c94d596e8*  
  After losing my work and recovering it, I was working on a detached head. This commit reattached my recovered work to the main branch.

