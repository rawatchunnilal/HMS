<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/Main_dashboard.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        crossorigin="anonymous" />
    <title>Dashboard</title>
</head>

<body>
    <div class="centraldiv">
        <div id="sidebar">
            <div class="sidebar-header">
                <h5>Hostel Management System</h5>
            </div>
            <div class="profile-photo" id="profilePhoto">
                <img src="../../assets/profile_photo.png" alt="">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#" class="nav-link" data-id="profile" data-target="Student_profile.php">
                        <i class="fas fa-user"></i>
                        Profil
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-id="about" data-target="about.php">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-id="portfolio" data-target="portfolio.php">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-id="logout" data-target="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>
            <div class="below_navbar" id="below_navbar">
                Hello!!!
            </div>
        </div>
    </div>

    <!-- Include the full version of jQuery without the integrity attribute -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            console.log("Document is ready");

            $('#sidebarCollapse').on('click', function () {
                console.log("Sidebar collapse button clicked");
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                console.log("Sidebar and button toggled");
            });

            $('.nav-link').on('click', function (e) {
                e.preventDefault();
                console.log("Nav link clicked");
                var targetUrl = $(this).data('target');
                var targetId = $(this).data('id');
                console.log("Target URL: " + targetUrl);
                console.log("Target ID: " + targetId);
                loadContent(targetUrl, targetId);
            });

            function loadContent(url, id) {
                console.log("Loading content from: " + url);
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function (data) {
                        console.log("Content loaded successfully");
                        $('#below_navbar').html(data);
                        console.log("Content inserted into below_navbar");
                        $('#below_navbar').attr('id', id);
                        console.log("below_navbar id changed to: " + id);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Error loading content: " + errorThrown);
                        $('#below_navbar').html('<p>An error has occurred: ' + errorThrown + '</p>');
                    }
                });
            }
        });
    </script>
</body>

</html>
