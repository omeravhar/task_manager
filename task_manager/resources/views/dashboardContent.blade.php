@extends('main')   
@section('content') 
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}


</script>

<div class="row m-3 pb-3" id="mainDashboard"  >
    
    <div class="col-md-3 mainColumn">
        <div class="card card-success" ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class="card-header">
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
            <div class="card-body child"  id="c" draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together 1</h3>

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
            
            <!-- /.card-header -->
            <div class="card-body child"  id="d"  draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together 2</h3>

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
                        <h3 class="card-title">All together 2</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#exampleModal" data-card-widget="maximize"><i class="fa-solid fa-plus"></i></button>
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
    
    
    
    
    
    
        <div class="card card-success" ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class="card-header">
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
           
            <div class="card-body"  id="f"  draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together 3</h3>

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
            <div class="card-body"  id="g"   draggable="true" ondragstart="drag(event)">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">All together 4</h3>

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
   




<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">
              <input type="text" class="form-control" id="cardName" placeholder="Card name">
          </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-9">
                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea class="form-control" id="DescriptionInput" rows="5"></textarea>
                </div>
                  <select class="selectpicker" multiple data-live-search="true">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>
              </div>
              <div class="col-3">
                 <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                      main features
                    </button>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#addMembers" aria-expanded="false" aria-controls="addMembers">
                      add members
                    </button>
                    <div class="collapse" id="addMembers">
                      <div class="card card-body">
                          <select class="selectpicker" multiple data-live-search="true">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>


                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#requester" aria-expanded="false" aria-controls="requester">
                        requester
                    </button>
                    <div class="collapse" id="requester">
                      <div class="card card-body">
                        <div class="input-group input-group-sm mb-3">
                            <input id="requesterNameInput" type="text" class="form-control" aria-label="requester name" aria-describedby="inputGroup-sizing-sm">
                        </div>
                      </div>
                    </div> 
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#sysaidTicket" aria-expanded="false" aria-controls="sysaidTicket">
                        sysaid ticket
                    </button>
                    <div class="collapse" id="sysaidTicket">
                      <div class="card card-body">
                          <div class="input-group input-group-sm mb-3">
                            <input id="sysaidTicketInput" type="text" class="form-control" aria-label="sysaid ticket" aria-describedby="inputGroup-sizing-sm">
                        </div>
                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#developmentType" aria-expanded="false" aria-controls="developmentType">
                        development type
                    </button>
                    <div class="collapse" id="developmentType">
                      <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#priority" aria-expanded="false" aria-controls="priority">
                        priority
                    </button>
                    <div class="collapse" id="priority">
                      <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#implementer" aria-expanded="false" aria-controls="implementer">
                        implementer
                    </button>
                    <div class="collapse" id="implementer">
                      <div class="card card-body">
                          <div class="input-group input-group-sm mb-3">
                            <input id="implementerInput" type="text" class="form-control" aria-label="requester name" aria-describedby="inputGroup-sizing-sm">
                        </div>
                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#developer" aria-expanded="false" aria-controls="developer">
                        Developer
                    </button>
                    <div class="collapse" id="developer">
                      <div class="card card-body">
                          <div class="input-group input-group-sm mb-3">
                            <input id="developerInput" type="text" class="form-control" aria-label="requester name" aria-describedby="inputGroup-sizing-sm">
                        </div>
                      </div>
                    </div> 
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#status" aria-expanded="false" aria-controls="status">
                        status
                    </button>
                    <div class="collapse" id="status">
                      <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#labels" aria-expanded="false" aria-controls="labels">
                        labels
                    </button>
                    <div class="collapse" id="labels">
                      <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#dates" aria-expanded="false" aria-controls="dates">
                        dates
                    </button>
                    <div class="collapse" id="dates">
                      <div class="card card-body">
                            <label for="from">From</label>
                            <input type="text" id="from" name="from">
                            <label for="to">to</label>
                            <input type="text" id="to" name="to">
                      </div>
                    </div>
                    <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#attachment" aria-expanded="false" aria-controls="attachment">
                        attachment
                    </button>
                    <div class="collapse" id="attachment">
                      <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                     <button class="ist-group-item list-group-item-action" type="button" data-bs-toggle="collapse" data-bs-target="#customFields" aria-expanded="false" aria-controls="customFields">
                        custom fields
                    </button>
                    <div class="collapse" id="customFields">
                      <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@stop