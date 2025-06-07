<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 @php
    $role = auth()->user()?->getRoleNames()->first() ?? 'guest';

    $title = match($role) {
        'Admin' => 'Admin Dashboard',
        'Manager' => 'Manager Dashboard',
        'User' => 'User Dashboard',
        default => 'Dashboard',
    };
@endphp

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" type="image/png" href="{{asset('admin/img/flower.png')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Favicons -->
  <!-- <link href="{{asset('admin/img/favicon.png')}}" rel="icon"> -->
  <!-- <link href="{{asset('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/v/dt/dt-2.0.6/datatables.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('client/css/flaticon.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.common.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.common.sidebar')

  <main id="main" class="main">
    <!-- End Sidebar-->
    @yield('content')

    <!-- End #main -->
  </main>
  <!-- ======= Footer ======= -->
  @include('admin.common.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
  <script src="{{asset('admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin/vendor/php-email-form/validate.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('admin/js/main.js')}}"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

  <script>
    const quill = new Quill('#quill-editor', {
      theme: 'snow',
      placeholder: 'Write your quote here...',
      modules: {
        toolbar: [
          [{
            header: [1, 2, 3, false]
          }],
          ['bold', 'italic', 'underline'],
          ['link', 'image', 'code-block'],
          [{
            list: 'ordered'
          }, {
            list: 'bullet'
          }],
          ['clean']
        ]
      }
    });

    // Set Quill content into hidden input on form submit
    const form = document.querySelector('form');
    form.onsubmit = function() {
      const contentInput = document.querySelector('#content-input');
      contentInput.value = quill.root.innerHTML;
      console.log("Sending content: ", content.value);
    };
  </script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
    });
  </script>
  <script src="https://cdn.datatables.net/v/dt/dt-2.0.6/datatables.min.js"></script>
</body>

</html>