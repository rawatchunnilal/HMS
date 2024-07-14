<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Warden Dashboard</title>
  <link rel="stylesheet" href="../../css/Warden-Dashboard.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <?php include '../../php/connection/connect.php'?>
  <div class="Student_Dashboard">
    <div class="centraldiv">
      <nav id="sidebar">
        <div class="sidebar-header">
          <h5>Hostel Management System</h5>
        </div>
        <div class="profile-photo" id="profilePhoto">
          <img src="../../assets/Profile.png" alt="Profile Photo" id="photoImg" />
        </div>

        <ul class="list-unstyled components">
          <li>
            <a href="#">
              <i class="fa fa-user"></i>
              Profile
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-sign-out"></i>
              Logout
            </a>
          </li>
        </ul>
      </nav>

      <div id="content">
        <nav class="navbar navbar-expand-lg ">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <img src="../../assets/Menu.png" alt="Toggle Sidebar" />
          </button>

          <div class="nav_buttons_container collapse navbar-collapse justify-content-end">
            <div class="nav_buttons d-flex justify-content-between">
              <a href="another-page.html" class="nav_button_item">
                <div class="button_type">
                  Total Students <br />
                  <?php
                    $sql = "SELECT COUNT(*) AS total_candidates FROM candidates";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Fetch the result
                        $row = $result->fetch_assoc();
                        $total_candidates = $row['total_candidates'];
                        echo $total_candidates;
                    } else {
                        echo "0 results";
                    }            
                  ?>
                </div>
                <img src="../../assets/Group 31.png" alt="go" />
              </a>
              <a href="../../Common Files/Hostelers.php" class="nav_button_item">
                <div class="button_type">
                  Hostelers <br />
                  <?php
                   $sql = "SELECT COUNT(*) AS total_hostelers FROM student";
                   $result = $conn->query($sql);
                   
                   if ($result->num_rows > 0) {
                       // Fetch the result
                       $row = $result->fetch_assoc();
                       $total_candidates = $row['total_hostelers'];
                       echo $total_candidates;
                   } else {
                       echo "0 results";
                   }             
                  ?>
                </div>
                <img src="../../assets/Group 31.png" alt="go" />
              </a>
              <a href="another-page.html" class="nav_button_item">
                <div class="button_type">
                  On Leave <br />
                  <?php
                    $sql = "SELECT COUNT(*) AS On_leave FROM leave_requests";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Fetch the result
                        $row = $result->fetch_assoc();
                        $total_candidates = $row['On_leave'];
                        echo $total_candidates;
                    } else {
                        echo "0 results";
                    }            
                  ?>
                </div>
                <img src="../../assets/Group 31.png" alt="go" />
              </a>
              <a href="another-page.html" class="nav_button_item">
                <div class="button_type">
                  Removed <br />
                  <?php
                    $sql = "SELECT COUNT(*) AS Past FROM paststudent";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Fetch the result
                        $row = $result->fetch_assoc();
                        $total_candidates = $row['Past'];
                        echo $total_candidates;
                    } else {
                        echo "0 results";
                    }            
                  ?>
                </div>
                <img src="../../assets/Group 31.png" alt="go" />
              </a>
            </div>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".nav_buttons_container"
            aria-controls="nav_buttons_container" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>


        <div class="content_heading">
          <h5>Warden Dashboard</h5>
        </div>
        <div class="container boxes_container">
          <div class="text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-5">
              <div class="col">
                <div class="box p-2">
                  <div class="color_doppler color_doppler_1"></div>
                  <div class="row">
                    <div class="col-12 col-md-4 icon">
                      <img src="../../assets/bed.png" alt="room_status" />
                    </div>
                    <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                      <p>Room Status</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box p-2">
                  <div class="color_doppler color_doppler_2"></div>
                  <div class="row">
                    <div class="col-12 col-md-4 icon">
                      <img src="../../assets/delegate.png" alt="room_status" />
                    </div>
                    <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                      <p>New Admissions</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box p-2">
                  <div class="color_doppler color_doppler_3"></div>
                  <div class="row">
                    <div class="col-12 col-md-4 icon">
                      <img src="../../assets/exit.png" alt="room_status" />
                    </div>
                    <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                      <p>Leave Requests</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box p-2">
                  <div class="color_doppler color_doppler_4"></div>
                  <div class="row">
                    <div class="col-12 col-md-4 icon">
                      <img src="../../assets/quit.png" alt="room_status" />
                    </div>
                    <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                      <p>Quit Requests</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box p-2">
                  <div class="color_doppler color_doppler_1"></div>
                  <div class="row">
                    <div class="col-12 col-md-4 icon">
                      <img src="../../assets/register.png" alt="room_status" />
                    </div>
                    <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                      <p>Complaints</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box p-2">
                  <div class="color_doppler color_doppler_2"></div>
                  <div class="row">
                    <div class="col-12 col-md-4 icon">
                      <img src="../../assets/calendar.png" alt="room_status" />
                    </div>
                    <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                      <p>Attendance</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box p-2">
                  <div class="color_doppler color_doppler_3"></div>
                  <div class="row">
                    <div class="col-12 col-md-4 icon">
                      <img src="../../assets/graph.png" alt="room_status" />
                    </div>
                    <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                      <p>Report Generation</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="../scripts/async_script.js"></script>

  <script src="../scripts/toggle_sidebar.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Check if the URL has the upload_success parameter
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.has("upload_success")) {
        const uploadAttendanceDiv =
          document.getElementById("upload_attendance");
        if (uploadAttendanceDiv) {
          uploadAttendanceDiv.click();
        }
      }
    });
  </script>
</body>

</html>