<?php

//logs detailed error to console
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

//formats error message (can add other stuff to this)
function dbErrorHandler(int $errNo, string $errMsg, string $file, int $line)
{
    console_log("Error!\n Error #[$errNo] occurred in [$file] at line [$line]: [$errMsg]");
}

//user-friendly error message
function displayError()
{
    $error = '<div class="errormessage">
            <h2>Something went wrong.</h2>
            <img src="images/bouncecat.gif" />
        </div>';
    return $error;

}


