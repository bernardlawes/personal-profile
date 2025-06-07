<?php 

include 'locale.php';

if (isset($_GET['lang']) && $_GET['lang'] == 'jp') {
    $pagelanguage = 'jp'; // Set the language to Japanese if specified in the URL
} else {
    $pagelanguage = 'en'; // Default to English
}

$tagcolors = ['blue', 'red', 'green', 'yellow', 'purple']; 

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<!-- SEO Meta Tags -->
<meta name="description" content="Bernard Lawes | Solutions Architect specializing in AI, Computer Vision, and IoT. Explore projects, expertise, and get in touch." />
<meta name="keywords" content="Bernard Lawes, Solutions Architect, AI, Machine Learning, Computer Vision, IoT, Technical Demo, POC, Pre-Sales Engineer" />
<meta name="author" content="Bernard Lawes" />
<meta name="robots" content="index, follow" />

<!-- Open Graph (OG) for social sharing -->
<meta property="og:title" content="Bernard Lawes | Solutions Architect" />
<meta property="og:description" content="Explore the work and expertise of Bernard Lawes—AI & Vision-focused Solutions Architect." />
<meta property="og:image" content="https://bermardlawes.com/images/profile.jpg" />
<meta property="og:url" content="https://bermardlawes.com" />
<meta property="og:type" content="website" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Bernard Lawes | Solutions Architect" />
<meta name="twitter:description" content="Explore projects and insights from Bernard Lawes, an expert in AI and computer vision solutions." />
<meta name="twitter:image" content="https://bermardlawes.com/images/profile.jpg" />

<!-- Minimum setup for "PWA - Add to Home Screen": -->
<!-- Set app title -->
<meta name="apple-mobile-web-app-title" content="Bernard Lawes">
<!-- Enable standalone (no browser chrome) -->
<!--<meta name="apple-mobile-web-app-capable" content="yes"> DEPRECATED -->
<meta name="mobile-web-app-capable" content="yes">
<!-- Set the status bar style -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<!-- iPhone icon -->
<link rel="apple-touch-icon" href="./favicons/apple-touch-icon.png">
<!-- End PWA Support -->

<link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
<link rel="manifest" href="./manifest.json">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bernard Lawes | Solutions Architect</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      darkMode: 'class'
    };
  </script>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <link href="assets/css/profile.css?v=1" rel="stylesheet" />
  <link href="assets/css/modal.css?v=1" rel="stylesheet" />
  
  <style>
            .highlight-text {
            font-size: <?php echo ($pagelanguage == 'en') ? '1.8rem' : '1.6rem'; ?>;
            font-weight: 300;
            line-height: 1.4;
            max-width: 800px;
            margin: 0 auto;
    }
  </style>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300 ">

<!-- Hero -->
<section class="relative bg-gray-900 text-white py-24 px-6 text-center bg-cover bg-center" style="background-image: url('images/map.jpg');">
  <div class="absolute inset-0 bg-black opacity-70"></div>
  <div class="relative max-w-4xl mx-auto flex flex-col items-center md:flex-row md:justify-center" data-aos="fade-up">
    <img src="images/profile1.jpg?v=5" alt="Bernard Lawes" class="w-60 h-60 rounded-full mb-6 md:mb-0 md:mr-8 border-4 border-white shadow-lg" onclick="window.location.href='index.html'"/>
    <div>
      <h1 class="text-4xl md:text-5xl font-bold mb-3">Bernard Lawes</h1>
      <br/>
      <p class="text-lg md:text-xl text-gray-300 mb-4">Bi-Lingual | Computer Vision | AI/ML | Cloud | Edge</p>
      <br/>
      <div class="grid md:grid-cols-3 gap-8">

        <a href="https://linkedin.com/in/lawes" target="_blank" class="flex items-center gap-2 bg-white/10 border border-white/20 text-white hover:bg-white/20 py-2.5 px-5 rounded-full shadow-sm transition backdrop-blur-sm">
          <i class="fab fa-linkedin text-lg"></i> LinkedIn
        </a>
        
        <a href="https://github.com/bernardlawes" target="_blank" class="flex items-center gap-2 bg-white/10 border border-white/20 text-white hover:bg-white/20 py-2.5 px-5 rounded-full shadow-sm transition backdrop-blur-sm">
          <i class="fab fa-github text-lg"></i> GitHub
        </a>
        
        <a href="#projects" class="flex items-center gap-2 bg-white/10 border border-white/20 text-white hover:bg-white/20 py-2.5 px-5 rounded-full shadow-sm transition backdrop-blur-sm">
          <i class="fas fa-image text-lg"></i> Portfolio
        </a>
      
        <!--<a href="resume.txt" download class="bg-white text-gray-900 hover:bg-gray-200 py-3 px-6 rounded-full transition"><i class="fas fa-file-alt"></i> &nbsp;Resume</a>-->
      </div>
    </div>
  </div>
