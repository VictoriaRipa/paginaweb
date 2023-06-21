
<footer class="foot fixed-bottom ar">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid fot">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php
            $menu=array();
            $menu ['Home']="index.php";
            $menu ['Productos']="productos.php"; 
            $menu ['Contacto']="contacto.php";
  
            foreach ($menu as $botones=>$link){
            echo "<li><a class='link nav int color listas tit' href=$link > $botones</a></li>";
              }; 
          ?>
      </ul>
    </div>
  </div>
    </nav>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>