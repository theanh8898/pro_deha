<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href="{{ asset('admin/dashio/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('admin/dashio/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    {{-- <link href="../../dashio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href=" {{ asset('admin/dashio/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css">
    <!--external css-->
    <link href="{{ asset('admin/dashio/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ 'admin/dashio/css/zabuto_calendar.css '}}">
    <link rel="stylesheet" type="text/css" href="{{ 'admin/dashio/lib/gritter/css/jquery.gritter.css'}}"/>
    <!-- Custom styles for this template -->
    <link href="{{ 'admin/dashio/css/style.css'}}" rel="stylesheet">
    <link href="{{ 'admin/dashio/css/style-responsive.css'}}" rel="stylesheet">
    <script src="{{ 'admin/dashio/lib/chart-master/Chart.js'}}"></script>


    <style>
        .panel-heading {
            padding: 0;
        }

        .panel-heading ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .panel-heading li {
            float: left;
            border-right: 1px solid #bbb;
            display: block;
            padding: 14px 16px;
            text-align: center;
        }

        .panel-heading li:last-child:hover {
            background-color: #ccc;
        }

        .panel-heading li:last-child {
            border-right: none;
        }

        .panel-heading li a:hover {
            text-decoration: none;
        }

        .table.table-bordered tbody td {
            vertical-align: baseline;
        }

        /* icheck checkboxes */
        .iradio_flat-yellow {
            background: url(https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/yellow.png) no-repeat;
        }

    </style>

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>THE<span>ANH</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">Dashio Admin Panel</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">Product Development</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">Payments Sent</div>
                                    <div class="percent">70%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="{{ asset('admin/dashio/img/ui-zac.jpg') }}"></span>
                                <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                                <span class="message">
                  Hi mate, how is everything?
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar"
                                                         src="{{ asset('admin/dashio/img/ui-divya.jpg') }}"></span>
                                <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                                <span class="message">
                  Hi, I need your help with this.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar"
                                                         src="{{ asset('admin/dashio/img/ui-danro.jpg') }}"></span>
                                <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                                <span class="message">
                  Love your new Dashboard.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar"
                                                         src="{{ asset('admin/dashio/img/ui-sherman.jpg') }}"></span>
                                <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                                <span class="message">
                  Please, answer asap.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Server Overloaded.
                                <span class="small italic">4 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                Memory #2 Not Responding.
                                <span class="small italic">30 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Disk Space Reached 85%.
                                <span class="small italic">2 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="label label-success"><i class="fa fa-plus"></i></span>
                                New User Registered.
                                <span class="small italic">3 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{ url('/') }}">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="profile.html"><img src="{{ asset('admin/dashio/img/ta.jpg') }}"
                                                                class="img-circle" width="80"></a></p>
                <h5 class="centered">NuHongMongManh</h5>
                <li class="mt">
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Laptops</span>
                    </a>
                    <ul class="sub">
                        <li><a href="general.html">General</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="font_awesome.html">Font Awesome</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                        <li><a href="advanced_table.html">Advanced Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="inbox.html">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                        <span class="label label-theme pull-right mail-info">2</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-comments-o"></i>
                        <span>Chat Room</span>
                    </a>
                    <ul class="sub">
                        <li><a href="lobby.html">Lobby</a></li>
                        <li><a href="chat_room.html"> Chat Room</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12 main-chart">
                    <!--CUSTOM CHART START -->
                    <div class="border-head">
                        <h2>Manage Laptops</h2>
                    </div>

                    <div>

                        <br/>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul>
                                    <li><i class="fa fa-file-text-o"></i> All the current Posts</li>
                                    <a style="padding-top: 14px; " class="add-modal btn btn-link" data-toggle="modal"
                                       data-target="#addModal">Add a Laptop</a>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="laptopTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Chip</th>
                                        <th>VGA</th>
                                        <th>NumberInStock</th>
                                        <th>Actions</th>
                                    </tr>
                                    {{ csrf_field() }}
                                    </thead>
                                    <tbody>
                                    @foreach($laptops as $laptop)

                                        <tr class="item{{$laptop->id}}">
                                            <td>{{ $laptop->id }}</td>
                                            <td>{{ $laptop->name }}</td>
                                            <td>{{ $laptop->chip }}</td>
                                            <td>{{ $laptop->card }}</td>
                                            <td>{{ $laptop->number }}</td>
                                            <td>
                                                <button class="show-modal btn btn-success" data-id="{{ $laptop->id }}"
                                                        data-name="{{ $laptop->name }}" data-chip="{{ $laptop->chip }}"
                                                        data-card="{{ $laptop->card }}"
                                                        data-number="{{ $laptop->number }}"><span
                                                            class="glyphicon glyphicon-eye-open"></span>Show
                                                </button>
                                                <button class="edit-modal btn btn-info" data-id="{{ $laptop->id }}"
                                                        data-name="{{ $laptop->name }}" data-chip="{{ $laptop->chip }}"
                                                        data-card="{{ $laptop->card }}"
                                                        data-number="{{ $laptop->number }}"><span
                                                            class="glyphicon glyphicon-eye-open"></span>Edit
                                                </button>
                                                <button class="delete-modal btn btn-danger" data-id="{{ $laptop->id }}"
                                                        data-name="{{ $laptop->name }}" data-chip="{{ $laptop->chip }}"
                                                        data-card="{{ $laptop->card }}"
                                                        data-number="{{ $laptop->number }}"><span
                                                            class="glyphicon glyphicon-eye-open"></span>Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- /.col-md-8 -->

                    <!-- Modal form to add a laptop -->
                    <div id="addModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal" style="margin-top:-24px;">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name_add" autofocus>
                                                <p class="errorName text-center alert alert-danger hidden">Validate Name
                                                    Error</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="chip">Chip:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="chip_add" autofocus>
                                                <p class="errorChip text-center alert alert-danger hidden"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="card">VGA:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="card_add" autofocus>
                                                <p class="errorCard text-center alert alert-danger hidden"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="number">Number In Stock:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="number_add" autofocus>
                                                <p class="errorNumber text-center alert alert-danger hidden"></p>
                                            </div>
                                        </div>

                                    </form>
                                    <div id="validation-errors-create" class="error"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success add" data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-check"></span> Add
                                        </button>
                                        <button type="button" class="btn btn-danger " data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal form to show a laptop -->
                    <div class="modal fade" id="showModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal" style="margin-top: -24px;">
                                        ×
                                    </button>

                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="id">ID:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="id_show" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name_show" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="chip">Chip:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="chip_show" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="card">VGA:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="card_show" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="number">Number In Stock:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="number_show" disabled>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                                            <span class='glyphicon glyphicon-remove'></span> Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal form to edit a form-->
                    <div id="editModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal" style="margin-top: -24px;">
                                        ×
                                    </button>

                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="id">ID:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="id_edit" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name_edit" autofocus>
                                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="chip">Chip:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="chip_edit" autofocus>
                                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="card">VGA:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="card_edit" autofocus>
                                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="number">Number In Stock:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="number_edit" autofocus>
                                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="validation-errors-edit"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                                            <span class='glyphicon glyphicon-check'></span> Edit
                                        </button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                                            <span class='glyphicon glyphicon-remove'></span> Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal forn to delete a form -->
                    <div id="deleteModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal" style="margin-top: -24px;">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h3 class="text-center">Are you sure you want to delete the following laptop?</h3>
                                    <br/>
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="id">ID:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="id_delete" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name_delete" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="chip">Chip:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="chip_delete" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="number">Number In Stock:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="number_delete" disabled>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                                            <span id="" class='glyphicon glyphicon-trash'></span> Delete
                                        </button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                                            <span class='glyphicon glyphicon-remove'></span> Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /col-lg-9 END SECTION MIDDLE -->
                <!-- **********************************************************************************************************************************************************
                    RIGHT SIDEBAR CONTENT
                    *********************************************************************************************************************************************************** -->

                <!-- /col-lg-3 -->
            </div>
            <!-- /row -->
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
            </p>
            <div class="credits">
                <!--
                  You are NOT allowed to delete the credit link to TemplateMag with free version.
                  You can delete the credit link only if you bought the pro version.
                  Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                  Licensing information: https://templatemag.com/license/
                -->
                Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
            </div>
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<!-- Bootstrap JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>
<!-- toastr notifications -->
<!-- icheck checkboxes -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('admin/dashio/lib/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('admin/dashio/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script class="include" type="text/javascript"
        src="{{ asset('admin/dashio/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('admin/dashio/lib/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('admin/dashio/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/dashio/lib/jquery.sparkline.js') }}"></script>
<!--common script for all pages-->
<script src="{{ asset('admin/dashio/lib/common-scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/dashio/lib/gritter/js/jquery.gritter.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/dashio/lib/gritter-conf.js') }}"></script>
<!--script for this page-->
<script src="{{ asset('admin/dashio/lib/sparkline-chart.js') }}"></script>
<script src="{{ asset('admin/dashio/lib/zabuto_calendar.js') }}"></script>
{{-- <script type="text/javascript">
    $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashio!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: 'img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script> --}}



{{-- <script>
    $(window).load(function () {
        $('#laptopTable').removeAttr('style');
    })
</script> --}}

<script src="{{asset('/js/ajax_laptop.js')}}" type="text/javascript"></script>



</body>

</html>
