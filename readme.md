<h1>Dog Data 🐕</h1>

<h2>Premise</h2> 
<p>Dog Data was created by Sean Misra for Dynamic Web Applications (CSCI-E 15) at Harvard Extension, during the Spring 2017 semester. This project constitutes the final assignment of the course and is meant to emphasize Laravel, MVC, MySQL, form processing, and Eloquent ORM. The site is built with the LAMP stack (Linux, Apache, MySQL, and PHP).</p>

<h2>Installation</h2>
<ol>
    <li>Clone repo: <code>git clone git@github.com:seanmisra/a4.git</code></li>
    <li>Within the a4 folder, add composer dependencies: <code>composer install</code></li>
    <li>Create an .env file: <code>cp .env.example .env</code></li>
    <li>Generate an app key: <code>php artisan key:generate</code></li>
    <li>Set the document root to the public folder of the a4 directory</li>
    <li>In the .env file, ensure the database settings are configured correctly:
        <ul>
            <li>The DB_CONNECTION should be "mysql"</li>
            <li>Mostly likely, the DB_HOST and DB_PORT should be "localhost" and "3306" respectively</li> 
            <li>The DB_DATABASE should be a database created to be used with this app (where all tables will go)</li>
            <li>The DB_USERNAME should be root.</li>
            <li>The DB_PASSWORD should be root for MAMP users and left blank for XAMPP users</li>   
        </ul>
    </li> 
    <li>Run migrations and seed the database: <code>php artisan migrate:refresh --seed</code>
</ol> 

<h2>Credits</h2>
<ul>
    <li>Laravel 5</li>
    <li>jQuery</li>
    <li>jQuery UI</li>
    <li>Bootstrap</li>
    <li>Font Awesome</li>
    <li>Laravel Debugbar</li>
    <li>Laravel 5 log viewer</li>
    <li>Intervention Image</li>
    <li>All images are used responsibly. Most are from Pixabay; some are from Wikipedia</li>
    <li>Dog research from dogtime.com, akc.org, and mentalfloss.com</li>
    <li>HTML 5 slider starting point: http://codepen.io/the_ruther4d/pen/frbdH</li>
    <li>Toggle checkbox starting point: http://callmenick.com/post/css-toggle-switch-examples</li>
    <li>3D flip button starting point: https://codepen.io/robbue/pen/hJDlA</li>
    <li>JavaScript shuffle function: https://www.frankmitchell.org/2015/01/fisher-yates/</li>
</ul> 