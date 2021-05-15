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
                        <h3 class="card-title">Page Add/Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    
                     @if(isset($page))
                        {{ Form::model($page, array('route' => array('pages.update', $page->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}
                        @else
                        {!! Form::open(array('url' => 'admin/pages', 'class' => 'form-horizontal')) !!}
                        @endif	
                        {{ csrf_field() }}
                        {{ Form::hidden('is_active', '1') }}
                        <div class="card-body">
                            <div class="form-group row">
                                {!! Form::label('Meta Name', 'Meta Name', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Meta Name', 'required' => 'required')) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('Meta Title', 'Meta Title', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('meta_title', null, array('class' => 'form-control', 'placeholder' => 'Meta Title', 'required' => 'required')) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('Meta Keyword', 'Meta Keyword', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('meta_keywords', null, array('class' => 'form-control', 'placeholder' => 'Meta Keyword')) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('Meta Description', 'Meta Description', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::textarea('meta_description',null,['class'=>'form-control', 'rows' => 5, 'cols' => 40, 'placeholder' => 'Meta Description']) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('OG Title', 'OG Title', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('og_title', null, array('class' => 'form-control', 'placeholder' => 'OG Title')) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('OG Description', 'OG Description', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::textarea('og_description',null,['class'=>'form-control', 'rows' => 5, 'cols' => 40, 'placeholder' => 'OG Description']) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('OG Image', 'OG Image', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('og_image', null, array('class' => 'form-control', 'placeholder' => 'OG Image')) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('Canonical URL', 'Canonical URL', array('class' => 'control-label col-md-4 col-sm-4 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('canonical_url', null, array('class' => 'form-control', 'placeholder' => 'Canonical URL')) !!}
                                    <!--<input type="text" name="name" />-->
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-4 col-xs-offset-0">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div> 
                            </div>
                        </div>
                        {!! Form::close() !!}
                    <!-- form start -->
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