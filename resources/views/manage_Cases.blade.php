
@extends('layout')

@section('main')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="card-header">
                            <strong>Manage Cases</strong> 
                        </div>
                        <div class="card-body card-block">
                    <form action="/manage_Cases" method="post" class="form-horizontal">
                                @csrf

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                       <input  name="case_date" class="form-control" value="<?php echo date("Y-m-d"); ?>" disabled>
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Time</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                      <input  name="case_time"  class="form-control" value="<?php echo date("H:i:s"); ?>"  disabled>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Enrty</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_entry" id="select" class="form-control">
                                            <option >Please select</option>
                                            <option value="Telephone">Telephone</option>
                                            <option value="Website">Website</option>
                                            <option value="COMبخدمتـ">COMبخدمتـ</option>
                                            <option value="Whatsup">Whatsup</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Twitter">Twitter</option>

                                        </select>
                                    </div>
                                </div>


                                  <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_type" id="select" class="form-control">
                                            <option >Please select</option>
                                            <option value="Complaint">Complaint</option>
                                            <option value="Notify">Notify</option>
                                            <option value="Inquiry">Inquiry</option>
                                            <option value="Suggetion">Suggetion</option>
                                            <option value="Thanks">Thanks</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class="form-control-label">Case Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="case_desc"  rows="9" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Related To</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="direct_name" id="select" class="form-control">
                                            <option >Please select</option>
                                            <option value="Expatriate Labor Directorate">Expatriate Labor Directorate</option>
                                            <option value="Central Inspection Directorate">Central Inspection Directorate</option>
                                            <option value="Central Employment Directorate">Central Employment Directorate</option>
                                             <option value="Directorate of Domestic Workers">Directorate of Domestic Workers</option>
                                             <option value="Directorate of Human Trafficking">Directorate of Human Trafficking</option>
                                              <option value="Legal Affairs Directorate">Legal Affairs Directorate</option>
                                               <option value="Labor Relations Directorate">Labor Relations Directorate</option>

                                        </select>
                                    </div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Employee Note</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="case_emp_note"  rows="9" class="form-control"></textarea>
                                    </div>
                                </div>

                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                      <select name="case_status" id="select" class="form-control">
                                            <option >Please select</option>
                                            <option value="Complaint">Complaint</option>
                                            <option value="Notify">Notify</option>
                                            <option value="Inquiry">Inquiry</option>
                                            <option value="Suggetion">Suggetion</option>
                                            <option value="Thanks">Thanks</option>

                                        </select>
                                   </div>
                               </div>
                                        
                                            
                                          


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Priority</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_priority" id="select" class="form-control">
                                            <option >Please select</option>
                                            <option value="High Risk">High Risk</option>
                                            <option value="Medium Risk">Medium Risk</option>
                                            <option value="Low risk">Low risk</option>

                                        </select>
                                    </div>
                                </div> 

                       
                        <div class="card-footer">
                            <button name="save"    type="submit" class="btn btn-primary  btn-lg">
                                <i class="fa fa-dot-circle-o"></i> Save
                            </button>
                            <button type="reset" class="btn btn-danger btn-lg">
                                <i class="fa fa-ban"></i> Cancel
                            </button>
                        </div>
                        </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>                            
                            <th>Entry</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Related to</th>
                            <th>Employee Note</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                   
                 
                    
                    </tbody>


                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
</div>
@endsection
