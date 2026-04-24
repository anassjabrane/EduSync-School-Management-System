<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>EduSync | Secure Auth</title>
  <style>
    
    .bg-gradient-animate {
      background: radial-gradient(circle at top right, #6366f1 0%, transparent 25%),
                  radial-gradient(circle at bottom left, #4338ca 0%, transparent 25%),
                  #020617;
    }
  </style>
</head>

<body class="bg-gradient-animate text-white min-h-screen font-sans">

<nav class="flex justify-between items-center px-10 py-6 backdrop-blur-md bg-slate-900/50 sticky top-0 z-50 border-b border-slate-800">
  
  <div class="flex items-center space-x-2 group cursor-pointer">
    <div class="bg-indigo-500 p-2 rounded-lg rotate-3 group-hover:rotate-0 transition-transform duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A10.003 10.003 0 0012 3c1.72 0 3.347.433 4.775 1.202m1.94 3.405a9.968 9.968 0 011.033 4.393m-4.008 4.008a10.012 10.012 0 01-1.033 4.393" />
      </svg>
    </div>
    <h1 class="text-2xl font-black tracking-tighter italic">EDU<span class="text-indigo-400">SYNC</span></h1>
  </div>

  <div class="flex items-center space-x-6">
    <a href="login.php" class="text-slate-300 hover:text-white transition font-medium">Login</a>
    <a href="register.php" class="px-5 py-2.5 bg-white text-slate-950 rounded-full font-bold hover:bg-indigo-100 transition shadow-lg shadow-indigo-500/20">
      Join Us
    </a>
  </div>
</nav>

<section class="relative flex flex-col items-center justify-center text-center py-32 px-6 overflow-hidden">
  
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-600/20 blur-[120px] -z-10"></div>

  <div class="max-w-4xl">
    <span class="px-4 py-1.5 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-400 text-sm font-medium mb-6 inline-block">
      🛡️ Master PHP Validation & Sanitization
    </span>

    <h2 class="text-6xl md:text-7xl font-extrabold mb-6 tracking-tight leading-tight">
      Build <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-cyan-400">Secure</span> 
      Web Apps <br> from Scratch.
    </h2>

    <p class="text-slate-400 text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
      Apprenez à coder proprement. Maîtrisez l'art de la sécurité côté serveur avec une interface moderne et fluide.
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <a href="register.php" 
         class="group relative px-8 py-4 bg-indigo-600 rounded-2xl text-lg font-bold hover:bg-indigo-500 transition-all shadow-xl shadow-indigo-600/30 flex items-center">
         Start Learning Now
         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
         </svg>
      </a>
      <a href="#features" class="px-8 py-4 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl text-lg font-semibold hover:bg-slate-800 transition">
         Explore Roadmap
      </a>
    </div>
  </div>

  <div class="mt-16 opacity-50 grayscale hover:grayscale-0 transition duration-500">
    <p class="text-xs font-mono text-indigo-300"># Security First Approach</p>
  </div>

</section>

</body>
</html>