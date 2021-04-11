@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Scroll - Vertical</h4>
                                        <p class="text-muted font-14">
                                            This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an
                                            alternative method to pagination for displaying a large table in a fairly small vertical area, and as such
                                            pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled
                                            as well!).
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#scroll-vertical-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#scroll-vertical-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-vertical-preview">
                                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Judul Project</th>
                                                            <th>Isi</th>
                                                            <th>Waktu</th>
                                                            <th>Bahasa</th>
                                                            <th>Foto</th>
                                                            <th>Status</th>
                                                            <th>Opt</th>
                                                        </tr>
                                                    </thead>
                                                
                                                @foreach ($list_project as $list)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$list->judul_project}}</td>
                                                            <td>{{$list->isi}}</td>
                                                            <td>{{$list->waktu}}</td>
                                                            <td>{{$list->bahasa}}</td>
                                                            <td>{{$list->foto}}</td>
                                                            <td>{{$list->status}}</td>
                                                            <td>
                                                            @if ( $list->status == "Tampilkan")
                                                            <button class="btn btn-danger">Close</button>
                                                            @elseif ( $list->status == "Sembunyikan")
                                                            <button class="btn btn-success">Open</button>
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
