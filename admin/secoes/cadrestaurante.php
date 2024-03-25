<form method="post" action="controller/inseriRestaurante.php" enctype="multipart/form-data"> <!-- mandar arquivos grandes transformados em bytes que serão convertidos posteriormente -->
<p>
    <label> nome: </label>
    <input type="text" name="txtRestaurante" require/>
</p>
<p>
    <label> descrição: </label>
    <input type="text" name="txtDescricao" require/>
</p>
<p>
    <label> categoria: </label>
    <input type="text" name="txtCategoria" require/>
</p>
<p>
    <label> imagem: </label>
    <input type="file" name="arquivo" require/>
</p>
<p>
    <input type="submit" value="Enviar"/>
</p>