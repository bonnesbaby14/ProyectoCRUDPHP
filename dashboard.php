<?php session_start();
if (!isset($_SESSION["ID"])) {
    header('Location: login.php');}
// require "consultaClients.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard
    </title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Alata|Carter+One|PT+Mono&display=swap");

        body {
            margin: 0;
            font-family: Alata, sans-serif;
        }

        #welcome-section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff url("https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            background-size: cover;
            animation: fade-in 2s linear 0.5s;
            animation-fill-mode: forwards;
            opacity: 0;
        }

        #title {
            font-size: 100px;
            opacity: 0;
            animation: angel-fall 2s ease-out 2s 1, fade-in 2s linear 2s;
            animation-fill-mode: forwards;
        }

        #subtitle {
            font-size: 20px;
        }

        #artist {
            opacity: 0;
            animation: fade-in 2s 4s;
            animation-fill-mode: forwards;
        }

        #artist:hover {
            font-family: "Carter One", fantasy;
        }

        #webdev {
            opacity: 0;
            animation: fade-in 2s 5.75s;
            animation-fill-mode: forwards;
        }

        #webdev:hover {
            font-family: "PT Mono", monospace;
            font-weight: 600;
        }

        #bothworlds {
            opacity: 0;
            animation: fade-in 2s 7.5s;
            animation-fill-mode: forwards;
        }

        #navbar {
            display: flex;
            justify-content: space-around;
            position: fixed;
            top: 0;
            width: 100%;
            padding: 2%;
            z-index: 4;
            background-color: #fff;
            text-align: center;
            box-shadow: 0 2px 5px #0003;
        }

        .nav-link {
            text-decoration: none;
            color: #000;
        }

        #card {
            text-align: center;
        }

        #projects {
            height: auto;
            width: 100%;
            padding: 3% 0px;
            display: grid;
            grid-template-columns: 300px;
            grid-template-rows: auto 200px 200px 200px 200px;
            grid-template-areas:
                "title"
                "tribute"
                "survey"
                "landpage"
                "techdoc";
            justify-content: center;
            justify-items: center;
            background-image: linear-gradient(#f1ffff, #f0f8ff);
        }

        @media (min-width: 600px) {
            #projects {
                padding: 10% 0;
                grid-template-columns: 30% 30%;
                grid-template-rows: 20% 20%;
                grid-template-areas:
                    "tribute survey"
                    "title title"
                    "landpage techdoc";
                grid-gap: 0 30%;
                justify-content: center;
                justify-items: center;
            }

            #projects-title {
                font-size: 3em;
            }
        }

        #projects a {
            text-decoration: none;
            background-color: #fffa;
            color: #000;
            width: 100%;
            text-align: center;
            font-size: 2em;
        }

        #projects-title {
            grid-area: title;
            text-align: center;
            padding: 3%;
        }

        .project-tile {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            width: 300px;
            background-color: #ccc;
            box-shadow: 0 2px 5px #777;
        }

        .project-tile:hover {
            animation: hover 0.5s ease-in-out 0.1s infinite alternate;
            animation-fill-mode: forwards;
        }

        #tribute {
            grid-area: tribute;
            background: url("https://previews.dropbox.com/p/thumb/AArvQ-kR0kVRUqfa7OFhpMz0jKjcaMkpPDkboKuv4fcJ8BoAGLb3dz5ps-dJubwqvikJ-_w1v1sgerXjhhYJZyZFTOwe5CN_EOkmqGaNjBZSp1Uc_G8nDN-VYosJOT2unYZRLlnWDD1yqsT_fbSG1K23ObrA3eQFu55bw3az8XSVz_e_NoRcJ_AyEToi5_ko_cYGo6bo2dTeRDL43TpycOENkUDkB8nWGoVWuTYtMqXISnIzUUcoD_mwBE5i92ayaQ5xOVg_LtIUrUVFl9wU58ytSj6xLcEAu8BsYwyodeRNW1BkiWCHmEC7-mmeBeHEGSSev2GWQwbuxnCAtebfL1zckAzhy1Uf4Hdg4P25qS6Y1Q/p.jpeg?size=1600x1200&size_mode=3");
            background-size: cover;
            background-position: center center;
        }

        #survey {
            grid-area: survey;
            background: url("https://previews.dropbox.com/p/thumb/AArLXWqN31XiMpNhJmINILHRfepYRONNdZdzNtZoLFa2_FmP5BOBIpgzJGN_Lnhfsx_byKjgJSR_5LOPEhqqq7IQivu8ZxKjpFug_l82FclF47dIEjXoWv1WHwuzdfG2cPvnheN6dtEnnDW9DV_iAkCrvLKJ0Bgt2IMo9VYwsHAy42DhX76ORxxKxY6_5ESVFzGdUrg1uiSOAuFX7pqfPyNtxhq4bUt-fw4C2sp-BPG26G0_G-QYd84HMSrb2NARbYBXYNWZgn3zJjUYn_y9JY7qSRSZTe-nkrE6KBLlASGuW9IaXguJ5SqTkWGBv5svr0W3aJxXS4Sb_hRLexMNzw7_/p.jpeg?fv_content=true&size_mode=5");
            background-size: cover;
            background-position: center center;
        }

        #landpage {
            grid-area: landpage;
            background: url("https://previews.dropbox.com/p/thumb/AApqPxz3kJ1bNpNdgxDMkIQgN6UeUcSAONlx4-HsZq2h1TM988RGRd4aZobnMUjg_IJeYtZxthIkRAfGSlcRJRn3hqmDN6VyFHrgUdQo-uFGDJjY4QOcRQ-AkKvhCGAlw5CQI29I6xy4x6lu7ss32jW1AHMphlmCUE8RxEQL3Zd5GKANYQqnWoP3wuQmba1BOaSwoNkm1xsAluReLwPJF8zuhL1Hd5N3LQi4WKcK-2N_vH3FAnGr4USwe3CeMbMBACSiT9xVAzd01jX2O9qZU5jf9I0MmnGfd5nhqJ3OWyAJM2If-dfLqFEiYCNWuo1ndhxz70uOoyjBJpvDgcFuH0n7/p.png?fv_content=true&size_mode=5");
            background-size: cover;
            background-position: center center;
        }

        #techdoc {
            grid-area: techdoc;
            background: url("https://previews.dropbox.com/p/thumb/AAq0uZZ0fUZqLZgrvqy-VivbQJYfrVJ58Y4utAhxejwmsNUATwHA91ZX-iBVMI2rhFOMMHqQWDyhxj2JSyWkr2PlHRw7M0d6y9TTxW46_zQs-BVo79sKgxeGwe4JLDgam3vnIuBCBVGMImo1EsHcFV5T6pzCnNigGezN0iN63uA6CmdZjAFfSosks5Wg3AZPo1LFsw-BeyPUYT_k_sjcrUR58wV1qIdhBDDp_VPVxmT3hpohJbGIEHhEuzKOZGtUJa9guEHjB0-4RBHYYmcKcFxLxbPxHQW8E5V4wwziVvygr09bIA3cHevmSGB4yvFlYfWN7-lftjFTBpFZkhlbbAz2/p.png?fv_content=true&size_mode=5");
            background-size: cover;
            background-position: center center;
        }

        #contact {
            height: 100vh;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            background: url("https://cdn-media-1.freecodecamp.org/images/1*HKru9urHK6ywE91ZZhPbig.jpeg");
            background-size: cover;
        }

        #links-container {
            width: 200px;
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
            align-items: center;
            align-content: space-around;
        }

        .logo-link {
            width: 90%;
        }

        .logo-link:hover {
            animation: rise 0.2s;
            animation-fill-mode: forwards;
        }

        @keyframes angel-fall {
            0% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes rise {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.05);
            }
        }

        @keyframes hover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

<body>


    <nav id="navbar">
        <a href="dashboard.php" class="nav-link">Inicio</a>
        <a href="clientes.php" class="nav-link">Clientes</a>
        <a href="tickets.php" class="nav-link">Tickets</a>
        <a href="salir.php" class="nav-link">Salir</a>
    </nav>
    <section id="welcome-section">
        <div id="card">
            <?php
            if (!isset($_SESSION["ID"])) {
                header('Location: login.php');
            } else {
                echo "<h1 id='title'>Bienvenido " . $_SESSION['Nombre'] . " </h1>";
            }
            ?>


        </div>
    </section>


</body>

</html>