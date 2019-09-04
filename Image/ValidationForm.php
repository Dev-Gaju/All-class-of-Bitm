



<!DOCTYPE html>
<html>
<head>
    <title>Validation Form</title>

    <style>
        .alert{
            color: red;
        }
    </style>
</head>
<body>
<h3 style="color: #1b6d85; margin-left: 50px;">Validation Form</h3>
<form method="post" action="ValidationForm.php" id="ValidationForm">
<table >
    <tr>
        <td>First Name</td>
        <td><input type="text"  id="firstname" ><span class="alert" id="firstNameErr"></span></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text"  id="lastName" ><span id="LaststNameErr" class="alert"></span></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" class="alert" id="email" ><span class="alert" id="emailErr"></span></td>
    </tr>
    <tr>
    <td>Gender</td>
    <td>
        <input type="radio" id="male" name="gender">Male
        <input type="radio" id="female" name="gender">Female
        <span id="geErr" class="alert"></span>
    </td>
    </tr>
    <tr>
        <td>Basic Knowledge On</td>
        <td>
            <input type="checkbox" name="php">PHP
            <input type="checkbox" name="laravel">Laravel
            <input type="checkbox" name="js">Node Js
            <input type="checkbox" name="mysql">My Sql
            <span id="skErr" class="alert"></span>

        </td>

    </tr>
    <td>Password</td>
    <td><input type="text" id="password" ><span class="alert" id="passwordErr"></span></td>
    </tr>
    <tr>
        <td>Confirm Password</td>
        <td><input type="text" id="confirm_password" ><span class="alert"  id="cPasswordErr"></span></td>
    </tr>
<tr>
    <td></td>
    <td><input type="submit"  value="Submit" name="btn"></td>
</tr>

</table>
</form>
<script src="jquery-3.4.1.js"></script>
<script src="Script.js"></script>
</body>
</html>