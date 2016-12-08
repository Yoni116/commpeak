{!!Html::style('css/bootstrap.css')!!}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CommPeak Task</title>

    </head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="contact"><i class="fa fa-fw fa-dashboard"></i> Contact Us</a>
            </li>
            <li>
                <a href="importTask"><i class="fa fa-fw fa-bar-chart-o"></i> Import to DB</a>
            </li>
            <li>
                <a href="showData"><i class="fa fa-fw fa-table"></i> Show Data</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

    @yield('content')

</body>


</html>