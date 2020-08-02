<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Form With AJAX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        
        .form-success{
            color: green;
        }

        .form-error{
            color:red;
        }

        .form-message{
            font-family:arial;
            font-size: 16px;
            font-weight: 600;
            text-align:center;
        }

        .input-error{
            box-shadow: 0 0 5px red;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("form").submit(function(event){ 
                event.preventDefault();
                var name = $("#validation-name").val();
                var email = $("#validation-email").val();
                var gender = $("#validation-gender").val();
                var message = $("#validation-message").val();
                var submit = $("#validation-submit").val();
                $(".form-message").load("validation.php",{ 
                    name: name, 
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                }); 
            });
        });
    </script>


</head>
<body class="bg-dark">

<div class="jumbotron jumbotron-fluid bg-primary text-white text-center">
  <div class="container">
    <h1 class="display-4">Form Processing with AJAX</h1>
    <p class="lead">In this project I used HTML, CSS, JavaScript, JQuery, AJAX, Bootstrap4 and PHP.</p>
  </div>
</div>

<div class="col-md-12">
    <div class="row d-flex justify-content-center">

        <div class="col-md-6 border bg-white mb-4 " style="border-radius: 15px;">
            <form action="validation.php" method="post">
            <h2 class="font-weight-bold text-center mt-3 ">Complete the form </h2>
                <input type="text" id="validation-name" class="form-control mt-3" name="name" placeholder="Enter your Full Name">
                <br>
                <input type="text" id="validation-email" class="form-control" name="email" placeholder="Enter your E-mail">
                <br>
                <select class="form-control"  id="validation-gender" name="gender" id="">
                    <option>(select your gender)</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <br>
                <textarea name="message"  id="validation-message" class="form-control"  placeholder="Write your message" id="" cols="30" rows="8"></textarea>
                <br>
                <button type="submit" id="validation-submit" class="btn btn-danger col-md-12" name="submit">Send e-mail</button>
                <p class="form-message mt-2"></p>
            </form>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid bg-primary text-white col-md-12 mb-0" >
    <p class="lead text-center">&copy; Created by Basturescu Andrei. All rights reserved.</p>
</div>

  </body>
</body>
</html>