<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="" href="form.css">
    <script>
        function fun() {
            var name = document.forms["form"]["fname"].value;
            var email = document.forms["form"]["femail"].value;
            var phone = document.forms["form"]["fphone"].value;
            var address = document.forms["form"]["faddress"].value;
            if (name == "") {
                alert("enter your fname")
                return false;
            }
            else if (email == "") {
                alert("enter your email")
                return false;
            }
            else if (phone == "") {
                alert("enter your phone number")
                return false;
            }
            else if (address == ""){
                alert("enter your address");
                return false;
            }
        }
    </script>
</head>

<body>

<h1 align="center"> Form </h1>
<form action=" " name="form" onsubmit= "return fun()">
    <label for="">Name:</label><input id="name" type="text" name="fname" value=""
                                      placeholder="Enter your name"><br><br>
    <label for="">Email:</label><input id="email" type="email" name="femail" value=""
                                       placeholder="Enter your email id"><br><br>
    <label for="">Phone Number:</label><input id="phone" type="tel" name="fphone" value="+91" maxlenghth="13"
                                              minlength="13"  placeholder="Enter your Phone number"><br><br>
    <label for="">Address:</label><input id="address" type="text" name="faddress" value=""
                                         placeholder="Enter your name"><br><br>
    <select>
        <option>Select your state</option>
        <option>Kerala</option>
        <option>Andhra pradesh</option>
        <option>Karnataka</option>
        <option>Goa</option>
    </select><br><br>
    <select>
        <option>Select your City</option>
        <option>Hassan</option>
        <option>Bangalore</option>
        <option>Bidar</option>
        <option>Ballari</option>
    </select><br><br>
    <button type="">submit</button>
</form>
</body>

</html>