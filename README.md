# simplePHP_Router
A beginner-friendly PHP Router I make. Feel free to submit corrections.
If you run into some errors right out of the box may be because you are laking the .htaccess files,
if you prefer, you can put the configurations on the server's config.
----------------------------------
.htacess

RewriteEngine on
RewriteRule ^$ public/ [L]
RewriteRule (.*) public/$1 [L]

----------------------------------
public/.htacess

DirectoryIndex index.php

RewriteEngine on
RewriteBase /

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php [QSA,L]

