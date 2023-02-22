if (theme == "light") {
    $("#change-theme").attr("title", "Change Theme to Dark");
    $("#change-theme").html('<svg id="Glyph" height="512" viewBox="0 0 48 48" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m46.48205 31.89917c-.22683-.20441-.56712-.27894-.89025-.07105-3.44434 2.2334-7.44336 3.41309-11.5625 3.41309-11.72852 0-21.27051-9.54199-21.27051-21.27051 0-4.11913 1.1794-8.11671 3.41228-11.56174.39175-.60441-.28439-1.39289-.93865-1.09207-8.49414 3.84229-13.98242 12.34522-13.98242 21.66211 0 13.10693 10.66309 23.771 23.77051 23.771 9.31719 0 17.81996-5.48805 21.66285-13.98189.14335-.31685.03004-.66045-.20131-.86894z"/><path d="m21 9.75c2.89453 0 5.25 2.35498 5.25 5.25 0 .41406.33594.75.75.75s.75-.33594.75-.75c0-2.89502 2.35547-5.25 5.25-5.25.41406 0 .75-.33594.75-.75s-.33594-.75-.75-.75c-2.89453 0-5.25-2.35498-5.25-5.25 0-.41406-.33594-.75-.75-.75s-.75.33594-.75.75c0 2.89502-2.35547 5.25-5.25 5.25-.41406 0-.75.33594-.75.75s.33594.75.75.75z"/><path d="m35 16.75c2.34375 0 4.25 1.90674 4.25 4.25 0 .41406.33594.75.75.75s.75-.33594.75-.75c0-2.34326 1.90625-4.25 4.25-4.25.41406 0 .75-.33594.75-.75s-.33594-.75-.75-.75c-2.34375 0-4.25-1.90674-4.25-4.25 0-.41406-.33594-.75-.75-.75s-.75.33594-.75.75c0 2.34326-1.90625 4.25-4.25 4.25-.41406 0-.75.33594-.75.75s.33594.75.75.75z"/><path d="m31.75 21c0-.41406-.33594-.75-.75-.75s-.75.33594-.75.75c0 1.79199-1.45801 3.25-3.25 3.25-.41406 0-.75.33594-.75.75s.33594.75.75.75c1.79199 0 3.25 1.45801 3.25 3.25 0 .41406.33594.75.75.75s.75-.33594.75-.75c0-1.79199 1.45801-3.25 3.25-3.25.41406 0 .75-.33594.75-.75s-.33594-.75-.75-.75c-1.79199 0-3.25-1.45801-3.25-3.25z"/></g></svg>');
}

else if (theme == "dark") {
    $("#change-theme").attr("title", "Change Theme to Light");
    $("#change-theme").html('<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m100.307 168.213c16.036-28.329 39.576-51.869 67.905-67.905l-77.512-28.761c-5.461-2.027-11.601-.684-15.719 3.434-4.119 4.118-5.459 10.258-3.434 15.719z"/><path d="m77.22 256c0-16.617 2.287-32.71 6.549-47.986l-75.082 34.443c-5.294 2.428-8.687 7.719-8.687 13.543s3.393 11.115 8.687 13.543l75.083 34.443c-4.262-15.276-6.55-31.369-6.55-47.986z"/><path d="m256 77.22c16.618 0 32.71 2.287 47.986 6.549l-34.443-75.082c-2.428-5.294-7.719-8.687-13.543-8.687s-11.115 3.393-13.543 8.687l-34.443 75.083c15.276-4.263 31.368-6.55 47.986-6.55z"/><path d="m411.693 168.213 28.76-77.513c2.025-5.46.685-11.601-3.434-15.719-4.119-4.119-10.261-5.458-15.719-3.434l-77.513 28.76c28.329 16.037 51.869 39.577 67.906 67.906z"/><path d="m256 434.78c-16.618 0-32.71-2.287-47.986-6.549l34.443 75.083c2.428 5.293 7.719 8.686 13.543 8.686s11.115-3.393 13.543-8.687l34.444-75.083c-15.277 4.262-31.369 6.55-47.987 6.55z"/><path d="m100.307 343.787-28.76 77.513c-2.025 5.46-.685 11.601 3.434 15.719 2.845 2.845 6.655 4.364 10.539 4.364 1.738 0 3.492-.305 5.18-.93l77.513-28.76c-28.329-16.037-51.869-39.577-67.906-67.906z"/><path d="m503.313 242.457-75.083-34.444c4.262 15.277 6.549 31.369 6.549 47.986s-2.287 32.71-6.549 47.986l75.083-34.443c5.294-2.427 8.687-7.718 8.687-13.542s-3.393-11.115-8.687-13.543z"/><path d="m411.693 343.787c-16.036 28.329-39.576 51.869-67.905 67.905l77.513 28.76c1.689.627 3.442.93 5.18.93 3.884 0 7.695-1.519 10.539-4.364 4.119-4.118 5.459-10.258 3.434-15.719z"/></g><path d="m256 404.98c-82.148 0-148.98-66.832-148.98-148.98s66.832-148.98 148.98-148.98 148.98 66.832 148.98 148.98-66.832 148.98-148.98 148.98z"/></g></svg>');
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