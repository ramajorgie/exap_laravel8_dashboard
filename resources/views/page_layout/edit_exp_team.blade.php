@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                
                    
                
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @foreach ($view as $item)
                                <form action="/update_team" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="id" value="{{$item->id}}" hidden>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">Nama</label>
                                                <input type="text" id="projectname" name="nama" class="form-control" value="{{$item->nama}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-date" class="form-label">Posisi</label>
                                                <input type="text" id="projectname" name="posisi" class="form-control" value="{{$item->posisi}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-date" class="form-label">Foto</label>
                                                <img style="width: 80px; height: 80px;" src="{{ asset('/assets_foto_exp_team/'.$item->foto) }}" alt=""><br>
                                                <input type="file" id="projectname" name="foto" class="form-control" placeholder="Posisi Saat ini">
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <p>Biografi</p>
                                            <textarea class="form-control" name="biografi" id="" cols="30" rows="10">{{$item->biografi}}</textarea>
                                        </div>

                                                        <!-- Date View -->
                                        <div class="mb-3 position-relative" id="datepicker2" style="text-align: center;" >
                                        <a href="{{ URL::previous() }}" class="btn btn-info" >Kembali</a> 
                                        <button class="btn btn-success" type="submit">Update</button>
                                        </div>
                                    </div>  
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
               
                    
    @endsection
