<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
    {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $imagename = $_FILES["photo"]["name"];
        $imagetype = $_FILES["photo"]["type"];
        $imagesize = $_FILES["photo"]["size"];
        
        $name = $_POST["name"];
        $software = $_POST["software"];
        $description = $_POST["description"];
        $solution = $_POST["solution"];
        $date = date("Y-m-d-H-i");

        $imageextension = pathinfo($imagename, PATHINFO_EXTENSION);

        $imagename = $date.".".$imageextension;

//IMPORTATION IMAGE

        // Verify file extension
        if(!array_key_exists($imageextension, $allowed)) die("Error: Please select a valid file format.");
        
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($imagesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($imagetype, $allowed))
        {
            move_uploaded_file($_FILES["photo"]["tmp_name"], "./maya/" . $imagename);
            echo "Your file was uploaded successfully.";
        } 
        else
        {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } 
    else
    {
        echo "Error: Veuillez inclure une image";
    }


// ECRITURE DANS FICHIER
    
    $maya = "./maya/maya.txt";
    
    // Contenu à ajouter
    $content = $imagename .";". $name .";". $description .";". $solution ."\n";
    
    // Ouvrir le fichier en mode append
    $file = fopen($maya, "a");
    
    // Vérifier si le fichier a été ouvert avec succès
    if ($file) 
    {
        // Écrire le contenu dans le fichier
        fwrite($file, $content);
        // Fermer le fichier
        fclose($file);
        echo "Le contenu a été ajouté avec succès.";
    } 
    else 
    {
        echo "Impossible d'ouvrir le fichier.";
    }
}

header("Location:./index.php");

?>