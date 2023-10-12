var inputCheckboxPrice = document.querySelectorAll('form input[type="checkbox"]');
var formPrice = document.querySelectorAll('form.flex.items-center.mb-3');

inputCheckboxPrice.forEach(function (input) {
    input.addEventListener('change', function () {
        const form = input.parentElement;
        form.submit();
    });
});


