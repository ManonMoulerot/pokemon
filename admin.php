<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <style>
        .bg-beige {
            /* background-color: rgb(253, 255, 230); */
            background-color: red;
        }

        .custom-select {
            width: 15%;
        }

        .w60 .custom-select {
            width: 60%;
        }

        .w25 {
            width: 25% !important;
        }
    </style>

</head>

<body>



<?php   
include("header.php")
?>

    <section class="container-fluid bg-beige pb-5">
        <div class="container mb-5">
            <p class="text-center font-weight-bolder pt-5"></p>
            <div class="bg-white py-4">
                <p class="text-center pt-5 ">Ajouter un pokémon:</p>
                <form action="" method="post">
                    <div class=" row justify-content-center pt-3 pb-5">
                        <select class="browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                            <option value="">françois</option>
                        </select>
                        <button type="button" class="btn btn-outline-default waves-effect ">Ajouter</button>
                    </div>

                </form>

                <p class="text-center pt-5 font-weight-bold">Ajouter les forces et les faiblesses d'un type:</p>
                <p class="text-center pt-5">Sélectionner le type à modifier:</p>

                <div class="ml-0 my-2 my-lg-0 row justify-content-center pt-3 pb-5 container">
                    <select class="my-2 my-lg-0 col-12 col-xs-12 col-md-5 col-lg-2 browser-default custom-select"
                        name="" id="">
                        <option value="">françois++</option>
                    </select>

                </div>

                <p class="text-center pt-5">Ajouter les statistiques d'attaque contre tous les types:</p>


                <div class="row mt-5 w60">

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class="justify-content-center browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class="justify-content-center browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class="justify-content-center browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class="justify-content-center browser-default custom-select" name="" id="">
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class=" browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                        </select>
                    </div>

                    <div class="col-lg-3 my-2 row justify-content-center">
                        <select class="browser-default custom-select" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>
                        </select>
                    </div>

                    <div class="col-lg-6 my-2 row justify-content-center ">
                        <select class=" browser-default custom-select w25" name="" id="">
                            <option value="">françois</option>
                        </select>
                    </div>

                    <div class="col-lg-6 my-2 row justify-content-center">
                        <select class="browser-default custom-select w25" name="" id="">
                            <option value="">eau</option>
                            <option value="">feu</option>

                        </select>
                    </div>


                    <p class="text-center col-12 pt-5">Ajouter les statistiques de défense contre tous les types:</p>


                    <div class="row mt-5 w60">

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class="justify-content-center browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class="justify-content-center browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class="justify-content-center browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class="justify-content-center browser-default custom-select" name="" id="">
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class=" browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                            </select>
                        </div>

                        <div class="col-lg-3 my-2 row justify-content-center">
                            <select class="browser-default custom-select" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>
                            </select>
                        </div>

                        <div class="col-lg-6 my-2 row justify-content-center ">
                            <select class=" browser-default custom-select w25" name="" id="">
                                <option value="">françois</option>
                            </select>
                        </div>

                        <div class="col-lg-6 my-2 row justify-content-center">
                            <select class="browser-default custom-select w25" name="" id="">
                                <option value="">eau</option>
                                <option value="">feu</option>

                            </select>
                        </div>





                    </div>





                    <div class="col-12 mt-5">

                        <div class="row justify-content-center">
                            <button type="button" class="btn btn-outline-default waves-effect">Ajouter</button>
                        </div>
                        </form>












                    </div>
    </section>


    <?php   
include("footer.php")
?>

</body>

</html>