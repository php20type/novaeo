<!-- JavaScript Library -->
<script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>

<!-- Popper JS and Bootstrap JS -->
<script src="{{ asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js')}}"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/admin/js/custom.js')}}"></script>
<script>
    $('.search').keypress(function(e) {
        if (e.which == 10 || e.which == 13) {
            $('#search-form').submit();
        }
    });
</script>