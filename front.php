
<!--In this project we will design a travel website on which we will create a form and ask for details.
Those details will be entered into a database for which we will use PHP code.
Also, we will using CSS for styling our website.
Note: For smooth and easy front end development initially use extension as html and later change to php-->

<!--write ! hit enter-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>

    <!--Here we are linking the CSS file to our index or front file-->
    <!--Simply write link and choose link css hit enter. write css file name]
        here it is styling.css
        Note: we link css file in head only-->
    <link rel="stylesheet" href="styling.css">
</head>

<body>
    <!--Save the desired image in the same folder as abrarmir.
        rename image with jpg ext.
        for inserting image in the background of the page write img hit enter.
         src as image name.ext.
        We write a class for styling that particular element in the css, like here class as bg-->
    <img class="bg"src="cuk.jpg" alt="Central University of Kashmir">

    <!--Create a div in the page as container.
        Write div.container hit enter.-->
    <div class="container">
        
        <h1> Welcome to Central University of Kashmir: London trip form</h1>
        <p>Enter your details to confirm your participation 
            in the trip:</p>

         <?php
           /*if($insert==true){
            echo"<p class='SubmittingMsg'> Thanks for submitting the 
                form. </p>";
            }*/
         ?>

        <!--Creating a form.
            Write form and choose post
            action ="redirect file because we were getting entries in db everytime we refresed page.
            In order to solve that we wrote db code on redirect file and form other code here. This method solved our 
            above mentioned problem.-->

         <form action="redirect.php" method="post">

            <!--Write input:text hit enter. Add placeholder-->
            <input type="text" name="name" id="name" placeholder=
            "Enter your name">
            <input type="text" name="age" id="age" placeholder=
            "Enter your age">
            <input type="text" name="gender" id="gender" placeholder=
            "Enter your gender">
            <!--input:email-->
            <input type="email" name="email" id="email" placeholder=
            "Enter your email">
            <!--input:phone-->
            <input type="phone" name="phone" id="phone" placeholder=
            "Enter your phone number">

            <!--write textarea and hit enter and id as "other" name (remember this id as "other"-->
            <textarea name="other" id="other" cols="30" rows="10" 
             placeholder="Enter any other information here"></textarea>

            <!--creating a button for submitting
                Write button and choose submit
                Class as "btn" for styling in css-->
            <button class="btn" type="submit">Submit</button>

        
        </form>

    </div>

    <script src="index.js">
       
    </script>
</body>
</html>