</section>

<!-- Fixed top container aligned with right edge of content area -->
<div class="fixed top-0 inset-x-0 z-50 flex justify-center pointer-events-none">
  <div class="w-full max-w-6xl flex justify-end space-x-2 p-2 pointer-events-auto">
    <!-- Theme Toggle -->
    <button id="themeToggle" class="bg-gray-500 dark:bg-gray-700 text-white px-3 py-1 h-8 text-sm shadow transition bg-opacity-50 rounded">
      🌙 <span>Dark Mode</span>
    </button>

    <!-- Language Toggle -->
    <button id="languageToggle" onclick="window.location.href='<?php echo ($pagelanguage == 'en') ? 'profile.php?lang=jp' : 'profile.php'; ?>'" class="bg-gray-500 dark:bg-gray-700 text-white px-3 py-1 h-8 text-sm shadow transition bg-opacity-50 rounded">
      <img src="<?php echo ($pagelanguage == 'en') ? 'images/jp.png' : 'images/us.png'; ?>" alt="Japan Flag" class="w-5 h-5 inline-block align-middle">
    </button>
  </div>
</div>


<!-- About Me -->
<section class="py-20 px-6 bg-gray-75 dark:bg-gray-900">
  <div class="max-w-6xl mx-auto text-left" data-aos="fade-up">
  <h2 class="<?php echo ($pagelanguage == 'en') ? 'text-4xl' : 'text-2xl'; ?>  mb-6 text-gray-900 dark:text-white"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php echo $payload['about']['title'][$pagelanguage ]; ?> </h2>
  <hr class="my-8 border-t-0 h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent dark:via-gray-600" />
    <p class="text-lg leading-relaxed">
      
      <?php echo $payload['about']['text'][$pagelanguage ]; ?>
      
    </p>

    <div class="highlight-box">
        <p class="highlight-text"> <?php echo $payload['block']['text'][$pagelanguage ]; ?> </p>
      </div>

  </div>
</section>


