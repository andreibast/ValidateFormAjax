<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name']; 
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $message = $_POST['message'];

        $errorEmpty = false;
        $errorEmail = false;

        if(empty($name) || empty($email) || empty($message)){
            echo "<span class='form-error'>Fill in all the fields!</span>";
            $errorEmpty = true;
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
            echo "<span class='form-error'>Write a valid e-mail address!</span>";
            $errorEmail = true;
        }else{
            echo "<span class='form-success'>Success!</span>"; 
        }

    }else{
        echo "There was an error!";
    }  
?>


<script>
    $("#validation-name, #validation-email, #validation-message, #validation-gender").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty;?>";
    var errorEmail = "<?php echo $errorEmail;?>";

    if(errorEmpty == true){
        $("#validation-name, #validation-email, #validation-message").addClass("input-error");
    }

    if(errorEmail == true){
        $("#validation-email").addClass("input-error");
    }
    if(errorEmpty == false && errorMail == false){
         $("#validation-name, #validation-email, #validation-message").val(""); 
    }
</script>