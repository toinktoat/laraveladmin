@extends('admin.layouts.layout')

@section('title', 'Page Title')

@section('content')
          
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">                
            <h3>Barang 
                <small><a href="{{asset('admin/barangs/create')}}" class="btn btn-warning btn-sm">New Barang</a>
                </small>
                </h3>    


            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List Data Barang</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                    <!--    <table id="example" class="table table-striped responsive-utilities jambo_table"> -->
                     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr class="headings">
                                    <th>ID</th>
                                    <th>Nama Barang </th>
                                    <th>Remarks </th>
                                    <th class=" no-link last"><span class="nobr">Action</span>
                                    </th>
                                </tr>
                            </thead>

                         
                       

                        </table>
                    </div>
                </div>
            </div>

            <br />
            <br />
            <br />

        </div>
    </div>
    <!-- footer content -->
    @include('admin.layouts.footer')
    <!-- /footer content -->

</div>
<!-- /page content -->

@endsection