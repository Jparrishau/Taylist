<!-- The Modal -->
<div id="postDetailModal-{{$post->id}}" class="details-modal fade">
  <!-- Modal content -->
  <div id="vueid" class="modal-content">
    <div id="carousel-example-generic-{{$post->id}}" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($post->photos as $index => $photo)
          @if($index == 0 )
            <li data-target="#carousel-example-generic-{{$post->id}}" data-slide-to="{{$index}}" class="active"></li>
          @else
            <li data-target="#carousel-example-generic-{{$post->id}}" data-slide-to="{{$index}}"></li>
          @endif
       @endforeach
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      @foreach($post->photos as $index => $photo)
        @if($index == 0 )
          <div class="item active">
            <img src="/img/gallery/{{$category}}/{{$photo->photo_path}}" style="width:100%; height:auto;">
          </div>
        @else
          <div class="item">
            <img src="/img/gallery/{{$category}}/{{$photo->photo_path}}" style="width:100%; height:auto;">
          </div>
        @endif
    @endforeach
    </div>
  
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic-{{$post->id}}" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic-{{$post->id}}" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
  <div class="row" style="max-width:100%; margin:0 1px;">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#detail_menu-{{$post->id}}"><i class="ti-menu-alt"></i> <b>DETAILS</b></a></li>
      <li><a data-toggle="tab" href="#question_menu-{{$post->id}}"><i class="ti-help"></i> <b>QUESTIONS</b></a></li>
      <li><a data-toggle="tab" href="#loc-{{$post->id}}"><i class="ti-bar-chart-alt"></i> <b>CONTACT</b></a></li>
    </ul>

    <div class="tab-content">
      <div id="detail_menu-{{$post->id}}" class="tab-pane fade in active">
        <h3>Item Details</h3>
        <hr style="border-bottom: 1px solid #ddd;" />
        <p><b>Location:</b> {{$post->city}}, {{$post->state}}</p>
        <p><b>Asking Price:</b> ${{$post->asking_price}}</p>
        <p><b>Condition:</b> {{$post->item_condition}}</p>
        <p><b>Description:</b> {{$post->description}}</span></p>
      </div>
      <div id="question_menu-{{$post->id}}" class="tab-pane fade">
        <h3>Questions</h3>
            <hr style="border-bottom: 1px solid #ddd;" />
                <p>No questions have been asked.</p>  
            <hr style="border-bottom: 1px solid #ddd;" /> 
            <a href="#" class="btn btn-primary js-ad-question center-block" data-category="" data-id=""
               data-owner_id="" data-ad_id=""
               data-target="#dialog-sales-ask-question" data-toggle="modal">
                <i class="ti-help icon-fw"></i> Ask a Question
            </a>
        </div>
      <div id="loc-{{$post->id}}" class="tab-pane fade">
        <h3>Contact</h3>
        <p><b>Email:</b> Jparrishau&commat;gmail.com</p>
        <p><b>Cell:</b> 334-796-2191</p>
      </div>
    </div>
  </div>
 </div>
</div>