<section class="py-16 px-6 bg-white dark:bg-gray-800">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <!-- Left Container -->
    <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow flex flex-col justify-between text-center">
      <h3 class="text-2xl  mb-4"><?php echo $payload['download']['title'][$pagelanguage ]; ?></h3>
      <p class="mb-6 text-gray-600 dark:text-gray-300"><?php echo $payload['download']['text'][$pagelanguage ]; ?> </p>
      <div class="text-sm text-center offscree" style="margin-bottom:20px; margin-top:-10px; text-transform:capitalize; font-size:15px;"  id="response">&nbsp;</div>
  
      
        <form id="form_verify_email" 
              class="flex flex-col sm:flex-row sm:items-center sm:space-x-2 space-y-2 sm:space-y-0 bg-white p-4 rounded-lg " 
              style="background-color: transparent; margin-top:-30px; margin-bottom: 20px;">
          
          <input type="hidden" name="purpose" id="input_purpose" value="downloads" />
          <input type="hidden" name="target" id="input_target" value="resume.pdf" />

          <input name="email" id="input_verify_email" required
            type="text"
            placeholder="Enter your Email Address"
            class="flex-1 text-center peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-md text-gray-900 dark:text-white dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring-0"
          />
          <!--
          <button id="button_verify_email" type="submit"
            class="px-4 py-2 bg-red-950 hover:bg-red-900 text-white rounded-md transition w-full sm:w-auto">
            <span class="text-[20px] font-light">Verify</span>
          </button>
          -->
        </form>
        
      

         <div id ="div_download_approved" class="cta-button-container flex gap-5 flex-wrap md:flex-nowrap offscree">
            <a href="#"
              id="button_download_document" 
              type="button"
              class="animated-butto flag-button flex-1  px-6 py-3 rounded-md transition"  
              style="background-image: url('assets/img/pdf1.png'); background-size: 24px 24px;"
              data-token=""
              data-purpose="some purpose"
              data-target="downloads"
            >
              <span style="font-weight: 300;  font-size: 20px;"><?php echo $payload['cta-0']['title'][$pagelanguage ]; ?></span>
            </a>
            
            <a href = '#'
              target = "_blank"
              id="button_shedule_meeting" 
              type="button"
              class="animated-butto flag-button flex-1  px-6 py-3 rounded-md transition" 
              style="background-image: url('assets/img/calendar1.png'); background-size: 32px 32px;"
              data-token=""
              data-purpose="some purpose"
              data-target="example.txt"
            >
              <span style="font-weight: 300;   font-size: 20px;"><?php echo $payload['cta-1']['title'][$pagelanguage ]; ?></span>
            </a>
        </div>
      
      
    </div>

    <!-- Right Container -->
    <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow flex flex-col justify-between text-center">
        <h3 class="text-2xl  mb-4"><?php echo $payload['language']['title'][$pagelanguage ]; ?></h3>
        <p class="mb-6 text-gray-600 dark:text-gray-300"><?php echo $payload['language']['text'][$pagelanguage ]; ?></p>
        <div class="text-sm text-center" style="margin-bottom:0px; text-transform:capitalize; font-size:15px;"  id="response">&nbsp;</div>         
        
        <div class="cta-button-container">
          <button
            type="button"
            class="flag-button lative overflow-hidden w-full h-12 pl-14 pr-4 py-2 text-white  rounded-md re" onclick="window.location.href='<?php echo ($pagelanguage == 'en') ? 'profile.php?lang=jp' : 'profile.php'; ?>'"
            style="background-image: url('<?php echo ($pagelanguage == 'en') ? 'images/jp.png' : 'images/us.png'; ?>');"
            >
                <span style="font-weight: 300;   font-size: 20px;"><?php echo ($pagelanguage == 'en') ? '日本語版を見る' : 'Go to English'; ?></span>
          </button>
        </div>
      
      </div>  
    
    
    
    
    <!--
    <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow flex flex-col justify-between text-center">
      <h3 class="text-2xl  mb-4"><?php echo $payload['language']['title'][$pagelanguage ]; ?></h3>
      <p class="mb-6 text-gray-600 dark:text-gray-300"><?php echo $payload['language']['text'][$pagelanguage ]; ?>。</p>
      <div class="cta-button-container">
        <button
          type="button"
          class="px-6 py-3 rounded-md transition w-full" onclick="window.location.href='<?php echo ($pagelanguage == 'en') ? 'profile.php?lang=jp' : 'profile.php'; ?>'"
        >
              <img src="<?php echo ($pagelanguage == 'en') ? 'images/jp.png' : 'images/us.png'; ?>" alt="Japan Flag" class="w-5 h-5 inline-block align-middle"> &nbsp;
              <span style="font-weight: 300;   font-size: 20px;"><?php echo ($pagelanguage == 'en') ? '日本語へ' : 'English'; ?></span>
        </button>
      </div>
    </div>
  -->
  </div>
</section>




