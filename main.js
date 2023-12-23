document.addEventListener("DOMContentLoaded", () => {
  let openPop = document.querySelector(".btn");
  let closePop = document.querySelector(".closePop");
  let popWarpper = document.querySelector(".pop-warpper");
  let form = document.querySelector(".form");
  console.log("working");
  form.addEventListener("submit", (e) => {
    e.preventDefault();
  });
  openPop.addEventListener("click", () => {
    popWarpper.classList.add("active");
  });
  closePop.addEventListener("click", () => {
    popWarpper.classList.remove("active");
  });
});
