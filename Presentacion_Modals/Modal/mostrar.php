<?php   

        $tipo = isset($_REQUEST["tipo"])?$_REQUEST["tipo"]:"";

        if($tipo==1){
            $id= isset($_GET["id"])?$_GET["id"]:"";
            $enlace = mysqli_connect("localhost", "root", "");
            mysqli_select_db($enlace, "videoteca");

            $resultado = mysqli_query($enlace, "select * from pelicula where id_pelicula = '$id'");
            $fila = mysqli_fetch_array($resultado);

            $titulo = $fila['titulo'];
            $director = $fila['director'];
            $actor = $fila['actor'];       
            $ranking = $fila['ranking'];
            $foto = $fila['imagen'];

            $aux='
                <div class="col-12">
                    <div class="mb-3 mt-3">
                        <input type="hidden" class="form-control" id="id" name="id" value="' .$id. '">
                        <label for="contacto" class="form-label">ID:  '.$id.' </label>                                       
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="titulo" class="form-label">Título:</label>                        
                        <input type="text" class="form-control" id="titulo" name="titulo" value="' .$titulo. '">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="director" class="form-label">Director:</label>                        
                        <input type="text" class="form-control" id="director" name="empresa" value="' .$director. '">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="actor" class="form-label">Actor:</label>                        
                        <input type="text" class="form-control" id="actor" name="actor" value="' .$actor. '">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="ranking" class="form-label">Ranking:</label>                        
                        <input type="text" class="form-control" id="ranking" name="ranking" value="' .$ranking. '">
                    </div>                
                    <div class="mb-3 mt-3">
                        <label for="foto" class="form-label">Foto:</label>                        
                        <input type="text" class="form-control" id="foto" name="foto" value="'.$foto.'">
                    </div>
                </div>    
            ';

            echo $aux;
        }else if($tipo==2){
            $id= isset($_POST["id"])?$_POST["id"]:"";
            $titulo= isset($_POST["titulo"])?$_POST["titulo"]:"";
            $director= isset($_POST["director"])?$_POST["director"]:"";
            $actor= isset($_POST["actor"])?$_POST["actor"]:"";
            $ranking= isset($_POST["ranking"])?$_POST["ranking"]:"";
            $foto= isset($_POST["foto"])?$_POST["foto"]:"";

            $sql="UPDATE pelicula SET titulo = '" .$titulo. "', director = '" .$director. "'
            , actor = '" .$actor. "', ranking = '" .$ranking. "', imagen = '" .$foto. "' WHERE id_pelicula='" .$id. "'";

            $enlace = mysqli_connect("localhost", "root", "");
            mysqli_select_db($enlace, "videoteca");

            mysqli_query($enlace, $sql);
            
        }
        

    
?>