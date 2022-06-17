let saveForm = document.getElementById("insert-form");
let toggleForm = document.getElementById("toggle-form");

toggleForm.addEventListener("click", () => {
  if (saveForm.dataset.state === "opened") {
    saveForm.style.transform = `scaleY(0)`;
    saveForm.dataset.state = "closed";
    saveForm.style.display = "none";
    toggleForm.style.margin = "auto";
  } else {
    saveForm.style.transform = `scaleY(1)`;
    saveForm.dataset.state = "opened";
    saveForm.style.display = "block";
    toggleForm.style.margin = "8px";
  }

  toggleForm.classList.toggle("active");
});
