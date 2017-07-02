<?php

/**
 * 
 * Return the type of the http code in a string message, according to the input.
 * 
 * @param int $http_code The code which we wanted.
 * @return string Message with the code informated.
 * 
 */
function type_http_code($http_code){
    /* Check and return the type of this HTTP code */
    switch($http_code){
        case 300: return "Multiple Choices";
        case 301: return "Moved Permanently";
        case 302: return "Found";
        case 303: return "See Other";
        case 304: return "Not Modified";
        case 306: return "Switch Proxy";
        case 307: return "Temporary Redirect";
        case 308: return "Permanent Redirect";
        case 400: return "Bad Request";
        case 401: return "Unauthorized";
        case 402: return "Payment Required";
        case 403: return "Forbidden";
        case 404: return "Not Found";
        case 405: return "Method Not Allowed";
        case 406: return "Not Acceptable";
        case 407: return "Proxy Authentication Required";
        case 408: return "Request Timeout";
        case 409: return "Conflict";
        case 410: return "Gone";
        case 411: return "Length Required";
        case 412: return "Precondition Failed";
        case 413: return "Request Entity Too Large";
        case 414: return "Request-URI Too Long";
        case 415: return "Unsupported Media Type";
        case 416: return "Requested Range Not Satisfiable";
        case 417: return "Expectation Failed";
        case 418: return "I'm a teapot";
        case 419: return "Authentication Timeout";
        case 420: return "Method Failure";
        case 420: return "Enhance Your Calm";
        case 422: return "Unprocessable Entity";
        case 423: return "Locked";
        case 424: return "Failed Dependency";
        case 425: return "Unordered Collection";
        case 426: return "Upgrade Required";
        case 428: return "Precondition Required";
        case 429: return "Too Many Requests";
        case 431: return "Request Header Fields Too Large";
        case 440: return "Login Timeout";
        case 444: return "No Response";
        case 449: return "Retry With";
        case 450: return "Blocked by Windows Parental Controls";
        case 451: return "Unavailable For Legal Reasons";
        case 451: return "Redirect";
        case 494: return "Request Header Too Large";
        case 495: return "Cert Error";
        case 496: return "No Cert";
        case 497: return "HTTP to HTTPS";
        case 499: return "Client Closed Request";
        case 500: return "Internal Server Error";
        case 501: return "Not Implemented";
        case 502: return "Bad Gateway";
        case 503: return "Service Unavailable";
        case 504: return "Gateway Timeout";
        case 505: return "HTTP Version Not Supported";
        case 506: return "Variant Also Negotiates";
        case 507: return "Insufficient Storage";
        case 508: return "Loop Detected";
        case 509: return "Bandwidth Limit Exceeded";
        case 510: return "Not Extended";
        case 511: return "Network Authentication Required";
        case 520: return "Origin Error";
        case 521: return "Web server is down";
        case 522: return "Connection timed out";
        case 523: return "Proxy Declined Request";
        case 524: return "A timeout occurred";
        case 598: return "Network read timeout error";
        case 599: return "Network connect timeout error";
        default: return "UNKNOWN ERROR!";
    }
}

/**
 * 
 * Display and die with a http_error.
 * 
 * @param int $http_error_code Http error code.
 * @param string $error_msg Error message to be displayed.
 * 
 */
function die_http_error($http_error_code, $error_msg){
    /* Set the type of error code */
    http_response_code($http_error_code);

    /* Display the final error message */
    exit("<h1>ERROR $http_error_code - ".strtoupper(type_http_code($http_error_code))." </h1>
          <h2> $error_msg </h2>");
}

?>