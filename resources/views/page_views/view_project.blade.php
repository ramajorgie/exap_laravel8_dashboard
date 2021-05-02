@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    @foreach ($view_project as $tampilkan)
                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <h4 class="header-title">Lihat Project : {{$tampilkan->judul_project}}</h4>
                                        </ul> <!-- end nav-->
                                        <form action="/update_project" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        @endif
                                        
                                        <input type="text" name="id" value="{{$tampilkan->id}}" hidden>
                                        <div class="mb-3">
                                                    <label for="projectname" class="form-label">Judul Project</label>
                                                    <input type="text" id="projectname" name="judul_project" class="form-control" value="{{$tampilkan->judul_project}}">
                                        </div>
                                        <div class="mb-3">
                                                    <label for="projectname" class="form-label">Update Sampul : </label>
                                                    <img src="{{ asset('/assets_foto_post/'.$tampilkan->foto) }}" alt="" style="width: 80px; height: 80px;">
                                                    <input class="form-control" type="file" name="foto" >
                                                    
                                        </div>
                                        <div class="tab-content">
                                              <textarea name="isi" >{{$tampilkan->isi}}</textarea>
                                                <script>
                                                        CKEDITOR.replace( 'isi' );
                                                </script>
                                                <div style="text-align: center; margin-top: 10px;">
                                                <a href="{{ URL::previous() }}" class="btn btn-info" >Kembali</a> 
                                                <button class="btn btn-success" type="submit">Update</button>
                                                </div>
                                        @endforeach
                                        </form>
                                                                        
                                                        
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->
    @endsection