<!-- Expertise Grid -->
<section class="py-20 px-6 bg-gray-75 dark:bg-gray-900" id="expertise">
  <div class="max-w-6xl mx-auto">
  <h2 class="<?php echo ($pagelanguage == 'en') ? 'text-4xl' : 'text-2xl'; ?>  mb-6 text-gray-900 dark:text-white"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php echo $payload['skills']['title'][$pagelanguage ]; ?></h2>
  <hr class="my-8 border-t-0 h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent dark:via-gray-600" />
    <br/>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
  <!-- Card -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-xl" data-aos="fade-up">
    <div class="text-4xl text-blue-600 dark:text-blue-400 mb-4">
      <i class="fas fa-eye"></i>
    </div>
    <h3 class=" text-xl mb-2"><?php echo $payload['skills']['skill']['cv']['title'][$pagelanguage ]; ?></h3>
    <p class="text-gray-600 dark:text-gray-300"><?php echo $payload['skills']['skill']['cv']['text'][$pagelanguage ]; ?></p>
  </div>

  <!-- Repeat for each card with varied icons -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
    <div class="text-4xl text-purple-600 dark:text-purple-400 mb-4">
      <i class="fas fa-brain"></i>
    </div>
    <h3 class=" text-xl mb-2"><?php echo $payload['skills']['skill']['ml']['title'][$pagelanguage ]; ?></h3>
    <p class="text-gray-600 dark:text-gray-300"><?php echo $payload['skills']['skill']['ml']['text'][$pagelanguage ]; ?></p>
  </div>

  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
    <div class="text-4xl text-green-600 dark:text-green-400 mb-4">
      <i class="fas fa-network-wired"></i>
    </div>
    <h3 class=" text-xl mb-2"><?php echo $payload['skills']['skill']['edge']['title'][$pagelanguage ]; ?></h3>
    <p class="text-gray-600 dark:text-gray-300"><?php echo $payload['skills']['skill']['edge']['text'][$pagelanguage ]; ?></p>
  </div>

  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
    <div class="text-4xl text-pink-600 dark:text-pink-400 mb-4">
      <i class="fas fa-chart-line"></i>
    </div>
    <h3 class=" text-xl mb-2"><?php echo $payload['skills']['skill']['demo']['title'][$pagelanguage ]; ?></h3>
    <p class="text-gray-600 dark:text-gray-300"><?php echo $payload['skills']['skill']['demo']['text'][$pagelanguage ]; ?></p>
  </div>

  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-xl" data-aos="fade-up" data-aos-delay="400">
    <div class="text-4xl text-yellow-600 dark:text-yellow-400 mb-4">
      <i class="fas fa-laptop-code"></i>
    </div>
    <h3 class=" text-xl mb-2"><?php echo $payload['skills']['skill']['poc']['title'][$pagelanguage ]; ?></h3>
    <p class="text-gray-600 dark:text-gray-300"><?php echo $payload['skills']['skill']['poc']['text'][$pagelanguage ]; ?></p>
  </div>

  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-xl" data-aos="fade-up" data-aos-delay="500">
    <div class="text-4xl text-red-600 dark:text-red-400 mb-4">
      <i class="fas fa-comments"></i>
    </div>
    <h3 class=" text-xl mb-2"><?php echo $payload['skills']['skill']['story']['title'][$pagelanguage ]; ?></h3>
    <p class="text-gray-600 dark:text-gray-300"><?php echo $payload['skills']['skill']['story']['text'][$pagelanguage ]; ?></p>
  </div>
</div>

  </div>
</section>

<!-- Projects -->
<section class="py-20 px-6 bg-white dark:bg-gray-800" id="projects">
  <div class="max-w-6xl mx-auto">
  <h2 class="<?php echo ($pagelanguage == 'en') ? 'text-4xl' : 'text-2xl'; ?>  mb-6 text-gray-900 dark:text-white"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php echo $payload['projects']['title'][$pagelanguage ]; ?></h2>
  <hr class="my-8 border-t-0 h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent dark:via-gray-600" />
  <div class="grid md:grid-cols-3 gap-8">
      <div class="relative group rounded-2xl overflow-hidden shadow-lg transform transition hover:-translate-y-1 hover:shadow-2xl bg-gray-75 dark:bg-gray-900"
              data-aos="fade-up" 
              onclick="openProjectModal(this)"
              data-category="maritime"
              data-image="./images/project-ship-2.jpg" 
              data-description="Ship detection and AIS matching system used in coastal monitoring for real-time maritime security.">
        <img src="images/tanker.jpg" alt="Ship Detection" class="w-full h-48 object-cover transition duration-300 group-hover:scale-105 cursor-pointer" />
        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 transition">
          <?php echo $payload['projects']['project']['ship']['title'][$pagelanguage ]; ?>
          </h3>
          <p class="text-sm text-gray-700 dark:text-gray-300 mt-2 transition-opacity duration-300 opacity-90 group-hover:opacity-100 truncate" data-max-chars="100">
          <?php echo $payload['projects']['project']['ship']['text'][$pagelanguage ]; ?>
          </p>

          <div class="flex flex-wrap mt-4 gap-2">
            <?php 
                
                $tags = $payload['projects']['project']['ship']['tags'][$pagelanguage ];
                foreach ($tags as $index => $tag) {
                  $color = $tagcolors[$index % count($tagcolors)];
                  echo "<span class='inline-block text-xs px-3 py-1 rounded-full font-medium bg-$color-100 text-$color-700 dark:bg-$color-700 dark:text-$color-100'>$tag</span>";
                }
            ?>
          </div>
        </div>
      </div>
      <div class="relative group rounded-2xl overflow-hidden shadow-lg transform transition hover:-translate-y-1 hover:shadow-2xl bg-gray-75 dark:bg-gray-900"
              data-aos="fade-up" 
              onclick="openProjectModal(this)"
              data-category="maritime"
              data-image="./images/fire-all.jpg" 
              data-description="Ship detection and AIS matching system used in coastal monitoring for real-time maritime security.">
        <img src="images/project-fire.jpg" alt="Active Fire" class="w-full h-48 object-cover transition duration-300 group-hover:scale-105 cursor-pointer" />

        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 transition">
          <?php echo $payload['projects']['project']['fire']['title'][$pagelanguage ]; ?>
          </h3>
          <p class="text-sm text-gray-700 dark:text-gray-300 mt-2 transition-opacity duration-300 opacity-90 group-hover:opacity-100 truncate" data-max-chars="100">
          <?php echo $payload['projects']['project']['fire']['text'][$pagelanguage ]; ?>
          </p>

          <div class="flex flex-wrap mt-4 gap-2">
            <?php 
                  $tags = $payload['projects']['project']['fire']['tags'][$pagelanguage ];
                  foreach ($tags as $index => $tag) {
                    $color = $tagcolors[$index % count($tagcolors)];
                    echo "<span class='inline-block text-xs px-3 py-1 rounded-full font-medium bg-$color-100 text-$color-700 dark:bg-$color-700 dark:text-$color-100'>$tag</span>";
                  }
            ?>
          </div>
        </div>
      </div>
      <div class="relative group rounded-2xl overflow-hidden shadow-lg transform transition hover:-translate-y-1 hover:shadow-2xl bg-gray-75 dark:bg-gray-900" 
              data-aos="fade-up" 
              onclick="openProjectModal(this)"
              data-category="maritime"
              data-image="./images/project-palm.jpg" 
              data-description="Ship detection and AIS matching system used in coastal monitoring for real-time maritime security.">
        <img src="images/project-palm-cover.jpg" alt="Crop Analysis" class="w-full h-48 object-cover transition duration-300 group-hover:scale-105 cursor-pointer" />

        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 transition">
            <?php echo $payload['projects']['project']['crop']['title'][$pagelanguage ]; ?>
          </h3>
          <p class="text-sm text-gray-700 dark:text-gray-300 mt-2 transition-opacity duration-300 opacity-90 group-hover:opacity-100 truncate" data-max-chars="100">
            <?php echo $payload['projects']['project']['crop']['text'][$pagelanguage ]; ?>
          </p>

          <div class="flex flex-wrap mt-4 gap-2">
            <?php 
                  $tags = $payload['projects']['project']['crop']['tags'][$pagelanguage ];
                  foreach ($tags as $index => $tag) {
                    $color = $tagcolors[$index % count($tagcolors)];
                    echo "<span class='inline-block text-xs px-3 py-1 rounded-full font-medium bg-$color-100 text-$color-700 dark:bg-$color-700 dark:text-$color-100'>$tag</span>";
                  }
            ?>
          </div>
        </div>
      </div>

    </div>
  

  </div>
  
