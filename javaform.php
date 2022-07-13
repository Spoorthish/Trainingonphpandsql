<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="" href="form.css">
</head>
<body>

<h1 align="center" > Form </h1>
<form>
    <label for="">Name:</label><input id="name" type="text" name="" value="" required placeholder="Enter your name"><br><br>
    <label for="">Email:</label><input id="email"type="email" name="" value="" required placeholder="Enter your email id"><br><br>
    <label for="">Phone Number:</label><input id="phone" type="tel" name="" value="+91" maxlenghth="13" minlength="13" required placeholder="Enter your Phone number"><br><br>
    <label for="">Address:</label><input id="address" type="text" name="" value="" required placeholder="Enter your name"><br><br>
    <select>
        <option>Select your state</option>
        <option value="Karnataka"></option>
        <option value="Tamil nadu"></option>
        <option value="Telangana"></option>
        <option value="Kerala"></option>
    </select><br><br>
    <select>
        <option>Select your City</option>
        <option value="Hassan"></option>
        <option value="Mysuru"></option>
        <option value="Bangalore"></option>
        <option value="Hubli"></option>
    </select><br><br>
    <button type="" onclick="fun()">submit</button>
</form>
<script>
    var a = document.getElementById("name");
    var name=a.value;
    var b= document.getElementById("email");
    var email=b.value
    var c= document.getElementById("phone");
    var phone=c.value
    var d= document.getElementById("address");
    var address=d.value
    function fun(){
        if(name == "  "){
           alert("enter your name")
           }

           if(email== ""){
           alert("enter your email")
           }

           if(phone== ""){
           alert("enter your phone number")
           }

           if(address== ""){
           alert("enter your address")
           }

    }
</script>
</body>
</html>