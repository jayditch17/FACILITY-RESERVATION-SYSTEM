
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Guest User</title>
    
    <link rel="apple-touch-icon" href="../../../assets2/images/samcis.png">
    <link rel="shortcut icon" href="../../../assets2/images/samcis.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../../global/global2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../global/global2/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../../assets2/css/site.min.css">
    <link rel="stylesheet" type="text/css" href="../../../../global/css/style.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../../../../global/global2/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/waves/waves.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/chartist/chartist.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../../../assets2/examples/css/dashboard/v1.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../../../../global/global2/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link rel="stylesheet" href="../../../../global/global2/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/7-stroke/7-stroke.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/weather-icons/weather-icons.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/mfglabs/mfglabs.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/open-iconic/open-iconic.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/ionicons/ionicons.css">
    
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../../../../global/global2/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon md-more" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="../../../assets2/images/samcis.png" title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> Guest User</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon md-search" aria-hidden="true"></i>
        </button>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-float">
              <a class="nav-link icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="../../../../global/global2/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon md-notifications" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger up">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <span class="badge badge-round badge-danger">New 5</span>
                </div>
    
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Completed the task</h6>
                            <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Settings updated</h6>
                            <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Event started</h6>
                            <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Message received</h6>
                            <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon md-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    
    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item has-sub">
                <a href="../guest_user.php">
                        <i class="site-menu-icon icon wb-home" aria-hidden="true"></i>
                        <span class="site-menu-title">Home</span>
                </a>
              </li>
              <li class="site-menu-category">Facilities</li>
              <li class="site-menu-item has-sub">
                <a href="plaza.html">
                        <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                        <span class="site-menu-title">Devesse Plaza</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="amphi.html">
                        <i class="site-menu-icon icon md-balance" aria-hidden="true"></i>
                        <span class="site-menu-title">Amphitheater</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="avr.html">
                        <i class="site-menu-icon icon ml-display-screen" aria-hidden="true"></i>
                        <span class="site-menu-title">AVR</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="pool.html">
                        <i class="site-menu-icon icon io-droplet" aria-hidden="true"></i>
                        <span class="site-menu-title">Swimming Pool</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="oval.html">
                        <i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>
                        <span class="site-menu-title">Oval</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon icon ion-ios-baseball" aria-hidden="true"></i>
                        <span class="site-menu-title">Courts</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="v_court.html">
                      <span class="site-menu-title">Volleyball Court</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="b_court.html">
                      <span class="site-menu-title">Basketball Court</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-category">Reservation</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                        <span class="site-menu-title">Apps</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="apps/contacts/contacts.html">
                      <span class="site-menu-title">Contacts</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="apps/calendar/calendar.html">
                      <span class="site-menu-title">Calendar</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div data-plugin="matchHeight" data-by-row="true">
          <!-- Panel Table Add Row -->
          <div class="panel">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-15">
                    <h2>Devesse Plaza</h2>
                    <p>October 2019</p>
                      <!-- Example Optional Sizes -->
                          <div class="example-buttons">
                            <button type="button" class="btn btn-primary" data-target=".example-modal-lg" data-toggle="modal">Add Event</button>
                          </div>

                          <!-- Modal -->
                          <div class="modal fade example-modal-lg" aria-hidden="true" aria-labelledby="exampleOptionalLarge"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleOptionalLarge">Event Reservation Form</h4>
                                </div>
                                
                                <div class="modal-body">
                                        <!-- Example Basic Form (Form grid) -->
                                        <div class="example-wrap">
                                          <div class="example">
                                            <form autocomplete="off">
                                              <div class="row">
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicFirstName">First Name</label>
                                                  <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                                     autocomplete="off" />
                                                </div>
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicLastName">Last Name</label>
                                                  <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
                                                     autocomplete="off" />
                                                </div>
                                                  <div class="form-group col-sm-4">
                                                    <label class="form-control-label" for="inputBasicNoOfParticipants">Mobile Number</label>
                                                    <input type="text" class="form-control" id="inputBasicNoOfParticipants" name="inputNoOfParticipants"
                                                       autocomplete="off" />
                                                  </div>
                                              </div>
                                              <div class="row">
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicOrganization">Organization</label>
                                                  <input type="text" class="form-control" id="inputBasicOrganization" name="inputOrganization"
                                                   autocomplete="off" />
                                                </div>
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicPosition">Position</label>
                                                  <input type="text" class="form-control" id="inputBasicPosition" name="inputPosition"
                                                     autocomplete="off" />
                                                </div>
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicAdviser">Adviser</label>
                                                  <input type="text" class="form-control" id="inputBasicAdviser" name="inputAdviser"
                                                     autocomplete="off" />
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="form-control-label" for="inputBasicEventName">Event Name</label>
                                                  <input type="text" class="form-control" id="inputBasicEventName" name="inputEventName"
                                                     autocomplete="off" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label" for="inputBasicNoOfParticipants">No. of Participants</label>
                                                    <input type="text" class="form-control" id="inputBasicNoOfParticipants" name="inputNoOfParticipants"
                                                       autocomplete="off" />
                                                </div>
                                              </div>
                                              <div class="example-wrap">
                                                <div class="example datepair-wrap" data-plugin="datepair">
                                                  <div class="input-daterange-wrap">
                                                    <label class="form-control-label" for="inputBasicDateAndTime">Date and Time</label>
                                                    <div class="input-daterange">
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker">
                                                      </div>
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-time" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-time datepair-start" data-plugin="timepicker"
                                                        />
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="input-daterange-to"></div>
                                                  <div class="input-daterange-wrap">
                                                    <div class="input-daterange">
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-date datepair-end" name="end" data-plugin="datepicker">
                                                      </div>
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-time" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-time datepair-end" data-plugin="timepicker"
                                                        />
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                        <!-- End Example Basic Form (Form grid) -->
                                        <h5>Equipment/s to be used:</h5>

                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="gu_container">Bench(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Chairs(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Platform(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Table(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Triboard(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Divider(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                </div>

                                                <div class="form-group col-md-6">
                                                  <label class="gu_container">Microphone(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Mic Stand(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Karaoke
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Projector(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Sound System
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">TV/DVD
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Save Changes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- End Modal -->
                          <!-- End Example Optional Sizes -->
                        </div>
                      </div>
                    </div>
              
                    <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                      

                      <tbody>
                        <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM events";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";

                                       echo "<th>Event Name</th>";
                                       echo "<th>Date Start</th>";
                                       echo "<th>Date End</th>";
                                       echo "<th>Time Start</th>";
                                       echo "<th>Time End</th>";
                                       echo "<th>Organization</th>";
                                       echo "<th>Position</th>";
                                        echo"<th>No. of Participants</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";

                                        echo "<td>" . $row['actVenue'] . "</td>";
                                        echo "<td>" . $row['startDate'] . "</td>";
                                        echo "<td>" . $row['endDate'] . "</td>";
                                        echo "<td>" . $row['startTime'] . "</td>";
                                        echo "<td>" . $row['endTime'] . "</td>";
                                        echo "<td>" . $row['eventOrg'] . "</td>";
                                        echo "<td>" . $row['posi'] . "</td>";
                                        echo "<td>" . $row['numPart'] . "</td>";

                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>

                      </tbody>
                      
                    </table>
                  </div>
                </div>
                <!-- End Panel Table Add Row -->

          </div>
      </div>
    </div>
    <!-- End Page -->




    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-right">
        © 2019 Facility Reservation System.
      </div>
    </footer>
    <!-- Core  -->
    <script src="../../../../global/global2/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../../../global/global2/vendor/jquery/jquery.js"></script>
    <script src="../../../../global/global2/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../../../global/global2/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../../../global/global2/vendor/animsition/animsition.js"></script>
    <script src="../../../../global/global2/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../../../global/global2/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../../../global/global2/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../../../../global/global2/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="../../../../global/global2/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="../../../../global/global2/vendor/switchery/switchery.js"></script>
    <script src="../../../../global/global2/vendor/intro-js/intro.js"></script>
    <script src="../../../../global/global2/vendor/screenfull/screenfull.js"></script>
    <script src="../../../../global/global2/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../../../../global/global2/vendor/chartist/chartist.min.js"></script>
        <script src="../../../../global/global2/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="../../../../global/global2/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="../../../../global/global2/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../../../../global/global2/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="../../../../global/global2/vendor/peity/jquery.peity.min.js"></script>
    
    <!-- Scripts -->
    <script src="../../../../global/global2/js/Component.js"></script>
    <script src="../../../../global/global2/js/Plugin.js"></script>
    <script src="../../../../global/global2/js/Base.js"></script>
    <script src="../../../../global/global2/js/Config.js"></script>
    
    <script src="../../../assets2/js/Section/Menubar.js"></script>
    <script src="../../../assets2/js/Section/GridMenu.js"></script>
    <script src="../../../assets2/js/Section/Sidebar.js"></script>
    <script src="../../../assets2/js/Section/PageAside.js"></script>
    <script src="../../../assets2js/Plugin/menu.js"></script>
    
    <script src="../../../../global/global2/js/config/colors.js"></script>
    <script src="../../../assets2/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
    <!-- Page -->
    <script src="../../../assets2/js/Site.js"></script>
    <script src="../../../../global/global2/js/Plugin/asscrollable.js"></script>
    <script src="../../../../global/global2/js/Plugin/slidepanel.js"></script>
    <script src="../../../../global/global2/js/Plugin/switchery.js"></script>
        <script src="../../../../global/global2/js/Plugin/matchheight.js"></script>
        <script src="../../../../global/global2/js/Plugin/jvectormap.js"></script>
        <script src="../../../../global/global2/js/Plugin/peity.js"></script>
    
        <script src="../../../assets2/examples/js/dashboard/v1.js"></script>
    
  </body>
</html>
