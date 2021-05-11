@extends('detail_blogs/core_blog_detail/main')

@section('title','Blog')

@section('container')
    <section id="blog" class="blog-section pt-40">
      <div class="shape shape-7">
        <img src="assets/img/shapes/shape-6.svg" alt="" />
      </div>
      <div class="container">
        <div class="row">
          @foreach ($detail as $item)
          <div class="col-xl-10 mx-auto">
            <div class="section-title text-justify mb-55">
            <h2 class=" wow fadeInUp" data-wow-delay=".4s">{{$item->judul_blog}}</h2>
            <p class="mb-25">{{ date("l, d F Y", strtotime($item->waktu)) }}</p>
            <hr>
            <img src="{{ asset('/assets_post_blog/'.$item->foto) }}" alt="">
            <p class="wow fadeInUp" data-wow-delay=".4s">{!! nl2br($item->isi) !!}</p>
              
            </div>
            <hr>
          </div>
          <div class="col-xl-2 mx-auto">
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
@endsection