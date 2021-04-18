@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
    <div class="container rounded bg-white ">
    <div class="row">
    @foreach ($data as $tampilkan)
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src="{{ asset('/assets_foto_profile/'.$tampilkan->foto) }}"><br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Upload Foto
            </button>
            <span> 
            </span>
            </div>
        </div>
        
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="/profile_update" method="post">
                 @csrf
                
                <div class="row mt-2">
                <input type="text" class="form-control" name="id"  value=" {{$tampilkan->id}}" hidden>
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" name="name"  value=" {{$tampilkan->name}}"></div>
                    <div class="col-md-6"><label class="labels">Status</label><input type="text" class="form-control" name="status" value="{{$tampilkan->status}}" readonly ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" value="{{$tampilkan->email}}"></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">New Password</label><input type="text" class="form-control" placeholder="Input New Password" name="password"></div>
                    
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
        </form>


        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>User Level</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;1</span></div><br>
                <div class="col-md-12"><label class="labels">Posisi</label><input type="text" class="form-control" placeholder="Job Position" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Bio</label><input type="text" class="form-control" placeholder="About Me" value=""></div>
            </div>
        </div>
    </div>
    
</div>
</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="update_foto_profile" method="post" enctype="multipart/form-data">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="email" value="{{$tampilkan->email}}" hidden>
        <input type="file" name="foto_update">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach




    @endsection
