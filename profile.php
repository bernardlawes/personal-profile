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

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

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
  <style>
    :root {
    --primary: #0062cc;
    --secondary: #2c3e50;
    --light: #f8f9fa;
    --dark: #343a40;
    --accent: #17a2b8;
        }
      /*
    .gradient-text {
      background: linear-gradient(to right, #3b82f6, #6366f1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    */
    .gradient-text {
      background: linear-gradient(to right, #4b5563, #374151, #1f2937); /* gray-600 → gray-700 → gray-900 */
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 100;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.9);
    }
    
    .modal-content {
        margin: auto;
        display: block;
        max-width: 80%;
        max-height: 80%;
        margin-top: 5%;
    }
    
    #modalCaption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: white;
        padding: 10px 0;
        height: 150px;
    }
    
    .close-modal {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
    }
    
    .close-modal:hover,
    .close-modal:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
    .card-icon {
      font-size: 2rem;
      color: #3b82f6;
      margin-bottom: 1rem;
    }
    .highlight-box {
            background-color: var(--secondary);
            color: white;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            margin: 50px 0px 0px 0px;
    }
        
        .highlight-text {
            font-size: <?php echo ($pagelanguage == 'en') ? '1.8rem' : '1.6rem'; ?>;
            font-weight: 300;
            line-height: 1.4;
            max-width: 800px;
            margin: 0 auto;
    }
    .offscreen {
                position: absolute;
                left: -9999px;
                top: -9999px;
                width: 1px;
                height: 1px;
                overflow: hidden;
                white-space: nowrap;
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
      <button id="themeToggle" class="bg-blue-600 hover:bg-blue-500 text-white py-3 px-6 rounded-full transition offscreen">
        Request
      </button>
      <div >
      <form id="form_verify_email" 
              class="flex flex-col sm:flex-row sm:items-center sm:space-x-2 space-y-2 sm:space-y-0 bg-white p-4 rounded-lg" 
              style="background-color: transparent;">
          
          <input type="hidden" name="purpose" id="input_purpose" value="downloads" />
          <input type="hidden" name="target" id="input_target" value="resume.pdf" />

          <input name="email" id="input_verify_email" required
            type="text"
            placeholder="Enter text"
            class="px-6 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
          />

          <button id="button_verify_email" type="submit"
            class="px-6 py-3 bg-blue-500 hover:bg-blue-300 text-white rounded-md transition w-full sm:w-auto">
            Request
          </button>
          <a href = '#'
            id="button_download_document" 
            type="button"
            class="px-6 py-3 bg-blue-500 hover:bg-blue-300 text-white rounded-md transition w-full offscreen" 
            
            data-token=""
            data-purpose="some purpose"
            data-target="example.txt"
          >
            Download
          </a>
        </form>
        <div class="text-sm text-center" style="margin-bottom:-20px; text-transform:capitalize"  id="response">&nbsp;</div>
      </div>
      
    </div>

    <!-- Right Container -->
    <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow flex flex-col justify-between text-center">
      <h3 class="text-2xl  mb-4"><?php echo $payload['language']['title'][$pagelanguage ]; ?></h3>
      <p class="mb-6 text-gray-600 dark:text-gray-300"><?php echo $payload['language']['text'][$pagelanguage ]; ?>。</p>
      <!--
      <button class="bg-green-600 hover:bg-green-500 text-white py-3 px-6 rounded-full transition">
        日本語へ
      </button>
      -->
      <div >
        <form class="flex items-center space-x-2 bg-white p-4 rounded-lg " style="background-color:transparent;">
          <button
            type="button"
            class="px-6 py-3 bg-red-500 hover:bg-blue-300 text-white rounded-md transition w-full" onclick="window.location.href='<?php echo ($pagelanguage == 'en') ? 'profile.php?lang=jp' : 'profile.php'; ?>'"
          >
            <?php echo ($pagelanguage == 'en') ? '日本語へ' : 'English'; ?>
          </button>
        </form>
      </div>
    </div>

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
      <div class="relative group rounded-2xl overflow-hidden shadow-lg transform transition hover:-translate-y-1 hover:shadow-2xl bg-gray-75 dark:bg-gray-900" data-aos="fade-up">
        <img src="images/project-ship.jpg" alt="Ship Detection" class="w-full h-48 object-cover transition duration-300 group-hover:scale-105 cursor-pointer" onclick="openModal(this)" />

        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 transition">
          <?php echo $payload['projects']['project']['ship']['title'][$pagelanguage ]; ?>
          </h3>
          <p class="text-sm text-gray-700 dark:text-gray-300 mt-2 transition-opacity duration-300 opacity-90 group-hover:opacity-100">
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
      <div class="relative group rounded-2xl overflow-hidden shadow-lg transform transition hover:-translate-y-1 hover:shadow-2xl bg-gray-75 dark:bg-gray-900" data-aos="fade-up">
        <img src="images/project-fire.jpg" alt="Active Fire" class="w-full h-48 object-cover transition duration-300 group-hover:scale-105 cursor-pointer" onclick="openModal(this)" />

        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 transition">
          <?php echo $payload['projects']['project']['fire']['title'][$pagelanguage ]; ?>
          </h3>
          <p class="text-sm text-gray-700 dark:text-gray-300 mt-2 transition-opacity duration-300 opacity-90 group-hover:opacity-100">
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
      <div class="relative group rounded-2xl overflow-hidden shadow-lg transform transition hover:-translate-y-1 hover:shadow-2xl bg-gray-75 dark:bg-gray-900" data-aos="fade-up">
        <img src="images/project-palm.jpg" alt="Crop Analysis" class="w-full h-48 object-cover transition duration-300 group-hover:scale-105 cursor-pointer" onclick="openModal(this)" />

        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 transition">
          <?php echo $payload['projects']['project']['crop']['title'][$pagelanguage ]; ?>
          </h3>
          <p class="text-sm text-gray-700 dark:text-gray-300 mt-2 transition-opacity duration-300 opacity-90 group-hover:opacity-100">
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
      
        <div class="text-center pt-4">
          <button type="submit"
            class="bg-blue-600 hover:bg-blue-500 text-white py-3 px-6 rounded-full font-medium shadow transition">
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

<!-- Modal for project images -->
<div id="imageModal" class="modal">
    <span class="close-modal">&times;</span>
    <img class="modal-content" id="modalImg">
    <div id="modalCaption"></div>
</div>

<!-- Confirmation Modal -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg text-center max-w-sm w-full">
      <h3 class="text-xl  mb-4 text-green-600 dark:text-green-400">Message Sent!</h3>
      <p class="text-gray-700 dark:text-gray-300 mb-6">Thanks for reaching out. I’ll get back to you as soon as I can.</p>
      <button onclick="closeModalMessage()" class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-2 rounded-full">Close</button>
    </div>
  </div>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, easing: 'ease-in-out', once: true });



  // Dark Mode
  const toggle = document.getElementById("themeToggle");
  const html = document.documentElement;
  toggle.addEventListener("click", () => {
    html.classList.toggle("dark");
    localStorage.setItem("theme", html.classList.contains("dark") ? "dark" : "light");
    toggle.innerHTML = html.classList.contains("dark") ? "☀️ Light Mode" : '🌙 <span style="color:white">Dark Mode</span>';
  });
  if (localStorage.getItem("theme") === "dark") html.classList.add("dark");





