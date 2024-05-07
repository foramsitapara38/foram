<?php
include_once('guest_header.php');
//echo "booking.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.7.1.slim.min.js"></script>
    <script src="jquery.validate.js"></script>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Room Booking Form</title>
<style>
    .error{
        color:red;
    }
</style>
<script>
    $(document).ready(function(){
        $.validator.addMethod("fnregex",function(value,element){
            var reg=/^[a-zA-Z]+$/;
            return reg.test(value);
        },"Fullname can contain only letters");
        $('#reg_form').validate({
            rules:{
                fn:{
                    required:true,
                    minlength:2,
                    maxlength:20,
                    fnregex:true
                },
            },
            messages:{
                fn:{
                    required:"fullname cannot be empty",
                    minLength:"name must hve minimum 2 characters",
                    maxLength:"name can have mximum 20 characters"
                }
            },
            errorPlacement:function (error,element){
                if(element.attr('name')=="fn"){
                    $('#fn_err').html(error);
                }
            }
        })
    })
</script>
<style>
    body {
            background-image: url('images/form background image/login1.jpg'); 
            background-size: cover; 
            background-position: center;
            height:100%;
            width:100%;
        
        }
    table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 50%;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        background-color: lightblue;
    }
    th {
        background-color: white;
        font-color:white;
    }
    input[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<h2 style="text-align: center;">Room Booking Form</h2>

<form action="" method="get" id="reg_form" >
    <table>
        <tr>
            <th colspan="2">Booking Details</th>
        </tr>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text"id="fn" name="fn" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="check-in">Check-in Date:</label></td>
            <td><input type="date" id="check-in" name="check-in" required></td>
        </tr>
        <tr>
            <td><label for="check-out">Check-out Date:</label></td>
            <td><input type="date" id="check-out" name="check-out" required></td>
        </tr>
        <tr>
        <td><label for="select room">select room:</label></td>
        <td>
            <select>
                <option value="option1">room 1</option>
                <option value="option2">room 2</option>
                <option value="option3">room 3</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="which room you will select?">which room you will select:</label></td>
    <td>
    <select>
            <option value="">Select Room Type</option>
            <option value="single">Single Room</option>
            <option value="double">Double Room</option>
            <option value="suite">Suite</option>
        </select>
</td>
</tr>
<tr>
        <td><label for=" Select room type">Select room type:</label></td>
    <td>
    <select>
            <option value="">Select Room Type</option>
            <option value="AC">AC</option>
            <option value="NON AC">NON AC</option>
        </select>
</td>
</tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>
<?php
include_once('footer.php');
//echo "index.php";
?>