<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studyhub LMS & University HTML Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-ui.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('css/vendor/metismenu.css') }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

@include('partials.header')

@yield('content')

@include('partials.footer')

<!-- Ensure jQuery is loaded first -->
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset('js/vendor/jquery-ui.js') }}"></script>
<!-- Other scripts -->
<script src="{{ asset('js/vendor/metismenu.js') }}"></script>
<script src="{{ asset('js/vendor/magnifying-popup.js') }}"></script>
<script src="{{ asset('js/plugins/swiper.js') }}"></script>
<script src="{{ asset('js/plugins/counterup.js') }}"></script>
<script src="{{ asset('js/vendor/waypoint.js') }}"></script>
<script src="{{ asset('js/vendor/waw.js') }}"></script>
<script src="{{ asset('js/plugins/isotop.js') }}"></script>
<script src="{{ asset('js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/plugins/resizer-sensor.js') }}"></script>
<script src="{{ asset('js/plugins/sticky-sidebar.js') }}"></script>
<script src="{{ asset('js/plugins/twinmax.js') }}"></script>
<script src="{{ asset('js/vendor/chroma.min.js') }}"></script>
<!-- Bootstrap 5.0.2 -->
<script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/contact.form.js') }}"></script>
<script src="{{ asset('js/plugins/calender.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Your custom script -->
<script>
    $(document).ready(function() {
        $('#applyModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var university = button.data('university'); // Extract info from data-* attributes
            var program = button.data('program');
            var universityId = button.data('university-id');
            var programId = button.data('program-id');

            var modal = $(this);
            modal.find('#universityName').text(university);
            modal.find('#programName').text(program);
            modal.find('#universityId').val(universityId);
            modal.find('#programId').val(programId);
        });
    });
</script>

@livewireScripts

<style>
    /* Your custom styles here */
</style>
@stack('scripts')
</body>

</html>
