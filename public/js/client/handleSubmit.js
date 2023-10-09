var inputCheckboxPrice = document.querySelectorAll('.price input[type="checkbox"]');
var formPrice = document.querySelector('.price');

function handleSubmit(inputCheckbox, form) {
    inputCheckbox.addEventListener('change', function () {
        if (this.checked) {
            form.submit();
        }
    });
}

for (var i = 0; i < inputCheckboxPrice.length; i++) {
    handleSubmit(inputCheckboxPrice[i], formPrice);
}
