// JavaScript Document
//Image Upload Script
$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
                log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log)
                alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });

});

//Footer Logo Upload Script
$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
                log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log)
                alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload-flogo').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpFlogo").change(function () {
        readURL(this);
    });

});

//Favicon Upload Script
$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
                log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log)
                alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload-favicon').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpFavicon").change(function () {
        readURL(this);
    });

});

//Modal code start
$(document).ready(function(){
	$(document).on("click", "#softDelete", function () {
		 var deleteID = $(this).data('id');
		 $(".modal_card #modal_id").val( deleteID );
	});

  $(document).on("click", "#restore", function () {
		 var restoreID = $(this).data('id');
		 $(".modal_card #modal_id").val( restoreID );
	});

  $(document).on("click", "#delete", function () {
		 var deleteID = $(this).data('id');
		 $(".modal_card #modal_id").val( deleteID );
	});
});

//Success and Error Message Timeout Code Start
setTimeout(function() {
    $('.alertsuccess').slideUp(1000);
 },5000);

setTimeout(function() {
    $('.alerterror').slideUp(1000);
 },10000);

//print code start
$(document).ready(function(){
    $('.btnPrint').printPage();
});

//datatable code start
$(document).ready(function() {
  $('#myTable').DataTable();

  $('#alltableinfo').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false
  });

  $('#allTableDesc').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "order": [[ 0, "desc" ]],
    "info": true,
    "autoWidth": false
  });
});

//Datepicker setting code start
 $(function(){
	 $('#birththday').datepicker({
		  autoclose: true,
		  format: 'yyyy-mm-dd',
		  todayHighlight: true
	 });
	 $('#startDate').datepicker({
		  autoclose: true,
		  format: 'yyyy-mm-dd',
		  todayHighlight: true
	 });
});

//summernote code editor
$(document).ready(function() {
  $('.summernote').summernote();
});
