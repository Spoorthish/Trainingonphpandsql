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