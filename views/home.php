<h1>Home</h1>

<?php foreach ($anuncios as $anuncio) {
	echo "Cod: ".$anuncio['idanuncios']."<br/>";
	echo "Titulo: ".$anuncio['tituloAnuncio']."<br/>";
	echo "Quantidade: ".$anuncio['qtdAnuncio']."<br/>";
	echo "Valor: ".$anuncio['vlrAnuncio']."<br/>";
	echo "Descricao: ".$anuncio['descricaoAnuncio']."<br/>";
	echo "Imagem: ".$anuncio['imagem']."<br/>";
} ?>