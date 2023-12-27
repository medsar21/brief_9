<?php include "app/views/userViews/headerTop.php"; ?>
<style>
    
    #errorPageLink {
      color: #0db3f5;
    }
    #errorPage {
      margin-top: 60px;
      text-align: center;
    }
    
</style>
<?php include "app/views/userViews/headerBottom.php"; 
      include "app/views/userViews/navbars.php"; ?>
    
    <div class="main">
      <a href="<?php echo constant('URL'); ?>" id="errorPageLink">
        <h1 id="errorPage">Error Page: This page not found!!<br>Return to home</h1>
      </a>
    </div>
  
  <script src="public/js/users/navbars.js"></script>
  </body>
</html>
