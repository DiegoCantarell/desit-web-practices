<!DOCTYPE html>
<html lang="en">
  
<head>
  
    <!-- html2pdf CDN-->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
    </script>
  
    <style>
        .container {
            position: fixed;
            top: 20%;
            left: 28%;
            margin-top: -65px;
            margin-left: -100px;
            border-radius: 7px;
        }
  
        .card {
            box-sizing: content-box;
            width: 700px;
            height: 450px;
            padding: 30px;
            border: 1px solid black;
            font-style: sans-serif;
            background-color: #f0f0f0;
        }
  
        #button {
            background-color: #1daf11;
            border-radius: 5px;
            margin-left: 650px;
            margin-bottom: 5px;
            color: white;
        }
  
        h2 {
            text-align: center;
            color: #24650b;
        }
    </style>
    <link rel="stylesheet" href="css/styles.css">
</head>
  
<body>
    <div class="container">
        <button id="button">Generate PDF</button>
        <div class="card" id="makepdf">
            <h2>Welcome to the generator of PDF for adoptions</h2>
            <?php
            include "class/sql.php";
            include "class/pets.php";
            include "class/users.php";
            include "class/usersAndPets.php";
            echo "This is the information about adoptions";
            $pets = new pets();
            $pets->getAllPetsAdopted();
            ?>
        </div>
    </div>
    <input type="button" onclick="window.location.href='practice4MainPage.php';" value="Back to the Main Page" />
</body>
  
<script>
    var button = document.getElementById("button");
    var makepdf = document.getElementById("makepdf");
  
    button.addEventListener("click", function () {
        var mywindow = window.open("", "PRINT", 
                "height=400,width=600");
  
        mywindow.document.write(makepdf.innerHTML);
  
        mywindow.document.close();
        mywindow.focus();
  
        mywindow.print();
        mywindow.close();
  
        return true;
    });
</script>
  
</html>