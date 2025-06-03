<?php
$username = "bernardlawes";

// Load GitHub token from config.json
$configPath = __DIR__ . '/credentials.json';
if (!file_exists($configPath)) {
    die("Missing config.json.");
}
$config = json_decode(file_get_contents($configPath), true);
$username = $config['github_username'] ?? null;
$token = $config['github_token'] ?? null;
$repolimit = 13;

if (!$username) {
    die("Username missing in config.json.");
}

if (!$token) {
    die("Token missing in config.json.");
}

$apiUrl = "https://api.github.com/users/$username/repos?per_page=$repolimit&sort=updated";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-GitHub-Feed');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: token $token",
    "Accept: application/vnd.github.v3+json"
]);

$response = curl_exec($ch);
curl_close($ch);

$repos = json_decode($response, true);
if (!is_array($repos)) {
    echo "<p>Error loading repositories.</p>";
    exit;
}

$skippedRepos = array("personal-profile","bernardlawes");

// HTML output
foreach ($repos as $repo) {
    
    $name = htmlspecialchars($repo['name']);

    if (in_array($repo['name'], $skippedRepos)) {
        continue; // Skip repositories in the skipped list
    }

    $html_url = htmlspecialchars($repo['html_url']);
    $desc = htmlspecialchars($repo['description'] ?? "No description provided.");
    $language = htmlspecialchars($repo['language'] ?? "");

    echo '<div class="bg-white dark:bg-gray-800 p-5 rounded-2xl shadow-md hover:shadow-xl transform transition duration-300 hover:-translate-y-1 group mb-4">';
        echo '<div class="flex items-center justify-between">';
            echo '<h3 class="text-sm font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 transition">';
                echo '<i class="fab fa-github text-blue-200 group-hover:text-black dark:group-hover:text-white transition"></i>';
                echo "&nbsp;&nbsp;<a href=\"$html_url\" target=\"_blank\"  class=\"hover:underline\">$name</a>";
            echo '</h3>';
            //echo '<i class="fab fa-github text-gray-400 group-hover:text-black dark:group-hover:text-white transition"></i>';
        echo '</div>';
    
    echo '<hr class="my-8 border-t-0 h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent dark:via-gray-600" />';
    echo "<p class=\"text-sm text-gray-600 dark:text-gray-300 mt-2\">$desc</p>";

    if ($language) {

        echo "<div class=\"mt-4 flex flex-wrap gap-2\">
                <span class=\"inline-block bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100 text-xs px-3 py-1 rounded-full\">
                $language
                </span>
            </div>";
    }
    
    echo '</div>';
}
?>



