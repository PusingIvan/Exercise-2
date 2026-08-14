<?php

$groupName = "ANONYMOUS GRP.";

$members = [
    [
        "name" => "JOHN DAVE BOMBALES",
        "image" => "img/dave.jpg",
        "age" => "********",
        "birthdate" => "********",
        "address" => "********"
    ],

    [
        "name" => "JOSHUA CABIGON",
        "image" => "img/joshua.jpg",
        "age" => "********",
        "birthdate" => "********",
        "address" => "********"
    ],

    [
        "name" => "DANILO LUCBAN",
        "image" => "img/dan.jpg",
        "age" => "********",
        "birthdate" => "********",
        "address" => "********"
    ],

    [
        "name" => "MARCO VILLANUEVA",
        "image" => "img/marco.jpg",
        "age" => "20",
        "birthdate" => "06/20/2006",
        "address" => "Cupang, Muntinlupa City"
    ],

    [
        "name" => "IVAN PUSING",
        "image" => "img/Ivan.jpg",
        "age" => "21",
        "birthdate" => "07-22-2005",
        "address" => "Cupang, Muntinlupa City"
    ],

    [
        "name" => "ZYMHONNE CASACOP",
        "image" => "img/Zymhonne.jpg",
        "age" => "20",
        "birthdate" => "06-21-2006",
        "address" => "San pedro, Laguna"
    ],

    [
        "name" => "NAME",
        "image" => "img/who.jpg",
        "age" => "********",
        "birthdate" => "********",
        "address" => "********"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php echo $groupName; ?>
    </title>

    <link
        rel="stylesheet"
        href="styles.css"
    >

</head>


<body>


    <!-- HEADER -->

    <header class="header">

        <img
            class="logo"
            src="img/anonymous.jpg"
            alt="ANONYMOUS"
        >

        <h1 class="title">
            <?php echo $groupName; ?>
        </h1>

    </header>


    <!-- TEAM PROFILES -->

    <main class="teamProfile">

        <?php foreach ($members as $member): ?>

            <div class="profile">


                <!-- PROFILE IMAGE -->

                <img
                    class="profileImage"
                    src="<?php echo $member['image']; ?>"
                    alt="<?php echo $member['name']; ?>"
                >


                <!-- NAME -->

                <h2>
                    <?php echo $member['name']; ?>
                </h2>


                <!-- PROFILE DETAILS -->

                <div class="profileDetails">

                    <p>

                        <strong >Age:</strong>
                        <?php echo $member['age']; ?>

                        <br>

                        <strong>BirthDate:</strong>
                        <?php echo $member['birthdate']; ?>

                        <br>

                        <strong>Address:</strong>
                        <?php echo $member['address']; ?>

                    </p>

                </div>


                <!-- VIEW BUTTON -->

                <button
                    class="viewBtn"
                    onclick="toggleProfile(this)"
                >
                    View Profile
                </button>


            </div>

        <?php endforeach; ?>

    </main>


    <!-- FOOTER -->

    <footer>

        <p>
            &copy;
            <span id="year"></span>
            <?php echo $groupName; ?>
        </p>

    </footer>


    <!-- JAVASCRIPT -->

    <script src="script.js"></script>

</body>

</html>