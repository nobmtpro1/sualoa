var menuLi = document.querySelectorAll(".menu-menu-1-container > .menu > li");
var menu = document.querySelector(".menu-menu-1-container");
var bar = document.querySelector(".header .bar");
var iconSearch = document.querySelector("#show-search-form");
var searchForm = document.querySelector("#search-form");

menuLi?.forEach((e) => {
  if (e?.querySelector(".sub-menu")) {
    const node = document.createElement("i");
    node?.classList?.add("fa");
    node?.classList?.add("fa-angle-down");
    console.log(node);
    e?.appendChild(node);
  }
});

bar?.addEventListener("click", function () {
  if (menu?.classList?.contains("active")) {
    menu?.classList?.remove("active");
  } else {
    menu?.classList?.add("active");
  }
});

iconSearch?.addEventListener("click", function (event) {
  if (!searchForm?.classList?.contains("active")) {
    searchForm?.classList?.add("active");
  }
  const hasClass = event.target.classList.contains("form-search");
  if (hasClass) {
    searchForm?.classList?.remove("active");
  }
});
