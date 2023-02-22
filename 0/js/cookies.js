/**
 * Set a cookie in the user's browser.
 * @param {String} key Cookie name
 * @param {String} value Cookie value
 * @param {int} expiration Days to expire
 */
function SET_COOKIE(key, value, expiration) {
    let age = expiration*60*60*24;

    document.cookie = key + "=" + value + ";max-age=" + age + ";path=/";
}



/**
 * Deletes a cookie in the user's browser.
 * @param {String} key Cookie name 
 */
function DELETE_COOKIE(key) {
    document.cookie = key + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;"
}



/**
 * Get the value of a cookie in the user's browser by key.
 * @param {String} key Cookie name
 * @returns {String} Cookie value. Empty if not set.
 */
function GET_COOKIE(key) {
    let name = key + "=";
    let decodedCookies = decodeURIComponent(document.cookie);
    let cookies = decodedCookies.split(';');

    for (let i=0; i< cookies.length; i++) {
        let cookie = cookies[i];

        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }

        if (cookie.indexOf(key) == 0) {
            return cookie.substring(key.length, cookie.length);
        }
    }

    return "";
}



/**
 * Checks if a cookie is set in the user's browser by key.
 * @param {String} key Cookie name.
 * @returns boolean of existence.
 */
function CHECK_COOKIE(key) {
    if (GET_COOKIE(key) != "") {
        return true;
    }
    
    return false
}