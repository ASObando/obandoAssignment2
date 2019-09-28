<?php
/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'XKCD Comic ',
        'pretty_uri' => false,
        'site_url' =>'https://anthony-obando-assignment2.herokuapp.com/' , //'https://csuphpdemo.herokuapp.com'
        'nav_menu' => [
            '' => 'Overview',
            'random-comic' => 'Random Comic',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
