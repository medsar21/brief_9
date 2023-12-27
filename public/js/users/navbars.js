(function () {
  var navbar = document.getElementById("navbar");
  var counter = 0;

  function toggleNavClasses() {
    var menuId = document.getElementById("userNav");
    if (counter === 0) {
      menuId.classList.remove('floatNav');
      menuId.classList.add('floatNavBlock');
      counter = 1;
    } else {
      menuId.classList.remove('floatNavBlock');
      menuId.classList.add('floatNav');
      counter = 0;
    }
  }

  var btnMostOcultNav = document.getElementById("btnMostOcultNav");
  btnMostOcultNav.addEventListener("click", toggleNavClasses);

  const btnToggle = document.querySelector('.toggle-btn');
  btnToggle.addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('active');
  });

  window.onload = function () {
    var loadDiv = document.getElementById("loadDiv");
    loadDiv.style.visibility = "hidden";
    loadDiv.style.opacity = "0";
  };
}());
