<?php 

echo "<h1>Validate URL - Must Contain QueryString</h1>";

$url = "www.mysite.com/category/subcategory?myqueryhash";

if ( !filter_var($url, FILTER_VALIDATE_EMAIL, FILTER_FLAG_QUERY_REQUIRED) === false ) {
    echo "$url is a valid URL with a query string.";
} else {
    echo "$url is not a valid URL with a query string.";
}