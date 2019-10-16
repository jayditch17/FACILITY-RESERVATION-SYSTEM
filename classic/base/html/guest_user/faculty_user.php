
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Guest User</title>
    
    <link rel="apple-touch-icon" href="../../assets1/images/samcis.png">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../assets1/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../../../global/vendor/chartist/chartist.css">
        <link rel="stylesheet" href="../../../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../../../global/vendor/aspieprogress/asPieProgress.css">
        <link rel="stylesheet" href="../../../global/vendor/jquery-selective/jquery-selective.css">
        <link rel="stylesheet" href="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
        <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
        <link rel="stylesheet" href="../../assets1/examples/css/dashboard/team.css">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link rel="stylesheet" href="../../../global/fonts/7-stroke/7-stroke.css">
    <link rel="stylesheet" href="../../../global/fonts/weather-icons/weather-icons.css">
    
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition site-navbar-small dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
      role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand navbar-brand-center" href="guest_user.html">
          <img class="navbar-brand-logo navbar-brand-logo-normal" src="../../assets1/images/samcis.png"
            title="Remark">
          <img class="navbar-brand-logo navbar-brand-logo-special" src="../../assets1/images/samcis.png"
            title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> Guest User</span>
        </a>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
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
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
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
                  <img src="../../../global/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
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
                            <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Completed the task</h6>
                            <time class="media-meta" datetime="2018-06-11T18:29:20+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Settings updated</h6>
                            <time class="media-meta" datetime="2018-06-11T14:05:00+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Event started</h6>
                            <time class="media-meta" datetime="2018-06-10T13:50:18+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Message received</h6>
                            <time class="media-meta" datetime="2018-06-10T12:34:48+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
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
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    
    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="guest_user.html" data-dropdown-toggle="false">
                        <i class="icon wb-home" aria-hidden="true"></i>
                        <span class="site-menu-title">Home</span>
                </a>
              </li>
            </ul>      
          </div>
        </div>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div data-plugin="matchHeight" data-by-row="true">
                <!-- Panel Table Add Row -->
          <div class="panel1">
            <div class="panel-body1">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-15">

                  </div>
                </div>
              </div>
              <h3 align="center"> Maryheights Campus Facilities</h3>
              <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                    <div class="row">
                        <div class="form-group col-sm-4">
                          <div class="example">
                            <ul class="list-unstyled">
                              <li class="md-20">
                                <a href="facu-facilities/plaza.html">
                                  <button type="button" class="btn1 btn-block btn-default" href="facilities/plaza.html"> DEVESSE PLAZA
                                  </button>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="form-group col-sm-4">
                          <div class="example">
                            <ul class="list-unstyled">
                              <li class="md-20">
                                <a href="facu-facilities/oval.html">
                                  <button type="button" class="btn1 btn-block btn-primary1"> OVAL
                                  </button>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="form-group col-sm-4">
                          <div class="example">
                            <ul class="list-unstyled">
                              <li class="md-20">
                                <a href="facu-facilities/amphi.html">
                                  <button type="button" class="btn1 btn-block btn-success"> AMPHITHEATRE
                                  </button>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-4">
                          <div class="example">
                            <ul class="list-unstyled">
                              <li class="md-20">
                                <a href="facu-facilities/pool.html">
                                  <button type="button" class="btn1 btn-block btn-info"> SWIMMING POOL
                                  </button>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="form-group col-sm-4">
                          <div class="example">
                            <ul class="list-unstyled">
                              <li class="md-20">
                                <a href="facu-facilities/avr.html">
                                  <button type="button" class="btn1 btn-block btn-warning"> AVR
                                  </button>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="form-group col-sm-4" role="group">
                          <div class="example">
                            <ul class="list-unstyled">
                              <li class="md-20">
                                <button type="button" class="btn1 btn-block btn-danger" data-toggle="dropdown" aria-expanded="false"> COURTS
                                </button>
                                  <div class="dropdown-menu" aria-labelledby="exampleIconDropdown2" role="menu">
                                    <a class="dropdown-item" href="facu-facilities/b_court.html" role="menuitem">Basketball Court</a>
                                    <a class="dropdown-item" href="facu-facilities/v_court.html" role="menuitem">Volleyball Court</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Panel Table Add Row -->
        </div>
      </div>
    </div>
    <!-- End Page -->

    <!-- Add Item Dialog -->
    <div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm"
      aria-hidden="true">
      <div class="modal-dialog modal-simple">
        <form class="modal-content form-horizontal" role="form" action="#" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="moadl-title">Create New To Do Item</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="title">Title:</label>
              <div class="col-sm-10">
                <input id="title" class="form-control" type="text" name="title" />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="dueDate">Due Date</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <input id="dueDate" class="form-control" type="text" data-plugin="datepicker" data-container="#addtodoItemForm"
                  />
                  <span class="input-group-addon">
                    <i class="icon wb-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="people">People:</label>
              <div class="col-sm-10">
                <select id="people" multiple="multiple" class="plugin-selective">
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-actions">
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                Add This Item
              </button>
              <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
            Cancel
          </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Add Item Dialog -->

    <!-- Edit Dialog -->
    <div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm"
      role="dialog" tabindex="-1" data-show="false">
      <div class="modal-dialog modal-simple">
        <form class="modal-content form-horizontal" action="#" method="post" role="form">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
            <h4 class="modal-title">Edit To Do Item</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="editTitle">Title:
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="editTitle" name="editTitle">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="editStarts">Due Date:
              </label>
              <div class="col-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" id="editDueDate" name="editDueDate" data-container="#edittodoItemForm"
                    data-plugin="datepicker">
                  <span class="input-group-addon">
                    <i class="icon wb-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="editPeople">People:
              </label>
              <div class="col-sm-10">
                <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-actions">
              <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
              <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
              <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Edit Dialog -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-right">
        © 2019 Facility Reservation System.
      </div>
    </footer>
    <!-- Core  -->
    <script src="../../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../../global/vendor/jquery/jquery.js"></script>
    <script src="../../../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../../global/vendor/animsition/animsition.js"></script>
    <script src="../../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    
    <!-- Plugins -->
    <script src="../../../global/vendor/switchery/switchery.js"></script>
    <script src="../../../global/vendor/intro-js/intro.js"></script>
    <script src="../../../global/vendor/screenfull/screenfull.js"></script>
    <script src="../../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../../../global/vendor/chartist/chartist.js"></script>
        <script src="../../../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="../../../global/vendor/aspieprogress/jquery-asPieProgress.js"></script>
        <script src="../../../global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="../../../global/vendor/jquery-selective/jquery-selective.min.js"></script>
        <script src="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
    <!-- Scripts -->
    <script src="../../../global/js/Component.js"></script>
    <script src="../../../global/js/Plugin.js"></script>
    <script src="../../../global/js/Base.js"></script>
    <script src="../../../global/js/Config.js"></script>
    
    <script src="../../assets1/js/Section/Menubar.js"></script>
    <script src="../../assets1/js/Section/Sidebar.js"></script>
    <script src="../../assets1/js/Section/PageAside.js"></script>
    <script src="../../assets1/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="../../../global/js/config/colors.js"></script>
    <script src="../../assets1/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
    <!-- Page -->
    <script src="../../assets1/js/Site.js"></script>
    <script src="../../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../../global/js/Plugin/switchery.js"></script>
        <script src="../../../global/js/Plugin/matchheight.js"></script>
        <script src="../../../global/js/Plugin/aspieprogress.js"></script>
        <script src="../../../global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="../../../global/js/Plugin/asscrollable.js"></script>
    
        <script src="../../assets1/examples/js/dashboard/team.js"></script>
    
  </body>
</html>