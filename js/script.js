$(document).ready(() => {
  $("#toggle-sidebar-button").on("click", () => {
    $(".nav-side-menu").toggleClass("menu-collapsed");
    $(".main").toggleClass("left-zero");
    $(".header").toggleClass("left-zero");
    return false;
  });

  $("#item1").on("click", () => {
    $("#item1-sublist").toggleClass("sublist-visible");
    return false;
  });

  $("#item1-sublist-ano-1").on("click", () => {
    $("#item1-sublist-meses-1").toggleClass("sublist-visible");
    return false;
  });

  $("#item1-sublist-ano-2").on("click", () => {
    $("#item1-sublist-meses-2").toggleClass("sublist-visible");
    return false;
  });

  $("#item1-sublist-ano-3").on("click", () => {
    $("#item1-sublist-meses-3").toggleClass("sublist-visible");
    return false;
  });

  $("#close-menu-direito-action").on("click", () => {
    $(".menu-direito-container").toggleClass("menu-direito-visible");
    $(".menu-direito-display-button").toggleClass(
      "menu-direito-button-visible"
    );
    return false;
  });
  $(".menu-direito-display-button").on("click", () => {
    $(".menu-direito-container").toggleClass("menu-direito-visible");
    $(".menu-direito-display-button").toggleClass(
      "menu-direito-button-visible"
    );
    return false;
  });
});
