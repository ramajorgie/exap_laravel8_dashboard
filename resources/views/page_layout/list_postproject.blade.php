@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Project</h4>
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
                                                        <tr style="text-align: center;">
                                                            <th>Judul Project</th>
                                                            <th>Isi Materi</th>
                                                            <th>Waktu</th>
                                                            <th>Bahasa</th>
                                                            <th>Foto</th>
                                                            <th>Status</th>
                                                            <th>Opt</th>
                                                        </tr>
                                                    </thead>
                                                
                                                @foreach ($list_project as $list)
                                                    <tbody>
                                                        <tr style="text-align: center;">
                                                            <td>{{$list->judul_project}}</td>
                                                            <td>
                                                            <form action="/lihat_project" method="post">
                                                            @csrf
                                                            <input type="text" value="{{$list->id}}" name="id" hidden>
                                                            <button class="btn btn-info"> lihat</button>
                                                            </form>
                                                            </td>
                                                            <td>{{$list->waktu}}</td>
                                                            <td>{{$list->bahasa}}</td>
                                                            <td><img src="{{ asset('/assets_foto_post/'.$list->foto) }}" alt="" style="width: 65px; height: 65px;"></td>
                                                            <td>{{$list->status}}</td>
                                                            <td>
                                                            @if ( $list->status == "Tampilkan")
                                                            <form action="/update_tampilan_project" method="post">
                                                            @csrf
                                                            <input type="text" value="{{$list->id}}" name="id" hidden>
                                                            <button class="btn btn-danger" type="submit">Close</button>
                                                            </form>
                                                            @elseif ( $list->status == "Sembunyikan")
                                                            <form action="/update_tampilan_project" method="post">
                                                            @csrf
                                                            <input type="text" value="{{$list->id}}" name="id" hidden>
                                                            <button class="btn btn-success" type="submit">Open</button>
                                                            </form>
                                                            @endif
                                                            </td>
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




                         
    @endsection
