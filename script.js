

// Script to handle active state of nav links
const links = document.querySelectorAll(".nav-link");

links.forEach(link => {
  link.addEventListener("click", function () {
    links.forEach(l => l.classList.remove("active"));
    this.classList.add("active");
  });
});


// select2 dropdown initalization
  $(document).ready(function() {
    $('#mySelect').select2();
  });