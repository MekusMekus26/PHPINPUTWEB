<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="animation.css">
<Title>Group ng mga pogi</Title>
</head>
<body>
    <header>
        <h1 id="welc">Welcome to Perez's group website</h1>
        
    </header>
     

    <main>
    <form method="post">
            <p id="formp">
        first name:<input class="Zaddy" type="text" name="fname" method="get" action='page2.php' size="50"><br>
        Last name:<input class="Zaddy" type="text" name="lname" method="get" action='page2.php'> <br>
        Email:<input class="Zaddy" type="text" name="email" method="get" action='page2.php'><br>
        Website:<input class="Zaddy" type="text" name="webs" method="get" action='page2.php'><br>
        
        Gender:<br>
        Male<input class="Zaddy" type="checkbox" name="male" method="get" value="Male" ><br>
        Female<input class="Zaddy" type="checkbox" name="female" method="get" value="female"><br>
        Others<input class="Zaddy" type="text" name="agee" method="get"  action='page2.php'><br>
        Comment:<input class="Zaddy" type="text" name="ageek" method="get"  action='page2.php'>
        </p>
            



             <button id="hello"  type ="submit" name="submit" value="submit">Submit</button>

        <?php
            $first=$_POST['fname'];
            $last=$_POST['lname'];
            $email=$_POST['email'];
            $webs=$_POST['webs'];
            $other=$_POST['agee'];
            $comm=$_POST["ageek"];
            $welc = "outp";
            $gender;
           if (isset($_POST["submit"])){
            if(isset ($_POST["female"]) && isset ($_POST["male"])){
                $gender="ERROR choose only one";
                }
            else if (isset($_POST["male"])){
           $gender="Male";
            }
            else  if(isset($_POST["female"])){
                $gender="Female";
            }
            else  if(!isset ($_POST["female"]) &&!isset ($_POST["male"])){
                $gender=$other;
            }

            
            echo"
            <p>Name:$first $last<br>
            Email:$email<br>
            Website:$webs<br>
            Gender:$gender<br>
            Comment:$comm</p>
            ";


           }

        ?>
        </form>
    </main>

    <footer>

    </footer>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<ul><p>Group members:</p>
        <li>Gaudencio Perez(coder)</li>
        <li>Clark Andre Celestial</li>
        <li> Curt Villanueva</li>
        <li>Isaac Palima</li>
        <li>Jouree Ezequiel Conception</li>

</ul>






</body>
</html>