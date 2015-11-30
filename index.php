<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- MetisMenu CSS -->
    <link href="lib/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="lib/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="lib/css/customTemp.css">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
	<title>Main CMS ..</title>
	  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="lib/js/bootstrap.min.js"></script>               
  <style type="text/css">
    
  </style>
    
</head>
<body>
<div class="container-fluid">
  <!--Navigation -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Temp ..</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
          <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Login/SignUp</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
      <!--Sidebar -->
        <div class="col-sm-5 col-md-8 sidebar">
            <ul class="nav nav-sidebar">
              <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Reports</a></li>
              <li><a href="#">Analytics</a></li>
              <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="">Nav item</a></li>
              <li><a href="">Nav item again</a></li>
              <li><a href="">One more nav</a></li>
              <li><a href="">Another nav item</a></li>
              <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="">Nav item again</a></li>
              <li><a href="">One more nav</a></li>
              <li><a href="">Another nav item</a></li>
            </ul>
          </div>
      <!-- end of sidebar -->
    </div>
  </nav>
  <!-- End of Navigation -->
  


<!-- Modal -->
<div class="container-fluid">
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"></h4><br />
	      </div>
	      <div class="modal-body">
	      <table class="table table-bordered">
	      <tr>
	        <td>
	        <form class="form-horizontal" action="classes/InsertUser.php" method="post">
	            <h1 align="center">Register</h1>
	        <div class="form-group">
	          <label class="col-sm-3 control-label">Name:</label>
	          <div class="col-sm-8">
	            <input type="text" class="form-control" name="nameInfo">
	          </div>
	        </div>
	        <div class="form-group">
	          <label class="col-sm-3 control-label">Email:</label>
	          <div class="col-sm-8">
	            <input type="email" class="form-control" name="emailInfo">
	          </div>
	        </div>
	        <div class="form-group">
	          <label class="col-sm-3 control-label">Password:</label>
	          <div class="col-sm-8">
	            <input type="password" class="form-control" name="passInfo">
	          </div>
	        </div>
	        <div class="form-group">
	          <div class="col-sm-3"></div>
	          <div class="col-sm-8">
	            <button class="btn btn-primary btn-lg btn-block">Submit</button>
	          </div>
	        </div>
	      </form>
	    </td>
	    <td>
	      <form class="form-horizontal" action="" method="post">
	      <h1 align="center">Login</h1>
	        <div class="form-group">
	          <label class="col-sm-3 control-label">Login:</label>
	            <div class="col-sm-8">
	              <input type="text" class="form-control" name="nameInfo">
	            </div>
	        </div>
	        <div class="form-group">
	          <label class="col-sm-3 control-label">Password:</label>
	            <div class="col-sm-8">
	              <input type="text" class="form-control" name="nameInfo">
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="col-sm-3"></div>
	            <div class="col-sm-7">
	              <button class="btn btn-primary btn-lg btn-block">Login</button>
	            </div>
	          </div>
	      </form>
	    </td>
	    </tr>

	  </table>
	      </div>
	      <div class="modal-footer">
	        
	      </div>
	    </div>
	  </div>
	</div>
</div>
<!-- end of modal -->
<!-- Main content of the page -->
  <div class="row">
          
          <div class="col-sm-8 col-sm-offset-5 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
              <div class="jumbotron">
              <!-- panels -->
              <!-- /.row -->
              <div class="row">
                  <div class="col-lg-3 col-md-6">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-comments fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge">26</div>
                                      <div>New Comments!</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View Details</span>
                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="panel panel-green">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-tasks fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge">12</div>
                                      <div>New Tasks!</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View Details</span>
                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="panel panel-yellow">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-shopping-cart fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge">124</div>
                                      <div>New Orders!</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View Details</span>
                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="panel panel-red">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-support fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge">13</div>
                                      <div>Support Tickets!</div>
                                  </div>
                              </div>
                          </div>
                          <a href="#">
                              <div class="panel-footer">
                                  <span class="pull-left">View Details</span>
                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
              </div>
                <!--End of panels -->

                <p>This is the simple hero unit, a simple jumbotron-style component for calling
                extra attention to featured content or information.</p><br />
                <a class="btn btn-primary btn-lg">Learn More</a>
              </div>
              <div class="col-md-6">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel 1</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                  </div>
                          <div class="panel-collapse collapse in">
                            <div class="panel-body">Panel content<br />
                              <p>This is the simple hero unit, a simple jumbotron-style component for calling
                extra attention to featured content or information.</p>
                            </div>
                          </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel 2</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                  </div>
                          <div class="panel-collapse collapse in">
                            <div class="panel-body">Panel content<br />
                              <p>This is the simple hero unit, a simple jumbotron-style component for calling
                extra attention to featured content or information.</p>
                            </div>
                          </div>
              </div>
            </div>
          </div>
  </div>        
  <!-- End of the main content of the page -->
</div>
    
</body>
</html>