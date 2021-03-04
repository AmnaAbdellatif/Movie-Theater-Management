@extends("layouts.app")
@section("header")
    <title>About us</title>
@endsection
@section("content")


       <div class="col-md-6 contact-left">
           <div>
           <label for="name">Nom Etudiante :</label>
           <input type="text" id="name" name="user_name" value="Amna Abdellatif" disabled>


               <label for="name">Cin :</label>
               <input type="text" id="name" name="user_name" value="06989172" disabled></div>
       </br>
       </br>


        <p style="color: black" >
           <B> Projet realisé en monome ayant comme
            Idée qu'etant amatrice de cinema et des films.<br>

            J'ai voulu realiser une application web pour
            la gestion d'une salle de cinema qui a le nom "cinemaXXII"
           à l'aide framework Laravel et base de donnée MySQL.
           Le choix de Laravel est pour maintes raisons parmi eux:<br>
           1/ les bibliothèques pré-installées qui sont orientées objet sont l’une des principales raisons de la demande croissante de Laravel par rapport à d’autres frameworks.
            Contrairement à d’autres frameworks, il y a plus de 20 bibliothèques pré-installées dans Laravel.<br>
            2/La mise à jour de base de données est un processus automatisé. Les tables de base de données peuvent être mises à jour avec des données par défaut qui peuvent être utilisées pour la configuration préliminaire de l’application ou pour le test de l’application.
<br>
           3/l'outil Migration: qui est une façon de gerer la gestion des données via et dans la base de données à partir de framework
           comme la creation d'une table dans la base.
           </B>
       </div>
    </div>
@endsection
