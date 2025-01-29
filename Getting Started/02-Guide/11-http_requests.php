<?php

/**
 * $_GET & $_POST :: These are global variables used to collect data from the HTML form, when data is send to a file via action attribute in the <form></form>. 
 *  
 * - Both are Associative Array.
 * 
 * <form action="destination_location.php" method="post"></form>
 */

/**
 * $_GET
 *      - Data is appended to the URL
 *      - NOT SECURE
 *      - Limited Characters are allowed
 *      - Bookmark is possible with values
 *      - GET request can be cached by the browser hence anyone can see it by inspecting the broser. 
 *      - Better for a search page. 
 * 
 * A GET request has a URL length limitation, which varies by browser and server:  
 *   **RFC 2616 (HTTP/1.1)**: No official limit.  
 *   **Browsers**: Typically around **2,048 to 8,192 characters** (e.g., Chrome ~32,768).  
 **Servers**: Apache default ~8,192; IIS ~16,384.  
 *    For long data, use **POST** instead.
 * 
 * $_POST
 *      - Data is packaged inside the body of the HTTP request.
 *      - MORE SECURE
 *      - No data limit
 *      - Can not Bookmark
 *      - It cannot be cached
 *      - Better for submiting the data into the database
 *      - Better for submitting user credentials
 */

$requests = $_POST;
if (isset($requests)) {
    foreach ($requests as $key => $value) {
        echo $key . "  ";
        echo $value . "  ";
        echo "<br/>";
    }
}
