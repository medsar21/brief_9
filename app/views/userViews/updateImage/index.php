<?php include 'app/views/userViews/headerTop.php'; ?>

<?php
include "app/views/userViews/headerBottom.php";
include "app/views/userViews/navbars.php";
?>
<style>
  .main {
    display: flex;
    justify-content: center;
  }

  header {
    display: block;
  }

  .profileDiv {
    background: #0db3f5;
    color: #fff;
    border-radius: 5px;
    height: auto;
    margin: 10px 20px;
    width: 40%;
    padding-top: 10px;
  }

  .headerTitle {
    margin: 0 20px;
  }

  .headerContent {
    background: #fff;
    color: #000;
    border-radius: 0 0 4px 4px;
    height: auto;
    border: 2px solid #bbb8b8;
    margin-top: 5px;
    padding: 20px;
  }

  .names {
    color: #3d3a3a;
    font-weight: bold;
  }

  .surnames {
    color: #757171;
    font-weight: bold;
    margin-bottom: 30px;
  }


  input[type='file']#idinputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }

  label[for="idinputfile"] {
    font-size: 26px;
    color: #626262;
    border: 1px solid #9e9d9d;
    background-color: #fff;
    cursor: pointer;
    border-radius: 5px;
    text-transform: uppercase;
    text-align: center;
    display: inline-block;
    padding: 10px 30px;
  }

  label[for="idinputfile"]:hover {
    border: 2.2px solid #00A1E0;
  }

  label[for="idinputfile"]:active {
    border: 2.2px solid #00A1E0;
  }

  #sendImageBtn {
    width: 100%;
    margin-top: 30px;
    border-radius: 5px;
    padding: 10px;
    font-weight: bold;
    outline: none;
    display: inline-block;
    background: #00A1E0;
    border-color: transparent;
    color: #fff;
    font-size: 100%;
  }

  #sendImageBtn:hover {
    background: #0098d4;
    cursor: pointer;
  }

  #sendImageBtn:active {
    background: #0087bd;
  }

  #fileName {
    margin-left: 15px;
    color: #383636;
  }

  .imageDiv {
    padding: 0 20px;
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #profileImage {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
  }


  #errorLine {
    font-weight: bold;
    color: #ff0000;
    margin: 20px 0;
  }

  @media (max-width:700px) {
    .profileDiv {
      width: 100%;
    }
  }
</style>
<div class="main">
  <div class="profileDiv">
    <h2 class="headerTitle">Username</h2>
    <div class="headerContent">

      <form action="<?php echo constant('URL'); ?>updateImage/update" method="post" enctype="multipart/form-data">
        <?php
        foreach ($selUser as $row) {
        ?>
          <div class="imageDiv">
            <img id="profileImage" name="imageFile" src="public/images/profiles/<?php echo $row['IMAGE']; ?>" alt="Profile Image">
          </div>

          <h2 class="names"><?php echo $row['NAME']; ?></h2>
          <h3 class="surnames"><?php echo $row['SURNAME']; ?></h3>

          <div class='inputDiv'>
            <input type='file' id='idinputfile' name="inputfile" accept="image/*">
            <label for='idinputfile' class='fileLabel'>
              <i class="fas fa-upload"></i>
            </label>
            <span id="fileName">My image</span>
          </div>
          <p id='errorLine'></p>

          <div class="inputDiv">
            <input type="submit" id="sendImageBtn" value="Send" name='updateImageBtn'>
          </div>
        <?php
        }
        ?>
      </form>


    </div>
  </div>
</div>


</body>
<script>
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

</script>
<script>
  
</script>

</html>