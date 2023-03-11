function validateForm() {
    const checkboxes = document.querySelectorAll('input[type=checkbox]');
    let checked_checkboxes_counter = 0;


    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checked_checkboxes_counter += 1;
            if (checked_checkboxes_counter === 2) {
                break;
            }
        }
    }

    if (checked_checkboxes_counter < 2) {
        alert('You must select at least two courses')
        return false;
    }
}