<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<form method="get" action="GET_data.php">
    <h1><Form>All nput Type</Form></h1><br><br>

    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label><br>
    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label><br><br>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Car">
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Boat">
    <label for="vehicle3"> I have a boat</label><br><br>

    <label for="favcolor">Select your favorite color:</label>
    <input type="color" id="favcolor" name="favcolor"><br><br>

    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday"><br><br>

    <label for="birthdaytime">Birthday (date and time):</label>
    <input type="datetime-local" id="birthdaytime" name="birthdaytime"><br><br>

    <input type="image" src="img_submit.gif" width="48" height="48"><br><br>

    <label for="myfile">Select a file:</label>
    <input type="file" id="myfile" name="myfile"><br><br>

    <label for="value">hidden:</label>
    <input type="hidden" id="custId" name="custId" value="1234"><br><br>

    <label for="bdaymonth">Birthday (month and year):</label>
    <input type="month" id="bdaymonth" name="bdaymonth"><br><br>

    <label for="quantity">Quantity (between 1 and 5):</label>
    <input type="number" id="quantity" name="quantity" min="1" max="5"><br><br>

    <label for="vol">Volume (between 0 and 50):</label>
    <input type="range" id="vol" name="vol" min="0" max="50"><br><br>

    <label for="gsearch">Search Google:</label>
    <input type="search" id="gsearch" name="gsearch"><br><br>

    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>

    <label for="appt">Select a time:</label>
    <input type="time" id="appt" name="appt"><br><br>

    <label for="homepage">Add your homepage:</label>
    <input type="url" id="homepage" name="homepage"><br><br>

    <label for="week">Select a week:</label>
    <input type="week" id="week" name="week"><br><br>

    <label for="password">password:</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="button" onclick="alert('Hello World!')" value="Click Me!"><br><br>

    <input type="submit" value="Submit"><br><br>

    <input type="reset" value="Reset"><br><br>





</form>
</body>
</html>