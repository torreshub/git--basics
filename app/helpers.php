<?php

if(!function_exists('activeClass')) {
    function activeClass($route)
    {
        return Request::path() == $route ? 'class="active"' : '';
    }
}


