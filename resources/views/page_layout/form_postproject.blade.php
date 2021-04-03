@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/insert_postproject" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">Judul Project</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name">
                                                </div>

                                                <textarea name="editor1" ></textarea>
                                                    <script>
                                                            CKEDITOR.replace( 'editor1' );
                                                    </script>

                                                <!-- Date View -->
                                                <div class="mb-3 position-relative" id="datepicker1">
                                                    <label class="form-label">Waktu</label>
                                                    <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                </div>
                                                
                                                <div class="mb-0">
                                                <label for="project-overview" class="form-label">Bahasa</label>
                                                    
                                                    <select class="form-control select2" data-toggle="select2">
                                                        <option>Select</option>
                                                        <option value="AZ">Indonesia</option>
                                                        <option value="CO">English</option>
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
                                                            <input name="file" type="file" />
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

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Daftar Project</h4>
                                        <p class="text-muted font-14">
                                            Berikut Ini Merupakan Daftar Dari Project yang dipost
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#responsive-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    List
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="responsive-preview">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                            </tr>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                         
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                         
    @endsection
