<?php
class books{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }

    public function getTableBooks(){
        $sql = "SELECT * FROM `books` ";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_book</th>";
            echo "<th></th>";
            echo "<th>title</th>";
            echo "<th></th>";
            echo "<th>editorial</th>";
            echo "<th></th>";
            echo "<th>subject</th>";
            echo "<th></th>";
            echo "<th>availability</th>";
            echo "<th></th>";
            echo "<th>release_date</th>";
            echo "<th></th>";
            echo "<th>owner</th>";
            echo "<th></th>";
            echo "<th>id_owner</th>";
            echo "<th></th>";
            echo "<th>borrower</th>";
            echo "<th></th>";
            echo "<th>borrow_start_date</th>";
            echo "<th></th>";
            echo "<th>borrow_end_date</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_book"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["title"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["editorial"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["subject"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["availability"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["release_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["id_owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrower"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_start_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_end_date"]."</td>";
                echo "<th></th>";
                echo "</tr>";
            }
            echo "<table>";
        }
    }


    //Get the books not associated with the user
    public function getTableBooksExcludingActualUser($id_owner){
        $sql = "SELECT * FROM `books` where id_owner != '".$id_owner."' AND availability = 1 ";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            
            echo "<th>id_book</th>";
            
            echo "<th>title</th>";
            
            echo "<th>editorial</th>";
            
            echo "<th>subject</th>";
            
            echo "<th>availability</th>";
            
            echo "<th>release_date</th>";
            
            echo "<th>owner</th>";
           
            echo "<th>id_owner</th>";
            
            echo "<th>borrower</th>";
            
            echo "<th>borrow_start_date</th>";
            
            echo "<th>borrow_end_date</th>";
            
            echo "<th>Select Book</th>";
            
            echo "</tr>";

            while($row = $this->result->fetch_assoc() ){
                echo "<form action='../user/borrowActionUserBackend.php' method = 'POST'>";
                echo "<tr>";
                
                echo"<td>".$row["id_book"]."</td>";
                echo "<input type='text' name='id_book' value=".$row["id_book"]." style='display:none;'>";
                
                echo"<td>".$row["title"]."</td>";
                echo "<input type='text' name='title' value=".$row["title"]." style='display:none;'>";
                
                echo"<td>".$row["editorial"]."</td>";
           
                echo"<td>".$row["subject"]."</td>";
        
                echo"<td>".$row["availability"]."</td>";
                echo "<input type='text' name='availability' value=".$row["availability"]." style='display:none;'>";
         
                echo"<td>".$row["release_date"]."</td>";
     
                echo"<td>".$row["owner"]."</td>";
         
                echo"<td>".$row["id_owner"]."</td>";
         
                echo"<td>".$row["borrower"]."</td>";
        
                //echo"<td>".$row["borrow_start_date"]."</td>";
                echo "<td> <input type='text' name='borrow_start_date' value=".$row["borrow_start_date"]." > </td>";
          
                //echo"<td>".$row["borrow_end_date"]."</td>";
                echo "<td> <input type='text' name='borrow_end_date' value=".$row["borrow_end_date"]." > </td>";
                
            
                echo"<td>  <button   class='btn btn-secondary px-4 px-lg-5' type = 'submit' name = 'send' >Select</button> </td>";
          
                echo "</form>";
                echo "</tr>";
                
            }
            echo "<table>";
        }
    }

    //Get the books associated with the user
    public function getTableBooksActualUser($id_owner){
        $sql = "SELECT * FROM `books` where id_owner = '".$id_owner."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_book</th>";
            echo "<th></th>";
            echo "<th>title</th>";
            echo "<th></th>";
            echo "<th>editorial</th>";
            echo "<th></th>";
            echo "<th>subject</th>";
            echo "<th></th>";
            echo "<th>availability</th>";
            echo "<th></th>";
            echo "<th>release_date</th>";
            echo "<th></th>";
            echo "<th>owner</th>";
            echo "<th></th>";
            echo "<th>id_owner</th>";
            echo "<th></th>";
            echo "<th>borrower</th>";
            echo "<th></th>";
            echo "<th>borrow_start_date</th>";
            echo "<th></th>";
            echo "<th>borrow_end_date</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_book"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["title"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["editorial"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["subject"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["availability"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["release_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["id_owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrower"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_start_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_end_date"]."</td>";
                echo "<th></th>";
                echo "</tr>";
            }
            echo "<table>";
        }
    }


     //Get the books associated with the user to delete one of them
    public function getTableBooksActualUserDelete($id_owner){
        $sql = "SELECT * FROM `books` where id_owner = '".$id_owner."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_book</th>";
            echo "<th></th>";
            echo "<th>title</th>";
            echo "<th></th>";
            echo "<th>editorial</th>";
            echo "<th></th>";
            echo "<th>subject</th>";
            echo "<th></th>";
            echo "<th>availability</th>";
            echo "<th></th>";
            echo "<th>release_date</th>";
            echo "<th></th>";
            echo "<th>owner</th>";
            echo "<th></th>";
            echo "<th>id_owner</th>";
            echo "<th></th>";
            echo "<th>borrower</th>";
            echo "<th></th>";
            echo "<th>Delete</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<form action='../user/removeActionUserBackend.php' method = 'POST'>";
                
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_book"]."</td>";
                echo "<input type='text' name='id_book' value=".$row["id_book"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["title"]."</td>";
                echo "<input type='text' name='title' value=".$row["title"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["editorial"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["subject"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["availability"]."</td>";
                echo "<input type='text' name='availability' value=".$row["availability"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["release_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["id_owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrower"]."</td>";
                echo "<th></th>";
                echo"<td>  <button   class='btn btn-secondary px-4 px-lg-5' type = 'submit' name = 'send' >Delete</button> </td>";
                echo "<th></th>";
                echo "</tr>";
                echo "</form>";
            }
            echo "<table>";
        }
    }

    public function searchBookByTitle($title){
        $sql = "SELECT * FROM `books` where title = '".$title."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
        echo "<br><br>";
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_book</th>";
            echo "<th></th>";
            echo "<th>title</th>";
            echo "<th></th>";
            echo "<th>editorial</th>";
            echo "<th></th>";
            echo "<th>subject</th>";
            echo "<th></th>";
            echo "<th>availability</th>";
            echo "<th></th>";
            echo "<th>release_date</th>";
            echo "<th></th>";
            echo "<th>owner</th>";
            echo "<th></th>";
            echo "<th>id_owner</th>";
            echo "<th></th>";
            echo "<th>borrower</th>";
            echo "<th></th>";
            echo "<th>borrow_start_date</th>";
            echo "<th></th>";
            echo "<th>borrow_end_date</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_book"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["title"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["editorial"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["subject"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["availability"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["release_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["id_owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrower"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_start_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrow_end_date"]."</td>";
                echo "<th></th>";
                echo "</tr>";
            }
            echo "<table>";
        }
      
    }

    //Table to retun books
    public function getTableBorrowedBooks($borrower){
        $sql = "SELECT * FROM `books` where borrower = '".$borrower."'";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            
            echo "<th>id_book</th>";
            
            echo "<th>title</th>";
            
            echo "<th>editorial</th>";
            
            echo "<th>subject</th>";
           
            echo "<th>availability</th>";
     
            echo "<th>release_date</th>";
         
            echo "<th>owner</th>";
        
            echo "<th>id_owner</th>";
         
            echo "<th>borrower</th>";
         
            echo "<th>borrow_start_date</th>";
       
            echo "<th>borrow_end_date</th>";

            echo "<th>Return Book</th>";
      
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<form action='../user/returnActionUserBackend.php' method = 'POST'>";
                echo "<tr>";
          
                echo"<td>".$row["id_book"]."</td>";
                echo "<input type='text' name='id_book' value=".$row["id_book"]." style='display:none;'>";
     
                echo"<td>".$row["title"]."</td>";
      
                echo"<td>".$row["editorial"]."</td>";
         
                echo"<td>".$row["subject"]."</td>";
      
                echo"<td>".$row["availability"]."</td>";
        
                echo"<td>".$row["release_date"]."</td>";
        
                echo"<td>".$row["owner"]."</td>";
       
                echo"<td>".$row["id_owner"]."</td>";

                echo"<td>".$row["borrower"]."</td>";
     
                echo"<td>".$row["borrow_start_date"]."</td>";
 
                echo"<td>".$row["borrow_end_date"]."</td>";

                

                echo"<td>  <button   class='btn btn-secondary px-4 px-lg-5' type = 'submit' name = 'send' >Return</button> </td>";
    
                echo "</tr>";
          
                echo "</form>";
            }
            echo "<table>";
        }
    }


     //Get the books associated with the user to delete one of them
     public function getTableBooksAdminDelete(){
        $sql = "SELECT * FROM `books` ";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
        
        
        if($this->result-> num_rows >0){

            echo "<table class=\"table table-striped\">"; 

            echo "<tr>";
            echo "<th></th>";
            echo "<th>id_book</th>";
            echo "<th></th>";
            echo "<th>title</th>";
            echo "<th></th>";
            echo "<th>editorial</th>";
            echo "<th></th>";
            echo "<th>subject</th>";
            echo "<th></th>";
            echo "<th>availability</th>";
            echo "<th></th>";
            echo "<th>release_date</th>";
            echo "<th></th>";
            echo "<th>owner</th>";
            echo "<th></th>";
            echo "<th>id_owner</th>";
            echo "<th></th>";
            echo "<th>borrower</th>";
            echo "<th></th>";
            echo "<th>Delete</th>";
            echo "<th></th>";
            echo "</tr>";

            while($row = $this->result->fetch_assoc()){
                echo "<form action='../admin/removeBookActionAdminBackend.php' method = 'POST'>";
                
                echo "<tr>";
                echo "<th></th>";
                echo"<td>".$row["id_book"]."</td>";
                echo "<input type='text' name='id_book' value=".$row["id_book"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["title"]."</td>";
                echo "<input type='text' name='title' value=".$row["title"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["editorial"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["subject"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["availability"]."</td>";
                echo "<input type='text' name='availability' value=".$row["availability"]." style='display:none;'>";
                echo "<th></th>";
                echo"<td>".$row["release_date"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["id_owner"]."</td>";
                echo "<th></th>";
                echo"<td>".$row["borrower"]."</td>";
                echo "<th></th>";
                echo"<td>  <button   class='btn btn-secondary px-4 px-lg-5' type = 'submit' name = 'send' >Delete</button> </td>";
                echo "<th></th>";
                echo "</tr>";
                echo "</form>";
            }
            echo "<table>";
        }
    }


    public function addBook( $id_book, $title, $editorial,$subject,$availability, $release_date,$owner,$id_owner,$borrower,$borrow_start_date,$borrow_end_date){
        //DEFINIMOS LA EJECUCIÓN Y LA CONSULTA 
  
        //le mandamos la consulta por paso de parametros
        $sql = "insert into books values(null,'". $title."', '". $editorial."', '". $subject."', '". $availability."', '". $release_date."', '". $owner."', '". $id_owner."',null,null,null)";
        //echo $sql;
        $this->result= $this->sql->ejecutar($sql);
  
    }

    public function deleteBook($id_book){
    $sql = "delete from books where id_book='". $id_book."' ";
    $this->result= $this->sql->ejecutar($sql);
    //echo $sql;
    //De esta manera puedo combinar los métodos sin perder la funcionalidad
    

    }

    public function addBorrow($id_book,$borrower,$borrow_start_date,$borrow_end_date){
        //Query para hacer la actualización de contacto
        //$sql = "update contacto set nom = '".$nom."',";
        $sql = "update books set availability= False, borrower ='".$borrower."',borrow_start_date='".$borrow_start_date."',borrow_end_date ='".$borrow_end_date."' where id_book = '".$id_book."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
    }
    public function undoBorrow($id_book){
        //Query para hacer la actualización de contacto
        //$sql = "update contacto set nom = '".$nom."',";
        $sql = "update books set availability= True, borrower =null,borrow_start_date=null,borrow_end_date =null where id_book = '".$id_book."'";
        $this->result= $this->sql->ejecutar($sql);
        //echo $sql;
        echo "<h3>The book have been returned succesfully</h3>";
    }



    
      
}
?>
  

   
