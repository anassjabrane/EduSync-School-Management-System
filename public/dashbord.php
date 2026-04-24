<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard</title>
</head>

<body class="bg-slate-950 text-white">

<div class="flex min-h-screen">

  <!-- Sidebar -->
  <aside class="w-64 bg-slate-900 p-6 border-r border-slate-700">
    <h1 class="text-2xl font-bold mb-10">EduSync</h1>

    <nav class="space-y-4">
      <a href="#" class="block p-2 rounded hover:bg-slate-800">🏠 Dashboard</a>
      <a href="#" class="block p-2 rounded hover:bg-slate-800">👤 Profile</a>
      <a href="#" class="block p-2 rounded hover:bg-slate-800">📊 Analytics</a>
      <a href="#" class="block p-2 rounded hover:bg-slate-800">⚙️ Settings</a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 p-8">

    <!-- Header -->
    <div class="mb-8">
      <h2 class="text-3xl font-bold">Welcome back 👋</h2>
      <p class="text-slate-400">Here is your dashboard overview</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <div class="bg-slate-900 p-6 rounded-xl border border-slate-700 hover:scale-105 transition">
        <h3 class="text-lg">Users</h3>
        <p class="text-3xl font-bold mt-2">1,240</p>
      </div>

      <div class="bg-slate-900 p-6 rounded-xl border border-slate-700 hover:scale-105 transition">
        <h3 class="text-lg">Sessions</h3>
        <p class="text-3xl font-bold mt-2">3,560</p>
      </div>

      <div class="bg-slate-900 p-6 rounded-xl border border-slate-700 hover:scale-105 transition">
        <h3 class="text-lg">Revenue</h3>
        <p class="text-3xl font-bold mt-2">$8,920</p>
      </div>

    </div>

    <!-- Chart box -->
    <div class="mt-8 bg-slate-900 h-72 rounded-xl border border-slate-700 flex items-center justify-center">
      <p class="text-slate-400">📊 Chart Area</p>
    </div>

  </main>

</div>

</body>
</html>