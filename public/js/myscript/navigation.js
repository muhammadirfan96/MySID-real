const setNavMobile = () => {
  $(document).ready(() => {
    $("#navMobile").toggleClass("-mb-56");
    $("#first").toggleClass("translate-x-2");
    $("#second").toggleClass("-translate-x-2");
  });
};

const setSidebar = () => {
  $(document).ready(() => {
    $("#one").toggleClass("rotate-[35deg]");
    $("#two").toggleClass("opacity-0");
    $("#three").toggleClass("-rotate-[35deg]");
    $("#container").toggleClass("md:ml-60");
    $("#sidebar").toggleClass("-ml-60");
  });
};
