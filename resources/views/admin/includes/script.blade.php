<!-- Jquery JS-->
<script src="{{ url('admin/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ url('admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ url('admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Vendor JS       -->
<script src="{{ url('admin/vendor/slick/slick.min.js') }}">
</script>
<script src="{{ url('admin/vendor/wow/wow.min.js') }}"></script>
<script src="{{ url('admin/vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ url('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{ url('admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ url('admin/vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{ url('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ url('admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ url('admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ url('admin/vendor/select2/select2.min.js') }}">
</script>
<script src="{{ asset('admin/js/main.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>


<!-- Main JS-->

<script>
    @if(session('Success'))
        swal("Success!", "{{ session('Success') }}", "success");
    @endif
    @if(session('Gagal'))
        swal("Gagal!", "{{ session('Gagal') }}", "error");
    @endif

    $('.delete').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure delete this data?',
            text: 'Data will be permanently deleted!',
            icon: 'warning',
            buttons: ["Tidak", "Ya!"],
        }).then(function (value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>