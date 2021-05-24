<!DOCTYPE html>
<html lang="en">
<title>@yield('title')</title>
@include('include.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #ffffff;">
                
                <!-- Begin Page Content -->
                <div class="container-fluid mt-3">

                @include('include.navbar')
  
                    <!-- Page Heading -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->   
       
        <!-- End of Sidebar -->
    </div>
    <!-- End of Page Wrapper -->
    @include('include.footer')
    <!-- Scroll to Top Button-->
    <!-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> -->

</body>

</html>