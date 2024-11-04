
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
