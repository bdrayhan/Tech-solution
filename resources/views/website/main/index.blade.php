@extends('layouts.website')
@section('content')
<div class="banner-area">
  <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">
    <div class="carousel-inner text-light carousel-zoom">
      <div class="item active">
        <div class="slider-thumb bg-fixed" style="background-image: url({{asset('contents/website')}}/assets/img/banner/tran.jpeg);"></div>
        <div class="box-table shadow theme">
          <div class="box-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <div class="content">
                    <h1 data-animation="animated slideInLeft">IT Certification Training</h1>
                    <p data-animation="animated slideInUp"> Corporate, Public and Customize IT Training and Certification training on IT Service Management, IT Security, IT governance, IT / Project Oriented Training, Database, Networking, Application, Hardware, Design, Software, On the other hand- Lean Six Sigma Black Belt, Scrum Master, COBIT5 Implementer and Foundation, Prince2 Practitioner and Foundation, Balanced Scorecard Practitioner, TOGAF Level2 and Level1, ITIL Foundation, ISO Standards – 9001, 14001, 18001, 27001 and 20000. </p>
                    <a data-animation="animated slideInUp" class="btn btn-light border btn-sm" href="{{url('online-registration')}}">Online Registration</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="slider-thumb bg-fixed" style="background-image: url({{asset('contents/website')}}/assets/img/banner/consul.jpg);"></div>
        <div class="box-table shadow theme">
          <div class="box-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <div class="content">
                    <h1 data-animation="animated slideInLeft">IT Consulting</h1>
                    <p data-animation="animated slideInUp">ISO 9001 is the international standard that specifies requirements for a quality management system (QMS). Organizations use the standard to demonstrate the ability to consistently provide products and services that meet customer and regulatory requirements. It is the most popular standard in the ISO 9000 series and the only standard in the series to which organizations can certify.</p>
                    <a data-animation="animated slideInUp" class="btn btn-light border btn-sm" href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="slider-thumb bg-fixed" style="background-image: url({{asset('contents/website')}}/assets/img/banner/secu.jpeg);"></div>
        <div class="box-table shadow theme">
          <div class="box-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <div class="content">
                    <h1 data-animation="animated slideInLeft">IT Security Solution</h1>
                    <p data-animation="animated slideInUp">This service complements the external and internal penetration tests, and is recommended for when a deeper, application-specific security assessment is required. Systems, architecture, and workflow of the specific application are analyzed and tested, allowing the TECH SOLUTION Security team to provide you with deep insight into the application defenses and weaknesses.</p>
                    <a data-animation="animated slideInUp" class="btn btn-light border btn-sm" href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="slider-thumb bg-fixed" style="background-image: url({{asset('contents/website')}}/assets/img/banner/audit.webp);"></div>
        <div class="box-table shadow theme">
          <div class="box-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <div class="content">
                    <h1 data-animation="animated slideInLeft">IT Audit</h1>
                    <p data-animation="animated slideInUp">An IT audit is the examination and evaluation of an organization’s information technology infrastructure, policies and operations. The primary objectives of an IT audit include: Evaluate the systems and processes in place that secure company data.</p>
                    <a data-animation="animated slideInUp" class="btn btn-light border btn-sm" href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="slider-thumb bg-fixed" style="background-image: url({{asset('contents/website')}}/assets/img/banner/soft.jpeg);"></div>
        <div class="box-table shadow theme">
          <div class="box-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <div class="content">
                    <h1 data-animation="animated slideInLeft">Software Services</h1>
                    <p data-animation="animated slideInUp">Customize Software Development. Production Costing Software, Account & Inventory Management Software, Hospital Management Software, School Management Software, Human Resources Management, Garments ERP, Real Estate ERP, Customer Relationship Management (CRM), Customize ERP, Point of Sales, Pharmacy Management Software, Restaurant Management, Cable Billing Software.</p>
                    <a data-animation="animated slideInUp" class="btn btn-light border btn-sm" href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
      <i class="fa fa-angle-left"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#bootcarousel" data-slide="next">
      <i class="fa fa-angle-right"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-md-5 about_part_img">
        <img src="{{asset('contents/website')}}/assets/img/itsolution.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-4 about_part_content">
        <h3>WELCOME TO <span>TECH SOLUTION</span></h3>
        <h4>Providing IT Solution, Support & Professional Training Under One Roof</h4>
        <p>Tech Solution is one of a limited number of companies in this industry with a long track record of experience and effectiveness in addressing the diverse needs of a large and continually growing IT industry base, spanning the private households, corporate, academic and government markets. Our vision is to develop human assets to build a rich ICT nation & set a benchmark on IT Solution.</p>
      </div>
    </div>
  </div>
