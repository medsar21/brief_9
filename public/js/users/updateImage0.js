(function () {
  var inputFile = document.getElementById("idinputfile");
  var fileName = document.getElementById("fileName");
  var imageFile = document.getElementById("profileImage");
  var form = document.querySelector("form");
  var errorLine = document.getElementById("errorLine"); // Define errorLine here

  inputFile.addEventListener("change", function (event) {
    var uploadedFileName = event.target.files[0].name;
    fileName.textContent = uploadedFileName;

    loadImage();
  });

  function loadImage() {
    var xml = new XMLHttpRequest();
    var formData = new FormData(form);
    var urlGet = document.getElementById('getUrl').value;
    var phpPage = urlGet + "updateImage/selectDraft";

    xml.onreadystatechange = function () {
      if (xml.readyState === 4 && xml.status === 200) {
        if (xml.responseText === 'falseSize') {
          errorLine.innerHTML = 'Error: The maximum size is 3 MB';

        } else if (xml.responseText === 'falseType') {
          errorLine.innerHTML = 'Error: This file is not supported';

        } else {
          imageFile.src = xml.responseText;
          errorLine.innerHTML = '';
        }
      }
    };

    xml.open("post", phpPage, true);
    xml.send(formData);
  }
}());
