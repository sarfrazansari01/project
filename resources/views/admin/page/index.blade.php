<?php
/**
 * Page Add/Edit Form 
 * 
 * @created    08/04/2020
 * @package    Dr Sharda Ayurveda
 * @copyright  Copyright (C) 2020
 * @license    Proprietary
 * @author     Mohit Thakur
 */
?>
@extends('layouts.admin')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Page Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Page Form</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@include('../partials/message')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Summary</h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> SR No. </th>
                                    <th> Name </th>
                                    <th> Meta Title </th>
                                    <th> Meta Keyword </th>
                                    <th> Meta Description </th>
                                    <th> OG Title </th>
                                    <th> OG Description </th>
                                    <th> OG Image </th>
                                    <th> Canonical URL </th>
                                    <th> Is Active </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($records as $record)
                                <tr class="odd gradeX">
                                    <td> {{ $record->id }} </td>
                                    <td> {{ $record->name }} </td>
                                    <td> {{ $record->meta_title }} </td>
                                    <td> {{ $record->meta_keywords }} </td>
                                    <td> {{ mb_strimwidth($record->meta_description, 0, 100, "...") }} </td>
                                    <td> {{ $record->og_title }} </td>
                                    <td> {{ mb_strimwidth($record->og_description, 0, 100, "...") }} </td>
                                    <td> {{ $record->og_image }} </td>
                                    <td> {{ $record->canonical_url }} </td>
                                    <td> {{ $record->is_active }} </td>
                                    <td>
                                        <a href="{{ route('pages.edit', $record->id) }}" title="Edit" class="icon currency-color">
                                            <i class=" fa fa-edit"></i>
                                        </a>

                                        <a href="{{ route('pages.destroy', $record->id) }}" title="Delete" class="icon lightBlue-color">
                                            <i class=" fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <th> SR No. </th>
                            <th> Name </th>
                            <th> Meta Title </th>
                            <th> Meta Keyword </th>
                            <th> Meta Description </th>
                            <th> OG Title </th>
                            <th> OG Description </th>
                            <th> OG Image </th>
                            <th> Canonical URL </th>
                            <th> Is Active </th>
                            <th> Actions </th>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@stop