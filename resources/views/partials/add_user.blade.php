<style>
    #user_picture_modal .modal-content  {
        width: 800px !important;
    }
    .image_style_modal_camera {
        display: flex;
    }
    #my_camera {
        margin-left: 8px !important;
    }

    #my_camera video , #my_camera , #results img {
        width: 390px !important;
        height: 290px !important;
    }

</style>
<form role="form" method="post" action="{{route('user_list.store')}}" enctype="multipart/form-data">
    @csrf
    <header class="panel-heading-custom">User Details</header>
    <section class="form_section">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input required type="text" name="first_name" class="form-control" id="first_name" placeholder="Bike Number">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input required name="last_name" type="text" class="form-control" id="last_name" placeholder="Engine Number">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input required name="phone_no" type="text" class="form-control" id="phone_no" placeholder="Chassis Number">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input required name="address" type="text" class="form-control" id="address" placeholder="color">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Address 2</label>
            <input name="address2" type="text" class="form-control" id="address2" placeholder="color">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">CNIC Number</label>
            <input required name="cnic_no" type="number" onkeypress="return isNumber(event)" onchange="return isNumber(event)" class="form-control" id="cnic_no" placeholder="Chassis Number">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">About User</label>
            <textarea  class="form-control" name="about_user" ></textarea>
            <p class="help-block"></p>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">CNIC Front</label>
            <input name="cnic_front" type="file" id="exampleInputFile">
            <p class="help-block"></p>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">CNIC Back</label>
            <input name="cnic_back" type="file" id="exampleInputFile">
            <p class="help-block"></p>
        </div>


        <div class="form-group">
            <label for="exampleInputFile">User Picture</label>
            <input name="user_picture[]" type="file" id="exampleInputFile">
            <p class="help-block"></p>
        </div>

        <div class="form-group">
            <a href="#user_picture_modal" data-toggle="modal" class="btn btn-success">Add User picture</a>
        </div>


    </section>

    <input type="hidden" name="type" value="{{@$type}}">
    <button type="submit" class="btn btn-info">Submit</button>
    @if(@$type == 'add_bike')
        {{--<a href="{{route('bike.create')}}" class="btn btn-danger">Cancel</a>--}}
        <button aria-hidden="true" data-dismiss="modal" type="button" class=" fclose btn btn-danger">Cancel</button>
    @elseif(@$type == 'user_list')
        <a href="{{route('user_list.index')}}" class="btn btn-danger">Cancel</a>
    @endif



<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="user_picture_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a aria-hidden="true" class="close"  href="#user_picture_modal" data-toggle="modal" type="button">×</a>
                <h4 class="modal-title">Add User Picture</h4>
            </div>
            <div class="modal-body">
                <div class="row image_style_modal_camera">
                    <div>
                        <div id="my_camera"></div>
                    </div>
                    <div>
                        <div id="results"></div>
                    </div>
                </div>
                <input type="hidden" name="image" class="image-tag">
                <hr>
                <input type=button value="Take Snapshot" onClick="take_snapshot()" class="btn btn-success">
                {{--<a href="#user_picture_modal" data-toggle="modal" class="btn btn-info">Submit</a>--}}
                <a href="#user_picture_modal" data-toggle="modal" class="btn btn-default">Close</a>
            </div>
        </div>
    </div>
</div>

</form>


@php
/*    $img = $_POST['image'];

    $folderPath = "upload/";



    $image_parts = explode(";base64,", $img);

    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];



    $image_base64 = base64_decode($image_parts[1]);

    $fileName = uniqid() . '.png';



    $file = $folderPath . $fileName;

    file_put_contents($file, $image_base64);



    print_r($fileName);
*/
@endphp

@push('script')
    <script language="JavaScript">
        Webcam.set({
            width: 1280,
            height: 900,
            image_format: 'jpeg',
            jpeg_quality: 9000
        });
        Webcam.attach( '#my_camera' );
        function take_snapshot() {

            Webcam.snap( function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
            } );
        }

        function closeModal(id){
            $("#"+id).hide();
        }
    </script>
@endpush