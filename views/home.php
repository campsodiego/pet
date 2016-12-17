<section>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		  	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php
			$contadorBanner=0;
			foreach($banners as $banner){
				$contadorBanner++;
			 ?>
		  	<div class="item <?php if($contadorBanner==1){ echo 'active'; }?>">
		    	<img src="<?php echo BASE_URL;  ?>/assets/upload/<?php echo $banner['imagem']; ?>" alt="...">
		    	<div class="carousel-caption">
		        ...
		    	</div>
		  	</div>
		  	<?php } ?>

		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<div class="col-md-4 col-lg-4">
	<h1>Home</h1>

	<?php foreach ($anuncios as $anuncio) {
		echo "Cod: ".$anuncio['idanuncios']."<br/>";
		echo "Titulo: ".$anuncio['tituloAnuncio']."<br/>";
		echo "Quantidade: ".$anuncio['qtdAnuncio']."<br/>";
		echo "Valor: ".$anuncio['vlrAnuncio']."<br/>";
		echo "Descricao: ".$anuncio['descricaoAnuncio']."<br/>";
		echo "Imagem: ".$anuncio['imagem']."<br/>";
	} ?>
</div>

</div>
