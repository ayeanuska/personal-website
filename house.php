<!DOCTYPE html>
<html lang="en">
<head>
   
    <title> My House </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>

    </style>
</head>
<body>

    <div id ="nav">
        <img src="assets/image/logo.jpeg" alt="anuska's logo">
        <div class="list">
            <a href="index.html"> Home </a>&nbsp;
            <a href="mystudy.html">My Study</a>&nbsp;
            <a href="myhobbies.html">My Hobbies</a>&nbsp;
            <a href="mymusic.html">My Music</a>&nbsp;
        </div>
    </div>

    <section id="house">
        <h1 class="page-title"> My House</h1>
        <h3>Rooms in My House:</h3>
            <?php
            $house = array(
                "Living Room"=>1,
                "Kitchen"=> 1,
                "Bedroom"=>2,
                "Bathroom"=>2,
                "address"=>"Hornsby"
                );
            ?>
        <table>
            <tr>
                <th>Property</th>
                <th> value </th>
            </tr>
            <?php
                foreach ($house as $property => $value){
                    echo "<tr>";
                    echo "<td>$property</td>";
                    echo "<td>$value</td>";
                    echo  "</tr>";
                }
                ?>
        </table>
    </section>


    <footer> 
        <h1> Get in touch with me</h1>
        <a href ="mailto:ayeanuska@gmail.com">Email</a>
        <a href ="https://www.linkedin.com/in/anuska-shrestha-065571287/overlay/about-this-profile/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BOZXDqWpVRwuoRPu1yStgkQ%3D%3D">Linkedin</a> 
        <p> <a href="#"> Go Back to the top </a></p>
    </footer>
 

</body>
</html>

