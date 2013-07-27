<?php
session_start();

$_SESSION["page"] = "tbp";

include "club.php";
?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <img class="logo" src="./pictures/logo1.png" class="img-rounded">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Club Name</th>
                        <th>Tau Beta Pi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Website</td>
                        <td><a href="http://tbp.seas.ucla.edu/">tbp.seas.ucla.edu</a></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>taubetapi@seas.ucla.edu</td>
                    </tr>
                    <tr>
                        <td>President</td>
                        <td>Grace Kim</td>
                    </tr>
                    <tr>
                        <td>Founded</td>
                        <td>1952</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>Honor Society</td>
                    </tr>
                    <tr>
                        <td>Major</td>
                        <td>All majors</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="span9">
            <div class="section">
                <h2 class="title">About Tau Beta Pi</h2>
                <hr>
                <p>
                    Tau Beta Pi, the National Engineering Honor Society, recognizes students of all majors 
                    who exhibit distinguished scholarship and exemplary character. UCLA&#39;s CA Epsilon Chapter 
                    was founded in 1952. Since then, it has since become an integral part of the UCLA's student
                    organizations and the Engineering community. Tau Beta Pi organizes events on and off campus 
                    for mentorship, professional development, community service, and fun!
                </p>
                <p>
                    Some of the most notable Tau Beta Pi events are the <b>free drop in tutoring service</b> and the 
                    <b>Internship Insider Night</b>. The free drop in tutoring service is held in Boelter Hall 6266, 
                    where upperclassmen volunteer their time to help with any lower division math and science 
                    courses. This service is open to all students on the UCLA campus. Please visit 
                    <a href="http://tbp.seas.ucla.edu/tutoring">the tutoring page</a>
                    for the schedule of tutors and subjects at the end of Week 2. Another upcoming event is the 
                    Internship Insider Night, which will be held on October 8th (Tuesday of Week 3). A panel of 
                    upperclassmen will speak about their internship experiences, give you tips about the job hunt, 
                    and answer any questions you may have about the process. In addition to these events, Tau Beta Pi 
                    hosts a variety of competitions throughout the year to encourage creativity and teamwork, such as 
                    the Rube Goldberg Competition hosted in Winter Quarter. Details about the competition and how to 
                    sign up can be found on the chapter website.
                </p>
            </div>
            <div class="section">
                <h3 class="title">How To Join</h3>
                <hr>
                <p>
                    To be eligible for initiation into Tau Beta Pi, you must be in the top fifth of your senior class, 
                    or top eighth of the junior class (by units). However, the vast majority of our events and competitions 
                    are open to all students!
                </p>
            </div>
            <div class="section">
                <h3 class="title">Notable Fall Quarter Events</h3>
                <hr>
                <ul>
                    <li>Internship Insider Night - October 8th, Tuesday of 3rd Week</li>
                    <li>Hack The West (cohosted with UPE) - October 18th - 20th</li>
                </ul>
            </div>
        </div>
    </div>
</div>