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
                                        
                                       
                                        
                                        <form action="/update_visi" method="post" >
                                          @csrf
                                          @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        
                                    
                                        @foreach ($visi as $item)
                                        <div class="mb-3">
                                            <label for="projectname" class="form-label">Vision</label>
                                            {{--  <input type="text" id="projectname" name="isi" value="{{ $item->visi_misi }}" class="form-control" >  --}}
                                            <textarea class="form-control" name="isi"  cols="30" rows="10">{{$item->visi_misi}}</textarea>
                                        </div>
                                        @endforeach
                                        
                                     
                                                <div style="text-align: center; margin-top: 10px;">
                                                <button class="btn btn-success" type="submit">update vision</button>
                                                </div> 
                                         
                                        </form><br>

                                        <form action="/update_misi" method="post" >
                                            @csrf
                                        
                                        
                                        @foreach ($misi as $item)
                                        <div class="mb-3">
                                            <label for="projectname" class="form-label">Mission</label>
                                            {{--  <input type="text" id="projectname" name="isi" value="{{ $item->visi_misi }}" class="form-control" >  --}}
                                            <textarea class="form-control" name="isi"  cols="30" rows="10">{{$item->visi_misi}}</textarea>
                                        </div>
                                        @endforeach
  
                                        
                                                <div style="text-align: center; margin-top: 10px;">
                                                <button class="btn btn-success" type="submit">update Mission</button>
                                                </div> 
                                           
                                          </form><br>
                                       
                          {{-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">List Visi</h4>
                                      
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#basic-example-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                           
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-example-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead>
                                                            <tr style="text-align: center;">
                                                                <th>No</th>
                                                                <th>Isi Visi</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        @foreach ($visi as $tampilkan)
                                                        <tbody>
                                                            <tr style="text-align: center;">
                                                                <td>{{$tampilkan->id}}</td>
                                                                <td>{{$tampilkan->visi_misi}}</td>
                                                               
                                                            </tr>
                                          
                                                        </tbody>
                                                        @endforeach

                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="basic-example-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">List Misi</h4>
                                       

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#inverse-table-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                       
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="inverse-table-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table- mb-0">
                                                        <thead>
                                                            <tr style="text-align: center;">
                                                                <th>No</th>
                                                                <th>Isi Misi</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        @foreach ($misi as $tampilkan)
                                                        
                                                        <tbody>
                                                            <tr style="text-align: center;">
                                                                <td>{{$tampilkan->id}}</td>
                                                                <td>{{$tampilkan->visi_misi}}</td>
                                                          
                                                            </tr>
                                                            
                                                        </tbody>
                                                        @endforeach
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="inverse-table-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> --}}
                        <!-- end row-->
                                                    </div> <!-- end card body-->
                                                </div> <!-- end card -->
                                            </div><!-- end col-->   

                        


    @endsection