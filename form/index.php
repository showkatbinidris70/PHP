<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>

<body>
    <?php
    $srt = 'Bangladesh';
    print_r($srt);
    ?>
    <form action="welcome.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" name="fname">
        <label for="lname">Last Name</label>
        <input type="text" name="lname">
        <button type="submit">Submit</button>
    </form>

    <!-- <h2>Your first name is : <?php echo $_POST['fname']; ?></h2>
    <h2>Your last name is : <?php echo $_POST['lname']; ?></h2> -->
    <script>
        const arr = [{
            'name': 'Showkat',
            'age': 29
        }, {
            'name': 'Shohag',
            'age': 30
        }, {
            'name': 'Alamin',
            'age': 22
        }];
        for (let x in arr) {
            console.log(arr[x].name);
        }
        console.log("For of start");
        for (let x of arr) {
            console.log(x.name, x.age);
        }
        console.log("Foreach  start");
        arr.foreach(function(i, item) {
            console.log(i, item);
        });
    </script>
</body>

</html>