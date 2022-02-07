<html>
<head>
    <title>form</title>
</head>
<body>
<form >
    <label>Name:</label><input type ="text" placeholder="Name" required minlength="10" maxlength="20" ><br>
    <label>Email:</label><input type="email" placeholder="Email" required><br>
    <label>Phone Number:</label><input type="tel" placeholder="Phone Number" required value="+91" max="13" min="13" ><br>
    <label>Address:</label> <input type="text"placeholder="Address" required >
    <select>
        <option>Select State</option>
        <option>Hassan</option>
        <option>Blore</option>
        <option></option>
        <option></option>
    </select><br>
    <select required>
        <option>Select city</option>
        <option>Hassan</option>
        <option>Blore</option>
        <option></option>
        <option></option>
    </select><br>
    <input type="submit" value="submit">
</form>

</body>
</html>
<?php
$name=$_POST['uname'];
$email=$_POST['uemail'];



//echo $name;
$connection = new  mysqli("localhost", "i95dev", "i95dev" , "govind");





# if condition will displays if the connection not gets established
if ($connection->connect_error) {
    echo("Database connection failed: ");
}
# else block will displays if the connection gets established
else {
    echo "connection  established";
    echo "<br>";
    $query = ' CREATE TABLE people2(
    uname varchar(255),
    uemail varchar(255)
   
)';
    if ($connection->query($query)) {
        echo "table created";
    } else {
        echo " table not created";
    }
    echo "<br>";



    $insertinto = 'insert into training(uname , uemail) values("'.$name.'","'.$email.'")';
    if ($connection->query($insertinto)){
        echo "the valuee inserted into the table";
    }
    else {
        echo "data not inserted";
    }





}

?>
