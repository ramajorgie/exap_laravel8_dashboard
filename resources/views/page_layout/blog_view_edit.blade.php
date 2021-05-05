@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Blog</h4>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            
                                        </ul> <!-- end nav-->
                                        @foreach ($data as $item)
                                        <form action="/update_blog" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if ($message = Session::get('success'))
                                            <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <div class="mb-3">
                                            <label for="example-date" class="form-label">Waktu</label>
                                            <input class="form-control" id="example-date" type="date" name="waktu" style="text-align: center;" value="{{$item->waktu}}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="projectname" class="form-label" >Judul Blog </label>
                                            <input type="text" name="judul_blog" class="form-control" value="{{$item->judul_blog}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-date" class="form-label">Foto</label>
                                            <img style="width: 80px; height: 80px;" src="{{ asset('/assets_post_blog/'.$item->foto) }}" alt=""><br>
                                            <input type="file" id="projectname" name="foto" class="form-control" placeholder="Posisi Saat ini">
                                        </div>
                                    
                                        <div class="tab-content">
                                            <textarea cols="20" rows="50" name="isi" >{{$item->isi}}</textarea>
                                            <script>
                                                    CKEDITOR.replace( 'isi' );
                                            </script>
                                            <div style="text-align: center; margin-top: 10px;">
                                                <a href="/view_blog" class="btn btn-info" >Kembali</a> 
                                                <button class="btn btn-success" type="submit">Update Blog</button>
                                            </div>
                                        </div>
                                        </form>
                                        @endforeach

                                    </div>
                                </div>                 
                            </div>
                    </div>
    @endsection
