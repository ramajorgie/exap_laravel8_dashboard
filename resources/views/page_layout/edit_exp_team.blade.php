@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                @foreach ($data as $item)
                    
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/update_team" method="post" enctype="multipart/form-data">
                                @csrf
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
                                                input type="file" id="projectname" name="foto" class="form-control" placeholder="Posisi Saat ini">
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-date" class="form-label">Tanggal</label>
                                                <input class="form-control" id="example-date" type="date" name="tanggal">
                                            </div>

                                        </div>

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
                                                                <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                <i class="dripicons-cross"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                                        <!-- Date View -->
                                        <div class="mb-3 position-relative" id="datepicker2" style="text-align: center;" >
                                        <button class="btn btn-success" type="submit">Tambahkan Posisi</button>
                                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    @endsection
