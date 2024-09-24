
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
            <h3>About Us</h3>
            <p>At <b>Global News</b>, we are committed to delivering the most current, reliable, and impactful news from around the world. Our mission is to bring the voices and stories from every corner of the globe to light, informing and empowering our readers.</p>
            <p><b>Established:</b> September 1, 2024</p>
            <p>We cover a wide range of topics, from politics to arts, science to technology, by closely following events happening worldwide. Our team consists of experienced journalists and researchers, each dedicated to earning your trust by investigating the background of every story and presenting accurate information.</p>
            <p>With our slogan, <b>"Your Window to the World"</b> we strive not only to provide you with news but also to offer a deeper understanding of events, allowing you to see the broader context. Whether you seek daily news updates or in-depth analyses, Global News is always here for you.</p>
            <p>The world is constantly changing, and we are committed to keeping pace with these changes by bringing you the latest developments. Enhance your access to information and get to know the world better with Global News.</p>
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


