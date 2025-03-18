<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Stories - InvoiceHub</title>
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

    .story-card {
      transition: all 0.3s ease;
    }

    .story-card:hover {
      transform: translateY(-5px);
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
          <a href="contact-sales.php" class="px-5 py-2 gradient-primary hover:opacity-90 text-white font-medium rounded-xl transition-all shadow-sm shadow-primary-300">
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
          <a href="login.php" class="px-2 py-2 text-dark-600 hover:text-primary-600 font-medium transition-colors">Login</a>
          <a href="contact-sales.php" class="px-4 py-2 gradient-primary hover:opacity-90 text-white font-medium rounded-xl transition-all shadow-sm shadow-primary-300 text-center">
            Contact Sales
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-primary-50">
    <div class="absolute top-0 right-0 -z-10 w-1/2 h-1/2 opacity-30">
      <div class="absolute top-0 right-0 w-full h-full blob bg-gradient-to-r from-primary-300 via-primary-400 to-secondary-400"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-dark-900 mb-6">Customer Success Stories</h1>
        <p class="text-lg md:text-xl text-dark-600">
          Discover how businesses of all sizes are transforming their invoicing processes and getting paid faster with InvoiceHub.
        </p>
      </div>
    </div>
  </section>

  <!-- Featured Story -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-col lg:flex-row items-center gap-12">
          <div class="w-full lg:w-1/2">
            <svg class="w-full rounded-2xl shadow-lg" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
              <!-- Background -->
              <rect width="600" height="400" fill="#F8FAFC" rx="12" />

              <!-- Windows -->
              <rect x="20" y="40" width="560" height="320" fill="#FFFFFF" rx="8" stroke="#E2E8F0" stroke-width="2" />

              <!-- Office Interior -->
              <!-- Left Wall -->
              <rect x="40" y="60" width="240" height="280" fill="#F1F5F9" rx="4" />

              <!-- Right Wall -->
              <rect x="320" y="60" width="240" height="280" fill="#F8FAFC" rx="4" />

              <!-- Floor -->
              <rect x="40" y="280" width="520" height="60" fill="#E2E8F0" rx="4" />

              <!-- Desk 1 -->
              <rect x="60" y="200" width="180" height="60" fill="#CBD5E1" rx="4" />
              <rect x="80" y="260" width="10" height="20" fill="#94A3B8" />
              <rect x="210" y="260" width="10" height="20" fill="#94A3B8" />

              <!-- Computer on Desk 1 -->
              <rect x="100" y="180" width="80" height="50" fill="#0EA5E9" rx="2" />
              <rect x="110" y="190" width="60" height="30" fill="#F0FDFA" rx="1" />
              <rect x="130" y="240" width="20" height="20" fill="#0F172A" />

              <!-- Desk 2 -->
              <rect x="360" y="200" width="180" height="60" fill="#CBD5E1" rx="4" />
              <rect x="380" y="260" width="10" height="20" fill="#94A3B8" />
              <rect x="510" y="260" width="10" height="20" fill="#94A3B8" />

              <!-- Computer on Desk 2 -->
              <rect x="400" y="180" width="80" height="50" fill="#0EA5E9" rx="2" />
              <rect x="410" y="190" width="60" height="30" fill="#F0FDFA" rx="1" />
              <rect x="430" y="240" width="20" height="20" fill="#0F172A" />

              <!-- People -->
              <!-- Person 1 at Desk 1 -->
              <circle cx="150" cy="270" r="20" fill="#14B8A6" />
              <circle cx="150" cy="250" r="10" fill="#FECACA" />

              <!-- Person 2 at Desk 2 -->
              <circle cx="450" cy="270" r="20" fill="#D946EF" />
              <circle cx="450" cy="250" r="10" fill="#FEF3C7" />

              <!-- Decorative Elements -->
              <!-- Plants -->
              <rect x="270" y="220" width="30" height="40" fill="#64748B" rx="2" />
              <path d="M260 220 Q270 180 280 220 Q290 190 300 220" fill="#059669" />

              <!-- Wall Art -->
              <rect x="500" y="100" width="60" height="40" fill="#C026D3" rx="2" />
              <rect x="70" y="100" width="60" height="40" fill="#14B8A6" rx="2" />

              <!-- Logo on Wall -->
              <rect x="240" y="80" width="120" height="60" fill="#FFFFFF" rx="8" stroke="#E2E8F0" stroke-width="2" />
              <text x="300" y="120" font-family="Arial, sans-serif" font-size="24" text-anchor="middle" fill="#14B8A6" font-weight="bold">ACME</text>

              <!-- Ceiling Lights -->
              <rect x="100" y="70" width="80" height="10" fill="#F1F5F9" rx="5" />
              <rect x="280" y="70" width="80" height="10" fill="#F1F5F9" rx="5" />
              <rect x="460" y="70" width="80" height="10" fill="#F1F5F9" rx="5" />

              <!-- Window -->
              <rect x="270" y="140" width="100" height="60" fill="#DBEAFE" rx="4" />
              <line x1="320" y1="140" x2="320" y2="200" stroke="#93C5FD" stroke-width="2" />
              <line x1="270" y1="170" x2="370" y2="170" stroke="#93C5FD" stroke-width="2" />

              <!-- Invoice Document with Charts -->
              <rect x="160" y="140" width="50" height="70" fill="white" stroke="#CBD5E1" stroke-width="1" rx="2" />
              <line x1="170" y1="150" x2="200" y2="150" stroke="#CBD5E1" stroke-width="1" />
              <line x1="170" y1="160" x2="190" y2="160" stroke="#CBD5E1" stroke-width="1" />
              <rect x="170" y="170" width="30" height="20" fill="#14B8A6" rx="2" />
              <line x1="170" y1="200" x2="200" y2="200" stroke="#CBD5E1" stroke-width="1" />

              <!-- Speech Bubble showing "Paid!" -->
              <path d="M170 110 L190 130 L210 110 Q218 110 218 102 L218 82 Q218 74 210 74 L170 74 Q162 74 162 82 L162 102 Q162 110 170 110" fill="#F0FDFA" stroke="#14B8A6" stroke-width="2" />
              <text x="190" y="96" font-family="Arial, sans-serif" font-size="14" text-anchor="middle" fill="#14B8A6" font-weight="bold">Paid!</text>

              <!-- Time Indicator showing reduced payment time -->
              <path d="M400 140 C430 100, 480 100, 510 140" stroke="#14B8A6" stroke-width="2" fill="none" stroke-dasharray="4" />
              <circle cx="400" cy="140" r="8" fill="#EF4444" />
              <circle cx="510" cy="140" r="8" fill="#10B981" />
              <text x="455" y="120" font-family="Arial, sans-serif" font-size="12" text-anchor="middle" fill="#475569" font-weight="bold">68% Faster</text>
            </svg>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-50 text-primary-700 font-medium text-sm mb-4">
              <span class="mr-2">Featured Story</span>
              <span class="flex h-2 w-2 rounded-full bg-primary-500"></span>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-dark-900 mb-4">How Acme Design Studio Reduced Payment Times by 68%</h2>
            <div class="flex items-center mb-6">
              <div class="w-12 h-12 rounded-full overflow-hidden mr-4 bg-primary-100">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                  <!-- Background -->
                  <circle cx="50" cy="50" r="50" fill="#CCFBF1" />

                  <!-- Hair -->
                  <path d="M20 42C20 30 30 15 50 15C70 15 80 30 80 42V60H20V42Z" fill="#6B7280" />

                  <!-- Face -->
                  <circle cx="50" cy="50" r="25" fill="#FECACA" />

                  <!-- Eyes -->
                  <circle cx="40" cy="45" r="3" fill="#1F2937" />
                  <circle cx="60" cy="45" r="3" fill="#1F2937" />

                  <!-- Smile -->
                  <path d="M40 60Q50 70 60 60" stroke="#1F2937" stroke-width="2" fill="none" />

                  <!-- Earrings -->
                  <circle cx="25" cy="50" r="2" fill="#14B8A6" />
                  <circle cx="75" cy="50" r="2" fill="#14B8A6" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold text-dark-900">Sarah Johnson</h4>
                <p class="text-sm text-dark-500">Operations Director, Acme Design Studio</p>
              </div>
            </div>
            <p class="text-dark-600 mb-6">
              "Before InvoiceHub, we were spending 9+ hours per week managing invoices, with an average payment time of 35 days. Now, we've automated our entire billing process and get paid in an average of 11 days, while spending just 2-3 hours weekly on financial admin."
            </p>
            <div class="grid grid-cols-2 gap-6 mb-8">
              <div>
                <p class="text-3xl font-bold text-primary-600">68%</p>
                <p class="text-sm text-dark-500">Reduction in payment times</p>
              </div>
              <div>
                <p class="text-3xl font-bold text-primary-600">70%</p>
                <p class="text-sm text-dark-500">Less time spent on admin</p>
              </div>
            </div>
            <a href="full-casestudy.php" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors">
              Read full case study
              <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- More Success Stories -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-dark-900 mb-12 text-center">More Success Stories</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Story Card 1 -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden story-card">
            <div class="h-48 overflow-hidden bg-primary-50">
              <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <!-- Background elements -->
                <rect width="400" height="300" fill="#F0FDFA" />

                <!-- World map simplified outline -->
                <path d="M50 150 Q100 120 150 150 Q200 180 250 150 Q300 120 350 150" stroke="#CBD5E1" stroke-width="2" fill="none" />
                <circle cx="100" cy="140" r="10" fill="#14B8A6" opacity="0.6" />
                <circle cx="200" cy="170" r="10" fill="#14B8A6" opacity="0.6" />
                <circle cx="300" cy="140" r="10" fill="#14B8A6" opacity="0.6" />

                <!-- Office building -->
                <rect x="150" y="80" width="100" height="140" fill="#FFFFFF" stroke="#94A3B8" stroke-width="2" rx="4" />

                <!-- Windows -->
                <rect x="165" y="100" width="20" height="20" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="215" y="100" width="20" height="20" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="165" y="130" width="20" height="20" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="215" y="130" width="20" height="20" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="165" y="160" width="20" height="20" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="215" y="160" width="20" height="20" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />

                <!-- Door -->
                <rect x="190" y="190" width="20" height="30" fill="#334155" />

                <!-- Company name -->
                <rect x="175" y="60" width="50" height="15" fill="#FFFFFF" rx="2" />
                <text x="200" y="72" font-family="Arial, sans-serif" font-size="10" text-anchor="middle" fill="#0F766E">GLOBALTECH</text>

                <!-- Connection lines between teams -->
                <line x1="100" y1="140" x2="150" y2="140" stroke="#14B8A6" stroke-width="1" stroke-dasharray="4" />
                <line x1="200" y1="170" x2="200" y2="220" stroke="#14B8A6" stroke-width="1" stroke-dasharray="4" />
                <line x1="300" y1="140" x2="250" y2="140" stroke="#14B8A6" stroke-width="1" stroke-dasharray="4" />

                <!-- Invoice elements -->
                <rect x="70" y="190" width="60" height="80" fill="white" stroke="#CBD5E1" stroke-width="1" rx="2" />
                <line x1="80" y1="205" x2="120" y2="205" stroke="#CBD5E1" stroke-width="1" />
                <line x1="80" y1="220" x2="110" y2="220" stroke="#CBD5E1" stroke-width="1" />
                <rect x="80" y="230" width="40" height="10" fill="#14B8A6" rx="1" />
                <line x1="80" y1="250" x2="120" y2="250" stroke="#CBD5E1" stroke-width="1" />

                <!-- Invoice 2 -->
                <rect x="270" y="190" width="60" height="80" fill="white" stroke="#CBD5E1" stroke-width="1" rx="2" />
                <line x1="280" y1="205" x2="320" y2="205" stroke="#CBD5E1" stroke-width="1" />
                <line x1="280" y1="220" x2="310" y2="220" stroke="#CBD5E1" stroke-width="1" />
                <rect x="280" y="230" width="40" height="10" fill="#14B8A6" rx="1" />
                <line x1="280" y1="250" x2="320" y2="250" stroke="#CBD5E1" stroke-width="1" />

                <!-- Clock icons showing different time zones -->
                <circle cx="100" cy="110" r="15" fill="white" stroke="#94A3B8" stroke-width="1" />
                <line x1="100" y1="110" x2="100" y2="100" stroke="#334155" stroke-width="1.5" />
                <line x1="100" y1="110" x2="108" y2="115" stroke="#334155" stroke-width="1.5" />

                <circle cx="300" cy="110" r="15" fill="white" stroke="#94A3B8" stroke-width="1" />
                <line x1="300" y1="110" x2="300" y2="100" stroke="#334155" stroke-width="1.5" />
                <line x1="300" y1="110" x2="292" y2="115" stroke="#334155" stroke-width="1.5" />

                <!-- Team members collaborating icon -->
                <circle cx="70" cy="120" r="12" fill="#60A5FA" opacity="0.7" />
                <circle cx="330" cy="120" r="12" fill="#F472B6" opacity="0.7" />
                <circle cx="200" cy="240" r="12" fill="#14B8A6" opacity="0.7" />
              </svg>
            </div>
            <div class="p-6">
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-700 text-xs font-medium mb-4">
                Agency
              </div>
              <h3 class="text-xl font-bold text-dark-900 mb-3">GlobalTech Solutions Streamlines Client Billing</h3>
              <p class="text-dark-600 mb-6 line-clamp-3">
                "With teams across multiple time zones, billing coordination was a nightmare. InvoiceHub's team collaboration features have revolutionized our process."
              </p>
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-primary-100">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                      <!-- Background -->
                      <circle cx="50" cy="50" r="50" fill="#CCFBF1" />

                      <!-- Hair -->
                      <path d="M25 30C25 25 35 10 50 10C65 10 75 25 75 30V38H25V30Z" fill="#1F2937" />

                      <!-- Face -->
                      <circle cx="50" cy="52" r="25" fill="#FEE2E2" />

                      <!-- Eyes -->
                      <circle cx="40" cy="47" r="3" fill="#1F2937" />
                      <circle cx="60" cy="47" r="3" fill="#1F2937" />

                      <!-- Beard -->
                      <path d="M30 55C30 70 40 80 50 80C60 80 70 70 70 55V60H30V55Z" fill="#4B5563" />

                      <!-- Smile -->
                      <path d="M40 58Q50 65 60 58" stroke="#1F2937" stroke-width="2" fill="none" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm font-medium text-dark-900">Michael Roberts</p>
                    <p class="text-xs text-dark-500">CEO</p>
                  </div>
                </div>
                <a href="#globaltech-story" class="text-primary-600 hover:text-primary-700">
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Story Card 2 -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden story-card">
            <div class="h-48 overflow-hidden bg-secondary-50">
              <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <!-- Background elements -->
                <rect width="400" height="300" fill="#FAE8FF" opacity="0.3" />

                <!-- E-commerce storefront -->
                <rect x="100" y="70" width="200" height="120" fill="white" stroke="#94A3B8" stroke-width="2" rx="6" />

                <!-- Store sign -->
                <rect x="130" y="50" width="140" height="30" fill="#C026D3" rx="4" />
                <text x="200" y="70" font-family="Arial, sans-serif" font-size="14" text-anchor="middle" fill="white" font-weight="bold">ECO STORE</text>

                <!-- Store window -->
                <rect x="120" y="100" width="160" height="70" fill="#F0FDFA" stroke="#94A3B8" stroke-width="1" rx="2" />

                <!-- Store products -->
                <rect x="130" y="110" width="30" height="40" fill="#14B8A6" rx="2" />
                <rect x="170" y="110" width="30" height="40" fill="#C026D3" rx="2" />
                <rect x="210" y="110" width="30" height="40" fill="#14B8A6" rx="2" />
                <rect x="250" y="110" width="20" height="20" fill="#C026D3" rx="2" />

                <!-- Door -->
                <rect x="175" y="170" width="50" height="20" fill="#334155" rx="2" />

                <!-- Recurring invoice visualization -->
                <rect x="50" y="210" width="70" height="70" fill="white" stroke="#CBD5E1" stroke-width="1" rx="4" />
                <text x="85" y="230" font-family="Arial, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">INVOICE</text>
                <text x="85" y="250" font-family="Arial, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">MONTHLY</text>
                <text x="85" y="270" font-family="Arial, sans-serif" font-size="10" text-anchor="middle" fill="#14B8A6">AUTO-SEND</text>

                <!-- Calendar with recurring dates -->
                <rect x="140" y="210" width="120" height="70" fill="white" stroke="#CBD5E1" stroke-width="1" rx="4" />
                <line x1="140" y1="230" x2="260" y2="230" stroke="#CBD5E1" stroke-width="1" />
                <text x="200" y="225" font-family="Arial, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">CALENDAR</text>

                <!-- Calendar days -->
                <circle cx="160" cy="245" r="8" fill="#14B8A6" opacity="0.2" />
                <text x="160" y="248" font-family="Arial, sans-serif" font-size="8" text-anchor="middle" fill="#334155">1</text>

                <circle cx="190" cy="245" r="8" fill="#14B8A6" opacity="0.7" />
                <text x="190" y="248" font-family="Arial, sans-serif" font-size="8" text-anchor="middle" fill="white">15</text>

                <circle cx="220" cy="245" r="8" fill="#14B8A6" opacity="0.2" />
                <text x="220" y="248" font-family="Arial, sans-serif" font-size="8" text-anchor="middle" fill="#334155">30</text>

                <circle cx="160" cy="265" r="8" fill="#14B8A6" opacity="0.7" />
                <text x="160" y="268" font-family="Arial, sans-serif" font-size="8" text-anchor="middle" fill="white">15</text>

                <circle cx="190" cy="265" r="8" fill="#14B8A6" opacity="0.2" />
                <text x="190" y="268" font-family="Arial, sans-serif" font-size="8" text-anchor="middle" fill="#334155">30</text>

                <circle cx="220" cy="265" r="8" fill="#14B8A6" opacity="0.7" />
                <text x="220" y="268" font-family="Arial, sans-serif" font-size="8" text-anchor="middle" fill="white">15</text>

                <!-- Clients receiving invoices -->
                <circle cx="280" cy="230" r="15" fill="#F9A8D4" opacity="0.7" />
                <circle cx="310" cy="250" r="15" fill="#93C5FD" opacity="0.7" />
                <circle cx="290" cy="270" r="15" fill="#A5B4FC" opacity="0.7" />

                <!-- Connection lines -->
                <line x1="225" y1="245" x2="265" y2="230" stroke="#14B8A6" stroke-width="1" stroke-dasharray="3" />
                <line x1="225" y1="265" x2="275" y2="270" stroke="#14B8A6" stroke-width="1" stroke-dasharray="3" />
              </svg>
            </div>
            <div class="p-6">
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-secondary-50 text-secondary-700 text-xs font-medium mb-4">
                E-commerce
              </div>
              <h3 class="text-xl font-bold text-dark-900 mb-3">How EcoStore Automated B2B Invoicing</h3>
              <p class="text-dark-600 mb-6 line-clamp-3">
                "The recurring invoice feature alone saved us countless hours. We've set up automatic billing for all our wholesale clients."
              </p>
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-primary-100">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                      <!-- Background -->
                      <circle cx="50" cy="50" r="50" fill="#CCFBF1" />

                      <!-- Hair -->
                      <path d="M25 25C25 20 35 5 50 5C65 5 75 20 75 25V35H25V25Z" fill="#111827" />

                      <!-- Face -->
                      <circle cx="50" cy="50" r="25" fill="#FEF3C7" />

                      <!-- Eyes -->
                      <path d="M35 45L40 42M45 45L40 42" stroke="#1F2937" stroke-width="2" />
                      <path d="M55 45L60 42M65 45L60 42" stroke="#1F2937" stroke-width="2" />

                      <!-- Smile -->
                      <path d="M40 60Q50 68 60 60" stroke="#1F2937" stroke-width="2" fill="none" />

                      <!-- Glasses -->
                      <rect x="32" y="40" width="16" height="6" rx="3" fill="none" stroke="#1F2937" stroke-width="2" />
                      <rect x="52" y="40" width="16" height="6" rx="3" fill="none" stroke="#1F2937" stroke-width="2" />
                      <path d="M48 43H52" stroke="#1F2937" stroke-width="2" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm font-medium text-dark-900">David Chen</p>
                    <p class="text-xs text-dark-500">Founder</p>
                  </div>
                </div>
                <a href="#ecostore-story" class="text-primary-600 hover:text-primary-700">
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Story Card 3 -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden story-card">
            <div class="h-48 overflow-hidden bg-blue-50">
              <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <!-- Background elements -->
                <rect width="400" height="300" fill="#EFF6FF" />

                <!-- Accounting firm building -->
                <rect x="120" y="40" width="160" height="140" fill="#FFFFFF" stroke="#94A3B8" stroke-width="2" rx="4" />

                <!-- Windows -->
                <rect x="140" y="60" width="30" height="30" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="190" y="60" width="30" height="30" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="240" y="60" width="30" height="30" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />

                <rect x="140" y="110" width="30" height="30" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="190" y="110" width="30" height="30" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />
                <rect x="240" y="110" width="30" height="30" fill="#DBEAFE" stroke="#94A3B8" stroke-width="1" />

                <!-- Company name -->
                <rect x="160" y="20" width="80" height="20" fill="#3B82F6" rx="4" />
                <text x="200" y="35" font-family="Arial, sans-serif" font-size="12" text-anchor="middle" fill="white" font-weight="bold">FUSION</text>

                <!-- Client satisfaction graph -->
                <rect x="80" y="210" width="240" height="70" fill="white" stroke="#CBD5E1" stroke-width="1" rx="4" />
                <text x="200" y="230" font-family="Arial, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">CLIENT SATISFACTION</text>

                <!-- Satisfaction graph -->
                <line x1="100" y1="260" x2="300" y2="260" stroke="#CBD5E1" stroke-width="1" />
                <line x1="100" y1="260" x2="100" y2="240" stroke="#CBD5E1" stroke-width="1" />

                <!-- Graph points showing increase -->
                <circle cx="130" cy="255" r="3" fill="#3B82F6" />
                <circle cx="160" cy="250" r="3" fill="#3B82F6" />
                <circle cx="190" cy="245" r="3" fill="#3B82F6" />
                <circle cx="220" cy="240" r="3" fill="#3B82F6" />
                <circle cx="250" cy="235" r="3" fill="#3B82F6" />
                <circle cx="280" cy="230" r="3" fill="#3B82F6" />

                <!-- Graph line -->
                <path d="M130 255 L160 250 L190 245 L220 240 L250 235 L280 230" stroke="#3B82F6" stroke-width="2" fill="none" />

                <!-- Professional invoice representation -->
                <rect x="50" y="100" width="50" height="70" fill="white" stroke="#CBD5E1" stroke-width="1" rx="2" />
                <line x1="60" y1="110" x2="90" y2="110" stroke="#CBD5E1" stroke-width="1" />
                <line x1="60" y1="120" x2="85" y2="120" stroke="#CBD5E1" stroke-width="1" />
                <rect x="60" y="130" width="30" height="8" fill="#3B82F6" rx="1" />
                <line x1="60" y1="145" x2="90" y2="145" stroke="#CBD5E1" stroke-width="1" />
                <text x="75" y="160" font-family="Arial, sans-serif" font-size="10" text-anchor="middle" fill="#14B8A6" font-weight="bold">PAID</text>

                <!-- Client happiness indicators -->
                <circle cx="300" cy="100" r="20" fill="#FEF3C7" stroke="#F59E0B" stroke-width="2" />
                <path d="M290 100 Q300 110 310 100" stroke="#F59E0B" stroke-width="2" fill="none" />
                <circle cx="295" cy="95" r="2" fill="#F59E0B" />
                <circle cx="305" cy="95" r="2" fill="#F59E0B" />

                <text x="300" y="140" font-family="Arial, sans-serif" font-size="14" text-anchor="middle" fill="#3B82F6" font-weight="bold">+35%</text>
                <text x="300" y="155" font-family="Arial, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">RETENTION</text>
              </svg>
            </div>
            <div class="p-6">
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-medium mb-4">
                Financial Services
              </div>
              <h3 class="text-xl font-bold text-dark-900 mb-3">Fusion Accounting Boosts Client Satisfaction</h3>
              <p class="text-dark-600 mb-6 line-clamp-3">
                "Our clients love the professional invoices and payment experience. We've seen a 35% increase in client retention since implementing InvoiceHub."
              </p>
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-primary-100">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                      <!-- Background -->
                      <circle cx="50" cy="50" r="50" fill="#CCFBF1" />

                      <!-- Hair -->
                      <path d="M25 35C25 25 35 15 50 15C65 15 75 25 75 35V45H25V35Z" fill="#D97706" />

                      <!-- Face -->
                      <circle cx="50" cy="55" r="25" fill="#FEF3C7" />

                      <!-- Eyes -->
                      <circle cx="40" cy="50" r="3" fill="#1F2937" />
                      <circle cx="60" cy="50" r="3" fill="#1F2937" />

                      <!-- Smile -->
                      <path d="M40 65Q50 72 60 65" stroke="#1F2937" stroke-width="2" fill="none" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm font-medium text-dark-900">Jennifer Lopez</p>
                    <p class="text-xs text-dark-500">Managing Partner</p>
                  </div>
                </div>
                <a href="#fusion-story" class="text-primary-600 hover:text-primary-700">
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Results Showcase -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-dark-900 mb-12">Real Results with InvoiceHub</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="p-6 bg-primary-50 rounded-2xl">
            <p class="text-4xl font-bold text-primary-600 mb-2">73%</p>
            <p class="text-dark-700 font-medium">Faster payments on average</p>
          </div>

          <div class="p-6 bg-primary-50 rounded-2xl">
            <p class="text-4xl font-bold text-primary-600 mb-2">68%</p>
            <p class="text-dark-700 font-medium">Reduction in billing errors</p>
          </div>

          <div class="p-6 bg-primary-50 rounded-2xl">
            <p class="text-4xl font-bold text-primary-600 mb-2">12+</p>
            <p class="text-dark-700 font-medium">Hours saved per month</p>
          </div>

          <div class="p-6 bg-primary-50 rounded-2xl">
            <p class="text-4xl font-bold text-primary-600 mb-2">94%</p>
            <p class="text-dark-700 font-medium">Customer satisfaction</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-16 gradient-primary text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">Ready to transform your invoicing process?</h2>
        <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">
          Join thousands of businesses that trust InvoiceHub to streamline their billing and get paid faster.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="register.php" class="px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl shadow-lg hover:bg-opacity-90 transition-all">
            Start Your Free Trial
          </a>
          <a href="contact-sales.php" class="px-8 py-4 border border-white text-white font-semibold rounded-xl hover:bg-white hover:bg-opacity-10 transition-all">
            Talk to Sales
          </a>
        </div>
      </div>
    </div>
  </section>

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
  <!-- Scroll to Top Button -->
  <button id="scrollToTopBtn" class="fixed bottom-6 right-6 w-12 h-12 rounded-full gradient-primary shadow-lg z-50 text-white flex items-center justify-center opacity-0 transition-opacity duration-300 hover:opacity-90 focus:outline-none">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script>
    // Scroll to top button functionality
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    // Show/hide the button based on scroll position
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.remove('opacity-0');
        scrollToTopBtn.classList.add('opacity-100');
      } else {
        scrollToTopBtn.classList.remove('opacity-100');
        scrollToTopBtn.classList.add('opacity-0');
      }
    });

    // Smooth scroll to top when the button is clicked
    scrollToTopBtn.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>

</html>