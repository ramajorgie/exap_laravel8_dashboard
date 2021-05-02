@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                     <div class="row">
                            <div class="col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <form action="/insert_postalbum" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        @endif
                                    <div class="mb-3">
                                        <label for="projectname" class="form-label header-title m-t-0">Judul Album </label>
                                        <input type="text" id="projectname" name="judul_album" class="form-control" placeholder="Enter name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label header-title m-t-0">Upload Foto</label>
                                        <input class="form-control" name="file_foto_album" type="file" required>
                                    </div>
                                    <div style="text-align: center; margin-top:10px;">
                                        <button class="btn btn-success">Upload</button>
                                    </div>
                                    </form>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->




    @endsection
