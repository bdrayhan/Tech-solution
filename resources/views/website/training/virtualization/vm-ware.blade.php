@extends('layouts.website')
@section('content')
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('contents/website')}}/assets/img/banner/2.jpg);">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6 text-left">
              <h1>IT Certification Training</h1>
          </div>
          <div class="col-md-6 col-sm-6 text-right">
              <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Service</a></li>
                  <li class="active">Training</li>
              </ul>
          </div>
      </div>
  </div>
</div>
<div class="service_area default-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="">
          <h2>VMware vSphere: Install, Configure, Manage [V6.5]</h2>
          <a href="#"><h6>VIRTUALIZATION</h6></a>
          <h3>Course Description</h3>
          <img src="" alt="">
          <h5>Overview:</h5>
          <p>This five-day course features intensive hands-on training that focuses on installing, configuring, and managing VMware vSphere® 6.5, which includes VMware ESXi™ 6.5 and VMware vCenter Server® 6.5. This course prepares you to administer a vSphere infrastructure for an organization of any size. It is the foundation for most other VMware technologies in the software-defined data center.</p>
          <p><b>Note:<b> This course is based on beta software.</p>
          <h5>Objectives:</h5>
          <ul>
            <li>Describe the software-defined data center</li>
            <li>Deploy an ESXi host and create virtual machines</li>
            <li>Describe vCenter Server architecture</li>
            <li>Deploy a vCenter Server instance or VMware vCenter Server<sup>TM</sup> Appliance<sup>TM<sup></li>
            <li>Use vCenter Server to manage an ESXi host</li>
            <li>Configure and manage vSphere infrastructure with VMware vSphere® Client™ and VMware vSphere® Web Client</li>
            <li>Configure virtual networks with vSphere standard switches</li>
            <li>Use vCenter Server to manage various types of host storage</li>
            <li>Manage virtual machines, templates, clones, and snapshots</li>
            <li>Create a vApp</li>
            <li>Describe and use the content library</li>
            <li>Migrate virtual machines with VMware vSphere® vMotion®</li>
            <li>Use VMware vSphere® Storage vMotion® to migrate virtual machine storage</li>
            <li>Monitor resource usage and manage resource pools</li>
            <li>Use VMware vRealize™ Operations Manager™ to identify and solve issues through analytics and alerts</li>
            <li>Manage VMware vSphere® High Availability and VMware vSphere® Fault Tolerance</li>
            <li>Use VMware vSphere® Replication™ and VMware vSphere® Data Protection™ to replicate virtual machines and perform data recovery</li>
            <li>Use VMware vSphere® Distributed Resource Scheduler™ clusters to improve host scalability</li>
            <li>Use vSphere distributed switches to improve network scalability</li>
            <li>Use VMware vSphere® Update Manager™ to apply patches</li>
            <li>Perform basic troubleshooting of ESXi hosts, virtual machines, and vCenter Server operations</li>
          </ul>
          <h5>Intended Audience:</h5>
          <ul>
            <li>System administrators</li>
            <li>Systems engineers</li>
          </ul>
          <h5>Prerequisites:</h5>
          <ul>
            <li>System administration experience on Microsoft Windows or Linux operating systems</li>
            <li>Understanding of concepts presented in the VMware Data Center Virtualization Fundamentals course for VCA-DCV certification</li>
          </ul>
          <h5>Outline:</h5>
          <h5>1. Course Introduction</h5>
          <ul>
            <li>Introductions and course logistics</li>
            <li>Course objectives</li>
            <li>Describe the content of this course</li>
            <li>Gain a complete picture of the VMware certification system</li>
            <li>Familiarize yourselfwith the benefits of the VMware Education Learning Zone</li>
            <li>Identify additional resources</li>
          </ul>
          <h5>2. Software-Defined Data Center</h5>
          <ul>
            <li>Describe the topology of a physical data center</li>
            <li>Explain the vSphere virtual infrastructure</li>
            <li>Define the files and components of virtual machines</li>
            <li>Describe the benefits of using virtual machines</li>
            <li>Explain the similarities and differences between physical architectures and virtual architectures</li>
            <li>Define the purpose of ESXi</li>
            <li>Define the purpose of vCenter Server</li>
            <li>Explain the software-defined data center</li>
            <li>Describe private, public, and hybrid clouds</li>
          </ul>
          <h5>3. Creating Virtual Machines</h5>
          <ul>
            <li>Introduce virtual machines, virtual machine hardware, and virtual machine files</li>
            <li>Identify the files that make up a virtual machine</li>
            <li>Discuss the latest virtual machine hardware and its features</li>
            <li>Describe virtual machine CPU, memory, disk, and network resource usage</li>
            <li>Explain the importance of VMware Tools <sup>TM</sup></li>
            <li>Discuss PCI pass-through, Direct I/O, remote direct memory access, and NVMe</li>
            <li>Deploy and configure virtual machines and templates</li>
            <li>Identify the virtual machine disk format</li>
          </ul>
          <h5>4. vCenter Server</h5>
          <ul>
            <li>Introduce the vCenter Server architecture</li>
            <li>Deploy and configure vCenter Server Appliance</li>
            <li>Use vSphere Web Client</li>
            <li>Backup and restore vCenter Server</li>
            <li>Examine vCenter Server permissions and roles</li>
            <li>Explain the vSphere HA architectures and features</li>
            <li>Examine the new vSphere authentication proxy</li>
            <li>Manage vCenter Server inventory objects and licenses</li>
            <li>Access and navigate the new vSphere clients</li>
          </ul>
          <h5>5. Configuring and Managing Virtual Networks</h5>
          <ul>
            <li>Configure virtual switch load-balancing algorithms</li>
            <li>Describe, create, and manage standard switches</li>
            <li>Describe and modify standard switch properties</li>
            <li>Create, configure, and manage vSphere distributed switches, network connections, and port groups</li>
          </ul>
          <h5>6. Configuring and Managing Virtual Storage</h5>
          <ul>
            <li>Create and manage VMware vSphere® VMFS datastores</li>
            <li>Introduce storage protocols and storage device names</li>
            <li>Discuss ESXi with iSCSI, NFS, and Fibre Channel storage</li>
            <li>Introduce VMware Virtual SAN <sup>TM</sup></li>
          </ul>
          <h5>7. Virtual Machine Management</h5>
          <ul>
            <li>Create a vApp</li>
            <li>Perform vSphere vMotion and vSphere Storage vMotion migrations</li>
            <li>Use templates and cloning to deploy virtual machines</li>
            <li>Modify and manage virtual machines</li>
            <li>Create and manage virtual machine snapshots</li>
            <li>Introduce the various types of content libraries and how to deploy and use them</li>
          </ul>
          <h5>8. Resource Management and Monitoring</h5>
          <ul>
            <li>Create and use alarms to report certain conditions or events</li>
            <li>Describe methods for optimizing CPU and memory usage</li>
            <li>Introduce virtual CPU and memory concepts</li>
            <li>Configure and manage resource pools</li>
            <li>Use vCenter Server performance graphs and alarms to monitor resource usage</li>
            <li>Introduce vRealize Operations Manager for data center monitoring and management</li>
          </ul>
          <h5>9. vSphere HA and vSphere Fault Tolerance</h5>
          <ul>
            <li>Introduce vSphere Replication</li>
            <li>Introduce vSphere Fault Tolerance</li>
            <li>Configure and manage a vSphere HA cluster</li>
            <li>Explain the vSphere HA architecture</li>
            <li>Use vSphere HA advanced parameters</li>
            <li>Enable vSphere Fault Tolerance on virtual machines</li>
            <li>Use vSphere Data Protection to back up and restore data</li>
          </ul>
          <h5>10. Host Scalability</h5>
          <ul>
            <li>Work with affinity and anti-affinity rules</li>
            <li>Describe the functions of a vSphere DRS cluster</li>
            <li>Configure and manage a vSphere DRS cluster</li>
            <li>Use vSphere HA and vSphere DRS together</li>
          </ul>
          <h5>11. vSphere Update Manager and Host Maintenance</h5>
          <ul>
            <li>Use host profiles to manage ESXi configuration compliance</li>
            <li>Install vSphere Update Manager and the vSphere Update Manager plug-in</li>
            <li>Use vSphere Update Manager to manage ESXi patching</li>
            <li>Create patch baselines</li>
            <li>Scan and remediate hosts</li>
          </ul>
          <h5>12. Installing VMware Components</h5>
          <ul>
            <li>Describe vCenter Server hardware, software, and database requirements</li>
            <li>Describe boot-from-SAN requirements</li>
            <li>Introduce ESXi installation</li>
            <li>Introduce vCenter Server deployment options</li>
            <li>Discuss installation of vCenter Server Appliance and a vCenter Server instance</li>
          </ul>
          <h3>COURSE OUTLINE</h3>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
