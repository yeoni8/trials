<!DOCTYPE html>
<html>

    @include('adminlte/htmlhead')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    @include('adminlte/header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('adminlte/sidebar  ')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
                {{--<li class="active">Here</li>--}}
            {{--</ol>--}}
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('adminlte/footer')
    <!-- Control Sidebar -->
    @include('adminlte/controlsidebar')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

    @include('adminlte/scripts')
</body>
</html>
