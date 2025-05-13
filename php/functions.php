<?php
require "config.php";
require "errors.php";

//sets error handler for uncaught (nonfatal) errors
set_error_handler('dbErrorHandler');

function dbConnect()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        
        //creates connection to db
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        //returns connection if connection is good to go
        return $mysqli;
        
        
    } catch (mysqli_sql_exception $e) {
        //catches and logs to console (USE error_log IF IN PRODUCTION!)
        console_log(''. $e->getMessage());
        //returns false if something unexpected happens..
        return FALSE;
    }
}

function getCategories()
{
    //if dbconnect returns false this skips the code preventing fatal error
    if (dbConnect()) {
        $mysqli = dbConnect();
        $result = $mysqli->query("SELECT category_name FROM tCategories");
        while ($row = $result->fetch_assoc()) {
            $categories[] = $row;
        }
        //returns the categories in an array
        return $categories;
    } else {
        //if categories aren't successfully retrieved, just echo a simple message.
        //this is just so the same error message isn't printed twice on the page and looks a little nicer
        echo "failed to load categories";
    }
}

function getCats($int)
{
    //if dbconnect returns false this skips the code preventing fatal error
    if (dbConnect()) {
        $mysqli = dbConnect();
        $result = $mysqli->query("SELECT * FROM tcats LIMIT $int");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    } else {
        //displays the generic user-friendly error message (in errors.php)
        echo displayError();
    }

}

function getCatsByCategory($category)
{
    //if dbconnect returns false this skips the code preventing fatal error
    if (dbConnect()) {
        $mysqli = dbConnect();
        $smtp = $mysqli->prepare("SELECT * FROM vCatsCategories WHERE category_name = ? ");
        $smtp->bind_param("s", $category);
        $smtp->execute();
        $result = $smtp->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        if ($data) {
            return $data;
        } else {
            //if category in get is non-existent or no records exist, just prints a message
            echo "there's nothing here..";
        }

    } else {
        //displays the generic user-friendly error message (in errors.php)
        echo displayError();
    }
}
function getCatByName($name)
{
    //if dbconnect returns false this skips the code preventing fatal error
    if (dbConnect()) {
        $mysqli = dbConnect();
        $smtp = $mysqli->prepare("SELECT * FROM tcats WHERE name = ? ");
        $smtp->bind_param("s", $name);
        $smtp->execute();
        $result = $smtp->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        if ($data) {
            return $data;
        } else {
            //if cat in get is non-existent or no records exist, just prints a message
            echo "404 Cat Not Found";
        }
    } else {
        //displays the generic user-friendly error message (in errors.php)
        echo displayError();
    }
}


