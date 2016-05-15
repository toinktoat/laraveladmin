@extends('admin.layouts.layout')

@section('title', 'New Barang')

@section('content')
          
<!-- page content -->
<div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>
                      Input Data Barang
                  </h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>

                   
                      <span class="section">Barang</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" name="name" placeholder="Nama Barang" required="required" type="text">
                        </div>
                      </div>                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Remarks <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="remarks" class="form-control col-md-7 col-xs-12" name="remarks" placeholder="Remarks" required="required" type="text">
                        </div>
                      </div>
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- footer content -->
    @include('admin.layouts.footer')
    <!-- /footer content -->

</div>
<!-- /page content -->

@endsection