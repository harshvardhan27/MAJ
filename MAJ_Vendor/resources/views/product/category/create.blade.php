@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Category</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Category</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Create Category</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to Category List">
                            <a href="{{route('category')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('errors.error')
                        <form method="post" action="{{route('category.create.post')}}" autocomplete="off">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label class="control-label col-md-4 text-right" for="txtName">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtName" name="name" value="" placeholder="Name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-offset-4 col-md-8">
                                            <input type="submit" value="Create" name="create" class="btn btn-primary" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection