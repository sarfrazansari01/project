<?php

/**
* App model
* 
* @created    08/04/2020
* @package    Dr Sharda Ayurveda
* @copyright  Copyright (C) 2020
* @license    Proprietary
* @author     Mohit Thakur
*/

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\Auth;

abstract class AppModel extends \Illuminate\Database\Eloquent\Model {

    public static $authUser = [];
    //format for saving in database
    protected $dateFormat = "Y-m-d H:i:s";
    protected $createdBy = true, $updatedBy = true, $updatedAt = true, $isActive = true;

    /**
     * Listen for event
     */
    protected static function boot() {
        self::$authUser = Auth::user();

        if (self::$authUser) {
            self::$authUser = self::$authUser->toArray();
        }

        //extending Illuminate\Database\Eloquent\Model class, it is calling the boot method for that Model class.
        parent::boot();

        static::saving(function($model) {
            return $model->beforeSave($model);
        });

        static::updating(function($model) {
            return $model->beforeSave($model);
        });
    }

    /**
     * event before save
     * @return bool
     */
    protected function beforeSave($model) {
        // $this->exists is return if record is exist or not
        if ($this->exists) {
            // Checked the column name in database
            if (Schema::hasColumn($model->table, 'updated_by')) {
                //Set auth user id for updated by field
                $this->setAttribute("updated_by", self::$authUser);
            }
        } else {
            // Checked the column name in database
            if (Schema::hasColumn($model->table, 'is_active')) {
                //Set is_active = 1 for all add records
                $this->setAttribute("is_active", 1);
            }

            // Checked the column name in database
            if (Schema::hasColumn($model->table, 'created_by')) {
                //Set auth user id for created_by field
                $this->setAttribute("created_by", self::$authUser);
            }
        }
        return true;
    }

}
