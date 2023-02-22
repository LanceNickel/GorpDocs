function setup_setCookie(key, value, expiration) {
    let age = expiration*60*60*24;

    document.cookie = key + "=" + value + ";max-age=" + age + ";path=/";
}

function setup_getCookie(key) {
    let name = key + "=";
    let decodedCookies = decodeURIComponent(document.cookie);
    let cookies = decodedCookies.split(';');

    for (let i=0; i< cookies.length; i++) {
        let cookie = cookies[i];

        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }

        if (cookie.indexOf(name) == 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }

    return "";
}

function setup_checkCookie(key) {
    if (setup_getCookie(key) != "") {
        return true;
    }
    
    return false
}



if (setup_checkCookie("theme")) {
    theme = setup_getCookie("theme");
}

else {
    setup_setCookie("theme", "dark", 365);
    theme = 'dark';
}

console.log('from themesetup.js: ' + theme)