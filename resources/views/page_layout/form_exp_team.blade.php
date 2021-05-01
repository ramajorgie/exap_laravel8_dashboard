@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/add_exp_team" method="post" enctype="multipart/form-data">
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
                                                        <label for="projectname" class="form-label">Nama</label>
                                                        <input type="text" id="projectname" name="nama" class="form-control" placeholder="Masukan Nama">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-date" class="form-label">Posisi</label>
                                                        <input type="text" id="projectname" name="posisi" class="form-control" placeholder="Posisi Saat ini">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-date" class="form-label">Foto</label>
                                                        <input type="file" id="projectname" name="foto" class="form-control" placeholder="Posisi Saat ini">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-date" class="form-label">Tanggal</label>
                                                        <input class="form-control" id="example-date" type="date" name="tanggal">
                                                    </div>

                                                </div> <!-- end col-->

                                                <div class="col-xl-6">
                                                <p>Biografi</p>
                                        
                                                    <textarea class="form-control" name="biografi" id="" cols="30" rows="10"></textarea>
                                                    {{-- <script>
                                                            CKEDITOR.replace( 'biografi' );
                                                    </script> --}}
                                                            <!-- Preview -->
                                                            <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                            <!-- file preview template -->
                                                            <div class="d-none" id="uploadPreviewTemplate">
                                                                <div class="card mt-1 mb-0 shadow-none border">
                                                                    <div class="p-2">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-auto">
                                                                                <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                                            </div>
                                                                            <div class="col ps-0">
                                                                                <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                                <p class="mb-0" data-dz-size></p>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <!-- Button -->
                                                                                <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                                    <i class="dripicons-cross"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end file preview template -->
                                                        </div>

                                                        <!-- Date View -->
                                                        <div class="mb-3 position-relative" id="datepicker2" style="text-align: center;" >
                                                            <button class="btn btn-success" type="submit">Tambahkan Posisi</button>
                                                            
                                                        </div>
                                                    </div> <!-- end col-->
                                                    </form>
                                                </div>
                                                <!-- end row -->
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="scroll-vertical-preview">
                                                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                                                    <thead>
                                                                        <tr style="text-align: center;">
                                                                            <th>Nama</th>
                                                                            <th>Jabatan</th>
                                                                            <th>Biografi</th>
                                                                            <th>Foto</th>
                                                                            <th>Action</th>
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                
                                                                    @foreach ($data as $tampilkan)
                                                                    <tbody>
                                                                        <tr style="text-align: center;">
                                                                            <td>{{$tampilkan->nama}}</td>
                                                                            <td>{{$tampilkan->posisi}}</td>
                                                                            <td>{{$tampilkan->biografi}}</td>
                                                                            <td><img src="{{ asset('/assets_foto_exp_team/'.$tampilkan->foto) }}" alt="" style="width: 80px; height: 80px;"></td>
                                                                            <form action="/view_edit_team" method="get">
                                                                            @csrf
                                                                            <td><button class="btn btn-info" type="submit">lihat</button>
                                                                            </form>
                                                                            <a href="/del_exp_team/{{ $tampilkan->id}}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                
                                                                </table>                     
                                                            </div> <!-- end preview-->

                                                                </pre> <!-- end highlight-->
                                                            </div> <!-- end preview code-->
                                                        </div> <!-- end tab-content-->

                                                    </div> <!-- end card body-->
                                                </div> <!-- end card -->
                                            </div><!-- end col-->
                                        </div>
                                        <!-- end row-->
                                                                

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
