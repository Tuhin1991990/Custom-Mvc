# Custom MVC todo

When accessing the website, the user will be automatically redirected to the index.php thanks to .htaccess file.

The index.php is requiring all the files that we will need for the instantiation of the dispatcher. After creating a instance of the Dispatch class, we are ready to set our routing logic.

Routing System:-

request.php
The goal of this file is to get the url requested by the user.

router.php
The router takes the url captured by the request.php and explode the url into 3 different parts on the “/” character

These inputs will be handled by the dispatcher. When a new request is loaded, it selects the controller and the action with parameters. So with only one method (dispatch()), we can launch all this routing logic.