</script>

<script>

  // Image modal functionality
  let modal = document.getElementById('imageModal');
  let modalImg = document.getElementById('modalImg');
  let captionText = document.getElementById('modalCaption');
  let closeBtn = document.getElementsByClassName('close-modal')[0];
  
  function openModal(img) {
      modal.style.display = "block";
      modalImg.src = img.src;
      captionText.innerHTML = img.alt;
  }
  
  closeBtn.onclick = function() {
      modal.style.display = "none";
  }
  
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

    const form = document.getElementById("contactForm");
    const successModal = document.getElementById("successModal");
  
    form.addEventListener("submit", async function (e) {
      e.preventDefault();
  
      const formData = new FormData(form);
      const action = form.action;
  
      try {
        const res = await fetch(action, {
          method: "POST",
          body: formData,
          headers: {
            Accept: "application/json",
          },
        });
  
        if (res.ok) {
          form.reset();
          openModalMessage();
        } else {
          alert("❌ Something went wrong. Please try again.");
        }
      } catch (err) {
        alert("❌ Submission failed. Please check your connection.");
      }
    });
  
    function openModalMessage() {
      successModal.classList.remove("hidden");
    }
  
    function closeModalMessage() {
      successModal.classList.add("hidden");
    }
  
    // Optional: close modal when clicking outside the box
    window.addEventListener("click", (e) => {
      if (e.target === successModal) closeModalMessage();
    });
  </script>
  
  <script src="assets/js/scripts.js"></script>

</body>
</html>
