@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/gallery/modals.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery/gallery.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default" style="height:90%;">
                <div class="panel-heading bold-ln-height-2"> {{ucfirst(trans($category))}}
                    <div class="btn-group pull-right">
                        <a href="#addPostModal" id="addPostModalBtn" class="btn btn-default" data-toggle="modal" title="Add Post">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
               
                <div class="panel-body">
                    <div class="row">
                        @if(count($posts) > 0)
                            @foreach($posts as $post)
                                <div class="gallery-row col-lg-3 col-md-4 col-sm-6">
                                    <a href="#postDetailModal-{{$post->id}}" data-toggle="modal" data-post="{{$post}}" >
                                        <img class="gallery-img" src="{{ asset('img/gallery/' . $category . '/' . $post->photos[0]->photo_path) }}"
                                        alt="Couch" style="width:100%; height:100%;">
                                    </a>
                                </div>
                            @include('gallery/detail_modal')
                            @endforeach
                        @else
                            <!-- No posts exist. Give notice.-->
                            <p>Nothing to see here. Move along.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
    
<!-- Modal Includes -->
@include('gallery/add_post_modal')
@endsection

@section('js')
@endsection

