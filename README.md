# PHP MVC Framework

This framework works by routing everything through the index.php file by using .htaccess to rewrite urls, and passing parameters, eg. going to _app.com/posts/edit/1_ will be rewritten to _index.php?url=posts/edit/1_ and will load the posts controller and call the _edit_ method from the posts controller with the parameter "1".

## Model

- for data related logic
- interacts with the DB
- communicates with the Controller
- can sometimes upate the view

## View

- what the user sees in the browser
- usually consists of html & css
- communicated with the controller
- can be passed dynamic values form the controller

## Controller

- receives input from the url, form, view, etc
- process requests (POST, GET, etc)
- gets data from the model
- passes data to the view
