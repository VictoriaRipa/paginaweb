<?php
include_once "header.php";
?>
<title>RIPA</title>
<main><h1 class="contact container seccion tit">Informacion de contacto</h1></main>

  <section>
      <div class="container ">
        <div class="row">
            <div class="col-md-5">
                <h2 class="contact tit"><strong>Contacto</strong> </h2>
                <p><strong>Celular: </strong>2326434718</p>
                <h2 class="contact tit"><strong>Email</strong> </h2>
                <p> <strong>Mail: </strong>importadosripa@gmail.com</p>
                
                <form action="resp.php" method="post" enctype="multipart/form-data">
                                
    <!-- NOMBRE Y APELLIDO-->
        <label for="nombre" class="contact"> <strong>Nombre y apellido:</strong> </label><br>
        <input type="text" id="nombre" name="nombre" required placeholder="Ingrese nombre y apellido"><br>
       
    <!-- EMAIL -->
      <label for="correo" class="contact"> <strong>Email:</strong></label><br>
        <input type="email" id="correo" name="email" required placeholder="Ingrese su email"><br>          
        
     <!-- SUBIR ARCHIVO-->
     <div>
    <label for="arch"> <strong> Comprobante de pago: </strong></label>
    <input accept=".pdf" type="file" id="arch" name="arch">
    </div>
    
    <!-- CONSULTA-->
        <label for="consulta" class="contact"> <strong>Consulta</strong>  </label><br>
        <textarea name="consulta" id="consulta" cols="30" rows="4" maxlength="250" placeholder="Deje su consulta"></textarea> <br>
    
    <!-- TERMINOS Y CONDICIONES-->
        <div>
		<label>
		<input type="checkbox" id="tyc" value="Acepto" name="tyc"/>
		ACEPTO TERMINOS Y CONDICIONES
		</label>
	</div>
	<!-- BOTON DE ENVIAR-->
    <div>
		<input type="submit" id="submit" disabled="disabled"/>
	</div>
    <!--JS-->
</form>
<script type="text/javascript">
var tyc = document.getElementById('tyc');
var submit = document.getElementById('submit');

tyc.onclick = function(){
	if(tyc.checked){
		submit.disabled = false;
		
	}else{
		submit.disabled = true;
		
	}
	
}
</script>
    </form>
            </div>
            <div class="col-md-7" id="margenubi">
                <h2 class="contact centro tit"> <strong>Ubicacion</strong> </h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52767.15730769001!2d-59.53386480887223!3d-34.249887544568075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bb9533fc84b0c1%3A0x33d6b6bd3a65b27f!2sSan%20Antonio%20de%20Areco%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1662756956188!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             
            </div>
        </div>
    </div>
    </section>
    
    <?php
include_once "footer.php";
?>