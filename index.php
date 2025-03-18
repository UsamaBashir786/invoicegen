<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InvoiceHub | Smart Invoicing for Modern Businesses</title>
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
          },
          backgroundImage: {
            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
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
      scroll-behavior: smooth;
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

    .gradient-text {
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-image: linear-gradient(to right, #14b8a6, #0d9488);
    }

    .gradient-border {
      position: relative;
      border-radius: 0.75rem;
      background: white;
      z-index: 1;
    }

    .gradient-border::before {
      content: "";
      position: absolute;
      inset: -2px;
      border-radius: 0.875rem;
      background: linear-gradient(135deg, #14b8a6 0%, #0d9488 50%, #d946ef 100%);
      z-index: -1;
    }

    .shadow-custom {
      box-shadow: 0 10px 40px -5px rgba(0, 0, 0, 0.1);
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

    /* Glass effect */
    .glass {
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .feature-card {
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-8px);
    }

    /* Animations */
    .animate-float {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    .pricing-card {
      transition: all 0.3s ease;
    }

    .pricing-card:hover {
      transform: translateY(-8px);
    }

    /* Hamburger Menu */
    .hamburger {
      cursor: pointer;
      width: 24px;
      height: 24px;
      position: relative;
    }

    .hamburger-line {
      display: block;
      background: #475569;
      height: 2px;
      position: absolute;
      left: 0;
      right: 0;
      transition: all 0.3s ease;
    }

    .hamburger-line:nth-child(1) {
      top: 6px;
    }

    .hamburger-line:nth-child(2) {
      top: 12px;
    }

    .hamburger-line:nth-child(3) {
      top: 18px;
    }

    .hamburger.active .hamburger-line:nth-child(1) {
      transform: translateY(6px) rotate(45deg);
    }

    .hamburger.active .hamburger-line:nth-child(2) {
      opacity: 0;
    }

    .hamburger.active .hamburger-line:nth-child(3) {
      transform: translateY(-6px) rotate(-45deg);
    }
  </style>
</head>

<body class="bg-white">
  <!-- Navigation -->
  <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/90 backdrop-blur-md border-b border-dark-200/50" id="navbar">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <div class="flex items-center">
          <a href="#" class="flex items-center space-x-2">
            <div class="flex items-center justify-center w-10 h-10 rounded-xl gradient-primary">
              <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-2xl font-bold text-dark-900">Invoice<span class="text-primary-600">Hub</span></span>
          </a>
        </div>
        <div class="hidden md:flex items-center space-x-8">
          <a href="#features" class="text-sm font-medium text-dark-600 hover:text-primary-600 transition-colors">Features</a>
          <a href="#how-it-works" class="text-sm font-medium text-dark-600 hover:text-primary-600 transition-colors">How It Works</a>
          <a href="#pricing" class="text-sm font-medium text-dark-600 hover:text-primary-600 transition-colors">Pricing</a>
          <a href="#testimonials" class="text-sm font-medium text-dark-600 hover:text-primary-600 transition-colors">Testimonials</a>
          <a href="#" class="text-sm font-medium text-dark-600 hover:text-primary-600 transition-colors">Login</a>
          <a href="#" class="px-5 py-2.5 gradient-primary hover:opacity-90 text-white font-medium rounded-xl transition-all shadow-sm shadow-primary-300">
            Get Started
          </a>
        </div>
        <div class="md:hidden flex items-center">
          <button id="mobile-menu-button" class="hamburger focus:outline-none">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
          </button>
        </div>
      </div>
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden bg-white rounded-xl shadow-lg mt-2 py-4 px-6 hidden">
        <a href="#features" class="block py-3 text-dark-600 hover:text-primary-600 font-medium">Features</a>
        <a href="#how-it-works" class="block py-3 text-dark-600 hover:text-primary-600 font-medium">How It Works</a>
        <a href="#pricing" class="block py-3 text-dark-600 hover:text-primary-600 font-medium">Pricing</a>
        <a href="#testimonials" class="block py-3 text-dark-600 hover:text-primary-600 font-medium">Testimonials</a>
        <a href="#" class="block py-3 text-dark-600 hover:text-primary-600 font-medium">Login</a>
        <a href="#" class="block mt-4 px-5 py-3 gradient-primary hover:opacity-90 text-white font-medium rounded-xl text-center transition-colors shadow-sm shadow-primary-300">
          Get Started
        </a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="pt-32 pb-20 md:pt-40 md:pb-24 overflow-hidden relative">
    <div class="absolute top-0 right-0 -z-10 w-2/3 h-2/3 opacity-10">
      <div class="absolute top-0 right-0 w-full h-full blob bg-gradient-to-r from-primary-300 via-primary-400 to-secondary-400"></div>
    </div>
    <div class="absolute bottom-0 left-0 -z-10 w-1/2 h-1/2 opacity-10">
      <div class="absolute bottom-0 left-0 w-full h-full blob-2 bg-gradient-to-r from-secondary-300 via-secondary-400 to-primary-400"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 md:pr-12 mb-12 md:mb-0">
          <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-50 text-primary-600 font-medium text-sm mb-6">
            <span class="flex h-2 w-2 rounded-full bg-primary-500 mr-2"></span>
            Invoicing made simple
          </div>
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-dark-900">
            Create & send professional invoices in <span class="gradient-text">seconds</span>
          </h1>
          <p class="text-lg md:text-xl text-dark-600 mb-8 max-w-2xl">
            The all-in-one invoicing platform for freelancers, small businesses, and agencies. Streamline your billing process and get paid faster.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#" class="px-8 py-4 text-center gradient-primary hover:opacity-90 text-white font-semibold rounded-xl shadow-md shadow-primary-200 transition-all">
              Start for Free
            </a>
            <a href="#" class="px-8 py-4 text-center bg-white border border-dark-200 hover:border-primary-500 hover:text-primary-600 text-dark-700 font-semibold rounded-xl transition-all">
              Watch Demo
              <i class="fas fa-play-circle ml-2"></i>
            </a>
          </div>
          <div class="mt-8 flex items-center text-dark-500">
            <div class="flex items-center">
              <i class="fas fa-check-circle text-primary-500 mr-2"></i>
              <span>No credit card required</span>
            </div>
            <div class="mx-4 h-1 w-1 rounded-full bg-dark-300"></div>
            <div class="flex items-center">
              <i class="fas fa-check-circle text-primary-500 mr-2"></i>
              <span>14-day free trial</span>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <div class="relative">
            <div class="absolute -top-10 -left-10 w-64 h-64 bg-primary-100 rounded-full opacity-70 blur-3xl"></div>
            <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-secondary-100 rounded-full opacity-70 blur-3xl"></div>
            <div class="relative shadow-custom animate-float">
              <img src="/api/placeholder/800/600" alt="InvoiceHub Dashboard" class="relative z-10 rounded-2xl w-full max-w-xl mx-auto" />
              <!-- Floating Elements -->
              <div class="absolute -top-6 -right-6 bg-white shadow-lg rounded-2xl p-4 z-20 flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                  <i class="fas fa-check"></i>
                </div>
                <div>
                  <p class="text-dark-900 font-medium">Payment Received</p>
                  <p class="text-dark-500 text-sm">$1,250.00</p>
                </div>
              </div>
              <div class="absolute -bottom-6 -left-6 bg-white shadow-lg rounded-2xl p-4 z-20">
                <div class="flex items-center space-x-4 mb-2">
                  <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-500">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <p class="text-dark-900 font-medium">This month</p>
                </div>
                <p class="text-3xl font-bold text-dark-900">$12,580</p>
                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i> 14.5% from last month</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Trusted by section -->
      <div class="mt-24">
        <p class="text-center text-dark-500 mb-8">Trusted by 10,000+ businesses worldwide</p>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 justify-items-center items-center">
          <img src="/api/placeholder/120/40" alt="Company Logo" class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
          <img src="/api/placeholder/120/40" alt="Company Logo" class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
          <img src="/api/placeholder/120/40" alt="Company Logo" class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
          <img src="/api/placeholder/120/40" alt="Company Logo" class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
          <img src="/api/placeholder/120/40" alt="Company Logo" class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-20 bg-gradient-to-b from-white to-primary-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-50 text-primary-600 font-medium text-sm mb-4">
          <span class="flex h-2 w-2 rounded-full bg-primary-500 mr-2"></span>
          FEATURES
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark-900">
          Everything you need to manage invoices
        </h2>
        <p class="text-lg text-dark-600 max-w-3xl mx-auto">
          Our platform is designed to help you streamline your invoicing process, so you can focus on growing your business.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 text-white">
            <i class="fas fa-file-invoice text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-dark-900">Easy Invoice Creation</h3>
          <p class="text-dark-600">
            Create professional invoices in seconds with our intuitive interface and customizable templates. Add your branding and personalize to match your business identity.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 text-white">
            <i class="fas fa-calculator text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-dark-900">Automatic Tax Calculation</h3>
          <p class="text-dark-600">
            Our system automatically calculates taxes based on your location and client's address, ensuring compliance with tax regulations worldwide.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 text-white">
            <i class="fas fa-lock text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-dark-900">Secure Payments</h3>
          <p class="text-dark-600">
            Accept payments directly through your invoices with our secure payment gateway integrations. Support for credit cards, PayPal, and more.
          </p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 text-white">
            <i class="fas fa-sync-alt text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-dark-900">Recurring Invoices</h3>
          <p class="text-dark-600">
            Set up automatic recurring invoices for your regular clients. Schedule them to be sent automatically and never forget to bill again.
          </p>
        </div>

        <!-- Feature 5 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 text-white">
            <i class="fas fa-chart-line text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-dark-900">Financial Reporting</h3>
          <p class="text-dark-600">
            Access detailed reports on your finances, including income, outstanding payments, and tax liabilities. Export data for your accountant.
          </p>
        </div>

        <!-- Feature 6 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 text-white">
            <i class="fas fa-mobile-alt text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-dark-900">Mobile Friendly</h3>
          <p class="text-dark-600">
            Create and send invoices on the go with our mobile-friendly platform. Available on iOS and Android or use our responsive web app.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section id="how-it-works" class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-100 text-primary-700 font-medium text-sm mb-4">
          <span class="flex h-2 w-2 rounded-full bg-primary-500 mr-2"></span>
          HOW IT WORKS
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark-900">
          Get started in 3 simple steps
        </h2>
        <p class="text-lg text-dark-600 max-w-3xl mx-auto">
          Our platform is designed to be intuitive and easy to use, so you can start invoicing right away.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <!-- Step 1 -->
        <div class="relative">
          <div class="absolute -top-5 -left-5 w-12 h-12 rounded-full gradient-primary flex items-center justify-center text-white font-bold text-xl z-10 shadow-lg">1</div>
          <div class="bg-white border-2 border-primary-500 p-8 h-full rounded-xl shadow-md">
            <div class="text-center mb-6">
              <div class="w-20 h-20 mx-auto mb-4 text-primary-600">
                <i class="fas fa-user-plus text-5xl"></i>
              </div>
              <h3 class="text-xl font-bold text-dark-900">Create Your Account</h3>
              <p class="text-dark-600 mt-4">
                Sign up for free in less than a minute. No credit card required to get started with our platform.
              </p>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative">
          <div class="absolute -top-5 -left-5 w-12 h-12 rounded-full gradient-primary flex items-center justify-center text-white font-bold text-xl z-10 shadow-lg">2</div>
          <div class="bg-white border-2 border-primary-500 p-8 h-full rounded-xl shadow-md">
            <div class="text-center mb-6">
              <div class="w-20 h-20 mx-auto mb-4 text-primary-600">
                <i class="fas fa-paint-brush text-5xl"></i>
              </div>
              <h3 class="text-xl font-bold text-dark-900">Customize Your Template</h3>
              <p class="text-dark-600 mt-4">
                Add your logo, choose your colors, and customize your invoice template to match your brand identity.
              </p>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="relative">
          <div class="absolute -top-5 -left-5 w-12 h-12 rounded-full gradient-primary flex items-center justify-center text-white font-bold text-xl z-10 shadow-lg">3</div>
          <div class="bg-white border-2 border-primary-500 p-8 h-full rounded-xl shadow-md">
            <div class="text-center mb-6">
              <div class="w-20 h-20 mx-auto mb-4 text-primary-600">
                <i class="fas fa-paper-plane text-5xl"></i>
              </div>
              <h3 class="text-xl font-bold text-dark-900">Send Your First Invoice</h3>
              <p class="text-dark-600 mt-4">
                Create and send your first invoice in seconds. Get notified when your client views or pays your invoice.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-20 mx-auto max-w-6xl">
        <div class="bg-primary-100 p-10 rounded-3xl shadow-lg">
          <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-10">
              <div class="inline-flex items-center px-4 py-2 rounded-full bg-white text-primary-700 font-medium text-sm mb-4 shadow-sm">
                <i class="fas fa-bolt mr-2"></i>
                Lightning Fast
              </div>
              <h3 class="text-2xl md:text-3xl font-bold mb-4 text-dark-900">
                Invoice creation in under 30 seconds
              </h3>
              <p class="text-dark-700 mb-6">
                Our intelligent invoice generator helps you create professional invoices in record time. Just fill in a few details and let us do the rest.
              </p>
              <ul class="space-y-4">
                <li class="flex items-start">
                  <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                    <i class="fas fa-check text-xs"></i>
                  </div>
                  <span class="text-dark-800">Smart templates that adapt to your business</span>
                </li>
                <li class="flex items-start">
                  <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                    <i class="fas fa-check text-xs"></i>
                  </div>
                  <span class="text-dark-800">Client and product data is saved for quick reuse</span>
                </li>
                <li class="flex items-start">
                  <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                    <i class="fas fa-check text-xs"></i>
                  </div>
                  <span class="text-dark-800">Automatic calculations eliminate math errors</span>
                </li>
              </ul>
            </div>
            <div class="md:w-1/2">
              <img src="/api/placeholder/600/400" alt="InvoiceHub App Screenshot" class="rounded-2xl shadow-lg border-4 border-white">
            </div>
          </div>
        </div>
      </div>

      <div class="mt-16 text-center">
        <a href="#" class="px-8 py-4 gradient-primary hover:opacity-90 text-white font-semibold rounded-xl shadow-lg shadow-primary-200 transition-all inline-block">
          Start Creating Invoices
        </a>
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section id="pricing" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-primary-50 to-white -z-10"></div>
    <div class="absolute top-0 right-0 -z-10 w-1/2 h-1/2 opacity-5">
      <div class="absolute top-0 right-0 w-full h-full blob bg-gradient-to-r from-primary-300 via-primary-400 to-secondary-400"></div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-50 text-primary-600 font-medium text-sm mb-4">
          <span class="flex h-2 w-2 rounded-full bg-primary-500 mr-2"></span>
          PRICING
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark-900">
          Simple, transparent pricing
        </h2>
        <p class="text-lg text-dark-600 max-w-3xl mx-auto">
          Choose the plan that works best for your business. All plans include core features.
        </p>
      </div>

      <div class="flex flex-col md:flex-row gap-8 max-w-5xl mx-auto">
        <!-- Free Plan -->
        <div class="flex-1 bg-white rounded-2xl shadow-custom pricing-card overflow-hidden">
          <div class="p-8">
            <h3 class="text-xl font-bold mb-2 text-dark-900">Free</h3>
            <p class="text-dark-600 mb-6">Perfect for freelancers just starting out</p>
            <div class="text-4xl font-bold mb-2">$0<span class="text-base font-normal text-dark-500">/month</span></div>
            <p class="text-dark-500 mb-6">Free forever</p>

            <ul class="space-y-3 mb-8">
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Up to 5 clients</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Up to 10 invoices per month</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Basic invoice templates</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Email support</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>InvoiceHub branding</span>
              </li>
            </ul>

            <a href="#" class="block text-center py-3 px-4 border border-primary-600 text-primary-600 hover:bg-primary-50 font-semibold rounded-xl transition-all">
              Get Started
            </a>
          </div>
        </div>

        <!-- Pro Plan -->
        <div class="flex-1 bg-white rounded-2xl shadow-custom pricing-card overflow-hidden relative border-2 border-primary-500 md:scale-105 z-10">
          <div class="absolute top-0 right-0 bg-primary-500 text-white px-4 py-1 text-sm font-medium">
            MOST POPULAR
          </div>
          <div class="p-8">
            <h3 class="text-xl font-bold mb-2 text-dark-900">Pro</h3>
            <p class="text-dark-600 mb-6">For growing businesses and agencies</p>
            <div class="text-4xl font-bold mb-2">$19<span class="text-base font-normal text-dark-500">/month</span></div>
            <p class="text-dark-500 mb-6">Billed monthly or $190/year</p>

            <ul class="space-y-3 mb-8">
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Unlimited clients</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Unlimited invoices</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Custom templates</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Recurring invoices</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Priority email support</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Remove InvoiceHub branding</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Advanced reporting</span>
              </li>
            </ul>

            <a href="#" class="block text-center py-3 px-4 gradient-primary hover:opacity-90 text-white font-semibold rounded-xl transition-all">
              Get Started
            </a>
          </div>
        </div>

        <!-- Enterprise Plan -->
        <div class="flex-1 bg-white rounded-2xl shadow-custom pricing-card overflow-hidden">
          <div class="p-8">
            <h3 class="text-xl font-bold mb-2 text-dark-900">Enterprise</h3>
            <p class="text-dark-600 mb-6">For larger teams and organizations</p>
            <div class="text-4xl font-bold mb-2">$49<span class="text-base font-normal text-dark-500">/month</span></div>
            <p class="text-dark-500 mb-6">Billed monthly or $490/year</p>

            <ul class="space-y-3 mb-8">
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Everything in Pro</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Multiple user accounts</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>API access</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Advanced customization</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Dedicated account manager</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-check text-primary-500 mr-3"></i>
                <span>Phone & email support</span>
              </li>
            </ul>

            <a href="#" class="block text-center py-3 px-4 border border-primary-600 text-primary-600 hover:bg-primary-50 font-semibold rounded-xl transition-all">
              Contact Sales
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-50 text-primary-600 font-medium text-sm mb-4">
          <span class="flex h-2 w-2 rounded-full bg-primary-500 mr-2"></span>
          TESTIMONIALS
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark-900">
          Trusted by thousands of businesses
        </h2>
        <p class="text-lg text-dark-600 max-w-3xl mx-auto">
          Don't take our word for it. See what our customers have to say about InvoiceHub.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="flex text-yellow-400 mb-6">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="text-dark-600 mb-8 italic">
            "InvoiceHub has completely transformed how I handle billing. I used to spend hours creating invoices and following up with clients. Now it's all automated, and I get paid faster than ever!"
          </p>
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
              <img src="/api/placeholder/100/100" alt="Client Photo" class="w-full h-full object-cover" />
            </div>
            <div>
              <h4 class="font-bold text-dark-900">Sarah Johnson</h4>
              <p class="text-sm text-dark-500">Freelance Designer</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="flex text-yellow-400 mb-6">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="text-dark-600 mb-8 italic">
            "As our agency grew, we needed a more robust invoicing solution. InvoiceHub's team account features allow our entire staff to create and manage invoices while maintaining our brand consistency."
          </p>
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
              <img src="/api/placeholder/100/100" alt="Client Photo" class="w-full h-full object-cover" />
            </div>
            <div>
              <h4 class="font-bold text-dark-900">Michael Roberts</h4>
              <p class="text-sm text-dark-500">Agency Owner</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white p-8 rounded-2xl shadow-custom feature-card">
          <div class="flex text-yellow-400 mb-6">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="text-dark-600 mb-8 italic">
            "The recurring invoice feature alone is worth the subscription. I've set up automatic billing for all my retainer clients, and it's saved me countless hours. The customer support team is also incredibly responsive."
          </p>
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
              <img src="/api/placeholder/100/100" alt="Client Photo" class="w-full h-full object-cover" />
            </div>
            <div>
              <h4 class="font-bold text-dark-900">David Chen</h4>
              <p class="text-sm text-dark-500">E-commerce Entrepreneur</p>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-16 text-center">
        <div class="inline-flex items-center text-primary-600 font-semibold cursor-pointer hover:text-primary-700 transition-colors">
          <span>Read more customer stories</span>
          <i class="fas fa-arrow-right ml-2"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="py-20 bg-gradient-to-b from-white to-primary-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-50 text-primary-600 font-medium text-sm mb-4">
          <span class="flex h-2 w-2 rounded-full bg-primary-500 mr-2"></span>
          FAQ
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark-900">
          Frequently Asked Questions
        </h2>
        <p class="text-lg text-dark-600 max-w-3xl mx-auto">
          Have questions? We've got answers.
        </p>
      </div>

      <div class="max-w-3xl mx-auto">
        <!-- FAQ Item 1 -->
        <div class="mb-6">
          <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <details class="group">
              <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                <span class="text-lg text-dark-900 font-semibold">How do I get started with InvoiceHub?</span>
                <span class="transition group-open:rotate-180">
                  <i class="fas fa-chevron-down text-primary-500"></i>
                </span>
              </summary>
              <div class="px-6 pb-6 text-dark-600 group-open:animate-fadeIn">
                Getting started is easy! Simply click the "Sign Up" button, create your account, and you'll be creating invoices in minutes. We offer a 14-day free trial of our Pro plan, no credit card required.
              </div>
            </details>
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="mb-6">
          <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <details class="group">
              <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                <span class="text-lg text-dark-900 font-semibold">Can I customize my invoices?</span>
                <span class="transition group-open:rotate-180">
                  <i class="fas fa-chevron-down text-primary-500"></i>
                </span>
              </summary>
              <div class="px-6 pb-6 text-dark-600 group-open:animate-fadeIn">
                Absolutely! All plans allow you to customize your invoices. You can add your logo, change colors, and customize the layout. Pro and Enterprise plans offer advanced customization options, including custom fields and template design.
              </div>
            </details>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="mb-6">
          <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <details class="group">
              <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                <span class="text-lg text-dark-900 font-semibold">Which payment methods are supported?</span>
                <span class="transition group-open:rotate-180">
                  <i class="fas fa-chevron-down text-primary-500"></i>
                </span>
              </summary>
              <div class="px-6 pb-6 text-dark-600 group-open:animate-fadeIn">
                InvoiceHub integrates with major payment processors including Stripe, PayPal, and Square. Your clients can pay invoices using credit cards, ACH transfers, or digital wallets like Apple Pay and Google Pay.
              </div>
            </details>
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="mb-6">
          <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <details class="group">
              <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                <span class="text-lg text-dark-900 font-semibold">Can I switch plans later?</span>
                <span class="transition group-open:rotate-180">
                  <i class="fas fa-chevron-down text-primary-500"></i>
                </span>
              </summary>
              <div class="px-6 pb-6 text-dark-600 group-open:animate-fadeIn">
                Yes, you can upgrade or downgrade your plan at any time. If you upgrade, the new features will be immediately available. If you downgrade, the changes will take effect at the start of your next billing cycle.
              </div>
            </details>
          </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="mb-6">
          <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <details class="group">
              <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                <span class="text-lg text-dark-900 font-semibold">Is my data secure?</span>
                <span class="transition group-open:rotate-180">
                  <i class="fas fa-chevron-down text-primary-500"></i>
                </span>
              </summary>
              <div class="px-6 pb-6 text-dark-600 group-open:animate-fadeIn">
                We take security very seriously. All data is encrypted both in transit and at rest. We use bank-level security measures and comply with industry standards for data protection. Our system is regularly audited for security vulnerabilities.
              </div>
            </details>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 gradient-primary text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
          Ready to streamline your invoicing process?
        </h2>
        <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">
          Join thousands of businesses that trust InvoiceHub to handle their invoicing needs. Start your 14-day free trial today.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="#" class="px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl shadow-lg hover:bg-opacity-90 transition-all">
            Start Your Free Trial
          </a>
          <a href="#" class="px-8 py-4 border border-white text-white font-semibold rounded-xl hover:bg-white hover:bg-opacity-10 transition-all">
            Schedule a Demo
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark-900 text-white py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
        <!-- Company Info -->
        <div>
          <div class="flex items-center mb-6">
            <div class="flex items-center justify-center w-10 h-10 rounded-xl gradient-primary mr-2">
              <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-xl font-bold ml-2">Invoice<span class="text-primary-400">Hub</span></span>
          </div>
          <p class="text-dark-400 mb-6">
            The all-in-one invoicing solution for freelancers, small businesses, and agencies.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-dark-400 hover:text-primary-400 transition-colors h-10 w-10 rounded-full border border-dark-700 flex items-center justify-center">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-dark-400 hover:text-primary-400 transition-colors h-10 w-10 rounded-full border border-dark-700 flex items-center justify-center">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-dark-400 hover:text-primary-400 transition-colors h-10 w-10 rounded-full border border-dark-700 flex items-center justify-center">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-dark-400 hover:text-primary-400 transition-colors h-10 w-10 rounded-full border border-dark-700 flex items-center justify-center">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>

        <!-- Product -->
        <div>
          <h4 class="text-lg font-bold mb-6">Product</h4>
          <ul class="space-y-3">
            <li><a href="#features" class="text-dark-400 hover:text-primary-400 transition-colors">Features</a></li>
            <li><a href="#pricing" class="text-dark-400 hover:text-primary-400 transition-colors">Pricing</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Integrations</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Updates</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Roadmap</a></li>
          </ul>
        </div>

        <!-- Company -->
        <div>
          <h4 class="text-lg font-bold mb-6">Company</h4>
          <ul class="space-y-3">
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">About Us</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Blog</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Careers</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Press</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Contact</a></li>
          </ul>
        </div>

        <!-- Legal -->
        <div>
          <h4 class="text-lg font-bold mb-6">Legal</h4>
          <ul class="space-y-3">
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Privacy Policy</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Terms of Service</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Cookie Policy</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">GDPR Compliance</a></li>
            <li><a href="#" class="text-dark-400 hover:text-primary-400 transition-colors">Security</a></li>
          </ul>
        </div>
      </div>

      <div class="border-t border-dark-800 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <p class="text-dark-400 mb-4 md:mb-0">
            &copy; 2025 InvoiceHub. All rights reserved.
          </p>
          <div class="flex space-x-6">
            <a href="#" class="text-dark-400 hover:text-primary-400 transition-colors text-sm">Terms</a>
            <a href="#" class="text-dark-400 hover:text-primary-400 transition-colors text-sm">Privacy</a>
            <a href="#" class="text-dark-400 hover:text-primary-400 transition-colors text-sm">Cookies</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      const hamburger = document.getElementById('mobile-menu-button');
      mobileMenu.classList.toggle('hidden');
      hamburger.classList.toggle('active');
    });

    // Sticky navbar
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 10) {
        navbar.classList.add('shadow-md');
      } else {
        navbar.classList.remove('shadow-md');
      }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });

          // Close mobile menu if open
          document.getElementById('mobile-menu').classList.add('hidden');
          document.getElementById('mobile-menu-button').classList.remove('active');
        }
      });
    });
  </script>
</body>

</html>