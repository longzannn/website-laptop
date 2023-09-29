var listForm = document.querySelectorAll("form.filter.hidden");
var listFilter = document.querySelectorAll(
    ".flex.justify-between.items-center.mb-4"
);
listFilter.forEach((filter, index) => {
    const form = listForm[index];
    filter.onclick = () => {
        form.classList.toggle("hidden");
    };
});
