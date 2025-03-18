<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Sales - InvoiceHub</title>
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

    h1, h2, h3, h4, h5, h6 {
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
          <a href="login.php" class="text-dark-600 hover:text-primary-600 font-medium transition-colors">Login</a>
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
          <a href="login.php" class="px-2 py-2 text-dark-600 hover:text-primary-600 font-medium transition-colors">Login</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Contact Sales Section -->
  <div class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 relative">
    <div class="absolute top-0 right-0 -z-10 w-1/2 h-1/2 opacity-10">
      <div class="absolute top-0 right-0 w-full h-full blob bg-gradient-to-r from-primary-300 via-primary-400 to-secondary-400"></div>
    </div>
    <div class="absolute bottom-0 left-0 -z-10 w-1/2 h-1/2 opacity-10">
      <div class="absolute bottom-0 left-0 w-full h-full blob-2 bg-gradient-to-r from-secondary-300 via-secondary-400 to-primary-400"></div>
    </div>
    
    <div class="max-w-5xl mx-auto">
      <!-- Hero section -->
      <div class="text-center mb-16">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-dark-900 mb-6">Contact Our Sales Team</h1>
        <p class="text-lg md:text-xl text-dark-600 max-w-2xl mx-auto">
          Get in touch with our dedicated sales team to discover how InvoiceHub can help streamline your invoicing process.
        </p>
      </div>
      
      <!-- Contact form and info section -->
      <div class="flex flex-col lg:flex-row gap-10 items-start">
        <!-- Contact Form -->
        <div class="w-full lg:w-2/3 bg-white p-8 rounded-2xl shadow-lg">
          <h2 class="text-2xl font-bold text-dark-900 mb-6">Send us a message</h2>
          
          <form class="space-y-6" action="#" method="POST">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="first-name" class="block text-sm font-medium text-dark-700 mb-1">First Name <span class="text-red-500">*</span></label>
                <input id="first-name" name="first-name" type="text" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Your first name">
              </div>
              <div>
                <label for="last-name" class="block text-sm font-medium text-dark-700 mb-1">Last Name <span class="text-red-500">*</span></label>
                <input id="last-name" name="last-name" type="text" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Your last name">
              </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="email" class="block text-sm font-medium text-dark-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                <input id="email" name="email" type="email" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="you@example.com">
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-dark-700 mb-1">Phone Number</label>
                <input id="phone" name="phone" type="tel" class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="+1 (123) 456-7890">
              </div>
            </div>

            <div>
              <label for="company" class="block text-sm font-medium text-dark-700 mb-1">Company Name <span class="text-red-500">*</span></label>
              <input id="company" name="company" type="text" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Your company name">
            </div>

            <div>
              <label for="company-size" class="block text-sm font-medium text-dark-700 mb-1">Company Size</label>
              <select id="company-size" name="company-size" class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm">
                <option value="">Select company size</option>
                <option value="1-10">1-10 employees</option>
                <option value="11-50">11-50 employees</option>
                <option value="51-200">51-200 employees</option>
                <option value="201-500">201-500 employees</option>
                <option value="501+">501+ employees</option>
              </select>
            </div>

            <div>
              <label for="interest" class="block text-sm font-medium text-dark-700 mb-1">What are you interested in? <span class="text-red-500">*</span></label>
              <select id="interest" name="interest" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm">
                <option value="">Select your interest</option>
                <option value="Standard Plan">Standard Plan</option>
                <option value="Premium Plan">Premium Plan</option>
                <option value="Enterprise Plan">Enterprise Plan</option>
                <option value="Custom Solution">Custom Solution</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div>
              <label for="message" class="block text-sm font-medium text-dark-700 mb-1">Message <span class="text-red-500">*</span></label>
              <textarea id="message" name="message" rows="4" required class="appearance-none relative block w-full px-3 py-3 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Tell us about your needs and questions..."></textarea>
            </div>

            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="privacy" name="privacy" type="checkbox" required class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-dark-300 rounded">
              </div>
              <div class="ml-3 text-sm">
                <label for="privacy" class="font-medium text-dark-700">I agree to the <a href="#" class="text-primary-600 hover:text-primary-500">Privacy Policy</a> and consent to being contacted by InvoiceHub <span class="text-red-500">*</span></label>
              </div>
            </div>

            <div>
              <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white gradient-primary hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all shadow-md shadow-primary-200">
                Send Message
              </button>
            </div>
          </form>
        </div>
        
        <!-- Contact Info -->
        <div class="w-full lg:w-1/3 space-y-8">
          <!-- Contact Info Card -->
          <div class="bg-white p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-bold text-dark-900 mb-4">Contact Information</h3>
            
            <div class="space-y-4">
              <div class="flex items-start">
                <div class="mt-1 w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-4">
                  <i class="fas fa-envelope"></i>
                </div>
                <div>
                  <p class="text-sm text-dark-500 mb-1">Email</p>
                  <p class="font-medium text-dark-900">sales@invoicehub.com</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="mt-1 w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-4">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div>
                  <p class="text-sm text-dark-500 mb-1">Phone</p>
                  <p class="font-medium text-dark-900">+1 (800) 123-4567</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="mt-1 w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-4">
                  <i class="fas fa-clock"></i>
                </div>
                <div>
                  <p class="text-sm text-dark-500 mb-1">Business Hours</p>
                  <p class="font-medium text-dark-900">Monday - Friday: 9am - 5pm EST</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- FAQ Card -->
          <div class="bg-white p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-bold text-dark-900 mb-4">Frequently Asked</h3>
            
            <div class="space-y-4">
              <div>
                <h4 class="font-medium text-dark-800 mb-1">How long does it take to get a response?</h4>
                <p class="text-sm text-dark-600">We typically respond to all inquiries within 24 business hours.</p>
              </div>
              
              <div>
                <h4 class="font-medium text-dark-800 mb-1">Do you offer custom pricing?</h4>
                <p class="text-sm text-dark-600">Yes, we offer custom pricing for enterprises with specific needs.</p>
              </div>
              
              <div>
                <h4 class="font-medium text-dark-800 mb-1">Are there any long-term contracts?</h4>
                <p class="text-sm text-dark-600">No, all our plans are month-to-month with no long-term commitment required.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white border-t border-dark-200 py-8 mt-16">
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

  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>