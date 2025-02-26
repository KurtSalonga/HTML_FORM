<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="action.php" method="POST">
    <table>
        <tr>
            <td> Name: </td>
            <td> <input type="text" name="name"> </td>
        </tr>
        <tr>
            <td> Gender: </td>
            <td>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
            </td>
        </tr>
        <tr>
            <td> Country: </td>
            <td>
                <select name="country">
                    <option value="PH">Philippines</option>
                    <option value="AUS">Australia</option>
                    <option value="US">United States</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Save">
            </td>
        </tr>
    </table>
</form>