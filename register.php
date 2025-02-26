<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER FORM</title>
</head>
<body>
    <h1>REGISTER HERE!</h1>
</body>
</html>
<form action="action_page.php" method="POST">
    <table border="1">
        <tr>
            <td> Name: </td>
            <td> <input type="Text" name="Name"> </td>
        </tr>
        <tr>
            <td> Gender: </td>
            <td>
                <input type="Radio" name="Gender" value="Male"> Male
                <input type="Radio" name="Gender" value="Female"> Female
            </td>
        </tr>
        <tr>
            <td> Country: </td>
            <td>
                <select name="Country">
                    <option value="PH">Philippines</option>
                    <option value="AUS">Australia</option>
                    <option value="US">United States</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="Submit" name="Submit" value="Submit">
            </td>
        </tr>
    </table>
</form>