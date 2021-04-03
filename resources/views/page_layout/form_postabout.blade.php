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
                                        <form action="/insert_postproject" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content">
                                              <textarea name="editor1" ></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'editor1' );
                                                </script>
                                                <div style="text-align: center; margin-top: 10px;">
                                                <button class="btn btn-success" type="submit">Simpan</button>
                                                </div>
                                        </form>
                                                                        
                                                        
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->
                                        


    @endsection