</section>

<div class="upcoming-area default-padding upcoming_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center upcoming_area_title">UPCOMING TRAINING </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="upcoming-items owl-carousel owl-theme text-center">
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/lead.png" alt="lead">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/cissp.png" alt="cissp">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/aws.png" alt="aws">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/cisa.png" alt="cisa">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/soc.png" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/blockchain.png" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/lead.png" alt="lead">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/cissp.png" alt="cissp">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/cisa.png" alt="cisa">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/soc.png" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/blockchain.png" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/data2.png" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/disaster-recovery.jpg" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/hacking.jpg" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/ICM.png" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/scrummaster_joggling.jpg" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/net-defender.jpg" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/python.jpeg" alt="Clients">
            </a>
          </div>
          <div class="single-item">
            <a href="#">
              <img src="{{asset('contents/website')}}/assets/img/upcoming/malware.jpg" alt="Clients">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="gallery_part">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-6 col-sm-6 d-flex align-items-center justify-content-center">
              <div class="img_item" style="background: url({{asset('contents')}}/website/assets/img/gallery/australia.jpg);">
                <div class="wrapper">
                    <div class="img_content">
                        <a href="#">Australia</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 col-sm-6 d-flex align-items-center justify-content-center">
              <div class="img_item" style="background: url({{asset('contents')}}/website/assets/img/gallery/eng.jpg);">
                <div class="wrapper">
                    <div class="img_content">
                        <a href="#">Learn More</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 col-sm-6 d-flex align-items-center justify-content-center">
              <div class="img_item" style="background: url({{asset('contents')}}/website/assets/img/gallery/canada.jpg);">
                <div class="wrapper">
                    <div class="img_content">
                        <a href="#">Learn More</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 col-sm-6 d-flex align-items-center justify-content-center">
              <div class="img_item" style="background: url({{asset('contents')}}/website/assets/img/gallery/usa.jpg);">
                <div class="wrapper">
                    <div class="img_content">
                        <a href="#">Learn More</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 col-sm-6 d-flex align-items-center justify-content-center">
              <div class="img_item" style="background: url({{asset('contents')}}/website/assets/img/gallery/image.jpg);">
                <div class="wrapper">
                    <div class="img_content">
                        <a href="#">Learn More</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 col-sm-6 d-flex align-items-center justify-content-center">
              <div class="img_item" style="background: url({{asset('contents')}}/website/assets/img/gallery/images.jpg);">
                <div class="wrapper">
                    <div class="img_content">
                        <a href="#">Learn More</a>
                    </div>
                </div>
              </div>
            </div>
          <div class="clearfix"></div>
      </div>
  </div>
</section>
<!--

<section class="service_area">
  <div class="container-wrap">
    <div class="row ">
      <div class="col-12 col-lg-4 service_area_item service_area_color1 ">
        <div class="text-center">
          <h3><i class="flaticon-service"></i> Financial Planning</h3>
          <p>Tech Solution Limited emphasize on acquiring knowledge and sharing real life experience.</p>
          <ul>
            <li><i class="far fa-check-square"></i> Latest Training Modules And Technology</li>
            <li><i class="far fa-check-square"></i> Technologically Advanced Lab Facility</li>
            <li><i class="far fa-check-square"></i> Well Qualified and experienced instructors</li>
          </ul>
          <a href="#" type="button" class=""btn btn-sm>Find out more</a>
        </div>
      </div>
      <div class="col-12 col-lg-4 service_area_item service_area_color2">
        <div class="text-center">
          <h3><i class="flaticon-profits"></i> Investment Planning</h3>
          <p>Tech Solution Limited emphasize on acquiring knowledge and sharing real life experience.</p>
          <ul>
            <li><i class="far fa-check-square"></i> Latest Training Modules And Technology</li>
            <li><i class="far fa-check-square"></i> Technologically Advanced Lab Facility</li>
            <li><i class="far fa-check-square"></i> Well Qualified and experienced instructors</li>
          </ul>
          <a href="#" type="button" class=""btn btn-sm>Find out more</a>
        </div>
      </div>
      <div class="col-12 col-lg-4 service_area_item service_area_color3 ">
        <div class="text-center">
          <h3><i class="flaticon-id"></i> Retirment Planning</h3>
          <p>Tech Solution Limited emphasize on acquiring knowledge and sharing real life experience.</p>
          <ul>
            <li><i class="far fa-check-square"></i> Latest Training Modules And Technology</li>
            <li><i class="far fa-check-square"></i> Technologically Advanced Lab Facility</li>
            <li><i class="far fa-check-square"></i> Well Qualified and experienced instructors</li>
          </ul>
          <a href="#" type="button" class=""btn btn-sm>Find out more</a>
        </div>
      </div>
    </div>
  </div>
