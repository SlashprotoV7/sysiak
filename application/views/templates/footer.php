<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
    Copyright © E-Lakse (Elektronik Layanan Kesekretariatan) <?= date('Y');?>
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>

<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= base_url(); ?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url(); ?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?= base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>assets/js/custom.min.js"></script>

<!--morris JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/morrisjs/morris.min.js"></script>
<!-- sparkline chart -->
<script src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dashboard4.js"></script>
<!-- This is data table -->
<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->


<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= base_url(); ?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url(); ?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?= base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?= base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>



<!-- Untuk datepicker -->
<!-- Plugin JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/moment/moment.js"></script>
<script src="<?= base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Untuk Dynamic Form Fields -->
<script src="<?= base_url(); ?>assets/plugins/switchery/dist/switchery.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugins/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>



<script>

// MAterial Date picker
$('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
$('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
$('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

$('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
// Clock pickers
$('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});
$('.clockpicker').clockpicker({
    donetext: 'Done',
}).find('input').change(function() {
    console.log(this.value);
});
$('#check-minutes').click(function(e) {
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show').clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
    $('input').prop('readOnly', true);
}
// Colorpicker
$(".colorpicker").asColorPicker();
$(".complex-colorpicker").asColorPicker({
    mode: 'complex'
});
$(".gradient-colorpicker").asColorPicker({
    mode: 'gradient'
});
// Date Picker
jQuery('.mydatepicker, #datepicker').datepicker();
jQuery('#datepicker-autoclose').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#date-range').datepicker({
    toggleActive: true
});
jQuery('#datepicker-inline').datepicker({
    todayHighlight: true
});
// Daterange picker
$('.input-daterange-datepicker').daterangepicker({
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-danger',
    cancelClass: 'btn-inverse'
});
$('.input-daterange-timepicker').daterangepicker({
    timePicker: true,
    format: 'MM/DD/YYYY h:mm A',
    timePickerIncrement: 30,
    timePicker12Hour: true,
    timePickerSeconds: false,
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-danger',
    cancelClass: 'btn-inverse'
});
$('.input-limit-datepicker').daterangepicker({
    format: 'MM/DD/YYYY',
    minDate: '06/01/2015',
    maxDate: '06/30/2015',
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-danger',
    cancelClass: 'btn-inverse',
    dateLimit: {
        days: 6
    }
});
</script>
<!-- Untuk Dynamic Form Fields -->

<script type="text/javascript">
jQuery(document).ready(function() {
    // Switchery
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function() {
        new Switchery($(this)[0], $(this).data());
    });
    // For select 2
    $(".select2").select2();
    $('.selectpicker').selectpicker();
    //Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
    });
    var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
    });
    if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    }
    $("input[name='tch1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%'
    });
    $("input[name='tch2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        maxboostedstep: 10000000,
        prefix: '$'
    });
    $("input[name='tch3']").TouchSpin();
    $("input[name='tch3_22']").TouchSpin({
        initval: 40
    });
    $("input[name='tch5']").TouchSpin({
        prefix: "pre",
        postfix: "post"
    });
    // For multiselect
    $('#pre-selected-options').multiSelect();
    $('#optgroup').multiSelect({
        selectableOptgroup: true
    });
    $('#public-methods').multiSelect();
    $('#select-all').click(function() {
        $('#public-methods').multiSelect('select_all');
        return false;
    });
    $('#deselect-all').click(function() {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });
    $('#refresh').on('click', function() {
        $('#public-methods').multiSelect('refresh');
        return false;
    });
    $('#add-option').on('click', function() {
        $('#public-methods').multiSelect('addOption', {
            value: 42,
            text: 'test 42',
            index: 0
        });
        return false;
    });
    $(".ajax").select2({
        ajax: {
            url: "https://api.github.com/search/repositories",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function(data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;
                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        //templateResult: formatRepo, // omitted for brevity, see the source of this page
        //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });
});
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?= base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
