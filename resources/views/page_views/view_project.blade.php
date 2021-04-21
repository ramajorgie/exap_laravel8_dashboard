@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    @foreach ($view_project as $tampilkan)
                                        <h4 class="header-title">Lihat Project : {{$tampilkan->judul_project}} </h4>
                                        <button class="btn btn-info" >Kembali</button>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            
                                        </ul> <!-- end nav-->
                                        <form >
                                        @csrf
                                        @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        @endif
                                        
                                        <div class="mb-3">
                                                    <label for="projectname" class="form-label">Judul Project</label>
                                                    <input type="text" id="projectname" name="judul_about" class="form-control" value="{{$tampilkan->judul_project}}">
                                        </div>


                                        <div class="mb-3">
                                                    <label for="projectname" class="form-label">Sampul : </label>
                                                    <img src="{{ asset('/assets_foto_post/'.$tampilkan->foto) }}" alt="" style="width: 80px; height: 80px;">

                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                      Update
                                                    </button>
                                        </div>

                                       
                                        <div class="tab-content">
                                              <textarea name="isi_about" >{{$tampilkan->isi}}</textarea>
                                                <script>
                                                        CKEDITOR.replace( 'isi_about' );
                                                </script>
                                                <div style="text-align: center; margin-top: 10px;">
                                                <button class="btn btn-success" type="submit">Kembali</button>
                                                </div>
                                        @endforeach
                                        </form>
                                                                        
                                                        
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->




                               <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          ...
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                        


    @endsection
