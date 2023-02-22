if (theme == "light") {
    $("#change-theme").html("USE DARK THEME");
}

else if (theme == "dark") {
    $("#change-theme").html("USE LIGHT THEME");
}



$("#change-theme").click(function() {

    if (theme == "light") {
        SET_COOKIE("theme", "dark", 365);
    }

    else if (theme == "dark") {
        SET_COOKIE("theme", "light", 365);
    }

    location.reload();

});



console.log('frome theme.js: ' + theme);