<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tech Solution">
    <title>Tech Solution</title>
    <link rel="shortcut icon" href="{{asset('contents/website')}}/assets/img/favicon.png" type="image/x-icon">
    <link href="{{asset('contents/website')}}/assets/css/plugins.min.css" rel="stylesheet" />
    <link href="{{asset('contents/website')}}/assets/css/flaticon-business-set.css" rel="stylesheet" />
    <link href="{{asset('contents/website')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/assets/css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">
    <script src="{{asset('contents/website')}}/assets/js/plugins.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="top-bar-area text-light" style="background-color:#08387F;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="info box">
              <ul>
                <li>
                  <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="info">
                    <p> Gulshan, Dhaka </p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-envelope-open"></i>
                  </div>
                  <div class="info">
                    <p> info@techsolution-bd.com </p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                  <div class="info">
                    <p> +880 1737 303073 </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 text-right">
            <a href="{{url('online-registration')}}" class="btn btn_online_reg">Online Registration</a>
          </div>
        </div>
      </div>
    </div>
    <header>
      <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
              <img src="{{asset('contents/website')}}/assets/img/logo.jpg" class="logo logo-display" alt="Logo">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
              <li><a class="active" href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('about')}}">About Us</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('service/it-certification-training')}}">IT Certification Training</a></li>
                  <li><a href="{{url('service/it-audit')}}">IT Audit</a></li>
                  <li><a href="{{url('service/security-solutions')}}">Security Solutions</a></li>
                  <li><a href="{{url('service/iso-consultancy')}}">ISO Consultancy</a></li>
                  <li class="dropdown"><a href="{{url('service/software-services')}}">Software Services</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('service/software/mcms')}}">Manufacturing Companies Management System</a></li>
                      <li><a href="{{url('service/software/crm')}}">Customer Relationship Management (CRM)</a></li>
                      <li><a href="{{url('service/software/hrm')}}">Human Resource Management Software</a></li>
                      <li><a href="{{url('service/software/hms')}}">Hospital Management Software</a></li>
                      <li><a href="{{url('service/software/pms')}}">Pharmacy Management Software</a></li>
                      <li><a href="{{url('service/software/rms')}}">Restaurant Management Software</a></li>
                      <li><a href="{{url('service/software/sms')}}">School Management Software</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">IT Training</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a href="{{url('course/category/data-center')}}">Data Center</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">CDCP</a></li>
                      <li><a href="{{url('#')}}">CDCS</a></li>
                      <li><a href="{{url('#')}}">CDCE</a></li>
                      <li><a href="{{url('#')}}">CDFOM</a></li>
                      <li><a href="{{url('#')}}">DC Migration</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('#')}}">Cyber Security</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">Ethical Hacker</a></li>
                      <li><a href="{{url('#')}}">Ethical Hacker (Master)</a></li>
                      <li><a href="{{url('#')}}">SOC Analyst</a></li>
                      <li><a href="{{url('#')}}">Chief Information Security Officer</a></li>
                      <li><a href="{{url('#')}}">Risk Management Approach and Practices</a></li>
                      <li><a href="{{url('#')}}">Forensic Investigator</a></li>
                      <li><a href="{{url('#')}}">Application Security Engineer .Net</a></li>
                      <li><a href="{{url('#')}}">Application Security Engineer Java</a></li>
                      <li><a href="{{url('#')}}">Advance Network Defense</a></li>
                      <li><a href="{{url('#')}}">Blockchain Professional</a></li>
                      <li><a href="{{url('#')}}">Incident Handler</a></li>
                      <li><a href="{{url('#')}}">LPT Master</a></li>
                      <li><a href="{{url('#')}}">Threat Intelligence Analyst</a></li>
                      <li><a href="{{url('#')}}">Network Defender</a></li>
                      <li><a href="{{url('#')}}">Cloud Security Engineer</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('#')}}">ISACA</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">CISA</a></li>
                      <li><a href="{{url('#')}}">CRISC</a></li>
                      <li><a href="{{url('#')}}">CISM</a></li>
                      <li><a href="{{url('#')}}">CGEIT</a></li>
                      <li><a href="{{url('#')}}">CSX-P</a></li>
                      <li><a href="{{url('#')}}">CDPSE</a></li>
                      <li><a href="{{url('#')}}">ITCA</a></li>
                      <li><a href="{{url('#')}}">CET</a></li>
                      <li><a href="{{url('#')}}">CISA</a></li>
                      <li><a href="{{url('#')}}">IT Risk Fundamentals</a></li>
                      <li><a href="{{url('#')}}">CISA</a></li>
                      <li><a href="{{url('#')}}">Cyber Security Audit</a></li>
                      <li><a href="{{url('#')}}">COBIT an ISACA Framework</a></li>
                      <li><a href="{{url('#')}}">CSX</a></li>
                      <li><a href="{{url('#')}}">CCAK</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/ms-office-application')}}">CISCO</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">Cisco Certified Network Associate 300-201</a></li>
                      <li><a href="{{url('#')}}">Cisco Certified DevNet Associate 200-901 DEVASC</a></li>
                      <li><a href="{{url('#')}}">Cisco Certified DevNet Professional</a></li>
                      <li><a href="{{url('#')}}">Cisco Certified DevNet Expert</a></li>
                      <li><a href="{{url('#')}}">Cisco Certified DevNet Specialist 350-901 DEVCOR</a></li>
                      <li><a href="{{url('#')}}">Cisco Certified DevNet Professional</a></li>
                      <li><a href="{{url('#')}}">Cisco Certified DevNet Specialist</a></li>
                      <li><a href="{{url('#')}}">Cisco Certified DevNet Specialist 300-915 DEVIOT</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/ms-office-application')}}">Enterprise</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">ENCOR</a></li>
                      <li><a href="{{url('#')}}">ENARSI</a></li>
                      <li><a href="{{url('#')}}">ENSDWI</a></li>
                      <li><a href="{{url('#')}}">ENSLD</a></li>
                      <li><a href="{{url('#')}}">ENWLSD</a></li>
                      <li><a href="{{url('#')}}">ENWLSI</a></li>
                      <li><a href="{{url('#')}}">CCNP Enterprise</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/ms-office-application')}}">Collaboration</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">CLCOR</a></li>
                      <li><a href="{{url('#')}}">CLICA</a></li>
                      <li><a href="{{url('#')}}">CLCEI</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/ms-office-application')}}">CyberOps</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">CBROPS</a></li>
                      <li><a href="{{url('#')}}">CBRCOR</a></li>
                      <li><a href="{{url('#')}}">CBRTHD</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/it-security')}}">PMI</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">PMI</a></li>
                      <li><a href="{{url('#')}}">CAPM</a></li>
                      <li><a href="{{url('#')}}">PMI-ACP</a></li>
                      <li><a href="{{url('#')}}">Disciplined Agile</a></li>
                      <li><a href="{{url('#')}}">PMI-PBA</a></li>
                      <li><a href="{{url('#')}}">PGMP</a></li>
                      <li><a href="{{url('#')}}">PFMP</a></li>
                      <li><a href="{{url('#')}}">Prince2 Foundation</a></li>
                      <li><a href="{{url('#')}}">Prince2 Practitioner</a></li>
                      <li><a href="{{url('#')}}">Scram Master</a></li>
                      <li><a href="{{url('#')}}">Six Sigma Green, Yellow and Black Belt</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/it-audit-standard-governance')}}">Axelos</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">ITIL Foundation</a></li>
                      <li><a href="{{url('#')}}">ITIL SO</a></li>
                      <li><a href="{{url('#')}}">ITIL SS</a></li>
                      <li><a href="{{url('#')}}">ITIL SD</a></li>
                      <li><a href="{{url('#')}}">ITIL ST</a></li>
                      <li><a href="{{url('#')}}">ITIL CSI</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/server-networking-hardware')}}">CompTIA</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">A+ (Hardware)</a></li>
                      <li><a href="{{url('#')}}">Network+</a></li>
                      <li><a href="{{url('#')}}">Security+</a></li>
                      <li><a href="{{url('#')}}">Project+</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/it-service-management')}}">Cloud Computing</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">Cloud Computing</a></li>
                      <li><a href="{{url('#')}}">Cloud Networking</a></li>
                      <li><a href="{{url('#')}}">Cloud Security</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('#')}}">Soft Skills</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">Leadership</a></li>
                      <li><a href="{{url('#')}}">Interpersonal Skills</a></li>
                      <li><a href="{{url('#')}}">Communication Skills</a></li>
                      <li><a href="{{url('#')}}">Listening Skills</a></li>
                      <li><a href="{{url('#')}}">Time Management</a></li>
                      <li><a href="{{url('#')}}">Problem Solving</a></li>
                      <li><a href="{{url('#')}}">Problem Solving</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('course/category/project-management')}}">Palo Alto</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">PCNSE</a></li>
                      <li><a href="{{url('#')}}">PCCSE</a></li>
                      <li><a href="{{url('#')}}">PCSAE</a></li>
                      <li><a href="{{url('#')}}">PCNSA</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="{{url('#')}}">ISC 2</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('#')}}">CISSP</a></li>
                      <li><a href="{{url('#')}}">SSCP</a></li>
                      <li><a href="{{url('#')}}">CSP</a></li>
                      <li><a href="{{url('#')}}">OSCP</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="{{url('service/it-audit')}}">IT Audit</a></li>
              <li><a href="{{url('service/security-solutions')}}">Security Solutions</a></li>
              <li><a href="{{url('service/industrial-automation')}}">Industrial Automation</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
    <div class="clients-area default-padding clients_area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center clients_area_title">AFFILIATIONS / CERTIFICATIONS</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="clients-items owl-carousel owl-theme text-center">
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/cisco.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/autodesk.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/ciw.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/comptia.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/isaca.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/itil.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/microsoft.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/oracle.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img src="{{asset('contents/website')}}/assets/img/clients/zend.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img style="width: 90px; margin-top: 10px" src="{{asset('contents/website')}}/assets/img/clients/juniper_black-rgb-header.webp" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img style="width: 300px" src="{{asset('contents/website')}}/assets/img/clients/mikrotik.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img style="width: 100px" src="{{asset('contents/website')}}/assets/img/clients/pmp_logo.png" alt="Clients">
                </a>
              </div>
              <div class="single-item">
                <a href="#">
                  <img style="width: 140px" src="{{asset('contents/website')}}/assets/img/clients/prince2-logo-dark.png" alt="Clients">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients -->
    <!-- Start Footer
    ============================================= -->
    <footer class="default-padding-top text-light">
      <div class="container">
        <div class="row">
          <div class="f-items fv1">
            <div class="col-md-4 item">
              <div class="f-item">
                <h4>About Us</h4>
                <p>
                  TECH SOLUTION is the IT training and consulting firm that is committed to assure excellence in the service.
                  Our vision is to bring excellence and near perfection at our customer’s business.
                  Our mission is to enable IT as one of the key business driver that can realize benefit by utilizing resources and optimizing risks.
                </p>
              </div>
            </div>
            <div class="col-md-4 item">
              <div class="f-item link full">
                <h4>Top Training Courses</h4>
                <ul>
                  <li><a href="#">Creative Designing</a></li>
                  <li><a href="#">Database Management</a></li>
                  <li><a href="#">IT Security</a></li>
                  <li><a href="#">IT Service Management</a></li>
                  <li><a href="#">MS Office Application</a></li>
                  <li><a href="#">Operating</a></li>
                  <li><a href="#">Project Management</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 item">
              <div class="f-item business-hours">
                <h4>Contact Info</h4>
                <p> <i class="fas fa-home"></i> <strong>Head Office:</strong> <br> 503/7 Secant St, Liverpool, NSW-2170, Australia | ABN 33 154 421 548.</p>
                <p> <i class="fas fa-home"></i> <strong>Bangladesh Office:</strong> <br> House- 40, Road-25, Gulshan-1, Dhaka, Bangladesh.</p>
                <p> <i class="fas fa-phone-square"></i> <strong>Contact:</strong> <br> +880 1737 303073</p>
                <p> <i class="fas fa-envelope"></i> <strong>Email:</strong> <br> info@techsolution-bd.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6 logo">
                <img src="{{asset('contents/website')}}/assets/img/logo.jpg" alt="Logo">
              </div>
              <div class="col-md-6 footer-bottom-menu text-right">
                <ul>
                  <li>
                    <a href="terms-conditions.html">Terms of Use</a>
                  </li>
                  <li>
                    <a href="privacy-policy.html">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="contact-1.html">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{asset('contents/website')}}/assets/js/main.js"></script>
  </body>
</html>
