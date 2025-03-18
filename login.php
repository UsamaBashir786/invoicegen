<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - InvoiceHub</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0fdfa',
              100: '#ccfbf1',
              200: '#99f6e4',
              300: '#5eead4',
              400: '#2dd4bf',
              500: '#14b8a6',
              600: '#0d9488',
              700: '#0f766e',
              800: '#115e59',
              900: '#134e4a',
            },
            secondary: {
              50: '#fdf4ff',
              100: '#fae8ff',
              200: '#f5d0fe',
              300: '#f0abfc',
              400: '#e879f9',
              500: '#d946ef',
              600: '#c026d3',
              700: '#a21caf',
              800: '#86198f',
              900: '#701a75',
            },
            dark: {
              50: '#f8fafc',
              100: '#f1f5f9',
              200: '#e2e8f0',
              300: '#cbd5e1',
              400: '#94a3b8',
              500: '#64748b',
              600: '#475569',
              700: '#334155',
              800: '#1e293b',
              900: '#0f172a',
              950: '#020617',
            }
          },
          fontFamily: {
            'sans': ['Inter', 'ui-sans-serif', 'system-ui'],
            'display': ['DM Sans', 'Inter', 'ui-sans-serif', 'system-ui'],
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'DM Sans', sans-serif;
    }

    .gradient-primary {
      background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
    }

    .gradient-secondary {
      background: linear-gradient(135deg, #d946ef 0%, #a21caf 100%);
    }

    .blob {
      border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
      animation: morph 8s linear infinite;
    }

    .blob-2 {
      border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
      animation: morph 8s linear infinite alternate;
    }

    @keyframes morph {
      0% {
        border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
      }

      50% {
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
      }

      100% {
        border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
      }
    }
  </style>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
  <!-- Header/Navigation -->
  <header class="bg-white shadow-sm">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <a href="index.php" class="flex items-center space-x-2">
          <div class="flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 rounded-xl gradient-primary">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <span class="text-xl sm:text-2xl font-bold text-dark-900">Invoice<span class="text-primary-600">Hub</span></span>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-4">
          <a href="register.php" class="text-dark-600 hover:text-primary-600 font-medium transition-colors">Register</a>
          <a href="#" class="px-5 py-2 gradient-primary hover:opacity-90 text-white font-medium rounded-xl transition-all shadow-sm shadow-primary-300">
            Contact Sales
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button type="button" id="mobile-menu-button" class="text-dark-600 hover:text-primary-600 focus:outline-none">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navigation (Hidden by default) -->
      <div id="mobile-menu" class="md:hidden hidden py-3 pb-4 border-t border-dark-100">
        <div class="flex flex-col space-y-3">
          <a href="register.php" class="px-2 py-2 text-dark-600 hover:text-primary-600 font-medium transition-colors">Register</a>
          <a href="#" class="px-4 py-2 gradient-primary hover:opacity-90 text-white font-medium rounded-xl transition-all shadow-sm shadow-primary-300 text-center">
            Contact Sales
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- Add this script at the end of your body tag -->
  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
  </script>
  <!-- Login Section -->
  <div class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative">
    <div class="absolute top-0 right-0 -z-10 w-1/2 h-1/2 opacity-10">
      <div class="absolute top-0 right-0 w-full h-full blob bg-gradient-to-r from-primary-300 via-primary-400 to-secondary-400"></div>
    </div>
    <div class="absolute bottom-0 left-0 -z-10 w-1/2 h-1/2 opacity-10">
      <div class="absolute bottom-0 left-0 w-full h-full blob-2 bg-gradient-to-r from-secondary-300 via-secondary-400 to-primary-400"></div>
    </div>

    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-2xl shadow-lg">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-dark-900">Sign in to your account</h2>
        <p class="mt-2 text-center text-sm text-dark-500">
          Or
          <a href="register.php" class="font-medium text-primary-600 hover:text-primary-500">
            create a new account
          </a>
        </p>
      </div>
      <form class="mt-8 space-y-6" action="#" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md -space-y-px">
          <div class="mb-4">
            <label for="email-address" class="block text-sm font-medium text-dark-700 mb-1">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Email address">
          </div>
          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-dark-700 mb-1">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Password">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-dark-300 rounded">
            <label for="remember-me" class="ml-2 block text-sm text-dark-700">
              Remember me
            </label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-primary-600 hover:text-primary-500">
              Forgot your password?
            </a>
          </div>
        </div>

        <div>
          <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white gradient-primary hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all shadow-sm shadow-primary-200">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-primary-100 group-hover:text-primary-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Sign in
          </button>
        </div>
      </form>

      <div class="mt-6">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-dark-300"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-white text-dark-500">Or continue with</span>
          </div>
        </div>

        <div class="mt-6 grid grid-cols-2 gap-3">
          <div>
            <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-dark-300 rounded-lg shadow-sm text-sm font-medium text-dark-700 bg-white hover:bg-dark-50 transition-colors">
              <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z" />
              </svg>
              Google
            </a>
          </div>

          <div>
            <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-dark-300 rounded-lg shadow-sm text-sm font-medium text-dark-700 bg-white hover:bg-dark-50 transition-colors">
              <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
              </svg>
              Facebook
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white border-t border-dark-200 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center space-x-1">
          <p class="text-dark-500 text-sm">
            &copy; 2025 InvoiceHub. All rights reserved.
          </p>
        </div>
        <div class="flex space-x-6 mt-4 md:mt-0">
          <a href="#" class="text-dark-500 hover:text-primary-600 transition-colors text-sm">Terms</a>
          <a href="#" class="text-dark-500 hover:text-primary-600 transition-colors text-sm">Privacy</a>
          <a href="#" class="text-dark-500 hover:text-primary-600 transition-colors text-sm">Security</a>
          <a href="#" class="text-dark-500 hover:text-primary-600 transition-colors text-sm">Help</a>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>