@extends('layouts.app')

<link href="{{ asset('css/gallery/modals.css') }}" rel="stylesheet">
<link href="{{ asset('css/gallery/gallery.css') }}" rel="stylesheet">

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bold-ln-height-2">Home
                    <div class="btn-group pull-right">
                        <a href="#addPostModal" class="btn btn-default" data-toggle="modal" data-target="addPostModal" id="addPostModalBtn" title="Add Post">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
               
                <div class="panel-body">
                    <div class="row">
                       
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
    
@include('gallery/detail_modal')
@include('gallery/add_post_modal')
<script src="{{ asset('js/gallery/modals.js') }}"></script>
@endsection


