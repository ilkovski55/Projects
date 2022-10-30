@extends('layouts.master')

@section('title', 'Home')

@section('heading')
    <h2 class="font-weight-bolder text-capitalize heading-section-color">WELCOME TO THE WORLD OF JÄGERMEISTER FOR MACEDONIA</h2>
    
@endsection

@section('content')
    <!-- Form modal start -->
    <div class="container-flex">
        <div class="row">
            <div class="col-6">
            <div class="modal" tabindex="-1" id="myModal">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                            <div class="modal-header mb-4">
                                    <h5 class="modal-title text-center heading-section-color" >Please fill in the for to participate in the game</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> 
                            </div>
                            <div class="modal-body heading-section-color" id="modal-body ">
                                <form action="" method=""
                                type="multipart/form-data" id="formSubmit">
                                        <div class="input-group mb-4">
                                            <div class="w-100">
                                                <label for="inputEmail">Email address</label>
                                                <input type="email" class="form-control heading-section-color h5" id="inputEmail" placeholder="name@example.com" required>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <label for="inputFile" class=" text-section-color">Attach a valid format of an image(jpeg,jpg, gif...)</label>
                                            <input type="file" class="form-control-file text-section-color" name="inputFile" id="inputFile" required>
                                        </div>
                                        
                                    </form>
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-warning">Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form modal end -->

@endsection