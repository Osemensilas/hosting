const iconContainers = document.querySelectorAll(".faqs-icon-container");

for (let i = 0; i < iconContainers.length; i++) {
  let iconContainer = iconContainers[i];

  iconContainer.addEventListener("click", function () {
    iconContainer.children[0].classList.toggle("active");
    iconContainer.parentElement.parentElement.children[1].classList.toggle(
      "active"
    );
  });
}
