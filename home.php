<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        .bootstrap-blue-btn {
            display: inline-block;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid #007bff;
            border-radius: 0.25rem;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        /* Optional: Hover effect */
        .bootstrap-blue-btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <?php

    require('connexion.php');
try{

    //$connexion 
    $sql = "SELECT * FROM admin";
    $result = $connexion->query($sql);
    $employees = $result->fetchAll();
    
    
    echo "<table border=1>";
    echo "<tr>";
    
    echo "<th> ID </th>";
    echo "<th> Nom </th>";
    echo "<th> Prenom </th>";
    echo "<th> email </th>";
    echo "<th> genre </th>";
    
    echo "</tr>";
    
    //while ($rec = $rs->fetch(PDO::FETCH_OBJ)){
        foreach ($employees as $emp) {    
            echo "<tr>";
            
            echo "<td>". $emp["id"] ."</td>";
            echo "<td>". $emp["nom"] ."</td>";
            echo "<td>" .$emp["prenom"]."</td>";
            echo "<td> ". $emp["email"] ."</td>";
            echo "<td> ". $emp["genre"] ."</td>";
            
            echo "</tr>";
        }
        
        //}
        
        
        echo "</table>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
        
    ?>
    <a href="http://localhost/gestion_/add.php"><button class="bootstrap-blue-btn">ajouter</button></a>
</body>
</html>


<!-- [
    ["id"=>1, "nom"=>"abdellah", "prenom"=>"amini alaoui", "email"=>"...."],
    ["id"=>1, "nom"=>"abdellah", "prenom"=>"amini alaoui", "email"=>"...."],
    ["id"=>1, "nom"=>"abdellah", "prenom"=>"amini alaoui", "email"=>"...."]
] -->
