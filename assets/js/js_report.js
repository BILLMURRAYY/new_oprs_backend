$(function() {
  // Summernote
  $('#summernote').summernote()

  // CodeMirror
  CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
  });
})

$(function() {
  $('.select2').select2()
});


//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', {
  'placeholder': 'dd/mm/yyyy'
});
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', {
  'placeholder': 'mm/dd/yyyy'
});
//Money Euro
$('[data-mask]').inputmask()

//Date picker
$('#reservationdate').datetimepicker({
  format: 'L'
});

//Date and time picker
$('#reservationdatetime').datetimepicker({
  icons: {
      time: 'far fa-clock'
  }
});

//Date range picker
$('#reservation').daterangepicker()
//Date range picker with time picker
$('#reservationtime').daterangepicker({
  timePicker: true,
  timePickerIncrement: 30,
  locale: {
      format: 'MM/DD/YYYY hh:mm A'
  }
});
//Date range as a button

//Timepicker
$('#timepicker').datetimepicker({
  format: 'LT'
});