<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayObject</title>
</head>
<body>
    <h1>Use of ArrayObject in php</h1>

    <?php 
        include 'arrayOfData.php';

        $person1 = new DataOfArrayObject();   
        $person1->Name = 'Milon Hasan'; 
        $person1->Gender = 'Male';
        $person1->Age = '23';
        $person1->Religion = 'Islam'; 
        
        echo $person1->displayAsTable();
        echo "<br>";

        $person2 = new DataOfArrayObject();    
        $person2->Name = 'Nahid Hasan'; 
        $person2->Gender = 'Male';
        $person2->Age = '25';
        $person2->Religion = 'Islam'; 
        
        echo $person2->displayAsTable();
    ?>
</body>
</html>