<?php

/**
 * App Controller
 * 
 * @created    08/04/2020
 * @package    Dr Sharda Ayurveda
 * @copyright  Copyright (C) 2020
 * @license    Proprietary
 * @author     Mohit Thakur
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DateUtility;

class AppController extends Controller {

    public $rules = [], $modelName = "";

    /**
     * Gets Search conditions for summary
     * @param type $query
     */
    public function getSearchConditions($query) {
        $conditions = $search = [];

        $parameters = request()->all();

        foreach ($query as $arr) {
            //set view field if view field not given
            $view_field = $arr["view_field"];

            $arr["field"] = isset($arr["field"]) ? $arr["field"] : $view_field;
            $arr["op"] = isset($arr["op"]) ? $arr["op"] : "=";
            $arr["type"] = isset($arr["type"]) ? $arr["type"] : "";

            //set empty search for view
            $search[$view_field] = "";

            if (!isset($parameters[$view_field]) || strlen($parameters[$view_field]) == 0) {
                continue;
            }

            $search[$view_field] = $parameters[$view_field];

            $value = trim($parameters[$view_field]);

            //creating condition depends upon its field type
            switch (strtolower($arr["type"])) {
                case "string" :
                    $value = "%" . $value . "%";
                    $arr["op"] = "LIKE";
                    break;

                case "date":
                    $value = DateUtility::getDate($value);
                    break;

                case "integer":
                    $arr["op"] = "=";
                    break;
            }

            if (is_array($arr["field"])) {
                $condition = [];
                foreach ($arr["field"] as $f) {
                    $condition["OR"][] = [
                        "field" => $f,
                        "op" => $arr["op"],
                        "value" => $value
                    ];
                }
            } else {
                $condition = [
                    "field" => $arr["field"],
                    "op" => $arr["op"],
                    "value" => $value
                ];
            }

            $conditions["AND"][] = $condition;
        }

        $this->params = $search;

        return $this->_get_where($conditions);
    }

    /**
     * Add a newly created resource in storage.
     */
    public function add_record($route = NULL) {
        //Use laravel Validator helper and $this->rule is represented the which input field you have to mandatory and numaric
        $validator = Validator::make(Input::all(), $this->rules);

        //Get a model name and set
        $modelClass = "App\\" . $this->modelName;

        //Create a model object
        $model = new $modelClass();
        // Fill the are request parameter according model object table
        $model->fill(request()->all());

        //If validation rule pass then save the records
        if ($validator->passes() && $model->save()) {
            // Return success response
            return redirect($route)->withSuccess("$this->modelName Record saved successfully");
        }

        // Return Failure response
        return back()->withFailure("$this->modelName Failed to save record")->withErrors($validator)->withInput(Input::all());
    }

    /**
     * Edit the specified resource in storage.
     *
     * @param  int  $model
     * @return Response
     */
    public function edit_record($model, $route = NULL) {
        //Use laravel Validator helper and $this->rule is represented the which input field you have to mandatory and numaric
        $validator = Validator::make(Input::all(), $this->rules);

        // Fill the are request parameter according model object table
        $model->fill(request()->all());

        //If validation rule pass then update the records
        if ($validator->passes() && $model->save()) {
            // Return success response
            return redirect($route)->withSuccess("Record updated successfully");
        }

        // Return Failure response
        return back()->withFailure("Failed to update record")->withErrors($validator)->withInput(Input::all());
    }

    /**
     * Deletes record
     * @param type $model
     * @param type $route
     * @return type
     */
    public function delete_record($model, $route = NULL) {
        if ($model->delete()) {
            return redirect($route)->withSuccess("Record deleted successfully");
        }

        return back()->withFailure("Failed to delete Record due to having associated data");
    }

    /**
     * Common action to change status
     * @param type $model
     * @param type $status
     */
    public function toggleStatus($model, $status, $route = NULL) {
        $model->is_active = !$status;

        if ($model->save()) {
            return redirect($route)->withSuccess("Status updated successfully");
        }

        return back()->withFailure("Failed to update Status");
    }

    //******************************************* Private Functions ******************************************************//

    /**
     * Prepares where structure in for of Laravel request.
     * @param array $conditions
     * @return string
     */
    private function _get_where($conditions) {
        $where = [];

        $raw_where = '';

        foreach ($conditions as $operator => $data) {
            foreach ($data as $arr) {
                if (isset($arr["field"]) && isset($arr["value"])) {
                    $arr["op"] = isset($arr["op"]) ? $arr["op"] : "=";

                    $where[] = $arr["field"] . " " . $arr["op"] . " '" . $arr["value"] . "'";
                } else {
                    $where[] = get_where($arr);
                }
            }

            $raw_where .= "(" . implode(" $operator ", $where) . ")";
        }

        return $raw_where;
    }

}
