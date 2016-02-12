<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>test bootstrap</title>
  <link rel="stylesheet" href="css/master.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">SilasTechNews</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Sign in</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catégory <span class="caret"></span></a>
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

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Sign in</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  <section>
    <div class="abcd col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="hovereffect">
        <a href="#">
          <img class="img-responsive" src="images/5G.jpg" alt="">
          <div class="overlay">
            <h2>Effect 10</h2>
          </div>
        </a>
      </div>
    </div>
    <div class="abcd col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="hovereffect">
        <a href="#">
          <img class="img-responsive" src="images/5G.jpg" alt="">
          <div class="overlay">
            <h2>Effect 10</h2>
          </div>
        </a>
      </div>
    </div>
    <div class="abcd col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="hovereffect">
        <a href="#">
          <img class="img-responsive" src="images/5G.jpg" alt="">
          <div class="overlay">
            <h2>Effect 10</h2>
          </div>
        </a>
      </div>
    </div>
    <div class="abcd col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="hovereffect">
        <a href="#">
          <img class="img-responsive" src="images/5G.jpg" alt="">
          <div class="overlay">
            <h2>Effect 10</h2>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section id="article">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div id="chose"class="well">
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <select class="form-control">
              <option>Last added</option>
              <option>Recently Added</option>
              <option>Most Popular</option>
              <option>A-Z</option>
              <option>Z-A</option>
            </select>
          </div>
          <div class="col-md-8 col-xs-6">
            <div class="btn-group pull-right">
              <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-th">
                </span>
              </button>
              <button type="button" class="btn btn-default active">
                <span class="glyphicon glyphicon-th-list">
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4 articleimg"><a href="#" class=""><img src="images/5G.jpg" class="img-responsive"></a>
        </div>
        <div class="col-sm-8">
          <h3 class="title">How to Fight Fraud with Artificial Intelligence and Intelligent Analytics</h3>
          <p class="text-muted"><span class="glyphicon glyphicon-lock"></span> Available Exclusively for Premium Members</p>
          <p>Could artificial intelligence have been used to prevent the high-profile Target breach? The concept is not so far-fetched. Organizations such as Mastercard and RBS WorldPay have long relied on artificial intelligence to detect fraudulent transaction patterns and prevent card.</p>
          <p class="text-muted">Presented by <a href="#">Ellen Richey</a></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4 articleimg"><a href="#" class=""><img src="images/darkvador.png" class="img-responsive"></a>
        </div>
        <div class="col-sm-8">
          <h3 class="title">How to Fight Fraud with Artificial Intelligence and Intelligent Analytics</h3>
          <p class="text-muted"><span class="glyphicon glyphicon-lock"></span> Available Exclusively for Premium Members</p>
          <p>Could artificial intelligence have been used to prevent the high-profile Target breach? The concept is not so far-fetched. Organizations such as Mastercard and RBS WorldPay have long relied on artificial intelligence to detect fraudulent transaction patterns and prevent card.</p>
          <p class="text-muted">Presented by <a href="#">Ellen Richey</a></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4 articleimg"><a href="#" class=""><img src="images/5G.jpg" class="img-responsive"></a>
        </div>
        <div class="col-sm-8">
          <h3 class="title">How to Fight Fraud with Artificial Intelligence and Intelligent Analytics</h3>
          <p class="text-muted"><span class="glyphicon glyphicon-lock"></span> Available Exclusively for Premium Members</p>
          <p>Could artificial intelligence have been used to prevent the high-profile Target breach? The concept is not so far-fetched. Organizations such as Mastercard and RBS WorldPay have long relied on artificial intelligence to detect fraudulent transaction patterns and prevent card.</p>
          <p class="text-muted">Presented by <a href="#">Ellen Richey</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <h4 class="">Search</h4>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
        <button type="button" class="btn btn-default btn-sm btn-block hidden-lg hidden-md" data-toggle="collapse" data-target="#demo">Refine your search <span class="caret"></span>
        </button>
        <div id="demo" class="collapse in">
          <hr>
          <div class="list-group list-group">
            <h4 class="">Category</h4>
            <a href="#" class="list-group-item"><span class="badge">14</span> Active item <span class="label label-primary">New</span></a>
            <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
            <a href="#" class="list-group-item"><span class="badge">25</span> Third item</a>
            <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a>
            <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
            <a href="#" class="list-group-item"><span class="badge">25</span> Third item</a>
            <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a>
            <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
            <div id="categories" class="collapse">
              <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a>
              <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
              <a href="#" class="list-group-item"><span class="badge">25</span> Third item</a>
              <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a>
              <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
            </div>
            <button class="btn btn-default btn-sm btn-block" data-toggle="collapse" data-target="#categories">More <span class="caret"></span></button>
            <hr class="">
            <h4 class="">Viewing Options</h4>
            <a href="#" class="list-group-item"><span class="badge">14</span> Upcoming Sessions</a>
            <a href="#" class="list-group-item"><span class="badge">3</span> OnDemand</a>
            <hr class="">
            <a href="#" class="list-group-item">Archived Courses</a>
            <a href="#" class="list-group-item">Courses In Development</a>
          </div>
        </div>
        <div class="hidden-sm hidden-xs">
          <hr>
          <div class="well">
            <h4>Premium Membership</h4>
            <p>Gain unlimited access to our entire course library.</p>
            <button class="btn btn-sm btn-warning">Learn more</button>
            <hr>
            <p class="text-center ">Already a member? <a href="#">Sign in.</a></p>
          </div>
          <hr>
          <div class="well">
            <h4>Course Catalog</h4>
            <p><a href="#"><img src="http://placehold.it/400X500" class="img-responsive"></a></p>
            <p>Everything you need to know about our webinars, including speaker bios, topics, and courses.</p>
            <button class="btn btn-sm btn-block btn-warning">Download</button>
          </div>
        </div>
      </div>
    </section>
  </body>
  </html>
