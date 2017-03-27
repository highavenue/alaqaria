<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!--Tinymce Text Area -->
      <script src="/js/tinymce_4.5.3/tinymce.min.js"></script>
          <script type="text/javascript">
            
             tinymce.init({
                selector : ".textarea_en", // change this value according to your HTML
                plugins: "lists",
                directionality:'ltr',
                menubar:false,
                height : "400"
            });
              tinymce.init({
                selector : ".textarea_ar", // change this value according to your HTML
                plugins: "lists",
                directionality:'rtl',
                menubar:false,
                height : "400"
            });
          </script>

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Panel</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('abouts.show',1) }}">About Us</a></li>
                        <li><a href="{{ route('abouts.show',2) }}">Company Overview</a></li>
                        <li><a href="{{ route('abouts.show',3) }}">Mission and Vision</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('sliders.index') }}">Slider</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Properties<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('locations.index') }}">Location</a></li>
                        <li><a href="{{ route('categories.index') }}">Category</a></li>
                        <li><a href="{{ route('types.index') }}">Type</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('properties.index') }}">Property</a></li>
                    </ul>
                </li>


                 <li><a href="{{ route('managements.index') }}">Management</a></li>

                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tenders<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tenders.index') }}">Latest Tenders</a></li>
                        <li><a href="{{ route('tender_receipts.index') }}">Tender Receipt</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('tender_requirements.show',1) }}">How to tender</a></li>
                        <li><a href="{{ route('tender_requirements.show',2) }}">Terms and Conditions</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('events.index') }}">Events</a></li>
                 <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('contacts.show',1) }}">Contacts</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="{{ route('msrs.index') }}">View MSR Request</a></li>
                      <li role="separator" class="divider"></li>
                        <li><a href="{{ route('msrconstants.index') }}"> Set MSR Form Revision Data</a></li>
                        <li><a href="{{ route('vendor_constants.index') }}"> Set Vendor Reg Form Revision Data</a></li>
                    </ul>
                </li>

                {{-- <li class="active"><a href="#">Home</a></li> --}}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

    <div class="container">
        @yield('header')
        @yield('content')
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
    @yield('scripts')
</body>
</html>
