<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class utils_helper {
    
    public static function returnJSON(&$app, &$feed) {
        $app->output
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($feed, 
                        JSON_PRETTY_PRINT | 
                        JSON_UNESCAPED_UNICODE | 
                        JSON_UNESCAPED_SLASHES));
    }
}