<?php

    require_once ('../DB/database.php');

?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body>
            <div>
                <div class="w-full min-h-[90vh] bg-FormBg bg-cover bg-center flex justify-center items-center bg-no-repeat">
                    <fieldset class="flex justify-center items-center w-4/5">
                        <div class="w-[90%] lg:w-[50%]" >
                            <p class="bg-yellow-100 mt-5 rounded text-center text-xl font-bold py-2 text-green-900 ">Ajouter Livre</p>
                            <form class="flex flex-col justify-center pl-10 bg-green-700 h-96 rounded-md shadow-xl" action="../controllers/ajouterLivre.php" method="post">
                                <label class="text-yellow-100">Titre :</label>
                                <input class="w-[80%] bg-yellow-50 rounded focus:outline-none focus:border-transparent" type="text" name="titre"><br>
                                <label class="text-yellow-100">Auteur :</label>
                                <input class="w-[80%] bg-yellow-50 rounded focus:outline-none focus:border-transparent" type="text" name="auteur"><br>
                                <label class="text-yellow-100">Categorie :</label>
                                <input class="w-[80%] bg-yellow-50 rounded focus:outline-none focus:border-transparent" type="text" name="categorie"><br>
                                <label class="text-yellow-100">Date d'ajout :</label>
                                <input class="w-[80%] bg-yellow-50 rounded focus:outline-none focus:border-transparent" type="date" name="date_ajout"><br>
                                <label class="text-yellow-100">Disponible :</label>
                                <input class="w-[80%] bg-yellow-50 rounded focus:outline-none focus:border-transparent" type="text" name="disponible"><br>
                                <button class="bg-yellow-100 w-24 py-1 rounded text-sm lg:text-[15px]">Ajouter</button>
                            </form>
                        </div>         
                    </fieldset>
                </div>
            </div>
        </body>
        </html>
