@extends('main')   
@section('content') 
<style>
    .daterangepicker.ltr.show-calendar.opensleft {
    top: 50% !important;
}
</style>
<script>
//function allowDrop(ev) {
//  ev.preventDefault();
//}
//
//function drag(ev) {
//  ev.dataTransfer.setData("text", ev.target.id);
//}
//
//function drop(ev) {
//  ev.preventDefault();
//  var data = ev.dataTransfer.getData("text");
//  ev.target.appendChild(document.getElementById(data));
//}


</script>

<div class="row m-3 pb-3" id="mainDashboard"  >
    
    <div class="col-md-3 mainColumn">
        <div class="card card-success " ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class="card-header father">
                <h3 class="card-title">All together father a</h3>

                <div class="card-tools">
<!--                  <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>-->
                </div>
                <!-- /.card-tools -->
            </div>
            
            
            <!-- /.card-header -->
            <!-- /.card-header -->
            <!-- /.card-header -->
            <div class="card-body child"  id="a" draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together a</h3>

                        <div class="card-tools">
                            <button type="button" onclick="myFunction(event)" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" onclick="myFunction(event)" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" id="collapse" class="btn btn-tool omer" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" onclick="myFunction(event)" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        The body of the card after card refresh
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            
            <!-- /.card-header -->
            <div class="card-body child"  id="b"  draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together b</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        The body of the card after card refresh
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            
            
      
            
            
<!--                <div class="card card-success">-->
                    <div class="card-header">
                        <h3 class="card-title">down menu</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-lg"><i class="fa-solid fa-plus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                <!--</div>-->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    
    
    
    
    
    
        <div class="card card-success " ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class="card-header father">
                <h3 class="card-title">All together father b</h3>

                <div class="card-tools">
<!--                  <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>-->
                </div>
                <!-- /.card-tools -->
            </div>
            
            
            
            
            <!-- /.card-header -->
           
            <div class="card-body child"  id="c"  draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together c</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        The body of the card after card refresh
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            </li>
            
            
            
            <!-- /.card-header -->
            <div class="card-body child"  id="d"   draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together d</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        The body of the card after card refresh
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            
            
      
            
            
            
            
            
            
        </div>
        
    </div>
    



 <!--Modal -->
<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa-solid fa-file-circle-plus"></i> Add New Card
          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
                        <label>Card name</label>
              <input type="text" class="form-control" id="cardName" placeholder="Card name" style="width: 100%;">
              </div>
          <div class="row">
              <div class="col-12">
                  <div class="mb-3">
                      <label for="Description" class="form-label">Description</label>
                      <textarea class="form-control" id="descriptionInput" rows="5"></textarea>


                      <div class="form-group">
                          <label>Members</label>
                          <select class="select2"id="members"  multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                              <option>omer avhar</option>
                              <option>michal lev</option>
                              <option>esti amit</option>

                          </select>
                      </div>
                      
                   <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label>Requester</label>
                        <input type="text" id="requester" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                       <div class="col-6">
                      <div class="form-group">
                        <label>Implementor</label>
                        <input type="text" id="implementor" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>  
                   </div>
                      <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label>Devloper</label>
                        <input type="text" id="developer" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                       <div class="col-6">
                      <div class="form-group">
                        <label>Devlopment type</label>
                        <input type="text" class="form-control" id="devlopmentType" placeholder="Enter ...">
                      </div>
                    </div>  
                   </div>
                      
                      <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                          <label>Priority</label>
                          <select class="select2" id="priority" data-placeholder="Select a State" style="width: 100%;">
                              <option>omer avhar</option>
                              <option>michal lev</option>
                              <option>esti amit</option>

                          </select>
                      </div>
                    </div>
                       <div class="col-6">
                      <div class="form-group">
                          <label>Status</label>
                          <select class="select2" id="status"  data-placeholder="Select a State" style="width: 100%;">
                              <option>omer avhar</option>
                              <option>michal lev</option>
                              <option>esti amit</option>

                          </select>
                      </div>
                    </div>  
                   </div>
                      
                    <div class="form-group">
                        <label>Labels</label>
                        <select class="select2" multiple="multiple" id="labels" data-placeholder="Select a State" style="width: 100%;">
                            <option>omer avhar</option>
                            <option>michal lev</option>
                            <option>esti amit</option>

                        </select>
                    </div>
                      
                      <div class="form-group">
                          <label>Date and time range:</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                              </div>
                              <input type="text" class="form-control pull-right" id="reservationtime">
                          </div>
                      </div> 
                      
<!--                      <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="exampleInputFile">
                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                  <span class="input-group-text">Upload</span>
                              </div>
                          </div>
                      </div>-->
                      
                      
                  </div>
              </div>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="saveChangesModal" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@stop