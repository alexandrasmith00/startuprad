@extends('layouts.pdf')

@section('content')

<main role="main">

  <style>
    .pdf-header {
      width: 100%;
      background-image: url("http://startuprad.com/images/background_extra_wide.jpg");
      background-size: cover;
      height: 100%;
    }

    body {
      background-color: white;
    }
  </style>

  <section style="padding-left: 50px; padding-right: 50px;" class="pdf-header">
    <h3 style="font-family: Roboto; color: white; padding-top: 25px;">Startup RAD</h3>
    <h5 style="font-family: Roboto; color: #5F666C;">New Application</h5>
    <h5 style="font-family: Roboto; padding-bottom: 25px; color: #5F666C;">September 2, 2016 @ 8:06pm</h5>
  </section>


  <section style="padding-top: 10px; padding-bottom: 0px;" class="section" >
    <div class="container">

      <div id="details" class="row">
        <div class="col-xs-12">
          <h2 class="section-heading" style="font-family: Roboto;"><b>Founders (4)</b><span class="border"></span></h2>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            Lexi Smith
            <br>alexandrasmith00@gmail.com
            <br>Class of 2017
            <br> Studying computer science
            <br> No secondary
          </p>

        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            Lexi Smith
            <br>alexandrasmith00@gmail.com
            <br>Class of 2017
            <br> Studying computer science
            <br> No secondary
          </p>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            Lexi Smith
            <br>alexandrasmith00@gmail.com
            <br>Class of 2017
            <br> Studying computer science
            <br> No secondary
          </p>

        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            Lexi Smith
            <br>alexandrasmith00@gmail.com
            <br>Class of 2017
            <br> Studying computer science
            <br> No secondary
          </p>
        </div>
      </div>

    </div>
  </section>

  <section style="padding-top: 10px;" class="section" >
    <div class="container">

      <div id="details" class="row">
        <div class="col-xs-12">
          <h2 class="section-heading" style="font-family: Roboto;"><b>Startup</b><span class="border"></span></h2>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; The Wolfe</p>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; <a href="http://thewolfe.io">http://thewolfe.io</a></p>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; <a href="http://youtube.com">http://youtube.com</a></p>
        </div>
        <hr>
        <div class="col-xs-12">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis odio eu quam vestibulum finibus. Donec sit amet risus ultrices, semper orci et, commodo risus. Donec nec ante et turpis commodo ultrices. Quisque quis magna in quam congue fringilla. Suspendisse eu scelerisque nisl, ut dignissim sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam eu lectus hendrerit, porttitor eros ac, scelerisque eros.

            Quisque luctus dictum urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed scelerisque elementum purus, at euismod metus blandit vitae. Quisque ut tellus non sem condimentum dignissim id quis orci. Maecenas auctor turpis sed ipsum lobortis, ut fermentum dui lobortis. Aenean a ante porttitor, aliquam magna a, laoreet velit. Nunc malesuada quam vel posuere dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

            Etiam consequat turpis vitae ligula aliquam malesuada. Phasellus blandit, nisi vel interdum vehicula, est justo fermentum risus, sit amet laoreet lectus eros et felis. Nullam pharetra ultricies quam, sed ornare est pharetra eget.
      </div>
    </div>
  </section>
</main>
@stop
