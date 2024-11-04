<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="{{ asset('dash-asset/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('dash-asset/assets/css/styles.min.css') }}" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
        <!-- Style-->
        <link rel="stylesheet" href="/dashboard/resources/css/style.css">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <!-- Vendors Style-->

</head>

<body class="text-light bg-gradient-blue">
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('dashboard.user.layouts.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('dashboard.user.layouts.header')
            @include('partials.theme_alert')
                @yield('content')
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get references to modal and buttons
            var modal = document.getElementById('modal');
            var openModalBtn = document.getElementById('openModalBtn');
            var closeModalBtn = document.getElementById('closeModalBtn');

            // Function to open the modal
            function openModal() {
                modal.style.display = 'block';
            }

            // Function to close the modal
            function closeModal() {
                modal.style.display = 'none';
            }

            // Event listeners for opening and closing the modal
            openModalBtn.addEventListener('click', openModal);
            closeModalBtn.addEventListener('click', closeModal);

            // Close the modal if the user clicks outside the modal content
            window.addEventListener('click', function(event) {
                if (event.target == modal) {
                    closeModal();
                }
            });
        });
    </script>
    <script src="{{ asset('user-dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('user-dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user-dashboard/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('user-dashboard/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('user-dashboard/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('user-dashboard/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('user-dashboard/assets/js/dashboard.js') }}"></script>

    <script src={{ asset('dash-asset2/dash-asset/js/core/libs.min.js') }}></script>
    <!-- Plugin Scripts -->
    <!-- Flatpickr Script -->
    <script src={{ asset('dash-asset2/dash-asset/vendor/flatpickr/dist/flatpickr.min.js') }}></script>
    <script src={{ asset('dash-asset2/dash-asset/js/plugins/flatpickr.js') }} defer></script>
    <!-- Select2 Script -->
    <script src={{ asset('dash-asset2/dash-asset/js/plugins/select2.js') }} defer></script>
</body>
</html>
