// form validation script

// This line of codes gets all the name of input fields and store it to a variable.
const inputs = document.querySelectorAll('input');

// This block of code stores all the regex patterns.
const patterns = {
    pname: /^[\w\.?-? ?]{4,50}$/,
    development: /^[0-9\.?]{1,5}%$/,
    procurement: /^[0-9\.?]{1,5}%$/,
    implementation: /^[0-9\.?]{1,5}%$/
}

// Validation function
function validate (field, regex) {

    // This block of code tests if the user input is true or false, if its true the selected field will have a green border, otherwise it will have red.
    if (regex.test(field.value)) {

        field.className = 'input-valid';

    } else {

        field.className = 'input-invalid';

    }

}

inputs.forEach((input) => {

    input.addEventListener('keyup', (e) => {

        // console.log(e.target.attributes.name.value);
        validate(e.target, patterns[e.target.attributes.name.value])

    });

});