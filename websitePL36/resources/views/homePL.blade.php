@extends('layouts.app')

@section('content')

<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
              </button>
        </div>
        <!-- <img src="img/yoga.png" alt=""><br> -->
        </ul>
      </div><!-- /.sidebar-collapse -->
    </div>
<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">CHECK CHECK</h1>
      </div>
    </div>   <!-- /.col-lg-12/row-->
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-comments fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <!-- <div class="huge"><img src="" alt=""></div> -->
                <div></div>
              </div>
            </div>
          </div>
          <!-- model showlistfuntion -->

            <div class="panel-footer">
              <span class="pull-left">null</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
        </div>
      </div>
      <!-- col-lg-3 col-md-6 #1-->
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <!-- <div class="huge"><img src="img/com-menu.png" alt=""></div> -->
                  <div></div>
                </div>
            </div>
          </div>

          <a href="{{url('/food')}}" >
            <div class="panel-footer">
              <span class="pull-left">null</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
              </div>
          </a>
        </div>
      </div>
      <!-- /col-lg-3 col-md-6 #2-->
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-shopping-cart fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <!-- <div class="huge"><img src="img/foodmenu.png" alt=""></div> -->
                <div></div>
              </div>
            </div>
          </div>

          <a href="{{url('/addfood')}}">
            <div class="panel-footer">
              <span class="pull-left">null</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
        <!-- /col-lg-3 col-md-6 #3-->
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-support fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <!-- <div class="huge"><img src="img/chart.png" alt=""></div> -->
                <div></div>
              </div>
            </div>
          </div>
          <a href="{{url('/home')}}">
            <div class="panel-footer">
              <span class="pull-left">อัพโหลด</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
          <!-- /col-lg-3 col-md-6 #4-->
          <!-- start chart -->
      <div class="row">
        <div class="col-lg-8">
          <div class="panel panel-default">
            <div class="panel-heading">
               <!-- <i class="fa fa-bar-chart-o fa-fw"></i>สถิติการรับประทานอาหาร -->
                งานที่ต้องทำ
                <div class="pull-right">
                  <div class="btn-group">


                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div id="">photo</div>
            </div>  <!-- /.panel-body -->
          </div>
        </div>
      <!-- /chart  row-->
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> งานอัพโหลด ล่าสุด
          </div>
          <!-- /.panel-heading -->

          <div class="panel-body">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <!-- <img src="img/checked.png" > -->
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ชื่องาน</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <!-- <img src="img/ks.png" width="200" height="200" style="border-radius:50px;margin-right:5px;" > -->
                    photo
                  <div class="">
                    <br>
                    <p><strong>&nbsp;Text title</strong></p>
                    <p>&nbsp;&nbsp; text area bra bra.....</p>
                  </div>
                </div>
              </div>
            </div>
          <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <!-- <img src="img/checked.png" alt=""> -->
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ชื่องาน2</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
              <!-- <img src="img/ka.png" width="200" height="200" style="border-radius:50px;margin-right:5px;" > -->
                <div class="">
                  <br>
                  <p><strong>&nbsp; text title</strong></p>
                  <p>&nbsp;&nbsp; text area bra bra</p>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <!-- <img src="img/checked.png" > -->
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">ชื่องาน</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="img/egg.png" width="200" height="200" style="border-radius:50px;margin-right:5px;" >
                  <div class="">
                  <br>
                    <p><strong>&nbsp;text title</strong></p>
                    <p>&nbsp;&nbsp;  text area</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!--wrapper-->
<div class="col-md-12 page-body margin-top-50 footer">
<footer>
  <br>
  <center>
  <p>©Webprogrammig 2017 |CSUBU</p>
  <p><strong>Design By :</strong>Pawinee Purachanai (GIGIE) </p>
  <div class="uipasta-credit"> THANK :  <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
</center>
</footer>
</div>


<!-- jQuery -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=""></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/raphael/raphael.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/morrisjs/morris.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>

@endsection
