@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">input Blog</h4>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            
                                        </ul> <!-- end nav-->
                                        
                                                                               
                                        <form action="/proses_add_blog" method="post" enctype="multipart/form-data">
                                          @csrf
                                          @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                          <strong>{{ $message }}</strong>
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        <div class="mb-3">
                                                    <label for="example-date" class="form-label">Waktu</label>
                                                    <input class="form-control" id="example-date" type="date" name="tanggal" style="text-align: center;" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                          <label for="projectname" class="form-label" >Judul Blog </label>
                                          <input type="text"  name="judul_blog" class="form-control">
                                                
                                        </div>
                                        <div class="mb-3" style="text-align: center;">
                                        <label for="">Tambahkan Foto</label>
                                       <input type="file" name="foto" id="" required>
                                            
                                        </div>
                                      

                                        <div class="tab-content">
                                              <textarea cols="20" rows="50" name="isi" ></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'isi' );
                                                </script>
                                                <div style="text-align: center; margin-top: 10px;">
                                                <button class="btn btn-success" type="submit">Add Blog</button>
                                                </div>
                                        </form>

                                      
                                    
                                                                        
                                                        
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->
                                        <!-- Modal -->
                        


    @endsection
