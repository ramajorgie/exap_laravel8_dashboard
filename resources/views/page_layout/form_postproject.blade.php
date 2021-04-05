@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/insert_postproject" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block" style="text-align: center;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">Judul Project</label>
                                                    <input type="text" id="projectname" name="judul_project" class="form-control" placeholder="Enter project name">
                                                </div>

                                                <textarea name="isi" ></textarea>
                                                    <script>
                                                            CKEDITOR.replace( 'isi' );
                                                    </script>


                                                <div class="mb-3">
                                                                <label for="example-date" class="form-label">Waktu</label>
                                                                <input class="form-control" id="example-date" type="date" name="waktu">
                                                </div>
                                                
                                                <div class="mb-0">
                                                <label for="project-overview" class="form-label">Bahasa</label>
                                                    
                                                    <select class="form-control select2" data-toggle="select2" name="bahasa">
                                                        <option>Select</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="English">English</option>
                                                    </select>
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <div class="mb-3 mt-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0">Thumbnail</label>
                                                    <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>

                                                    <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                        data-upload-preview-template="#uploadPreviewTemplate">
                                                        <div class="fallback">
                                                            <input name="file_foto" type="file" />
                                                        </div>

                                                        <div class="dz-message needsclick">
                                                            <i class="h3 text-muted dripicons-cloud-upload"></i>
                                                            <h4>Drop files here or click to upload.</h4>
                                                        </div>
                                                       
                                                    </div>

                                                    <!-- Preview -->
                                                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                    <!-- file preview template -->
                                                    <div class="d-none" id="uploadPreviewTemplate">
                                                        <div class="card mt-1 mb-0 shadow-none border">
                                                            <div class="p-2">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                                    </div>
                                                                    <div class="col ps-0">
                                                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                        <p class="mb-0" data-dz-size></p>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <!-- Button -->
                                                                        <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                            <i class="dripicons-cross"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end file preview template -->
                                                </div>

                                                <!-- Date View -->
                                                <div class="mb-3 position-relative" id="datepicker2" style="text-align: center;" >
                                                    <button class="btn btn-success" type="submit">Post  Project</button>
                                                    
                                                </div>
                                            </div> <!-- end col-->
                                            </form>
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                       
                                        
                                         
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                         
    @endsection
