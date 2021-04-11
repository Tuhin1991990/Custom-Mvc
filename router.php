<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = empty($explode_url[0]) ? 'tasks':$explode_url[0];
            $request->action = empty($explode_url[1]) ? 'index':$explode_url[1];
            $request->params = array_slice($explode_url, 2);

    }
}
?>