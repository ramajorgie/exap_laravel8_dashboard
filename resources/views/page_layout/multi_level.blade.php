@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="header-title" > Add Mamber</h2>
                                        <p>
                                        Berikut Ini list Member Yang terdaftar :
                                        </p>
                                        <div style="text-align: right;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add New Members</button>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr style="text-align: center;"> 
                                                            <th>Nama</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th>Foto</th>
                                                            <th>opt</th>
                                                        </tr>
                                                    </thead>
                                                
                                                    @foreach ($data as $tampilkan)
                                                    <tbody>
                                                        <tr style="text-align: center;">
                                                            <td>{{$tampilkan->name}}</td>
                                                            <td>{{$tampilkan->email}}</td>
                                                            <td>{{$tampilkan->status}}</td>
                                                            <td><img src="{{ asset('/assets_foto_profile/'.$tampilkan->foto) }}" alt="" style="width: 65px; height: 65px;"></td>
                                                            <td>
                                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal{{$tampilkan->id}}" data-bs-whatever="@mdo"><i class="material-icons " style="color: green;" data-toggle="tooltip" title="Delete">&#xE8B8;</button>
                                                            <a href="/delete_account/{{ $tampilkan->id}}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        </div>
                                                                     
                                       </div> <!-- end col -->
                                 </div>
                                                <!-- end row-->                      
                               </div> <!-- end preview-->


                               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Mambers</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form  action="/user_add" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                                <input type="text" name="nama" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Email:</label>
                                                <input type="text" class="form-control" name="email" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Status:</label>
                                                <select class="form-select" aria-label="Default select example" name="status">
                                                
                                                <option selected value="Admin">Admin</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Password:</label>
                                                <input type="text" class="form-control" id="recipient-name" name="password">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Send message</button>
                                        </div>
                                            
                                            </form>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    </div>

                                    @foreach ($data as $tampilkan)
                                    <div class="modal fade" id="exampleModal{{$tampilkan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/update_status" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input type="text" class="form-control" name="email" id="recipient-name" value="{{$tampilkan->email}}" readonly>
                                                </div>
                                                <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Status:</label>
                                                <select class="form-select" aria-label="Default select example" name="status" >
                                                    <option selected value="Admin">Admin</option>
                                                    <!-- <option value="Super Admin">Super Admin</option> -->
                                                    
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">New Password:</label>
                                                    <input type="text" class="form-control" name="password" id="recipient-name"  required>
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        @endforeach

                               
                                        


    @endsection
