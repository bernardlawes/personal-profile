<?php

// Read the file contents
$json = file_get_contents('config-ps.json');

// Decode the JSON to an associative array
$config = json_decode($json, true);

// Access the value
$apitoken = $config['hunterio_token'];

header('Content-Type: application/json; charset=utf-8');


$bypass_verification = true; // Set to true to skip verification for testing purposes
$bypass_gmail_yahoo = false; // Set to true to skip Gmail/Yahoo check for testing purposes


// === Config ===
$apiKey  = $apitoken;
$logFile = 'logs/email.log';

// === Get and sanitize input ===
$email = trim($_POST['email'] ?? '');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$purpose= trim($_POST['purpose'] ?? '-purpose-n/a-');
$target= trim($_POST['target']   ?? '-target-n/a-');

// === Validate format ===
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
    exit;
}

// === Check domain ===
$domain = strtolower(substr(strrchr($email, "@"), 1));
$isGmailOrYahoo = in_array($domain, ['gmail.com', 'yahoo.com']);

if (!$isGmailOrYahoo) {
    if (!$bypass_verification){
        // === Call Hunter API ===
        $hunterUrl = "https://api.hunter.io/v2/email-verifier?email=" . urlencode($email) . "&api_key=$apiKey";
        $response = file_get_contents($hunterUrl);
        $data = json_decode($response, true);

        // === Handle response ===
        if (!$data || !isset($data['data'])) {
            echo json_encode(['success' => false, 'message' => 'Error communicating with Hunter API.']);
            exit;
        }

        if ($data['data']['result'] == "deliverable"){
            $data['data']['result'] = "verified";
        }

    } else {
        // === Mock response due to bypass ===
        $data = [
            'data' => [
                'result' => 'validated',
                'score' => 50,
                'mx_records' => false,
                'disposable' => false
            ]
        ];
    }


} else {
    
    if ($bypass_gmail_yahoo) {
        // === Mock response for testing ===
        $data = [
            'data' => [
                'result' => 'approved',
                'score' => 50,
                'mx_records' => false,
                'disposable' => false
            ]
        ];
    } else {
        $data = [
            'data' => [
                'result' => 'Gmail/Yahoo not accepted',
                'score' => 0,
                'mx_records' => false,
                'disposable' => false
            ]
        ];
    }
    
    

}

$result = $data['data'];
$status = $result['result'] ?? 'unknown';
$score = $result['score'] ?? null;
$mxRecords = $result['mx_records'] ?? false;
$isDisposable = $result['disposable'] ?? false;

$currDate = date('Y-m-d H:i:s');
$token = date('YmdHis');

// === Logging ===
$logLine = sprintf(
    "[%s] | %s | Domain: %s | Gmail/Yahoo: %s | Result: %s | Score: %s | Purpose: %s | Target: %s | Token: %s\n",
    $currDate,
    $email,
    $domain,
    $isGmailOrYahoo ? 'Yes' : 'No',
    strip_tags($status),
    $score,
    $purpose,
    $target,
    $token
);
file_put_contents($logFile, $logLine, FILE_APPEND);

// === Respond ===
echo json_encode([
    'success' => true,
    'email' => $email,
    'provider' => $domain,
    'is_gmail_or_yahoo' => $isGmailOrYahoo,
    'status' => $status,
    'score' => $score,
    'token' => $token,
    'purpose' => $purpose,
    'mx_records' => $mxRecords,
    'is_disposable' => $isDisposable,
    'message' => "$status"
]);
