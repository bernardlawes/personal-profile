<?php
    // Read the file contents
    $json = file_get_contents('config-ps.json');

    // Decode the JSON to an associative array
    $config = json_decode($json, true);

    // Access the value
    $token_githubfeed = $config['github_token'];

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
    .gradient-text {
      background: linear-gradient(to right, #3b82f6, #6366f1);
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
            margin: 50px 0;
    }
        
        .highlight-text {
            font-size: 1.8rem;
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

  
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">

<!-- Hero -->
<section class="relative bg-gray-900 text-white py-24 px-6 text-center bg-cover bg-center" style="background-image: url('images/map.jpg');">
  <div class="absolute inset-0 bg-black opacity-70"></div>
  <div class="relative max-w-4xl mx-auto flex flex-col items-center md:flex-row md:justify-center" data-aos="fade-up">
    <img src="images/profile.jpg" alt="Bernard Lawes" class="w-60 h-60 rounded-full mb-6 md:mb-0 md:mr-8 border-4 border-white shadow-lg"  onclick="window.location.href='index.html'"/>
    <div>
      <h1 class="text-4xl md:text-5xl font-bold mb-3">Bernard Lawes</h1>
      <br/>
      <p class="text-lg md:text-xl text-gray-300 mb-4">技術営業エンジニア | 画像解析 | 機械学習 | エッジ | IoT</p>
      <br/>
      <div class="grid md:grid-cols-3 gap-8">
        <a href="https://linkedin.com/in/lawes" target="_blank" class="bg-blue-600 hover:bg-blue-500 py-3 px-6 rounded-full transition"><i class="fab fa-linkedin"></i> &nbsp;Linkedin</a>
        <a href="https://github.com/bernardlawes" target="_blank" class="bg-blue-600 hover:bg-blue-500 py-3 px-6 rounded-full transition"><i class="fab fa-github"></i> &nbsp;GitHub</a>
        <a href="#projects" class="bg-blue-600 hover:bg-blue-500 py-3 px-6 rounded-full transition"><i class="fas fa-image"></i> &nbsp;実績集</a>
        <!--<a href="resume.pdf" download class="bg-white text-gray-900 hover:bg-gray-200 py-3 px-6 rounded-full transition"><i class="fas fa-file-alt"></i> &nbsp;Resume</a>-->
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
    <button id="languageToggle" onclick="window.location.href='english.php'" class="bg-gray-500 dark:bg-gray-700 text-white px-3 py-1 h-8 text-sm shadow transition bg-opacity-50 rounded">
      <img src="images/us.png" alt="USA Flag" class="w-5 h-5 inline-block align-middle">
    </button>
  </div>
</div>


<section class="py-20 px-6 bg-gray-100 dark:bg-gray-900">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <!-- Left Container -->
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow flex flex-col justify-between text-center">
      <h3 class="text-2xl font-semibold mb-4">履歴書をダウンロード</h3>
      <p class="mb-6 text-gray-600 dark:text-gray-300"> 採用ご担当者様はこちらをクリックして、履歴書をご請求ください。 </p>
      <div >
        <form id="form_verify_email" class="flex items-center space-x-2 bg-white p-4 rounded-lg" style="background-color:transparent;">
          <input type="hidden" name="purpose" id="input_purpose" value="downloads" />
          <input type="hidden" name="target" id="input_target" value="resume.pdf" />
          <input name="email" id="input_verify_email" required
            type="text"
            placeholder="Enter text"
            class="px-6 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
          />
          <button
            id="button_verify_email" 
            type="submit"
            class="px-6 py-3 bg-blue-500 hover:bg-blue-300 text-white rounded-md transition w-full" 
          >
            申し込み
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
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow flex flex-col justify-between text-center">
      <h3 class="text-2xl font-semibold mb-4">English Profile</h3>
      <p class="mb-6 text-gray-600 dark:text-gray-300">Click to view my English Profile</p>
      <div >
        <form class="flex items-center space-x-2 bg-white p-4 rounded-lg " style="background-color:transparent;">
          <button
            type="button"
            class="px-6 py-3 bg-red-500 hover:bg-blue-300 text-white rounded-md transition w-full" onclick="window.location.href='english.php'"
          >
            View Now
          </button>
        </form>
      </div>
    </div>

  </div>
</section>


<!-- About Me -->
<section class="py-16 px-6 bg-white dark:bg-gray-800">
  <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
    <h2 class="text-3xl font-semibold mb-6 gradient-text">自己紹介</h2><br/>
    <p class="text-lg leading-relaxed">
      私は、先進技術を実用的な成果へと結びつけることに情熱を注ぐ、実践的なソリューションアーキテクトです。AI、ビジョンシステム、そしてエンタープライズ向けの導入経験を背景に、価値を重視した技術デモの作成、実環境での機械学習モデルの展開、そして企業のイノベーション促進を専門としています。
    </p>

    <div class="highlight-box">
        <p class="highlight-text">"技術そのものが可能性を生み出し、戦略的なストーリーテリングがその可能性をビジネスの価値へと変える"</p>
      </div>

  </div>



</section>

<!-- Expertise Grid -->
<section class="py-20 px-6 bg-gray-100 dark:bg-gray-900" id="expertise">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-semibold text-center mb-10 gradient-text">専門分野</h2>
    <br/>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow" data-aos="fade-up">
        <div class="card-icon"><i class="fas fa-eye"></i></div>
        <h3 class="font-semibold text-xl mb-2">AIビジョンシステム</h3>
        <p>実世界の画像システムにおける検出・認識・解析機能の強化。</p>
      </div>
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow" data-aos="fade-up">
        <div class="card-icon"><i class="fas fa-brain"></i></div>
        <h3 class="font-semibold text-xl mb-2">機械学習</h3>
        <p>生データをスマートな自動化へと変換する知的モデルの導入。</p>
      </div>
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow" data-aos="fade-up">
        <div class="card-icon"><i class="fas fa-network-wired"></i></div>
        <h3 class="font-semibold text-xl mb-2">エッジ &amp; IoT</h3>
        <p>知能化された自動化によって、物理世界とデジタル世界をつなぐ。</p>
      </div>
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow" data-aos="fade-up">
        <div class="card-icon"><i class="fas fa-chart-line"></i></div>
        <h3 class="font-semibold text-xl mb-2">製品デモンストレーション</h3>
        <p>意思決定と関心を促す、高インパクトな技術プレゼンテーションの構築</p>
      </div>
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow" data-aos="fade-up">
        <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
        <h3 class="font-semibold text-xl mb-2">概念実証を開発する</h3>
        <p>アイデアを検証し、新たな可能性を切り拓く迅速なPoC（概念実証）を構築。</p>
      </div>
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow" data-aos="fade-up">
        <div class="card-icon"><i class="fas fa-comments"></i></div>
        <h3 class="font-semibold text-xl mb-2">技術をストーリーとして伝える力</h3>
        <p>複雑なソリューションを、どんな相手にも伝わる魅力的なストーリーへと翻訳。</p>
      </div>
    </div>
  </div>
</section>

<!-- Projects -->
<section class="py-20 px-6 bg-white dark:bg-gray-800" id="projects">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-semibold text-center mb-10 gradient-text">注目のプロジェクト</h2><br/>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-gray-100 dark:bg-gray-900 rounded-lg shadow p-4" data-aos="fade-up">
        <img src="images/project-ship.jpg" alt="Project 1" class="rounded cursor-pointer" onclick="openModal(this)" />
        <h3 class="text-xl font-bold mt-4">船舶の検出と追跡</h3>
        <p class="text-gray-700 text-sm">悪天候や海況の厳しい状況下でも船舶を検出可能な、高性能な海洋監視向けリモートセンシングソリューションを開発。 </p>
        <br/>
        <span class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded-full">セグメンテーション</span>
        <span class="text-sm bg-red-100 text-red-700 px-3 py-1 rounded-full">検出</span>
        <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full">追跡</span>
      </div>
      <div class="bg-gray-100 dark:bg-gray-900 rounded-lg shadow p-4" data-aos="fade-up" data-aos-delay="100">
        <img src="images/project-fire.jpg" alt="Project 2" class="rounded cursor-pointer" onclick="openModal(this)" />
        <h3 class="text-xl font-bold mt-4">火災のリアルタイム検出</h3>
        <p class="text-gray-700 text-sm">衛星および航空データから、火災の発生を検出し、焼失範囲を明確化し、煙を除去した画像を生成するソフトウェアソリューションを開発。 </p>
        <br/>
        <span class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded-full">画像解析</span>
        <span class="text-sm bg-red-100 text-red-700 px-3 py-1 rounded-full">航空機</span>
      </div>
      <div class="bg-gray-100 dark:bg-gray-900 rounded-lg shadow p-4" data-aos="fade-up" data-aos-delay="200">
        <img src="images/project-palm.jpg" alt="Project 3" class="rounded cursor-pointer" onclick="openModal(this)" />
        <h3 class="text-xl font-bold mt-4">農業モニタリング</h3>
        <p class="text-gray-700 text-sm">樹幹の識別、スペクトルプロファイリング、栄養分析、病害診断のために、ハイパースペクトル画像データを処理するソフトウェアを開発。</p>
        <br/>
        <span class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded-full">ハイパースペクトル</span>
        <span class="text-sm bg-red-100 text-red-700 px-3 py-1 rounded-full">画像解析</span>
        <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full">ドローンズ</span>
      </div>
    </div>
    
    <!-- Uncomment to add more projects
    <br/>
    <hr/>
    <br/>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-gray-100 dark:bg-gray-900 rounded-lg shadow p-4" data-aos="fade-up">
        <img src="images/project-ship.jpg" alt="Project 1" class="rounded cursor-pointer" onclick="openModal(this)" />
        <h3 class="text-xl font-bold mt-4">Ship Detection & Tracking</h3>
        <p class="text-gray-700 text-sm">Developed a high-performance remote sensing solution for maritime surveillance, capable of detecting ships in challenging weather and sea states. </p>
        <br/>
        <span class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Segmentation</span>
        <span class="text-sm bg-red-100 text-red-700 px-3 py-1 rounded-full">Detection</span>
        <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full">Tracking</span>
      </div>
      <div class="bg-gray-100 dark:bg-gray-900 rounded-lg shadow p-4" data-aos="fade-up" data-aos-delay="100">
        <img src="images/project-fire.jpg" alt="Project 2" class="rounded cursor-pointer" onclick="openModal(this)" />
        <h3 class="text-xl font-bold mt-4">Active Fire Detection</h3>
        <p class="text-gray-700 text-sm">Developed a software solution to detect active flames, delineate burn perimeters, and generate smoke-filtered imagery from satellite and airborne data. </p>
        <br/>
        <span class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Segmentation</span>
        <span class="text-sm bg-red-100 text-red-700 px-3 py-1 rounded-full">Detection</span>
        <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full">Tracking</span>
      </div>
      <div class="bg-gray-100 dark:bg-gray-900 rounded-lg shadow p-4" data-aos="fade-up" data-aos-delay="200">
        <img src="images/project-palm.jpg" alt="Project 3" class="rounded cursor-pointer" onclick="openModal(this)" />
        <h3 class="text-xl font-bold mt-4">Agricultural Monitoring</h3>
        <p class="text-gray-700 text-sm">Developed software to process multispectral and hyperspectral image data for tree stem identification, spectral profiling, nutrient analysis, and disease diagnoses</p>
        <br/>
        <span class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Segmentation</span>
        <span class="text-sm bg-red-100 text-red-700 px-3 py-1 rounded-full">Detection</span>
        <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full">Tracking</span>
      </div>
    </div>
    -->

  </div>
  
</section>


<!-- GitHub Feed -->
<section class="py-20 px-6 bg-gray-100 dark:bg-gray-900">
  <div class="max-w-5xl mx-auto text-center" data-aos="fade-up">
    <h2 class="text-2xl font-semibold mb-6 gradient-text">公開GitHubリポジトリ</h2><br/>
    <div id="githubFeed" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 text-left"></div>
  </div>
</section>

<!-- Testimonial -->
<section class="py-20 px-6 bg-white dark:bg-gray-800">
  <div class="max-w-3xl mx-auto text-center" data-aos="zoom-in">
    <h2 class="text-2xl font-semibold mb-6 gradient-text">推薦の言葉</h2><br/>
    <blockquote class="italic text-xl leading-relaxed">
      “バーナードは、ビジネスにも精通した稀有なエンジニアです。彼のデモは単に技術を見せるだけでなく、商談を成立させるストーリーを語ります。”
    </blockquote>
    <p class="mt-4 font-medium">– VP of Sales, AI Startup</p>
  </div>
</section>

<!-- Contact -->
<section class="py-20 px-6 bg-gray-900 text-white" id="contact">
  <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
    <h2 class="text-3xl font-semibold mb-6">ご連絡お待ちしております</h2>
    <p class="text-lg text-gray-300 mb-6">
      新しいアイデアのご相談やコラボレーションをご希望ですか？ぜひお気軽にご連絡ください。.
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
<section class="py-20 px-6 bg-white dark:bg-gray-900 text-center" id="contact-form" >
    <div class="max-w-6xl mx-auto" data-aos="fade-up" style="">
      <h2 class="text-3xl font-semibold mb-6 gradient-text">Send a Message</h2>
      <form id="contactForm" action="https://formspree.io/f/manervor" method="POST" class="space-y-6 text-left">
        <!-- Modal status handled separately -->
      
        <div class="relative z-0 w-full group">
          <input type="text" name="name" id="name" required
            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 dark:text-white dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring-0"
            placeholder=" " />
          <label for="name"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:translate-y-2.5 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">
            お名前</label>
        </div>
      
        <div class="relative z-0 w-full group">
          <input type="email" name="_replyto" id="email" required
            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 dark:text-white dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring-0"
            placeholder=" " />
          <label for="email"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:translate-y-2.5 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">
            メールアドレス</label>
        </div>
      
        <div class="relative z-0 w-full group">
          <textarea name="message" id="message" rows="5" required
            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 dark:text-white dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring-0 resize-none"
            placeholder=" "></textarea>
          <label for="message"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:translate-y-2.5 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">
            メッセージ</label>
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

<footer class="bg-gray-800 text-gray-400 text-center py-4">
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
      <h3 class="text-xl font-semibold mb-4 text-green-600 dark:text-green-400">Message Sent!</h3>
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

// GitHub Feed
const githubUser = "bernardlawes";
//const token = ""; // Replace with your token


fetch(`https://api.github.com/users/${githubUser}/repos?sort=updated&per_page=17`, {
  headers: {
    Authorization: `token ${token}`
  }
})
  .then(res => res.json())
  .then(data => {
    if (!Array.isArray(data)) {
      console.error("GitHub API error:", data);
      return;
    }

    const container = document.getElementById("githubFeed");
    data.forEach(repo => {
      if (repo.name === githubUser) return;
      if (repo.name === "personal-profile") return;
      if (repo.name.includes("csharp")) return;
      
      const repoCard = document.createElement("div");
      repoCard.className = "bg-white dark:bg-gray-800 p-4 rounded shadow";

      const title = `<h3 class="text-lg font-semibold mb-1">
        <a href="${repo.html_url}" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">${repo.name}</a>
      </h3>`;

      const description = `<p class="text-sm mb-2">${repo.description || "No description provided."}</p>`;

      repoCard.innerHTML = title + description;

      fetch(repo.languages_url, {
        headers: {
          Authorization: `token ${token}`
        }
      })
        .then(langRes => langRes.json())
        .then(languages => {
          const langList = Object.keys(languages);
          if (langList.length > 0) {
            const langs = langList.map(lang => `<span class='inline-block bg-gray-200 dark:bg-gray-700 text-xs px-2 py-1 rounded mr-1 mb-1'>${lang}</span>`).join(" ");
            const langWrapper = document.createElement("div");
            langWrapper.className = "mt-2 flex flex-wrap items-center text-xs text-gray-600 dark:text-gray-300";
            langWrapper.innerHTML = langs;
            repoCard.appendChild(langWrapper);
          }
        });

      container.appendChild(repoCard);
    });
  });
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