</section>


<!-- GitHub Feed -->
<section class="py-20 px-6 bg-gray-75 dark:bg-gray-900">
  <div class="max-w-6xl mx-auto text-left" data-aos="fade-up">
    <h2 class="<?php echo ($pagelanguage == 'en') ? 'text-4xl' : 'text-2xl'; ?>  mb-6 text-gray-900 dark:text-white"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php echo $payload['github']['title'][$pagelanguage ]; ?></h2>
    <hr class="my-8 border-t-0 h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent dark:via-gray-600" />

    <div class="grid md:grid-cols-2 gap-8">

    <div>

<!-- Activity Graph Card -->
<div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Recent Activity</h3>
        <img 
          src="https://github-readme-activity-graph.vercel.app/graph?username=bernardlawes&theme=github-compact"
          alt="GitHub Activity Graph"
          class="w-full rounded"
        />
      </div>

      <br/>

<!-- Activity Graph Card -->
<div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
        <img 
          src="https://github-readme-streak-stats.herokuapp.com/?user=bernardlawes&layout=compact&theme=tokyonight"
          alt="GitHub Activity Graph"
          class="w-full rounded"
        />
</div>
<br/>
<!-- Top Languages Card -->
<div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
        
        <img 
          src="https://github-readme-stats.vercel.app/api/top-langs/?username=bernardlawes&layout=compact&theme=tokyonight" 
          alt="Top Languages"
          class="w-full rounded"
        />
        
</div>
<br/>
<!-- Top Languages Card -->
<div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
        
        
<button id="" style="font-size:23px; font-weight:100" class="bg-gray-800 hover:bg-blue-500 text-white py-3 px-6 w-full transition">
        See more on GitHub
      </button>

        
