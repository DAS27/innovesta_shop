document.addEventListener("DOMContentLoaded", () => {
  const tabIndex = window.location.hash;

  if (!tabIndex) return;

  const tab = document.querySelector(tabIndex);
  const tabButton = document.querySelector(tabIndex.replace("#", "."));

  const tabcontent = document.querySelectorAll(".products-list");
  for (let i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  const tablinks = document.querySelectorAll(".tablink");

  for (let i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }

  tab.style.display = "flex";
  tab.classList.add("active");
  tabButton.classList.add("active");
});
