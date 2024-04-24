//Hamburger activation
const devContainer = document.querySelector("#developer-container");
const headerDev = document.querySelector(".nav-project");
const hero = document.querySelector("#hero");
const domain = document.querySelector("#domain");
const hosting = document.querySelector("#hosting");
const contactUs = document.querySelector("#contact-us");
const aboutUs = document.querySelector("#about-us");

headerDev.addEventListener("click", function () {
  devContainer.classList.add("active");
  hero.classList.add("active");
  domain.classList.add("active");
  hosting.classList.add("active");
  contactUs.classList.add("active");
  aboutUs.classList.add("active");
});

//Hero check projects

const heroViewProject = document.querySelector(".hero-view-project-btn");
const heroRight = document.querySelector(".hero-right");
const heroLeft = document.querySelector(".hero-left");
const socials = document.querySelector(".socials-container");
const recentProject = document.querySelector("#recent-projects");
const clientsReviewDev = document.querySelector("#clients");

heroViewProject.addEventListener("click", function () {
  heroRight.classList.add("active");
  heroLeft.classList.add("active");

  recentProject.classList.add("active");
  clientsReviewDev.classList.add("active");
});

//Greating

let currDate = new Date();

let currHour = currDate.getHours();

if (currHour < 12) {
  document.querySelector(".greeting").innerText = "Good Morning,";
} else if (currHour > 11 && currHour < 16) {
  document.querySelector(".greeting").innerText = "Good Afternoon,";
} else if (currHour > 15 && currHour < 20) {
  document.querySelector(".greeting").innerText = "Good Evening,";
} else {
  document.querySelector(".greeting").innerText = "Hello,";
}

//Hero Project SLider

const heroProjects = document.querySelectorAll(".hero-project");
const heroNxtBtn = document.querySelector("#hero-project-nxt-btn");
const heroPrevBtn = document.querySelector("#hero-project-prev-btn");

let childNum = 0;

let activeHero = heroProjects[childNum];

activeHero.classList.add("active");

heroPrevBtn.classList.add("active");

heroNxtBtn.addEventListener("click", function () {
  activeHero = heroProjects[++childNum];
  activeHero.classList.add("active");

  let numberOfChildern = document.querySelector(
    ".hero-project-container"
  ).childElementCount;

  for (let i = 0; i < heroProjects.length; i++) {
    let heroProject = heroProjects[i];

    if (heroProject != activeHero) {
      heroProject.classList.remove("active");
    }

    if (childNum + 1 == numberOfChildern) {
      heroNxtBtn.classList.add("active");
    } else {
      heroNxtBtn.classList.remove("active");
    }
  }

  if (childNum > 0) {
    heroPrevBtn.classList.remove("active");
  }
});

heroPrevBtn.addEventListener("click", function () {
  activeHero = heroProjects[--childNum];
  activeHero.classList.add("active");

  let numberOfChildern = document.querySelector(
    ".hero-project-container"
  ).childElementCount;

  for (let i = 0; i < heroProjects.length; i++) {
    let heroProject = heroProjects[i];

    if (heroProject != activeHero) {
      heroProject.classList.remove("active");
    }
  }

  if (childNum == 0) {
    heroPrevBtn.classList.add("active");
  }

  if (childNum + 1 < numberOfChildern) {
    heroNxtBtn.classList.remove("active");
  } else {
    heroNxtBtn.classList.add("active");
  }
});

//clients review

const clientReviews = document.querySelectorAll(".client-review");
const nxtClient = document.querySelector(".left-btn");
const prevClient = document.querySelector(".right-btn");

let clientNum = 0;

let activeClient = clientReviews[clientNum];
activeClient.classList.add("active");

activeClient.children[0].children[0].children[0].innerText =
  activeClient.children[1].children[0].children[0].innerText[0];

prevClient.classList.add("active");

nxtClient.addEventListener("click", function () {
  activeClient = clientReviews[++clientNum];
  activeClient.classList.add("active");

  activeClient.children[0].children[0].children[0].innerText =
    activeClient.children[1].children[0].children[0].innerText[0];

  prevClient.classList.remove("active");

  for (let i = 0; i < clientReviews.length; i++) {
    let clientReview = clientReviews[i];

    if (activeClient != clientReview) {
      clientReview.classList.remove("active");
    }
  }

  if (clientReviews.length == clientNum + 1) {
    nxtClient.classList.add("active");
  } else {
    nxtClient.classList.remove("active");
  }
});