</div>
  </div>

  <div id="githubFeed" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 text-left">
      
      <?php include 'module-githubfeed.php'; ?>
    </div>
      
      <!-- Activity Graph Card -->
       <!--
      <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Streaks</h3>
        <img 
          src="https://github-readme-streak-stats.herokuapp.com/?user=bernardlawes&layout=compact&theme=tokyonight"
          alt="GitHub Activity Graph"
          class="w-full rounded"
        />
      </div>
      -->
      
    </div>
    <br/><br/>


    
  </div>


</section>

<!-- Testimonial -->
<section class="py-20 px-6 bg-white dark:bg-gray-800">
  <div class="max-w-3xl mx-auto text-center" data-aos="zoom-in">
  <h2 class="<?php echo ($pagelanguage == 'en') ? 'text-4xl' : 'text-2xl'; ?>  mb-6 text-gray-900 dark:text-white"><?php echo $payload['testimonials']['title'][$pagelanguage ]; ?></h2>
  <hr class="my-8 border-t-0 h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent dark:via-gray-600" />
    <blockquote class="italic text-xl leading-relaxed">
    <?php echo $payload['testimonials']['text'][$pagelanguage ]; ?>
    </blockquote>
    <p class="mt-4 font-medium">– VP of Sales, AI Startup</p>
  </div>
</section>

<!-- Contact -->
<section class="py-20 px-6 bg-gray-900" id="contact">
  <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
    <h2 class="<?php echo ($pagelanguage == 'en') ? 'text-4xl' : 'text-2xl'; ?>  text-white mb-6"><?php echo $payload['connect']['title'][$pagelanguage ]; ?></h2>
    <hr class="my-8 border-t-0 h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent dark:via-gray-600" />
    <p class="text-lg text-gray-300 mb-6">
    <?php echo $payload['connect']['text'][$pagelanguage ]; ?>
    </p>
    <p class="text-xl font-medium mb-2 offscreen">
      <a href="mailto:donisleno@gmail.com" class="hover:underline">donisleno@gmail.com</a>
    </p>

    <p style="margin-top: 1rem; font-size: 2em;">
      <a href="https://www.linkedin.com/in/lawes" target="_blank" class="text-blue-400 hover:underline"><i class="fab fa-linkedin"></i> &nbsp;LinkedIn</a>
    </p>
  </div>
</section>

<!-- Contact Form -->  <!--https://formspree.io/f/manervor-->
<section class="py-20 px-6 bg-white dark:bg-gray-800 text-center" id="contact-form" >
    <div class="max-w-6xl mx-auto" data-aos="fade-up" style="">
    <h2 class="<?php echo ($pagelanguage == 'en') ? 'text-4xl' : 'text-2xl'; ?>  mb-6 text-gray-900 dark:text-white"> <?php echo $payload['contact']['title'][$pagelanguage ]; ?></h2>

      <form id="contactForm" action="https://formspree.io/f/manervor" method="POST" class="space-y-6 text-left">
        <!-- Modal status handled separately -->
      
        <div class="relative z-0 w-full group">
          <input type="text" name="name" id="name" required
            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 dark:text-white dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring-0"
            placeholder=" " />
          <label for="name"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:translate-y-2.5 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">
            <?php echo $payload['contact']['form']['name'][$pagelanguage ]; ?></label>
        </div>
      
        <div class="relative z-0 w-full group">
          <input type="email" name="_replyto" id="email" required
            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 dark:text-white dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring-0"
            placeholder=" " />
          <label for="email"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:translate-y-2.5 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">
            <?php echo $payload['contact']['form']['email'][$pagelanguage ]; ?></label>
        </div>
      
        <div class="relative z-0 w-full group">
          <textarea name="message" id="message" rows="5" required
            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 dark:text-white dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring-0 resize-none"
            placeholder=" "></textarea>
          <label for="message"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:translate-y-2.5 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">
            <?php echo $payload['contact']['form']['message'][$pagelanguage ]; ?></label>
        </div>
      
        <div class="text-center pt-4 cta">
          <button type="submit"
            class="bg-blue-600 hover:bg-blue-500 text-white py-3 px-6 rounded-full font-medium shadow transition" style="background-color: #2c3e50">
            Send Message
          </button>
        </div>
      </form>
      
      <p class="text-xs text-gray-500 mt-4">Form powered by <a href="https://formspree.io" class="underline">Formspree</a>.</p>
    </div>
  </section>

<footer class="bg-gray-900 text-gray-400 text-center py-4">
  &copy; 2025 Bernard Lawes. All rights reserved.
</footer>

<?php include 'module-modal.php'; ?>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
</script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/modal.js"></script>

</body>
</html>
