<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/profile.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>PROFILE</h1>
        <div class="profile-container">

            <div class="profile">
               <form action="">

                <label for="">FULL NAME</label><br>
                <input type="text"><br>

                <label for="">EMAIL</label><br>
                <input type="email" name="" id=""><br>

                <label for="">USERNAME</label><br>
                <input type="text" name="" id=""><br>

                <label for="">PASSWORD</label><br>
                <input type="password" name="" id=""><br>

                <div class="submit">
                    <button onclick="myFunction()">SAVE</button>
                </div>

               </form>
            </div>
        </div>
    </main>

    <script>
            function myFunction() {
                let text = "SAVE CHANGES?";
                if (confirm(text) == true) {
                    // text = "You pressed OK!";
                } else {
                    // text = "You canceled!";
                }

            }
        </script>
</body>

</html>