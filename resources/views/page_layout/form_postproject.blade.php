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
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">Judul Project</label>
                                                    <input type="text" id="projectname" name="judul_project" class="form-control" placeholder="Enter project name" required>
                                                </div>                                                
                                                <div class="mb-3 mt-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0">Thumbnail Project</label>
                                                    <input class="form-control" name="file_foto" type="file" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date" class="form-label">Waktu</label>
                                                    <input class="form-control" id="example-date" type="date" name="waktu" required>
                                                </div>
                                                
                                                <div class="mb-0">
                                                <label for="project-overview" class="form-label">Bahasa</label>
                                                    
                                                    <select class="form-control select2" data-toggle="select2" name="bahasa" required>
                                                        <option>Select</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="English">English</option>
                                                    </select>
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <textarea name="isi" required></textarea>
                                                    <script>
                                                            CKEDITOR.replace( 'isi' );
                                                    </script>
                                                <!-- Date View -->
                                            </div> <!-- end col-->
                                            <div class="mb-3 position-relative" id="datepicker2" style="text-align: center; margin-top:10px;" >
                                                <button class="btn btn-success" type="submit">Post Project</button>
                                            </div>
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
