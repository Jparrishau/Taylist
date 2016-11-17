@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/messenger.css') }}" rel="stylesheet">
@endsection

@section('content')
@if (Session::has('error_message'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('error_message') }}
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-xs-4">
            <h3>Recipients:</h3>
        </div>
        <div class="col-xs-8">
            <h3>Messages:</h3>
        </div>
        <div class="col-xs-4">
            <div class="recipient-area">
                @if($threads->count() > 0)
                    @foreach($threads as $thread)
                        <a href="{{ route('messages', $thread->id)}}" class="recipient-link">
                            <div class="recipient">
                                <b style="float:left;">{{ $thread->creator()->name }}</b><span style="float:right;">{{ $thread->updated_at->format('d M') }}</span><br>
                                <p style="float:left; font-size:small; font-style:italic; margin-top:5px;">{{ $thread->subject }}</p>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-xs-8" style="padding:0;">
             <div class="message-area">
              @if($threads->count() > 0)
                @foreach($threads as $thread)
                    <div class="message message-from">
                        <p>{{ $thread->latestMessage->body }}</p>
                    </div>
                @endforeach
            @endif
             </div>
            <div class="textarea-container">
                <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('messages.store') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input id="subject" name="subject" type="hidden" value="Question about fruit?">
                        <input id="recipient" name="recipient" type="hidden" value="2">
                        <textarea id="message-text" name="message-text" class="message-text-area form-control"
                            rows="2" cols="50" placeholder="Type your message here..." required>{{ old('message') }}</textarea>
                        <button class="message-submit-btn btn btn-default" type="submit" autofocus>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@endsection

@section('js')
@endsection