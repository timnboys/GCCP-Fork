<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    /**
     *
     * Get Setting directly from the database every time. May reduce performance.
     *
     * @param $key
     * @param null $default
     * @return null
     */
    public static function Get($key, $default = null)
    {

       $key = Setting::where("key", $key)->first();

       if($key->value == null)
       {

           return $default;

       } else {

           return $key->value;

       }

    }

    /**
     *
     * Get Setting and store in cache for quicker retrieval later. Increases performance.
     *
     * @param $key
     * @param null $default
     * @param bool $force
     */
    public static function CGet($key, $default = null, $force = false)
    {

        // Get from cache.

    }

}
