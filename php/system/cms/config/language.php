<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Supported Languages
|--------------------------------------------------------------------------
|
| Contains all languages your site will store data in. Other languages can
| still be displayed via language files, thats totally different.
|
| Check for HTML equivilents for characters such as � with the URL below:
|    http://htmlhelp.com/reference/html40/entities/latin1.html
|
|
|    array('en'=> 'English', 'fr'=> 'French', 'de'=> 'German')
|
*/
$config['supported_languages'] = array(
    'cn' => array(
        'name'        => '简体中文',
        'folder'    => 'chinese_simplified',
        'direction'    => 'ltr',
        'codes'        => array('cn', 'chinese-simplified', 'zh_CN'),
        'ckeditor'    => null
    )
);

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| If no language is specified, which one to use? Must be in the array above
|
|    en
|
*/
$config['default_language'] = 'cn';
