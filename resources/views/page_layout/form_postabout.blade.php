@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">input About</h4>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            
                                        </ul> <!-- end nav-->
                                        <form action="/insert_postabout" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        @endif

                                        @foreach ($data as $tampilkan)
                                          
                                        <div class="mb-3">
                                                    <label for="projectname" class="form-label">Judul Bio </label>
                                                    <input type="text" id="projectname" name="judul_about" class="form-control" value="{{$tampilkan->judul_about}}">
                                        </div>
                                        <div class="mb-3">
                                        <label for="project-overview" class="form-label">Bahasa</label>
                                                    
                                                    <select class="form-control select2" data-toggle="select2"  name="bahasa">
                                                        @if ( $tampilkan -> bahasa == 'Indonesia')
                                                        <option value="Indonesia">Indonesia</option>
                                                        @elseif ( $tampilkan -> bahasa == 'English' )
                                                        <option value="English">English</option>
                                                        @endif
                                                    </select>
                                        </div>

                                        <div class="tab-content">
                                              <textarea name="isi_about" >{{$tampilkan->isi}}</textarea>
                                                <script>
                                                        CKEDITOR.replace( 'isi_about' );
                                                </script>
                                                <div style="text-align: center; margin-top: 10px;">
                                                <button class="btn btn-success" type="submit">Simpan</button>
                                                </div>
                                        </form>
                                        @endforeach
                                                                        
                                                        
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->
                                        


    @endsection
