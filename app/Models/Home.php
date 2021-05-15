<?php

/**
* Home model
* 
* @created    08/04/2020
* @package    Dr Sharda Ayurveda
* @copyright  Copyright (C) 2020
* @license    Proprietary
* @author     Mohit Thakur
*/
namespace App\Models;

use Illuminate\Notifications\Notifiable;

class Home extends AppModel {

    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

}
