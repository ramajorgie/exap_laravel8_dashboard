@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Visi & Misi</h4>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            
                                        </ul> <!-- end nav-->
                                        
                                       
                                        
                                        <form action="/update_visi_misi" method="post" >
                                          @csrf
                                          @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                          <strong>{{ $message }}</strong>
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                       
                                        @foreach ($data as $tampilkam)
                                        <div class="mb-3">
                                          <label for="projectname" class="form-label">Judul</label>
                                          <input type="text" id="projectname" name="judul" class="form-control" value="{{$tampilkam->judul}}" >
                                        </div>
                                       
                                        

                                        <div class="tab-content">
                                              <textarea name="visi_misi" >{{$tampilkam->visi_misi}}</textarea>
                                                <script>
                                                        CKEDITOR.replace( 'visi_misi' );
                                                </script>
                                                <div style="text-align: center; margin-top: 10px;">
                                                <button class="btn btn-success" type="submit">Update</button>
                                                </div>
                                          @endforeach
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
                                                <input type="text" name="id" value="" hidden>
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
                                    
                                                                        
                                                        
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->
                                        <!-- Modal -->
                        


    @endsection
