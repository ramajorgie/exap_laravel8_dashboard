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
                                        
                                        {{--  <form action="update_about_gambar" method="post" enctype="multipart/form-data">
                                          @csrf
                                          @if ($message = Session::get('success'))
                                          <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                          @endif
                                          <div class="mb-3">
                                            <input type="file" name="gambar" class="form-control">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                          </div>
                                        </form>  --}}
                                        
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
                                          <img style="width: 200px; height: 130px;" src="{{ asset('/assets_foto_post/'.$tampilkan->gambar) }}" alt="">
                                          
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Update Gambar
                                            </button>
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

                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                            <form action="update_about_gambar" method="post" enctype="multipart/form-data">
                                            @csrf
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload Gambar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <input type="text" name="id" value="{{$tampilkan->id}}" hidden>
                                                <input type="file" name="gambar">
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                              </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                        @endforeach
                                                                        
                                                        
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->
                                        <!-- Modal -->
                        


    @endsection
