<?php

namespace mykola\parser;
//require_once 'simple_html_dom.php';
//require_once 'ParserInterface.php';

/**
 * @author Victor Zinchenko <zinchenko.us@gmail.com>
 */
class Parser implements ParserInterface
{

    public function process(string $url, string $tag)
    {
       // Create DOM from URL or file
        $html = file_get_html($url);
        
        // Find all images
        foreach ($html->find($tag) as $element)
            echo $element . '<br>';
        
        // Find all links
//        foreach ($html->find('a') as $element)
//            echo $element->href . '<br>';
        
        $html->clear(); // Подчищаем за собой
        unset($html);
    }

}