prevClient.addEventListener("click", function () {
  activeClient = clientReviews[--clientNum];
  activeClient.classList.add("active");

  nxtClient.classList.remove("active");

  activeClient.children[0].children[0].children[0].innerText =
    activeClient.children[1].children[0].children[0].innerText[0];

  for (let i = 0; i < clientReviews.length; i++) {
    let clientReview = clientReviews[i];

    if (activeClient != clientReview) {
      clientReview.classList.remove("active");
    }
  }

  if (clientNum == 0) {
    prevClient.classList.add("active");
  }
});

setInterval(() => {
  activeClient = clientReviews[++clientNum];

  if (activeClient == clientReviews[0]) {
    activeClient.classList.add("active");
    prevClient.classList.add("active");

    activeClient.children[0].children[0].children[0].innerText =
      activeClient.children[1].children[0].children[0].innerText[0];
  } else {
    prevClient.classList.remove("active");
  }

  for (let i = 0; i < clientReviews.length; i++) {
    let clientReview = clientReviews[i];

    if (activeClient != clientReview) {
      clientReview.classList.remove("active");
    } else {
      activeClient.classList.add("active");

      activeClient.children[0].children[0].children[0].innerText =
        activeClient.children[1].children[0].children[0].innerText[0];
    }
  }

  if (clientNum + 1 > clientReviews.length) {
    clientNum = 0;

    activeClient = clientReviews[clientNum];

    activeClient.classList.add("active");

    prevClient.classList.add("active");

    activeClient.children[0].children[0].children[0].innerText =
      activeClient.children[1].children[0].children[0].innerText[0];
  }

  if (clientReviews.length == clientNum + 1) {
    nxtClient.classList.add("active");
  } else {
    nxtClient.classList.remove("active");
  }
}, 8000);

const showAlls = document.querySelectorAll(".show-all");
const showLesses = document.querySelectorAll(".show-less");
const btnsContainer = document.querySelector(".hero-project-bottom");
const descriptionContainers = document.querySelectorAll(".para-container");
const heroProContainer = document.querySelector(".hero-project-container");
const devHero = document.querySelector("#dev-hero");
const heroProjectRightConttainer = document.querySelector(
  ".hero-project-right-content"
);

for (let i = 0; i < showAlls.length; i++) {
  let showAll = showAlls[i];

  showAll.classList.add("active");

  showAll.addEventListener("click", function () {
    let showLessContainer = showAll.parentElement;
    let projectContainer = showAll.parentElement.parentElement.parentElement;
    let paraContainer = showAll.parentElement.children[1];

    projectContainer.classList.add("show-more");
    paraContainer.classList.add("show-more");
    devHero.classList.add("show-more");
    heroProjectRightConttainer.classList.add("active");

    let showLess = showLessContainer.querySelector(".show-less");
    showLessContainer.classList.add("active");
    showAll.classList.remove("active");
    showLess.classList.add("active");
    btnsContainer.classList.add("active");
    hero.classList.add("show-more");
    heroProContainer.classList.add("show-more");
    header.classList.add("show-more");
    heroHome.classList.add("show-more");

    for (let i = 0; i < descriptionContainers.length; i++) {
      let descriptionContainer = descriptionContainers[i];

      descriptionContainer.classList.add("show-more");
    }
  });
}

for (let i = 0; i < showLesses.length; i++) {
  let showLess = showLesses[i];

  showLess.addEventListener("click", function () {
    let showFullContainer = showLess.parentElement;
    let projectContainer = showLess.parentElement.parentElement.parentElement;
    let paraContainer = showLess.parentElement.children[1];

    paraContainer.classList.remove("show-more");
    devHero.classList.remove("show-more");
    heroProjectRightConttainer.classList.remove("active");

    let showFull = showFullContainer.querySelector(".show-all");
    showFullContainer.classList.remove("active");
    showFull.classList.add("active");
    showLess.classList.remove("active");
    btnsContainer.classList.remove("active");
    hero.classList.remove("show-more");
    heroProContainer.classList.remove("show-more");
    header.classList.remove("show-more");
    heroHome.classList.remove("show-more");

    for (let i = 0; i < heroProjects.length; i++) {
      let heroProject = heroProjects[i];

      heroProject.classList.remove("show-more");
    }

    for (let i = 0; i < descriptionContainers.length; i++) {
      let descriptionContainer = descriptionContainers[i];

      descriptionContainer.classList.remove("show-more");
    }
  });
}
