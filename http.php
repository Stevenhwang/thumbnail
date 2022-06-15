<?php
require  'vendor/autoload.php';

use Embed\Embed;

$http = new Swoole\Http\Server('0.0.0.0', 9501);
$http->on('Request', function ($request, $response) {
    if ($request->server['path_info'] == '/favicon.ico' || $request->server['request_uri'] == '/favicon.ico') {
        $response->end();
        return;
    }
    $body = json_decode($request->getContent());
    try{
      $embed = new Embed();
      $info = $embed->get($body->url);
      $resp = array(
                "title" => $info->title,
                "description" => $info->description,
                "url" => (string)$info->url,
                "image" => (string)$info->image
              );
      var_dump($resp);
    } catch (Exception $exception) {
      var_dump($exception);
      $resp = NULL;
    }
    $response->header('Content-Type', 'application/json; charset=utf-8');
    $response->end(json_encode($resp, JSON_FORCE_OBJECT));
});
$http->start();
?>
