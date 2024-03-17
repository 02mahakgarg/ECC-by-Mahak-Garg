document.querySelectorAll('.image-container img').forEach(image => {
    image.onclick = () => {
        document.querySelector('.pop-image').style.display = 'block';
        document.querySelector('.pop-image img').src = image.getAttribute('src');
    }
});

document.querySelector('.pop-image span').onclick = () => {
    document.querySelector('.pop-image').style.display = 'none';
}

document.getElementById('submitBtn').addEventListener('click', function() {
    // Get all form fields
    var formFields = document.forms["myForm"].elements;

    // Check if all fields are filled
    var allFieldsFilled = true;

    for (var i = 0; i < formFields.length; i++) {
        if (formFields[i].type !== "button" && formFields[i].value === "") {
            allFieldsFilled = false;
            break;
        }
    }

    // If all fields are filled, submit the form
    if (allFieldsFilled) {
        document.getElementById('myForm').submit();
        alert('Form submitted.');
    } else {
        alert('Please fill in all details before submitting.');
    }
});