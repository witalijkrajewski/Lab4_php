function validateForm() {
    const checkboxes = document.querySelectorAll('input[type=checkbox]');


    let checked = false;
    for (let i = 0; i < checkboxes.length; i++) {
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