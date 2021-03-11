

    <style>
        .addBikeButton{
            position: absolute;
            line-height: 22px;
            right: 0px;
        }

        .bike_table{
            width: 100% !important;
        }
    </style>
    <style>
        .addBikeButton{
            position: absolute;
            line-height: 22px;
            right: 0px;
        }

        .bike_table{
            width: 100% !important;
        }



        table {
            border-collapse: collapse !important;
            width: 100% !important;;
        }

        th , td {
            text-align: left !important;;
            padding: 0px !important;

        }

        td {
            padding: 0px !important;
        }


        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #ddede0  !important;;
            color: grey !important;
        }

        .table td, .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
            padding: 10px !important;
            border: 0px !important;
            border-bottom: solid #ddede0 1px !important;
        }

        .listActionButton {
            margin-right: 2px;
            padding: 2px 8px;
        }
    </style>
    {{--<section id="container">
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bike Listing
                            <a class="btn btn-info float-right addBikeButton" href="{{route('bike.create')}}">Add Bike</a>
                        </div>
                        <div class="row w3-res-tb">
                            <div class="col-sm-5 m-b-xs">
                                <select class="input-sm form-control w-sm inline v-middle">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Delete selected</option>
                                    <option value="2">Bulk edit</option>
                                    <option value="3">Export</option>
                                </select>
                                <button class="btn btn-sm btn-default">Apply</button>
                            </div>
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" class="input-sm form-control" placeholder="Search">
                                    <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                <tr>
                                    <th style="width:20px;">
                                        <label class="i-checks m-b-none">
                                            <input type="checkbox"><i></i>
                                        </label>
                                    </th>
                                    <th>Project</th>
                                    <th>Task</th>
                                    <th>Date</th>
                                    <th style="width:30px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                    <td>Idrawfast prototype design prototype design prototype design prototype design prototype design</td>
                                    <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
                                    <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
                                    <td>
                                        <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">

                                <div class="col-sm-5 text-center">
                                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                                </div>
                                <div class="col-sm-7 text-right text-center-xs">
                                    <ul class="pagination pagination-sm m-t-none m-b-none">
                                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                        <li><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </section>
        </section>
        <!--main content end-->
    </section>--}}


    {{--<section id="container">
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bike Listing
                            <a class="btn btn-info float-right addBikeButton" href="{{route('bike.create')}}">Add Bike</a>
                        </div>
                        <br>

                        <div class="container bike_table">
                            {!! $dataTable->table() !!}
                            {!! $dataTable->scripts() !!}
                        </div>

                    </div>
                </div>
            </section>
        </section>
        <!--main content end-->
    </section>--}}


    <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bike Listing
                            <a class="btn btn-info float-right addBikeButton" href="{{route('bike.create')}}">Add Bike</a>
                        </div>
                        <br>
                        <div class="container bike_table">
                            <table class="table table-bordered" id="job-table">
                                <thead>
                                <tr>
                                    {{--<th>Id</th>--}}
                                    <th>Bike#</th>
                                    <th>Engine#</th>
                                    <th>Shassis#</th>
                                    <th>Color</th>
                                    <th>Purchase$$</th>
                                    <th>Sold$$</th>
                                    <th>Purchase From</th>
                                    <th>Sold To</th>
                                    <th>Purchase Date</th>
                                    <th>Sold Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    {{--<th>Id</th>--}}
                                    <th>Bike#</th>
                                    <th>Engine#</th>
                                    <th>Shassis#</th>
                                    <th>Color</th>
                                    <th>Purchase$$</th>
                                    <th>Sold$$</th>
                                    <th>Purchase From</th>
                                    <th>Sold To</th>
                                    <th>Purchase Date</th>
                                    <th>Sold Date</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>

                            </table>
                        </div>

                    </div>
                </div>
            </section>
        </section>
        <!--main content end-->
    </section>

@push('script')
    <script>
        $(function() {

            $('#job-table tfoot th').each( function () {
                var title = $(this).text();

                if(title == "Purchase From"){
                    var purchase_user = '<?php echo json_encode($purchase_user); ?>';
                    var purchase_user_item = "<select class='form-control'> <option value=''> Select User </option>";
                    $.each(JSON.parse(purchase_user) , function(index , value){
                        purchase_user_item += "<option value='"+value.id+"'>"+value.first_name+" "+value.last_name+"</option>";
                    });
                    purchase_user_item += "</select>";

                    // $(this).html( '<input width="20px" type="text" placeholder="Search '+title+'" />' );
                    // $(this).html($('.user_list').html());
                    $(this).html(purchase_user_item);
                }

                else if(title == "Sold To"){
                    var sold_to = '<?php echo json_encode($sold_user); ?>';
                    var sold_to_item = "<select class='form-control'> <option value=''> Select User </option>";
                    $.each(JSON.parse(sold_to) , function(index , value){
                        sold_to_item += "<option value='"+value.id+"'>"+value.first_name+" "+value.last_name+"</option>";
                    });
                    sold_to_item += "</select>";
                    $(this).html(sold_to_item);
                }
                else if(title != "Action" && title != "Purchase Date" && title != "Sold Date") {
                    $(this).html( '<input class="form-control" width="20px" type="text" placeholder="Search '+title+'" />' );
                }
                else if(title == "Purchase Date" || title == "Sold Date") {
                    $(this).html( '<input class="form-control datepicker" width="20px" type="date" placeholder="Search '+title+'" />' );
                }

            } );


            $('#job-table').DataTable({
                processing: true,
                serverSide: true,
                rowReorder: true,
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;

                        $( 'input', this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        });

                        $('select' , this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        });


                    });
                },
                ajax: '{!! route('bike.data') !!}',
                columns: [
                    // { data: 'id', name: 'id' },
                    { data: 'bike_no', name: 'bike_no' },
                    { data: 'engine_no', name: 'engine_no' },
                    { data: 'chassis_no', name: 'chassis_no' },
                    { data: 'color', name: 'color' },
                    { data: 'purchase_price', name: 'purchase_price' },
                    { data: 'sold_price', name: 'sold_price' },
                    { data: 'purchase_from', name: 'purchase_from' },
                    { data: 'sold_to', name: 'sold_to' },
                    { data: 'purchase_date', name: 'purchase_date' },
                    { data: 'sold_date', name: 'sold_date' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
    </script>
@endpush
