@extends('layout.app')
@section('title', 'PaScan | Dashboard')

@section('content')
 
    @include('partials.sidebar')

    <section class="home-section">
        <div class="home-content">
          <i class='fa-solid fa-bars toggle-sidebar-btn' ></i>
          <span class="text">Dashboard</span>
        
    
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

    
            <li class="nav-item dropdown">
    
    
    
            <li class="nav-item dropdown pe-4">
    
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <i class="rounded-circle fa-solid fa-user"></i>
                <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>Kevin Anderson</h6>
                  <span>Web Designer</span>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
        </div>
      </section>

  <section id="main" class="main">

    <section class="section dashboard ">
      <section class="row">

        <section class="col-lg-12">
          <section class="row">

            <!-- Customers Card
            <div class="col-xxl-1 col-xl-1 ">

              <div class="card info-card customers-card ">
                
             
                <div class="card-date">
                  <label id="date"></label>
              </div>
              <div class="stud_gif">
                <img src="img/images/image-removebg-preview (45).png">
              </div>

                <div class="card-body">

                  <h5 class="card-title-info">Welcome back, <span class="stud_name" id="stud_name"></span>!</h5>
               
                    <div class="card-info">
                        <h6>Always stay updated in your student portal.</h6>
                    </div>
                  
                    
                    

                </div> 
              </div>

            </div> End of Top card-->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" id="wlcm_card">

                <div class="card-body">

                  <div class="d-flex align-items-center">
                    
                    <div class="card-date">
                        <label id="date"></label>
                    </div>
                   
                  </div> 
                  
                  <h5 id="wlcm_mssge_card" class="wlcm_mssge_card">Welcome back!</h5>

                </div>
                 <!--<div class="dash_illustrations">
                      <img src="img/images/Thesis-rafiki-removebg-preview.png" alt="student doing thesis">
                    </div>-->
              </div>
            </div><!-- End Number of Exams Paid -->  
  
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="card-body">
  
                    <div class="current_event_card">
                      <div class="ps-1 card-info">
                        <h6 class="event-card-title">Current Event</h6>  
                      </div>
                    </div>
                    <h5 id="current_event" class="current_event">TCCSTFI Intramurals 2024</h5>

                  </div>

                 <!-- <div class="dash_illustrations">
                    <img src="img/images/Thesis-rafiki-removebg-preview.png" alt="student doing thesis">
                  </div>-->

                </div>
              </div><!-- End Total Assessmet -->
  
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="card-body">
  
                    <div class="current_event_card attendees-card">
                      <div class="ps-1 card-info">
                        <h6 class="event-card-title">Current Attendees</h6>  
                      </div>
                    </div>
                      <div class="current-attendees-table">
                        <table>
                          <thead>
                            <th>Student Name</th>
                            <th>Year Level</th>
                            <th>Time</th>
                          </thead>
                          <tbody id="student_info">
                            <tr>
                              <td>Hilary Mae E. Poralan</td>
                              <td>4th Year</td>
                              <td>8:30 am</td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                  
                  <!--<div class="dash_illustrations">
                    <img src="img/images/Thesis-rafiki-removebg-preview.png" alt="student doing thesis">
                  </div>-->

                </div>
              </div><!-- End Sof Current Balance -->
  
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="card-body" id="chart-container">
                    <!-- Title -->
                    <div class="no-of-students">
                      <div class="ps-1">
                        <h6 class="no-of-students-title">No. of Students</h6>  
                      </div>
                    </div>
                  
                    <!-- Doughnut Chart -->
                    <canvas id="studentsDoughnutChart" style="margin-top: 20px;"></canvas>
                  
                    <!-- Chart Legend -->
                    <div class="chart-legend">
                      <div class="legend-item">
                        <div class="legend-color" style="background-color: #FFAD60;"></div>
                        <span class="legend-text">No. Of Attendees</span>
                      </div>
                      <div class="legend-item">
                        <div class="legend-color" style="background-color: #FFEEAD;"></div>
                        <span class="legend-text">Total Registered Students</span>
                      </div>
                    </div>
                  </div>
                  
  
                <!--  <div class="dash_illustrations">
                    <img src="img/images/Thesis-rafiki-removebg-preview.png" alt="student doing thesis">
                  </div>-->
                  
                </div>
              </div><!-- End Sof Current Balance -->
            </section>
              
          </section>
        </section>
        </section>
      </section>
  </main><!-- End #main -->

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
    });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".toggle-sidebar-btn");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
    });

    //date
    const datetoday = new Date();
    const dateformat = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const dateString = datetoday.toLocaleDateString('en-US', dateformat); // Customize format based on locale
    document.getElementById("date").innerHTML = dateString;

    //doughnut chart
    const ctx = document.getElementById('studentsDoughnutChart').getContext('2d');

let data = {
  labels: ['Current Student Attendance', 'Total Registered Students'],
  datasets: [{
    data: ["1450", "2000"], // Initial values
    backgroundColor: ['#FFEEAD', '#FFAD60'],
    hoverOffset: 2,
    borderWidth: 1,
  }]
};

const options = {
  cutout: '60%',
  responsive: false,
  maintainAspectRatio:false,
  plugins: {
    legend: {
      display: false,
    },
    tooltip: {
      callbacks: {
        label: function(tooltipItem) {
          const total = data.datasets[0].data.reduce((a, b) => a + b, 0);
          const value = data.datasets[0].data[tooltipItem.dataIndex];
          const percentage = ((value / total) * 100).toFixed(1);
          return `${value} (${percentage}%)`;
        }
      }
    }
  }
};

// Create the initial chart
const myDoughnutChart = new Chart(ctx, {
  type: 'doughnut',
  data: data,
  options: options,
});



</script>
@endsection
 

  
 