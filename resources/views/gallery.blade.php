@extends('layouts.app')

<link href="{{ asset('css/gallery/modals.css') }}" rel="stylesheet">
<link href="{{ asset('css/gallery/gallery.css') }}" rel="stylesheet">

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bold-ln-height-2">Furniture
                    <div class="btn-group pull-right">
                        <a href="#addPostModal" class="btn btn-default" data-toggle="modal" data-target="addPostModal" id="addPostModalBtn" title="Add Post">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
               
                <div class="panel-body">
                    <div class="row">
                        @if(count($posts) > 0)
                            @foreach($posts as $post)
                                <div class="gallery-row col-lg-3 col-md-4 col-sm-6">
                                    <a href="#postDetailModal" id="postDetailModalBtn" data-toggle="modal" data-target="{{ $post['id'] }}">
                                        <img src="{{ asset('img/gallery/furniture/' . $post->photos[0]->photo_path) }}" alt="Couch" style="width:100%; height:100%;">
                                    </a>
                                </div>
                            @endforeach
                        @endif
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


