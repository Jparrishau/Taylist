<!-- The Modal -->
<div id="postDetailModal" class="details-modal fade">
  <!-- Modal content -->
  <div id="vueid" class="modal-content">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <template v-for="(photo, index) of data.photos">
        <template v-if="index == 0">
            <li data-target="#carousel-example-generic" v-bind:data-slide-to="index" class="active" ></li>
        </template>
        <template v-else>
            <li data-target="#carousel-example-generic" v-bind:data-slide-to="index" class=""></li>
        </template>
      </template>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <template v-for="(photo, index) of data.photos">
          <template v-if="index == 0">
            <div class="item active">
              <img v-bind:src="'/img/gallery/{{$category}}/' + photo.photo_path" v-bind:alt="photo.photo_path" style="width:100%; height:auto;">
            </div>
          </template>
          <template v-else>
            <div class="item">
              <img v-bind:src="'/img/gallery/{{$category}}/' + photo.photo_path" v-bind:alt="photo.photo_path" style="width:100%; height:auto;">
            </div>
          </template>
        </template>
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
        <p id="app"><b>Location:</b> @{{data.city}}, @{{data.state}}</p>
        <p><b>Asking Price:</b> $@{{data.asking_price}}</p>
        <p><b>Condition:</b> @{{data.item_condition}}</p>
        <p><b>Description:</b> @{{data.description}}</span></p>
      </div>
      <div id="question_menu" class="tab-pane fade">
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
      <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p>Some content in menu 2.</p>
      </div>
    </div>
  </div>
 </div>
</div>