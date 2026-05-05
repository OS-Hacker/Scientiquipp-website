// =========================
// Active Link Detection
// =========================
const currentPath = window.location.pathname.split("/").pop();
const links = document.querySelectorAll(".nav-link");

links.forEach((link) => {
  const linkPath = link.getAttribute("href");

  // Match current page
  if (linkPath === currentPath || (currentPath === "" && linkPath === "./")) {
    link.classList.add("active");
  } else {
    link.classList.remove("active");
  }
});

// =========================
// Custom Navbar Toggle
// =========================
const navToggle = document.getElementById("navToggle");
const navbarMenu = document.getElementById("navbarMenu");

if (navToggle && navbarMenu) {
  // Toggle menu on button click
  navToggle.addEventListener("click", () => {
    navToggle.classList.toggle("active");
    navbarMenu.classList.toggle("active");
  });

  // Close menu when link is clicked
  links.forEach((link) => {
    link.addEventListener("click", () => {
      navToggle.classList.remove("active");
      navbarMenu.classList.remove("active");
    });
  });
}

// =========================
// Bootstrap Tabs Fix
// =========================
const triggerTabList = document.querySelectorAll("#productTabs button");

triggerTabList.forEach((triggerEl) => {
  const tabTrigger = new bootstrap.Tab(triggerEl);

  triggerEl.addEventListener("click", function (event) {
    event.preventDefault();
    tabTrigger.show();
  });
});

// =========================
// jQuery + Select2
// =========================
$(document).ready(function () {
  if ($("#mySelect").length) {
    $("#mySelect").select2();
  }
});

// toggle
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("open");
  document.getElementById("sidebarOverlay").classList.toggle("open");
}

// App pill toggle
document.querySelectorAll(".app-pill").forEach((btn) => {
  btn.addEventListener("click", () => {
    document
      .querySelectorAll(".app-pill")
      .forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
  });
});

// Nav item toggle
document.querySelectorAll(".sb-nav li").forEach((li) => {
  li.addEventListener("click", () => {
    document
      .querySelectorAll(".sb-nav li")
      .forEach((l) => l.classList.remove("active"));
    li.classList.add("active");
  });
});
