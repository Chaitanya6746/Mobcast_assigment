![image](https://github.com/Chaitanya6746/Mobcast_assigment/assets/104977275/30b29e6c-5bc1-455c-abd4-027570cf2e16)

After adding searching,sorting and pagination:

![image](https://github.com/Chaitanya6746/Mobcast_assigment/assets/104977275/13082daf-2e67-4dcb-a597-99c05443a9f8)

To create a Laravel application that fetches and displays data from the given RSS feed endpoint with searching, sorting, and pagination features, follow these steps:

1)Set up a new Laravel project.

2)Create a controller to fetch the RSS feed data.

3)Create a view to display the data.

4)Use a JavaScript library for searching, sorting, and pagination (e.g., DataTables).

Step-by-Step Implementation:

Step 1: Set Up a New Laravel Project

If you haven't already, install Laravel and set up a new project:

1)composer create-project laravel/laravel rss_feed            
2)cd rss_feed

Step 2: Create a Controller

Generate a controller to handle the RSS feed data fetching and processing:

php artisan make:controller RssFeedController            
In app/Http/Controllers/RssFeedController.php:

write the code to fetch data from the endpoint->$response = Http::get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');

Step 3: Set Up Routes

In routes/web.php, define the route to the controller method:

Route::get('/', [RssFeedController::class, 'index']);

Step 4: Create the View

Create a view file resources/views/rss_feed.blade.php with the following content:

Write a html table code to display data

Step 5: Enable HTTP Client

Step 6: Import datatables for sorting,searching and pagination

Now run     
php artisan serve

This indicates pagination

![image](https://github.com/Chaitanya6746/Mobcast_assigment/assets/104977275/e014e768-84aa-48d2-8c1a-3022866ad196)


