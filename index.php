<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <!--Header Text-->
    <h1>Forms</h1>

<!--PHP-->
    <?php echo "==> Text from PHP"; ?>
    <?php echo "<h3>==> This is h3 from PHP</h3>"; ?>

    <?php
        $someText = "Website: ";
        echo $someText;
    ?>

    <a href="/about.php">About</a>

    <br>
    <br>

    <?php
    $t=time();
    echo($t . "<br>");
    echo(date("Y-m-d",$t));
    ?> 

    


    <form action="" method="get">
        <!--Input Field-->
        <label for="title">Title</label>
        <br>
        <input required type="text" id="title" name="title" placeholder="Enter text...">

        <br>
        <br>

        <!--Input Box that you can also resize-->
        <label for="content">Content</label>
        <br>
        <textarea disabled name="content" id="content" cols="30" rows="5"></textarea>
        <br>
        <br>

        <!--Radio Buttons-->
            <input
                type="radio"
                id="carrot"
                name="vegetables"
                value="carrot"
                checked
                > 
            <label for="carrot">Carrot</label>
        
            <input
                type="radio"
                id="lettuce"
                name="vegetables"
                value="lettuce"                > 
            <label for="lettuce">Lettuce</label>

        <br>
        <br>
        
        <!--Select Dropdown (Cars List)-->
            <label for="cars-list">Which Car do you want to add:</label>

            <select name="cars" id="cars-list">
                <option value="">--Please choose an option--</option>
                <option value="bmw">BMW</option>
                <option value="mercedes">MERCEDES</option>
                <option value="audi">AUDI</option>
                <option value="subaru">SUBARU</option>
            </select>

        <br>
        <br>

        <!--Submit Button-->
        <input type="submit" value="Send">
    </form>


    <div data-color="red">
        
    </div>
</body>
</html>