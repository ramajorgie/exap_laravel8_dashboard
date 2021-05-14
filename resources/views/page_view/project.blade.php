@extends('page_view/sub_core/main')

@section('title','Project')

@section('container')
<script src="asset/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js" ></script>

<section id="about" class="about-section pt-40">
  <div class="container">
    <div class="row">
      <div class="section-title text-center mb-30">
        <span class="wow ">Our Project</span>
      </div>
      @foreach ($data as $tampil)
      <div class="col-sm-4">
        <div class="about-content text-center mb-20">
          <p class="mb-35  ">
            <img src="{{ asset('/assets_foto_post/'.$tampil->foto) }}" class="img-responsive" alt="...">
          </p>
        </div>
      </div>
      <div class="col-sm-8">
        <div style="text-align: justify;" class="about-content mb-20">
          <p class="mb-35  ">
            {!! nl2br($tampil->isi) !!}
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{--  <section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3"></h3>
        </div>
        <div class="col-6 text-right">
            <a style="color: white" class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a style="color: white"  class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="row">
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="row">
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="row">
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                  <div class="card-body">
                                      <h4 class="card-title">Special title treatment</h4>
                                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>  --}}
@endsection