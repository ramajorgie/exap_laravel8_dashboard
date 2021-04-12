@extends('page_view/sub_core/main')

@section('title','Contact')

@section('container')
    <section id="contact" class="contact-section pt-120 pb-160">
      <div class="shape shape-7">
        <img src="assets/img/shapes/shape-7.svg" alt="" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <div class="section-title text-center mb-55">
              <span class="wow fadeInDown" data-wow-delay=".2s">Appoinment</span>
              <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Get Appoinment Now</h2>
              <p class="wow fadeInLeft" data-wow-delay=".6s">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy <br class="d-none d-lg-block" />
                eirmod tempor invidunt ut labore et dolore magn.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="contact-form">
              <form action="#" method="POST" id="contact-form" class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" id="name" name="name" placeholder="Name" required />
                  </div>
                  <div class="col-md-6">
                    <input type="email" id="email" name="email" placeholder="Email" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" name="subject" id="subject" placeholder="Subject" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-12">
                    <button type="submit" class="btn theme-btn">Send Message</button>
                  </div>
                </div>
              </form>
              <p class="form-message pt-15"></p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection