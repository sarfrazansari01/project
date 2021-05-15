<?php

/**
 * Functions
 * 
 * 
 * @created    02/03/2019
 * @package    Dairy
 * @copyright  Copyright (C) 2019
 * @author     Mohit Thakur
 */

/**
 * 
 * @param type $data
 */
function debug($data)
{
    $bt = debug_backtrace();
    $caller = array_shift($bt);
    
    echo "<pre>";
    echo "<b>" . $caller["file"] . " : " . $caller["line"] . "</b><br/>";
    print_r($data);
    echo "</pre>";
}

/**
 * 
 * @return string|int
 */
function memory_used() 
{
    if (!defined ('LARAVEL_INITIAL_MEMORY'))
    {
        return 0;
    }
    
    $mem = round((memory_get_peak_usage() - LARAVEL_INITIAL_MEMORY)/1024);
    
    if ($mem > 1024)
    {
        $mem = round($mem / 1024, 2);
        
        $mem .= " Mb";
    }
    else
    {
        $mem .= " Kb";
    }
    
    return $mem;
}

/**
 * 
 * @return int
 */
function exec_time()
{
    if (!defined ('LARAVEL_START'))
    {
        return 0;
    }
    
    $time = microtime(true) - LARAVEL_START;
    
    if ($time > 100)
    {
        $time = round($time);
    }
    else if ($time > 10)
    {
        $time = round($time, 2);
    }
    else
    {
        $time = round($time, 3);
    }

    return $time . " Seconds";
}

/**
 * 
 * @param type $logs
 * @return type
 */
function get_query_log($logs)
{
    foreach ($logs as $k => $log)
    {
        if ($log["bindings"])
        {
            foreach($log["bindings"] as $v)
            {
                $pos = strpos($log["query"], "?");
                
                if ($pos !== false) {
                    $log["query"] = substr_replace($log["query"], $v, $pos, 1);
                }
            }
            
            $logs[$k]["query"] = $log["query"];
        }
    }
    
    return $logs;
}

function get_valid_date($date)
{
    $date_str = str_replace(array("/", "."), "-", $date);    
    $date_str = str_replace(" ", "", $date_str);
    
    if (substr($date_str, -4) <= 1970 || !strtotime($date_str))
    {
        return false;
    }
    
    return $date_str;
}

