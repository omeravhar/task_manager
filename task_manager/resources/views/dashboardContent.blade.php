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

<div class="row m-3 pb-3"  >
    
    <div class="col-md-3 " >
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
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
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
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    
    
    
    
    
</div>













@stop