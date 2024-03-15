<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>

<body>

<?php include 'header.php'; ?>

    <main>
        <div class="form-container">
            <div class="form">
                <h2>CREATE NEW NEWS</h2>
                <form action="">
                    <label for="">IMAGE</label>
                    <input type="file"><br>

                    <label for="">TITLE</label>
                    <input class="title" type="text"><br>

                    <label for="">DATE</label>
                    <input type="date"><br>

                    <label for="">DESCRIPTION</label>
                    <input class="desc" type="text">
                    <div class="sub">
                        <input class="submit" type="submit">
                    </div>
                </form>
            </div>
        </div>

        <div class="display">
            <div class="news-container">



                <div class="news">
                    <div class="del">
                        <input class="editbtn fa" type="button" name="" id="" value="&#xf044; Edit">
                        <input class="delbtn fa" type="button" name="" id="" value="&#xf1f8; Delete">
                    </div>
                    <div class="news-img">
                        <img src="../styles/images/1.png" alt="">
                    </div>
                    <div class="details">

                        <h1>WELCOME TO THE SISTERHOOD GIRLS</h1>
                        <H3>[November 24, 2023]</H3> <br>
                        <p>Gathering together to commemorate the initiation of fresh chapters and the reminiscence of
                            meaningful moments during the Girl Scout Investiture ceremony. This is an occasion where the
                            values of bravery, self-assurance, and integrity come together to shape a profound sense of
                            unity. The event serves as a testament to the enduring spirit of the Girl Scouts, fostering
                            a
                            space where young minds embark on exciting journeys filled with exploration and growth.
                            Through
                            this celebration, we honor the past while embracing the excitement of the unknown, carrying
                            forward the legacy of Girl Scouts into promising new adventures ahead.</p>
                    </div>

                </div>



                <div class="news">
                    <div class="del">
                        <input class="editbtn fa" type="button" name="" id="" value="&#xf044; Edit">
                        <input class="delbtn fa" type="button" name="" id="" value="&#xf1f8; Delete">

                    </div>
                    <div class="news-img">
                        <img src="../styles/images/2.png" alt="">
                    </div>
                    <div class="details">
                        <h1>CHAMPION ATA TO</h1>
                        <H3>[November 24, 2023]</H3> <br>
                        <p>Gathering together to commemorate the initiation of fresh chapters and the reminiscence of
                            meaningful moments during the Girl Scout Investiture ceremony. This is an occasion where the
                            values of bravery, self-assurance, and integrity come together to shape a profound sense of
                            unity. The event serves as a testament to the enduring spirit of the Girl Scouts, fostering
                            a
                            space where young minds embark on exciting journeys filled with exploration and growth.
                            Through
                            this celebration, we honor the past while embracing the excitement of the unknown, carrying
                            forward the legacy of Girl Scouts into promising new adventures ahead.</p>
                    </div>

                </div>



            </div>
        </div>
    </main>

</body>

</html>