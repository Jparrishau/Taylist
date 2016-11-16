@extends('layouts.app')

@section('css')
<link href="{{ asset('css/gallery/vuemodals.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include('gallery/vuejs_detail_modal')
        </div>
    </div> 
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.js"></script>
<script src="{{ asset('js/gallery/vue_modal.js') }}"></script>
@endsection