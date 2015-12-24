<!DOCTYPE html>
<html>

    @include('adminlte/components/htmlhead')

<body class="hold-transition skin-blue sidebar-menu">
<div class="wrapper">

    <!-- Main Header -->
    @include('adminlte/components/header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('adminlte/components/sidebar  ')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{$pageTitle}}
            </h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
                {{--<li class="active">Here</li>--}}
            {{--</ol>--}}
        </section>

        <!-- Main content -->
        <section class="content">

            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('adminlte/components/footer')
    <!-- Control Sidebar -->
    @include('adminlte/components/controlsidebar')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

    @include('adminlte/components/scripts')
    @yield('specific_scripts')
</body>
</html>
