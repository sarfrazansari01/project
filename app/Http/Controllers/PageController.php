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

use App\Models\Page;
use Request;
use DB;

class PageController extends AppController {

    // Set for public Model name
    public $modelName = "Page";
    //Define validation rules for the request
    public $rules = array(
        'name' => 'required'
    );

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $conditions = $this->getSearchConditions([
            ["view_field" => "name", "type" => "string"],
        ]);

        if ($conditions) {
            //Paginate page according to search filter
            $records = Page::sortable()->whereRaw($conditions)->paginate(PAGINATION_LIMIT);
        } else {
            //Paginate page without search filter
            $records = Page::sortable()->paginate(PAGINATION_LIMIT);
        }

        return view('admin.page.index', ['records' => $records]);
        //return view('admin.page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //Return Page Add form
        return view('admin.page.form');
    }

    /**
     * Adds new record
     * @return type
     */
    public function store($route = NULL) {
        //rote set for redirect the after save pages summary
        $route = "admin/pages";
        //Call parent method for add the Contact details
        return parent::add_record($route);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //Get a records in page table
        $page = Page::findOrFail($id);
        //Set id and records to view
        return view('admin.page.form', compact("id", "page"));
    }

    /**
     * Update the specified resource in storage.
     * @param Slug $slug
     * @return type
     */
    public function update(Page $page, $route = NULL) {
        //rote set for redirect the after save pages summary
        $route = "admin/pages";
        //Call parent method foe update the slug details
        return parent::edit_record($page, $route);
    }

    /**
     * Deletes record
     * @param Contact $contact
     * @return type
     */
    public function destroy(Page $page) {
        //Destroy function call the show method
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page) {
        //rote set for redirect the after save pages summary
        $route = "admin/pages";

        //Call a destroy action in main controller to delete a record soft delete
        return parent::delete_record($page, $route);
    }

    /**
     * Status update Existing Record
     * @param type $id , $status
     */
    public function admin_toggleStatus(Page $page, $is_active) {
        //rote set for redirect the after save pages summary
        $route = "admin/pages";

        //Call a destroy action in main controller to delete a record soft delete
        return parent::toggleStatus($page, $is_active, $route);
    }

}
