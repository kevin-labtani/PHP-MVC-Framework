# PHP MVC Framework

This framework works by routing everything through the index.php file by using .htaccess to rewrite urls, and passing parameters, eg. going to _app.com/posts/edit/1_ will be rewritten to _index.php?url=posts/edit/1_ and will load the posts controller and call the _edit_ method from the posts controller with the parameter "1".

## To Use

- Complete your config in app/config/config.php  
- Change the RewriteBase to your folder in /public/.htaccess
