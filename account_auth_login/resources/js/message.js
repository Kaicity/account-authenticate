// custom.js
$(document).ready(function() {
    // Close modal event
    $('#exampleModal').on('hidden.bs.modal', function () {
        // Perform actions when the modal is closed
        console.log('Modal closed');
    });

    // Save data event
    $('#saveButton').click(function() {
        // Perform actions when the save button is clicked
        console.log('Save button clicked');
        
        // Example: You can retrieve data from form fields within the modal and save it
        var formData = $('#formId').serialize();
        console.log(formData);
        
        // If you want to close the modal after saving data, you can do so programmatically
        $('#exampleModal').modal('hide');
    });
});
