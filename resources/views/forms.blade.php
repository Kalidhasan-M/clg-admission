<div id="fb-editor"></div>
<button id="saveForm" class="bg-blue-500 text-white px-4 py-2 mt-2">Save Form</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>

<script>
  jQuery(function ($) {
    var fbEditor = $('#fb-editor');
    var formBuilder = fbEditor.formBuilder();

    $('#saveForm').click(function () {
      var formData = formBuilder.actions.getData('json'); 
      $.ajax({
        url: "{{ route('save.form') }}", // Route for saving form data
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}", // Include CSRF token
          form_data: formData,
        },
        success: function (response) {
          alert("Form saved successfully!");
        },
        error: function (error) {
          console.error("Error saving form:", error);
        },
      });
    });
  });
</script>