</section>
-->

<div class="business-groth-area default-padding" style="display:none;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 default info">
        <h2>Annual Report <br>from starting to now </h2>
        <p> Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is existence attending he enjoyment favourite affection. Delivered is to ye belonging enjoyment preferred. <br> Drawings me opinions returned absolute in. Otherwise therefore sex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do. </p>
        <a class="btn btn-theme effect btn-sm" href="#">View details</a>
      </div>
      <div class="col-md-6">
        <div class="lineChart">
          <canvas id="lineChart" height="200"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="faq-area default-padding bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <img src="{{asset('contents/website')}}/assets/img/vector.png"/>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 contact-form">
        @if(Session::has('success'))
          <script type="text/javascript">
              swal({title: "Success!", text: "{{Session::get('success')}}", icon: "success", button: "OK", timer:5000,});
           </script>
        @endif
        @if(Session::has('error'))
            <script type="text/javascript">
                swal({title: "Opps!",text: "Error! Please try again", icon: "error", button: "OK", timer:5000,});
            </script>
        @endif
        <h2>Your Query</h2>
        <form action="{{url('submit/guideline')}}" method="post">
          @csrf
          <div class="col-md-12">
            <div class="row">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email*" required>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="form-group comments">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <button type="submit" name="submit"> Submit <i class="fa fa-paper-plane"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="blog-area default-padding">
  <div class="container">
    <div class="row">
      <div class="site-heading text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2>Our Services</h2>
          <p> Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="blog-items">
        <div class="col-md-4 item-box">
          <div class="item">
            <div class="thumb">
              <a href="blog-single-left-sidebar.html">
                <img src="{{asset('contents/website')}}/assets/img/service/01.jpg" alt="Thumbnail">
                <div class="overlay-icon">
                  <i class="fa fa-images"></i>
                </div>
              </a>
            </div>
            <div class="info">
              <h4>
                <a href="#">Security Solutions</a>
              </h4>
              <p> Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter </p>
              <a class="btn btn-sm btn-theme effect read-more" href="{{url('service/security-solutions')}}">read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 item-box">
          <div class="item">
            <div class="thumb">
              <a href="blog-single-left-sidebar.html">
                <img src="{{asset('contents/website')}}/assets/img/service/02.jpg" alt="Thumbnail">
                <div class="overlay-icon">
                  <i class="fa fa-images"></i>
                </div>
              </a>
            </div>
            <div class="info">
              <h4>
                <a href="#">Software Development</a>
              </h4>
              <p> Listening acuteness dependent at or an. Apartments thoroughly unsatiable terminated sex how themselves. She are ten hours wrong walls stand early. </p>
              <a class="btn btn-sm btn-theme effect read-more" href="{{url('service/software-services')}}">read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 item-box">
          <div class="item">
            <div class="thumb">
              <a href="#">
                <img src="{{asset('contents/website')}}/assets/img/service/03.jpg" alt="Thumbnail">
                <div class="overlay-icon">
                  <i class="fa fa-images"></i>
                </div>
              </a>
            </div>
            <div class="info">
              <h4>
                <a href="#">IT Audit</a>
              </h4>
              <p> Domestic perceive on an ladyship extended received do. Why jennings our whatever his learning gay perceive. Is against no he without subject. Bed connection </p>
              <a class="btn btn-sm btn-theme effect read-more" href="{{url('service/it-audit')}}">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('contents/website')}}/assets/js/Chart.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/custom-chart.js"></script>
@endsection
