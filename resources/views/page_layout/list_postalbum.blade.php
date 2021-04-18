@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Album</h4>
                                        <p>
                                        Berikut Ini merupakan Daftar Album Yang diupload :</p>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#scroll-vertical-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-vertical-preview">
                                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                                    <thead>
                                                        <tr >
                                                            <th>Judul Album</th>
                                                            <th>Foto Album</th>
                                                            <th>Status</th>
                                                            <th>opt</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                
                                                @foreach ($data as $list)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$list->judul_album}}</td>
                                                            <td><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal{{$list->id}}"><img src="{{ asset('/assets_foto_post/'.$list->foto_album) }}" alt="" style="width: 100px; height: 65px;"></button></td>
                                                            <td>{{$list->status}}</td>
                                                            <td> <a href="/delete_album/{{ $list->id}}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                                                        </tr>
                                                       

                                                    </tbody>
                                                    @endforeach
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




                        <!-- Modal -->
                        @foreach ($data as $list)
                        <div class="modal fade" id="exampleModal{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">View Foto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <img src="{{ asset('/assets_foto_post/'.$list->foto_album) }}" alt="" style="width: 100%; height: 100%;">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                               
                            </div>
                            </div>
                        </div>
                        </div>
                        @endforeach




                         
    @endsection
