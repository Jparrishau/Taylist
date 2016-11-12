<!-- The Modal -->
<div id="postDetailModal" class="details-modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('img/gallery/furniture/couch.jpg') }}" alt="Couch" style="width:100%; height:auto;">
      </div>
      <div class="item">
        <img src="{{ asset('img/gallery/furniture/couch_2.jpg') }}" alt="Couch" style="width:100%; height:auto;">
      </div>
      <div class="item">
        <img src="{{ asset('img/gallery/furniture/couch_3.jpg') }}" alt="Couch" style="width:100%; height:auto;">
      </div>
    </div>
  
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
  <div class="row" style="max-width:100%; margin:0 1px;">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#detail_menu"><i class="ti-menu-alt"></i> <b>DETAILS</b></a></li>
      <li><a data-toggle="tab" href="#question_menu"><i class="ti-help"></i> <b>QUESTIONS</b></a></li>
      <li><a data-toggle="tab" href="#menu2"><i class="ti-bar-chart-alt"></i> <b>MENU</b></a></li>
    </ul>

    <div class="tab-content">
      <div id="detail_menu" class="tab-pane fade in active">
        <h3>Item Details</h3>
        <hr style="border-bottom: 1px solid #ddd;" />
        <p><b>Location:</b> Filler</p>
        <p><b>Asking Price:</b> $0.00</p>
        <p><b>Condition:</b> Filler</p>
        <p><b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.z Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>
      </div>
      <div id="question_menu" class="tab-pane fade">
        <h3>Questions</h3>
            <hr style="border-bottom: 1px solid #ddd;" />
                <p>No questions have been asked.</p>  
            <hr style="border-bottom: 1px solid #ddd;" /> 
            <a href="#" class="btn btn-primary js-ad-question" data-category="" data-id=""
               data-owner_id="" data-ad_id=""
               data-target="#dialog-sales-ask-question" data-toggle="modal">
                <i class="ti-help icon-fw"></i> Ask a Question
            </a>
        </div>
      <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p>Some content in menu 2.</p>
      </div>
    </div>
  </div>
 </div>
</div>