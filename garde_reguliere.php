<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Garde reguliere</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="body.css">
        <link href="bootstrap-responsive.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        $login = $_COOKIE['login_parent'];
        ?>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="brand">PARENT <?php echo$_COOKIE['login_parent']; ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li>
                                <a href="home.html">HOME</a><p/>
                            </li>
                            <li>
                                <a href='evaluer.php'>EVALUER UN NOUNOU</a><p/>
                            </li>
                            <li>
                                <a href='garde_langue.php'>GARDE D'ENFANT EN LANGUES ETRANGERES</a><p/>
                            </li>
                            <li class="active">
                                <a href='garde_reguliere.php'>GARDE D'ENFANT REGULIERE</a><p/>
                            </li>
                            <li >
                                <a href='garde_ponctuelle.php'>GARDE PONCTUELLE</a><p/> 
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <form method="POST" action="garde_reguliere_action.php">
            <center><h1>Garde d'enfant régulière</h1></center>
             <br/>
             <div class="container-fluid">
                 <div class="hero-unit">
            <center><h5>Date début</h5>
            <input type='date' name='ddebut' value="2018-06-19"/><p/>
            <h5>Date fin </h5> 
            <input type='date' name='dfin' value="2018-12-31"/><p/></h5>
            <h5>Jour</h5>
            <select name="jour">
                <option value="lundi">lundi</option>
                <option value="mardi">mardi</option>
                <option value="mercredi">mercredi</option>
                <option value="jeudi">jeudi</option>
                <option value="vendredi">vendredi</option>
                <option value="samedi">samedi</option>
                <option value="dimanche">dimanche</option>
            </select><p/>
            <h5>Heure de début</h5>
            <select name="hdebut">
                <option value="9">9h</option>
                <option value="10">10h</option>
                <option value="11">11h</option>
                <option value="12">12h</option>
                <option value="13">13h</option>
                <option value="14">14h</option>
                <option value="15">15h</option>
                <option value="16">16h</option>
                <option value="17">17h</option>
                <option value="18">18h</option>
            </select><p/>
            <h5>Heure de fin</h5>
            <select name="hfin">
                <option value="10">10h</option>
                <option value="11">11h</option>
                <option value="12">12h</option>
                <option value="13">13h</option>
                <option value="14">14h</option>
                <option value="15">15h</option>
                <option value="16">16h</option>
                <option value="17">17h</option>
                <option value="18">18h</option>
                <option value="18">19h</option>
            </select><p/><br/>
            <input type="submit" value="Valider" class='btn btn-success'/>      </center>
            </div></div>
        </form>
    </body>
</html>
