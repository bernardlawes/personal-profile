<?php

function getMinutesOldFromLogLine(string $line): ?int {
    if (preg_match('/\[(.*?)\]/', $line, $matches)) {
        $timestampStr = $matches[1];

        $logTime = new DateTime($timestampStr);
        $now = new DateTime();

        $diffSeconds = $now->getTimestamp() - $logTime->getTimestamp();
        return (int) floor($diffSeconds / 60);
    }

    return null; // No timestamp found
}





$maxAge = 1; // in minutes
$logFile = 'logs/email.log';

$inToken = $_GET['token'] ?? 'undefined';


//$content = file_get_contents($logFile);

/*
// Read line-by-line (memory efficient for large files) - files that are 100s of MB or GB in size
// This is a good way to read large files without loading the entire file into memory.
$handle = fopen($logfile, 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line;
    }
    fclose($handle);
}
*/


//Read file into an array (one line per element)
$lines = file($logFile);
foreach ($lines as $line) {
    if (strpos($line, $inToken) !== false) {
        // Token found in the line
        $parts = explode('|', $line);
        $timestamp = trim($parts[0]);
        $email = trim($parts[1]);
        $domain = trim(str_replace("Domain:",'',$parts[2]));
        $isGmail = trim(str_replace("Gmail/Yahoo:",'',$parts[3]));
        $status = trim(str_replace("Result:",'',$parts[4]));
        $score = trim(str_replace("Score:",'',$parts[5]));
        $purpose = trim(str_replace("Purpose:",'',$parts[6]));
        $target = trim(str_replace("Target:",'',$parts[7]));
        $token = trim(str_replace("Token:",'',$parts[8]));
        break; // Stop searching after finding the first match
    } else {
        // Token not found in this line, continue to the next line
        continue;
    }
}

if (!isset($timestamp)) {
    // If any of the required fields are missing, return an error
    http_response_code(403);
    echo '⛔ Unrecognized Token.';
    exit;
}


$minutesOld = getMinutesOldFromLogLine($timestamp);

if ($minutesOld === null) {
    // Handle the case where the timestamp could not be parsed
    http_response_code(403);
    echo '⛔ Invalid Token.';
    exit;
} else if ($minutesOld > $maxAge) {
    // Token is too old
    http_response_code(403);
    echo "⛔ Error: Expired token.";
    exit;
} else  {
    
} 

$filePath = __DIR__ . DIRECTORY_SEPARATOR . $purpose . DIRECTORY_SEPARATOR . $target;

if (!file_exists($filePath)) {
    http_response_code(404);
    echo "❌ Error: File not found.";
    exit;
}

/*
// Set headers to force download for simple text files
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Content-Length: ' . filesize($filePath));
*/
/*
// Force download of binary file (PDF, etc.)
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream'); // Or 'application/pdf' if you want to hint at file type
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filePath));
*/

// UNIFIED APPROACHDOWNLOAD FOR ALL FILE TYPES
// Get MIME type for better accuracy (optional fallback to octet-stream)
$mimeType = mime_content_type($filePath) ?: 'application/octet-stream';

// Force download with correct headers
header('Content-Description: File Transfer');
header("Content-Type: $mimeType");
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filePath));



// Clean output buffer and flush before sending file
if (ob_get_level()) {
    ob_end_clean();
}
flush();
readfile($filePath);
