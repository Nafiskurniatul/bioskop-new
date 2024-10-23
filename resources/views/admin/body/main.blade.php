<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - BioskopKu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('backendo/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('backendo/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('backendo/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('backendo/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('backendo/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('backendo/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('backendo/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('backendo/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('backendo/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Template Main CSS File -->
  <link href="{{ asset('backendo/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.body.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.body.sidebar')

  @yield('admin')

  <!-- ======= Footer ======= -->
  @include('admin.body.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- SweetAlert -->
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

    @if($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ $errors->first() }}',
                showConfirmButton: true,
            });
        </script>
    @endif
    </script>
  <!-- Vendor JS Files -->

  <script src="{{ asset('backendo/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('backendo/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backendo/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('backendo/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('backendo/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('backendo/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('backendo/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('backendo/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('backendo/assets/js/main.js') }}"></script>

</body>

</html>