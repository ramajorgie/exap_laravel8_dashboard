@extends('page_view/sub_core/main')

@section('title','About')

@section('container')

    <section id="about" class="about-section pt-40">
      <div class="container">
        <div class="row">
          <div class="section-title text-center mb-30">
            <span class="wow ">About Company</span>
          </div>
          @foreach ($data as $tampilkan)
          <div class="col-sm-6">
            <div class="about-content text-center mb-20">
              <p class="mb-35  ">
                <img src="{{ asset('/assets_foto_post/'.$tampilkan->gambar) }}" class="img-responsive" alt="...">
              </p>
            </div>
          </div>
          @endforeach
          <div class="col-sm-6">
            <div style="text-align: justify;" class="about-content">
              <p class="">
                <?php
                foreach ($data as $item){
                  echo $item->isi;
                }?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonial-section pt-120 pb-150">
      <div class="shape shape-4">
        <img src="{{URL::asset('assets_view')}}/img/shapes/shape-4.svg" alt="" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-6 mx-auto">
            <div class="section-title text-center mb-25">
              <span class="wow fadeInDown" data-wow-delay=".2s">Our Experience Team</span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-xl-7 col-lg-9 mx-auto">
            <div id="customize_wrapper">
              <div class="customize testimonial-active" id="customize">
                <?php foreach ($data_team as $item) : ?>
                <div class="single-testimonial">
                  <div class="quote-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="111.704" height="83.778" viewBox="0 0 111.704 83.778">
                      <path id="Icon_open-double-quote-sans-left" data-name="Icon open-double-quote-sans-left" d="M0,0V83.778L41.889,41.889V0ZM69.815,0V83.778L111.7,41.889V0Z" fill="#00adb5" opacity="0.32" />
                    </svg>
                  </div>
                  <div class="testimonial-content">
                    <p><?=nl2br($item->biografi);?></p>
                  </div>
                  <div class="testimonial-info">
                    <h5><?=$item->nama;?></h5>
                    <span><?=$item->posisi;?></span>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="customize-tools">
                <ul class="thumbnails d-flex justify-content-center" id="customize-thumbnails">
                  <?php foreach ($data_team as $item): ?>
                  <li class="testimonial-img">
                    <img src="../assets_foto_exp_team/<?=$item->foto?>" alt="" />
                  </li>
                  <?php endforeach;?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <section class="faq-section theme-bg">

      <div class="shape">
        <img src="{{URL::asset('assets_view')}}/img/shapes/shape-8.svg" alt="" class="shape-faq" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-6">
            
              <div class="section-title text-center mb-20 m-md-4 ">
                <h5 class="wow fadeInUp" data-wow-delay=".4s">Vision</h5>
                <?php
                foreach ($visi as $item){
                  echo '<p style="color:white;">'. nl2br($item->visi_misi) .'</p>';
                }?>
              </div>
              <div class="section-title text-center mb-25">
                <h5 class="wow fadeInUp" data-wow-delay=".4s">Mission</h5>
                <?php
                foreach ($misi as $item){
                  echo '<p style="color:white;">'. nl2br($item->visi_misi) .'</p>';
                }?>
              </div>
            
          </div>
          <div class="col-6">
            <div class="faq-content-wrapper pt-90 pb-90">
              <div class="section-title text-center mb-25">
                <h2 class="wow fadeInUp" data-wow-delay=".4s">Vision and Mission</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-6 offset-xl-6 col-lg-8 col-md-10">
            
          </div>
        </div>
      </div>
    </section>

@endsection