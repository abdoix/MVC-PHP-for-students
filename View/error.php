  <?php
      ob_start();
      
      $content= ob_get_clean();
      $titre="Page not found 404 !!!";
      require 'template.php';
        ?>
    </body>
</html>
