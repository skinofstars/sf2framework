<?php

// NOT USING ANYMORE .. this has been split off into /web/front.php

require_once __DIR__.'/autoload.php';
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 
$request = Request::createFromGlobals();
 
$input = $request->get('name', 'World');
 
$response = new Response(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
 
$response->send();


/**
 * some request possibles
 */
// the URI being requested (e.g. /about) minus any query parameters
$request->getPathInfo();
 
// retrieve GET and POST variables respectively
$request->query->get('foo');
$request->request->get('bar', 'default value if bar does not exist');
 
// retrieve SERVER variables
$request->server->get('HTTP_HOST');
 
// retrieves an instance of UploadedFile identified by foo
$request->files->get('foo');
 
// retrieve a COOKIE value
$request->cookies->get('PHPSESSID');
 
// retrieve an HTTP request header, with normalized, lowercase keys
$request->headers->get('host');
$request->headers->get('content_type');
 
$request->getMethod();    // GET, POST, PUT, DELETE, HEAD
$request->getLanguages(); // an array of languages the client accepts

$request = Request::create('/index.php?name=Fabien');