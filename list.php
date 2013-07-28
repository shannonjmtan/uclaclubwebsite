<?php

session_start();

$_SESSION["page"] = "list";

include "template.php";

?>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<style type="text/css">
    .span2 {
        padding-top: 20px;
    }
    
    .success {
        background: #FFB300;
    }
    
    thead {
        background: #0073CF;
        color: white;
    }
    
</style>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Filter by Major</li>
              <li><a id="All" href="#">All Disciplines</a></li>
              <li><a id="Aerospace" href="#">Aerospace</a></li>
              <li><a id="Bio-E" href="#">Bio-E</a></li>
              <li><a id="Chemical" href="#">Chemical</a></li>
              <li><a id="Civil" href="#">Civil</a></li>
              <li><a id="Computer" href="#">Computer Science/CSE</a></li>
              <li><a id="Electrical" href="#">Electrical</a></li>
              <li><a id="Mat" href="#">Mat Sci</a></li>
              <li class="nav-header">Filter by Type</li>
              <li><a id="Community" href="#">Community Outreach</a></li>
              <li><a id="Honor" href="#">Honor Society</a></li>
              <li><a id="Professional" href="#">Professional</a></li>
              <li><a id="Project" href="#">Project</a></li>
            </ul>
          </div>
        </div>
        <div class="span10">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Club Name</th>
                        <th>Majors</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>Tau Beta Pi</th>
                        <th>All</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>American Society of Civil Engineers</th>
                        <th>Civil<br>Environmental</th>
                        <th>Professional<br>Project</th>
                    </tr>
                    <tr>
                        <th>Eta Kappa Nu</th>
                        <th>Electrical</th>
                        <th>Honor Society</th>
                    </tr>
                    <tr>
                        <th>IEEE</th>
                        <th>Electrical</th>
                        <th>Professional</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">

var searchtext = "";
var search;
    
$(".nav-list > li > a").click(function(event){
    event.preventDefault();
    var id = $(this).attr("id");
    var parent = $(this).parent();
    if (!parent.hasClass("active"))
    {
        searchtext += ":contains('"+id+"')";
        $(this).parent().addClass("active");
    }
    else
    {
        $(this).parent().removeClass("active");
        var re = new RegExp(":contains\\(\\'"+id+"\\'\\)");
        searchtext = searchtext.replace(re, "");
    }
    
    $(".success").removeClass("success");
    if (searchtext != "")
        $("tr"+searchtext).addClass("success");
});

   
</script>