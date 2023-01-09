
  <?php
   session_start();
      ?>

<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Admin Area</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="user.php">
          <i class="bi bi-circle"></i><span>create users</span>
        </a>
      </li>

    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#component-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Registeration</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="component-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="patient.php">
          <i class="bi bi-circle"></i><span>patients</span>
        </a>
      </li>
      <li>
        <a href="booking.php">
          <i class="bi bi-circle"></i><span>booking</span>
        </a>
      </li>
      <li>
        <a href="shift.php">
          <i class="bi bi-circle"></i><span>Shift</span>
        </a>
      </li>
      <li>
        <a href="account.php">
          <i class="bi bi-circle"></i><span>Account</span>
        </a>
      </li>
      <li>
        <a href="p_method.php">
          <i class="bi bi-circle"></i><span>payment_method</span>
        </a>
      </li>
      <li>
        <a href="payment.php">
          <i class="bi bi-circle"></i><span>payment</span>
        </a>
      </li>
      <li>
        <a href="information.php">
          <i class="bi bi-circle"></i><span>information</span>
        </a>
      </li>
      <li>
        <a href="xray.php">
          <i class="bi bi-circle"></i><span>xray</span>
        </a>
      </li>
      <li>
        <a href="result.php">
          <i class="bi bi-circle"></i><span>Result</span>
        </a>
      </li>
      <li>
        <a href="category.php">
          <i class="bi bi-circle"></i><span>category</span>
        </a>
      </li>
      <li>
        <a href="apointment.php">
          <i class="bi bi-circle"></i><span>Apointment</span>
        </a>
      </li>
      <li>
        <a href="employe.php">
          <i class="bi bi-circle"></i><span>Employe</span>
        </a>
      </li>

      <li>
        <a href="charge.php">
          <i class="bi bi-circle"></i><span>charge</span>
        </a>
      </li>

      <li>
        <a href="Bills.php">
          <i class="bi bi-circle"></i><span>Bills</span>
        </a>
      </li>
     
    </ul>
  </li>
  
  

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
     
  34
      <li>
        <a href="account.php">
          <i class="bi bi-circle"></i><span>Account</span>
        </a>
      </li>
      <li>
        <a href="p_method.php">
          <i class="bi bi-circle"></i><span>payment_method</span>
        </a>
      </li>
      <li>
        <a href="payment.php">
          <i class="bi bi-circle"></i><span>payment</span>
        </a>
      </li>
    

      <li>
        <a href="charge.php">
          <i class="bi bi-circle"></i><span>charge</span>
        </a>
      </li>

      <li>
        <a href="Bills.php">
          <i class="bi bi-circle"></i><span>Bills</span>
        </a>
      </li>
     
    </ul>
  </li>
  
  
  
  <!-- End Components Nav -->

 <!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="patient_statement.php">
          <i class="bi bi-circle"></i><span>patient_statement</span>
        </a>
      </li>
      <li>
        <a href="booking_statement.php">
          <i class="bi bi-circle"></i><span>booking_statement</span>
        </a>
      </li>


      <li>
        <a href="payment__statement.php">
          <i class="bi bi-circle"></i><span>payment_statement</span>
        </a>
      </li>

      <li>
        <a href="ALL_patient_pending.php">
          <i class="bi bi-circle"></i><span>patient_pending_statement</span>
        </a>
      </li>

      <li>
        <a href="apointment_statement.php">
          <i class="bi bi-circle"></i><span>Apointment_statement</span>
        </a>
      </li>

      <li>
        <a href="Information_statement.php">
          <i class="bi bi-circle"></i><span>Information_statement</span>
        </a>
      </li>

      <li>
        <a href="result_statement.php">
          <i class="bi bi-circle"></i><span>Result_statement</span>
        </a>
      </li>

      <li>
        <a href="bills_statement.php">
          <i class="bi bi-circle"></i><span>Bills_statement</span>
        </a>
      </li>
    </ul>
  </li>
  
  
  <!-- End  -->

  <!-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.html">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
      <li>
        <a href="charts-apexcharts.html">
          <i class="bi bi-circle"></i><span>ApexCharts</span>
        </a>
      </li>
      <li>
        <a href="charts-echarts.html">
          <i class="bi bi-circle"></i><span>ECharts</span>
        </a>
      </li>
    </ul>
  </li> -->
   

  <!-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.html">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-remix.html">
          <i class="bi bi-circle"></i><span>Remix Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-boxicons.html">
          <i class="bi bi-circle"></i><span>Boxicons</span>
        </a>
      </li>
    </ul>
  </li> -->

  <!-- <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li> -->

  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.html">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-error-404.html">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-blank.html">
      <i class="bi bi-file-earmark"></i>
      <span>Blank</span>
    </a>
  </li> -->

</ul>

</aside>