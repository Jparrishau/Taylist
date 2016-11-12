<!-- The Modal -->
<div id="addPostModal" class="add-post-modal">

  <!-- Modal content -->
  <div class="modal-content">
  <div class="modal-header">Add Post</div>
     <form class="form-horizontal margin-top-15" enctype="multipart/form-data" role="form" method="POST" action="{{ route('add-post') }}">
        {{ csrf_field() }}
        
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-4 control-label">Title</label>
    
            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
    
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" class="col-md-4 control-label">Description</label>
    
            <div class="col-md-6">
                <textarea id="description" name="description" style="resize:none;" class="form-control" rows="4" cols="50" required>{{ old('description') }}</textarea> 
    
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>
          
        <div class="form-group">
          <label for="photo-upload" class="col-md-4 control-label">Upload Photos</label>
            <div class="col-md-6">
              <input id="photo-upload" type="file" name="image"/>
            </div>
        </div>
    
        <div class="form-group">
            <div class="col-md-2 col-offset-8">
                <button type="submit" class="btn btn-primary pull-right">
                    Submit
                </button>
            </div>
        </div>
          <input id="category" name="category" type="hidden" value="1">
    </form>
  </div>
</div>