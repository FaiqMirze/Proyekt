<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="{{asset('front/assets/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
@include('front.layouts.nowbar')
<!-- Page Header-->
@include('front.layouts.header')
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <h3>Contact Us</h3>
            <p>If you have any questions about our news or collabortion offers,feel free to fill out the form below</p>
      <form action="{{route('front.send')}}"  method="POST">
          @csrf
          <div class="mb-3">
          <label class="form-label">Your Name:</label>
          <input type="text" name="name" class="form-control" required>
          </div>
          <div class="bm-3">
          <label class="form-label">Your Email Address:</label>
          <input type="Email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
          <label class="form-label">Subject:</label>
          <input type="text" name="subject" class="form-control" required>
          </div>
          <div class="mb-3">
          <label class="form-label">Your Message</label>
          <textarea name="message" rows="4" class="form-control"></textarea>
          </div>
          <button type="submit"  class="btn btn-primary" >Send</button>
      </form>
           <br>
            <br>

            <!--Contoct information -->
            <h4>Contact Information</h4>
            <p><b>Email:</b>info@globalnews.com</p>
            <p><b>Phone:</b>+1(555)123-4567</p>
            <p><b>Adress:</b>41 Jafar Jabbarli street ,Baku Azerbaijan</p>
            <br>
            <br>
       <h2>Our Office</h2>
            <div id="map" style="width: 100%; height: 600px;margin-bottom: 50px;">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d634.1372943592316!2d49.82873193558193!3d40.384245664624274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2saz!4v1727193257234!5m2!1sen!2saz"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
@include('front.layouts.footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('front/js/scripts.js')}}"></script>
</body>
</html>



