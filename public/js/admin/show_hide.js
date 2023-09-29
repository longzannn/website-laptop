const passwordFields = document.querySelectorAll('input[type="password"]');
const showBtns = document.querySelectorAll(".show-pass");
const hideBtns = document.querySelectorAll(".hide-pass");

showBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    passwordFields[index].type = "text";
    btn.classList.add("hidden");
    hideBtns[index].classList.remove("hidden");
  });
});

hideBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    passwordFields[index].type = "password";
    btn.classList.add("hidden");
    showBtns[index].classList.remove("hidden");
  });
});
