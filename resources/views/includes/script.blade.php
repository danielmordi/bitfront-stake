<!-- JAVASCRIPT -->
<script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('libs/clipboard/dist/clipboard.min.js') }}"></script>

<script src="{{ asset('libs/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('libs/table-edits/build/table-edits.min.js') }}"></script>
<script src="{{ asset('/js/pages/table-editable.init.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>

<script>
    new ClipboardJS('.copyReferralLink');

    // tabs
    $('#list-tab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>

<script src="assets/js/app.js"></script>