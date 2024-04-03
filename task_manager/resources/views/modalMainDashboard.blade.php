@extends('main') 
@section('modalMainDashboard')

<!-- Modal 
--><div class="modal fade" id="modal-lg">
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
                      <textarea class="form-control" id="DescriptionInput" rows="5"></textarea>


                      <div class="form-group">
                          <label>Members</label>
                          <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                              <option>omer avhar</option>
                              <option>michal lev</option>
                              <option>esti amit</option>

                          </select>
                      </div>
                      
                   <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label>Requester</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                       <div class="col-6">
                      <div class="form-group">
                        <label>Implementor</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>  
                   </div>
                      <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label>Devloper</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                       <div class="col-6">
                      <div class="form-group">
                        <label>Devlopment type</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>  
                   </div>
                      
                      <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                          <label>Priority</label>
                          <select class="select2"  data-placeholder="Select a State" style="width: 100%;">
                              <option>omer avhar</option>
                              <option>michal lev</option>
                              <option>esti amit</option>

                          </select>
                      </div>
                    </div>
                       <div class="col-6">
                      <div class="form-group">
                          <label>Status</label>
                          <select class="select2"  data-placeholder="Select a State" style="width: 100%;">
                              <option>omer avhar</option>
                              <option>michal lev</option>
                              <option>esti amit</option>

                          </select>
                      </div>
                    </div>  
                   </div>
                      
                    <div class="form-group">
                        <label>Labels</label>
                        <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
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
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
