<?php

/**
* Page model
* 
* @created    08/04/2020
* @package    Dr Sharda Ayurveda
* @copyright  Copyright (C) 2020
* @license    Proprietary
* @author     Mohit Thakur
*/
namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends AppModel {

    use Sortable,SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    //protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug_id', 'meta_title', 'meta_keywords', 'meta_description', 'og_title', 'og_description', 'og_image', 'canonical_url', 'is_active'];

    /**
     * The attributes that should be mutated to deleted_at.
     *
     * @var array
     */
    protected $deleted_at = ['deleted_at'];

}
