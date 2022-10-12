<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="{{ url('vendor/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="{{ url('vendor/jquery.easing.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/swiper/js/swiper.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{ url('js/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/components/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/components/swiper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/components/masonry.min.js') }}" type="text/javascript"></script>
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