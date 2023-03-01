function validateForm() {
    var checkboxes = document.querySelectorAll('input[type=checkbox]');


    var checked = false;
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checked = true;
            break;
        }
    }


    if (!checked) {
        alert('You must select at least one course!');
        return false;
    }
}