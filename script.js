function validate(data) {
    return data.every(function(datum) {
        return datum.value.length > 0;
    });
}

$(document).ready(function() {
    var addNewUserForm = $('.add-user-form');

    addNewUserForm.submit(function(e) {
        e.preventDefault();
        console.log('User adding in process');
        var formData = $(this).serializeArray();
        
        if (!validate(formData)) {
            alert('All field should be filled');
            return;
        }

        $.post('data_process.php', formData, function(result) {
            console.log('User added successfully!');
        });
    });
});