/**
 * Created by Jake on 02/08/15.
 */

//Initialise the NavBar

function initializeNavbar() {

    bannerCSS = "<div class='banner-position'><a href='http://www.leagueofassassins.co.uk'><img class='banner' src='http://www.leagueofassassins.co.uk/images/logos/Logo%20for%20LoA.png'></a></div>";

    //Initial Class
    initialNavCSS = "<nav class='navbar-static-top navbar-custom'>";

    //Mobile Button Div and Hamburger
    buttonDiv = " <div class='navbar-header'>" +
    "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>" +
    "<span class='sr-only'>Toggle navigation</span>" +
    "<span class='icon-bar'></span>" +
    "<span class='icon-bar'></span>" +
    "<span class='icon-bar'></span>" +
    "</button></div>";


    navBarContentDiv = "<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>" +
    "<ul class='nav navbar-nav'>" +
    "<li id='Home'><a href='http://www.leagueofassassins.co.uk'>Home</a></li>" +
    "<li id='Info'><a href='http://www.leagueofassassins.co.uk/info/information.html'>Info</a></li>" +
    "<li id='Roster'><a href='http://www.leagueofassassins.co.uk/roster/'>Roster</a></li>" +
    "<li id='WarcraftLogs'><a href='https://www.warcraftlogs.com/guilds/81546/'>WarcraftLogs</a></li>" +
    "<li id='Apply'><a href='http://www.leagueofassassins.co.uk/apply/'>Apply</a></li>" +
    "</ul>" +
    "</div>";

    closingStuff = "</nav>";

    $("#navContainer").html(bannerCSS + " " + initialNavCSS + " " + buttonDiv + " " + navBarContentDiv + " " + closingStuff);
}

function initializeFooter() {
    $(".container-main").append($("<div class='footer' />").html("<p>&copy; 2015, Jake Arnold. </p> <p>World of Warcraft is a registered trademark of Blizzard Entertainment, Inc.</p>"));
}

$(document).ready(function () {
    initializeNavbar();
    initializeFooter();
});