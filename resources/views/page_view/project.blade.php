@extends('page_view/sub_core/main')

@section('title','Project')

@section('container')
<script>
  (function($) {
    $(function() {
        $('.carousel').jcarousel({
            wrap: 'circular'
        });
    });
})(jQuery)
</script>
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
      @endforeach
      <div class="col-sm-8">
        <div style="text-align: justify;" class="about-content mb-20">
          <p class="mb-35  ">
            <?php
            foreach ($data as $tampil){
              echo $tampil->isi;
            }?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
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
                            
                          @foreach ($all_data as $item)
                          <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="img-fluid" alt="100%x280" src="{{ asset('/assets_foto_post/'.$tampil->foto) }}">
                            </div>
                          </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>


@endsection