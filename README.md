## Prerequisites
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    composer install
    composer update</pre>
</li>
<li>Rename .env.example to .env and provide your database details there.</li>
<li>It needs a database table to store registered users. Run <code>php artisan migrate</code> to import the tables.</li>
<li>Run <pre>php artisan key:generate</pre> </li>

</ul>

## Reference Post
<a href="https://justlaravel.com/middleware-laravel-content-restriction-user-role/">https://justlaravel.com/middleware-laravel-content-restriction-user-role/
</a>

## Demo and Code Explanation Video
https://www.youtube.com/watch?v=DkMmy-KRRTE&list=PLJKqSeQP_mlKUcBB8IC1LSWcIUYGldNuE

## Working Demo
http://demos.justlaravel.com/middleware-laravel-content-restriction-user-role
