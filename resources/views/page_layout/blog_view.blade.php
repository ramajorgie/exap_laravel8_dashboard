@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Blog</h4>
                                        <div style="text-align: right;">
                                        
                                         <a href="/add_blog"><button class="btn btn-primary">Add Blog</button></a>
                                         
                                         </div>
                                        
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-vertical-preview">
                                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                                    <thead>
                                                        <tr style="text-align: center;">
                                                            <th>Foto</th>
                                                           
                                                            <th>Judul Blog</th>
                                                            <th>Isi Materi</th>
                                                            <th>Waktu</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                
                                               @foreach ($data as $tampilkan)
                                                    <tbody>
                                                        <tr style="text-align: center;">
                                                            <td><img src="{{ asset('/assets_post_blog/'.$tampilkan->foto) }}" alt="" style="width: 80px; height: 80px;"></td></td>
                                                            <td>{{$tampilkan->judul_blog}}</td>
                                                            <td><?php echo $tampilkan->isi?></td>
                                                            <td>{{$tampilkan->tanggal}}</td>
                                                            <td>
                                                                <a href="/del_blog/{{ $tampilkan->id}}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                                <form action="/view_edit_blog" method="get">
                                                                    @csrf
                                                                    <input type="text" value="{{$tampilkan->id}}" name="id" hidden>
                                                                    <button class="btn btn-info"> lihat</button>
                                                                </form>
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
