<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Study: Acme Design Studio - InvoiceHub</title>
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

  <!-- Breadcrumbs -->
  <div class="bg-dark-50 py-3 border-b border-dark-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center text-sm">
        <a href="index.php" class="text-dark-500 hover:text-primary-600 transition-colors">Home</a>
        <svg class="w-4 h-4 mx-2 text-dark-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
        </svg>
        <a href="testimonials.php" class="text-dark-500 hover:text-primary-600 transition-colors">Customer Stories</a>
        <svg class="w-4 h-4 mx-2 text-dark-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
        </svg>
        <span class="text-dark-700">Acme Design Studio</span>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-primary-50">
    <div class="absolute top-0 right-0 -z-10 w-1/2 h-1/2 opacity-30">
      <div class="absolute top-0 right-0 w-full h-full blob bg-gradient-to-r from-primary-300 via-primary-400 to-secondary-400"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-100 text-primary-700 font-medium text-sm mb-4">
          <span class="mr-2">Case Study</span>
          <span class="flex h-2 w-2 rounded-full bg-primary-500"></span>
        </div>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-dark-900 mb-6">How Acme Design Studio Reduced Payment Times by 68%</h1>
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 rounded-full overflow-hidden mr-4 bg-primary-100">
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
            <h4 class="font-bold text-dark-900 text-xl">Sarah Johnson</h4>
            <p class="text-dark-500">Operations Director, Acme Design Studio</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content Section -->
  <section class="py-12 md:py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-12">
          <div class="p-6 md:p-8 lg:p-10">
            <div class="flex flex-col md:flex-row gap-8 items-center mb-10">
              <div class="md:w-1/2">
                <svg class="w-full" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                  <!-- Background -->
                  <rect width="600" height="400" fill="#F8FAFC" rx="12" />

                  <!-- Acme Logo -->
                  <rect x="250" y="40" width="100" height="40" rx="4" fill="#14B8A6" />
                  <text x="300" y="65" font-family="DM Sans, sans-serif" font-size="20" text-anchor="middle" fill="white" font-weight="bold">ACME</text>
                  <text x="300" y="85" font-family="DM Sans, sans-serif" font-size="14" text-anchor="middle" fill="#334155">DESIGN STUDIO</text>

                  <!-- Timeline Visualization -->
                  <line x1="100" y1="180" x2="500" y2="180" stroke="#CBD5E1" stroke-width="4" stroke-linecap="round" />

                  <!-- Before InvoiceHub -->
                  <circle cx="150" cy="180" r="15" fill="#EF4444" />
                  <text x="150" y="150" font-family="Inter, sans-serif" font-size="14" text-anchor="middle" fill="#334155" font-weight="bold">BEFORE</text>
                  <text x="150" y="220" font-family="Inter, sans-serif" font-size="16" text-anchor="middle" fill="#EF4444" font-weight="bold">35 DAYS</text>
                  <text x="150" y="240" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#64748B">Average Payment Time</text>

                  <!-- After InvoiceHub -->
                  <circle cx="450" cy="180" r="15" fill="#10B981" />
                  <text x="450" y="150" font-family="Inter, sans-serif" font-size="14" text-anchor="middle" fill="#334155" font-weight="bold">AFTER</text>
                  <text x="450" y="220" font-family="Inter, sans-serif" font-size="16" text-anchor="middle" fill="#10B981" font-weight="bold">11 DAYS</text>
                  <text x="450" y="240" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#64748B">Average Payment Time</text>

                  <!-- InvoiceHub Implementation -->
                  <rect x="275" y="150" width="50" height="60" rx="4" stroke="#14B8A6" stroke-width="2" fill="#F0FDFA" />
                  <text x="300" y="180" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#14B8A6" font-weight="bold">INVOICEHUB</text>
                  <text x="300" y="200" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#0F766E">IMPLEMENTATION</text>

                  <!-- Stats -->
                  <rect x="150" y="300" width="120" height="60" rx="8" fill="#F0FDFA" />
                  <text x="210" y="330" font-family="DM Sans, sans-serif" font-size="24" text-anchor="middle" fill="#14B8A6" font-weight="bold">68%</text>
                  <text x="210" y="350" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#334155">Faster Payments</text>

                  <rect x="320" y="300" width="120" height="60" rx="8" fill="#F0FDFA" />
                  <text x="380" y="330" font-family="DM Sans, sans-serif" font-size="24" text-anchor="middle" fill="#14B8A6" font-weight="bold">70%</text>
                  <text x="380" y="350" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#334155">Less Admin Time</text>
                </svg>
              </div>
              <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-dark-900 mb-4">Executive Summary</h2>
                <p class="text-dark-600 mb-4">
                  Acme Design Studio, a creative agency with 22 employees, was struggling with slow client payments and spending excessive time on invoice management. After implementing InvoiceHub, they reduced payment times by 68% and cut administrative work by 70%.
                </p>
                <div class="grid grid-cols-2 gap-6">
                  <div>
                    <p class="text-3xl font-bold text-primary-600">68%</p>
                    <p class="text-sm text-dark-500">Reduction in payment times</p>
                  </div>
                  <div>
                    <p class="text-3xl font-bold text-primary-600">70%</p>
                    <p class="text-sm text-dark-500">Less time spent on admin</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-10">
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-700 text-xs font-medium mb-2">
                The Challenge
              </div>
              <h2 class="text-2xl font-bold text-dark-900 mb-4">Managing Complex Client Invoicing</h2>
              <p class="text-dark-600 mb-4">
                Acme Design Studio works with clients across various industries, managing multiple projects simultaneously. Before InvoiceHub, their invoicing process was entirely manual, requiring significant time and resources.
              </p>
              <div class="bg-dark-50 p-6 rounded-xl mb-6">
                <p class="text-dark-600 italic mb-4">
                  "We were spending at least 9 hours every week just creating invoices, sending reminders, and reconciling payments. With over 30 active clients at any time, keeping track of everything was becoming unmanageable. Our average payment time was 35 days, which was affecting our cash flow significantly."
                </p>
                <p class="text-dark-700 font-medium">
                  — Sarah Johnson, Operations Director
                </p>
              </div>
              <p class="text-dark-600">
                Key challenges included:
              </p>
              <ul class="list-disc pl-6 mt-2 mb-6 space-y-2 text-dark-600">
                <li>Manual invoice creation taking 2-3 hours per week</li>
                <li>Payment tracking across different platforms and bank accounts</li>
                <li>Sending repeated payment reminders to clients</li>
                <li>Reconciling payments with outstanding invoices</li>
                <li>Limited visibility into cash flow and outstanding payments</li>
                <li>Average payment time of 35 days stretching cash reserves</li>
              </ul>
            </div>

            <div class="mb-10">
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-700 text-xs font-medium mb-2">
                The Solution
              </div>
              <h2 class="text-2xl font-bold text-dark-900 mb-4">Implementing InvoiceHub's Automated Platform</h2>
              <p class="text-dark-600 mb-6">
                After researching several solutions, Acme Design Studio chose InvoiceHub for its comprehensive feature set and user-friendly interface. The implementation process took less than a week, with minimal disruption to their operations.
              </p>

              <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white border border-dark-200 rounded-xl p-6">
                  <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mb-4">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <h3 class="font-bold text-dark-900 mb-2">Automated Workflows</h3>
                  <p class="text-dark-600 text-sm">
                    Set up recurring invoices and automatic payment reminders for all clients.
                  </p>
                </div>

                <div class="bg-white border border-dark-200 rounded-xl p-6">
                  <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mb-4">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                      <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <h3 class="font-bold text-dark-900 mb-2">Online Payments</h3>
                  <p class="text-dark-600 text-sm">
                    Integrated credit card and ACH payment options directly on invoices.
                  </p>
                </div>

                <div class="bg-white border border-dark-200 rounded-xl p-6">
                  <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mb-4">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <h3 class="font-bold text-dark-900 mb-2">Reporting Dashboard</h3>
                  <p class="text-dark-600 text-sm">
                    Real-time analytics on outstanding invoices, payment times, and cash flow.
                  </p>
                </div>
              </div>

              <div class="bg-primary-50 p-6 rounded-xl mb-6">
                <svg class="w-full max-w-2xl mx-auto" height="200" viewBox="0 0 600 200" xmlns="http://www.w3.org/2000/svg">
                  <!-- Implementation Timeline -->
                  <rect width="600" height="200" fill="#F0FDFA" rx="8" />

                  <!-- Timeline line -->
                  <line x1="50" y1="100" x2="550" y2="100" stroke="#CBD5E1" stroke-width="4" stroke-dasharray="2" />

                  <!-- Day 1: Setup -->
                  <circle cx="100" cy="100" r="10" fill="#14B8A6" />
                  <text x="100" y="130" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">DAY 1</text>
                  <text x="100" y="150" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">Account Setup</text>

                  <!-- Day 2: Templates -->
                  <circle cx="200" cy="100" r="10" fill="#14B8A6" />
                  <text x="200" y="130" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">DAY 2</text>
                  <text x="200" y="150" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">Custom Templates</text>

                  <!-- Day 3: Client Import -->
                  <circle cx="300" cy="100" r="10" fill="#14B8A6" />
                  <text x="300" y="130" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">DAY 3</text>
                  <text x="300" y="150" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">Client Data Import</text>

                  <!-- Day 4: Payment Setup -->
                  <circle cx="400" cy="100" r="10" fill="#14B8A6" />
                  <text x="400" y="130" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">DAY 4</text>
                  <text x="400" y="150" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">Payment Integration</text>

                  <!-- Day 5: Go Live -->
                  <circle cx="500" cy="100" r="10" fill="#14B8A6" />
                  <text x="500" y="130" font-family="Inter, sans-serif" font-size="12" text-anchor="middle" fill="#334155" font-weight="bold">DAY 5</text>
                  <text x="500" y="150" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">Go Live</text>

                  <!-- Implementation Header -->
                  <text x="300" y="50" font-family="DM Sans, sans-serif" font-size="16" text-anchor="middle" fill="#0F766E" font-weight="bold">5-DAY IMPLEMENTATION TIMELINE</text>
                </svg>
              </div>

              <p class="text-dark-600">
                Key features implemented:
              </p>
              <ul class="list-disc pl-6 mt-2 mb-4 space-y-2 text-dark-600">
                <li>Branded invoice templates matching Acme's design aesthetic</li>
                <li>Client portal for easy invoice viewing and payment</li>
                <li>Automatic late payment reminders at 1, 3, and 7 days past due</li>
                <li>Integration with QuickBooks for seamless accounting</li>
                <li>Team member access controls for collaborative workflow</li>
                <li>Customized reporting dashboard for financial insights</li>
              </ul>
            </div>

            <div class="mb-10">
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-700 text-xs font-medium mb-2">
                The Results
              </div>
              <h2 class="text-2xl font-bold text-dark-900 mb-4">Dramatic Improvements in Cash Flow and Efficiency</h2>
              <p class="text-dark-600 mb-6">
                Within three months of implementing InvoiceHub, Acme Design Studio experienced significant improvements across their invoicing and payment processes.
              </p>
              <div class="relative mb-8">
                <svg class="w-full" height="300" viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg">
                  <!-- Results Visualization -->
                  <rect width="800" height="300" fill="#FFFFFF" rx="8" />

                  <!-- Payment Time Chart -->
                  <rect x="50" y="50" width="300" height="200" fill="#F8FAFC" rx="4" />
                  <text x="200" y="30" font-family="DM Sans, sans-serif" font-size="16" text-anchor="middle" fill="#334155" font-weight="bold">AVERAGE PAYMENT TIME (DAYS)</text>

                  <!-- Y Axis -->
                  <line x1="80" y1="70" x2="80" y2="230" stroke="#CBD5E1" stroke-width="1" />
                  <text x="70" y="75" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">40</text>
                  <text x="70" y="115" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">30</text>
                  <text x="70" y="155" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">20</text>
                  <text x="70" y="195" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">10</text>
                  <text x="70" y="235" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">0</text>

                  <!-- X Axis -->
                  <line x1="80" y1="230" x2="320" y2="230" stroke="#CBD5E1" stroke-width="1" />
                  <text x="140" y="245" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">Before</text>
                  <text x="260" y="245" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">After</text>

                  <!-- Data Bars -->
                  <rect x="110" y="95" width="60" height="135" fill="#EF4444" rx="4" />
                  <rect x="230" y="187" width="60" height="43" fill="#10B981" rx="4" />

                  <!-- Data Labels -->
                  <text x="140" y="85" font-family="Inter, sans-serif" font-size="14" text-anchor="middle" fill="#EF4444" font-weight="bold">35 DAYS</text>
                  <text x="260" y="177" font-family="Inter, sans-serif" font-size="14" text-anchor="middle" fill="#10B981" font-weight="bold">11 DAYS</text>

                  <!-- Admin Time Chart -->
                  <rect x="450" y="50" width="300" height="200" fill="#F8FAFC" rx="4" />
                  <text x="600" y="30" font-family="DM Sans, sans-serif" font-size="16" text-anchor="middle" fill="#334155" font-weight="bold">WEEKLY ADMIN HOURS</text>

                  <!-- Y Axis -->
                  <line x1="480" y1="70" x2="480" y2="230" stroke="#CBD5E1" stroke-width="1" />
                  <text x="470" y="75" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">10</text>
                  <text x="470" y="115" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">8</text>
                  <text x="470" y="155" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">6</text>
                  <text x="470" y="195" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">4</text>
                  <text x="470" y="235" font-family="Inter, sans-serif" font-size="10" text-anchor="end" fill="#64748B">2</text>

                  <!-- X Axis -->
                  <line x1="480" y1="230" x2="720" y2="230" stroke="#CBD5E1" stroke-width="1" />
                  <text x="540" y="245" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">Before</text>
                  <text x="660" y="245" font-family="Inter, sans-serif" font-size="10" text-anchor="middle" fill="#64748B">After</text>

                  <!-- Data Bars -->
                  <rect x="510" y="85" width="60" height="145" fill="#EF4444" rx="4" />
                  <rect x="630" y="187" width="60" height="43" fill="#10B981" rx="4" />

                  <!-- Data Labels -->
                  <text x="540" y="75" font-family="Inter, sans-serif" font-size="14" text-anchor="middle" fill="#EF4444" font-weight="bold">9 HOURS</text>
                  <text x="660" y="177" font-family="Inter, sans-serif" font-size="14" text-anchor="middle" fill="#10B981" font-weight="bold">2.5 HOURS</text>
                </svg>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div class="bg-primary-50 p-6 rounded-xl">
                  <h3 class="font-bold text-dark-900 mb-2 text-lg">Payment Processing</h3>
                  <ul class="space-y-3">
                    <li class="flex items-start">
                      <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <span class="text-dark-700">Average payment time reduced from 35 to 11 days</span>
                    </li>
                    <li class="flex items-start">
                      <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <span class="text-dark-700">92% of invoices now paid within 14 days</span>
                    </li>
                    <li class="flex items-start">
                      <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <span class="text-dark-700">78% of clients now pay online rather than by check</span>
                    </li>
                  </ul>
                </div>

                <div class="bg-primary-50 p-6 rounded-xl">
                  <h3 class="font-bold text-dark-900 mb-2 text-lg">Administrative Efficiency</h3>
                  <ul class="space-y-3">
                    <li class="flex items-start">
                      <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <span class="text-dark-700">Admin time reduced from 9 to 2.5 hours per week</span>
                    </li>
                    <li class="flex items-start">
                      <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <span class="text-dark-700">Follow-up emails reduced by 85% with automation</span>
                    </li>
                    <li class="flex items-start">
                      <div class="mt-1 rounded-full p-1 bg-primary-200 text-primary-700 mr-3">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <span class="text-dark-700">Staff time reallocated to billable client work</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="bg-dark-50 p-6 rounded-xl mb-8">
                <p class="text-dark-600 italic mb-4">
                  "InvoiceHub has transformed how we handle our finances. Our clients love the professional invoices and easy payment options, while our team is thrilled to spend less time on admin work. With the time saved, we've been able to take on more client projects and increase our revenue."
                </p>
                <p class="text-dark-700 font-medium">
                  — Sarah Johnson, Operations Director
                </p>
              </div>
            </div>

            <div class="mb-10">
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-700 text-xs font-medium mb-2">
                Key Features Used
              </div>
              <h2 class="text-2xl font-bold text-dark-900 mb-4">Features That Made the Difference</h2>
              <p class="text-dark-600 mb-6">
                According to Acme Design Studio, these InvoiceHub features were most impactful for their business:
              </p>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="flex items-start">
                  <div class="mt-1 w-10 h-10 rounded-full flex items-center justify-center text-primary-600 mr-4 bg-primary-100">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-bold text-dark-900 mb-1">Automated Reminders</h3>
                    <p class="text-dark-600 text-sm">
                      Customized payment reminder schedule that automatically follows up with clients before and after due dates.
                    </p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="mt-1 w-10 h-10 rounded-full flex items-center justify-center text-primary-600 mr-4 bg-primary-100">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 100 4v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 100-4V6z"></path>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-bold text-dark-900 mb-1">Online Payments</h3>
                    <p class="text-dark-600 text-sm">
                      Direct integration with multiple payment methods, making it easier for clients to pay immediately.
                    </p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="mt-1 w-10 h-10 rounded-full flex items-center justify-center text-primary-600 mr-4 bg-primary-100">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-bold text-dark-900 mb-1">Recurring Invoices</h3>
                    <p class="text-dark-600 text-sm">
                      Scheduled invoices for retainer clients that automatically send on set dates each month.
                    </p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="mt-1 w-10 h-10 rounded-full flex items-center justify-center text-primary-600 mr-4 bg-primary-100">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-bold text-dark-900 mb-1">Financial Dashboard</h3>
                    <p class="text-dark-600 text-sm">
                      Real-time insights into outstanding payments, monthly revenue, and cash flow projections.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-700 text-xs font-medium mb-2">
                Looking Forward
              </div>
              <h2 class="text-2xl font-bold text-dark-900 mb-4">Future Plans with InvoiceHub</h2>
              <p class="text-dark-600 mb-4">
                With their invoicing process now streamlined, Acme Design Studio is planning to leverage more of InvoiceHub's features:
              </p>
              <ul class="list-disc pl-6 mb-6 space-y-2 text-dark-600">
                <li>Expanding use of the client portal to share project deliverables</li>
                <li>Setting up automated expense tracking for improved project profitability analysis</li>
                <li>Implementing the team time tracking feature to streamline their billing process</li>
                <li>Utilizing the API integration to connect with their project management tools</li>
              </ul>
              <p class="text-dark-600 mb-4">
                Acme Design Studio estimates that these additional features will further reduce their administrative workload by 15-20% and give them more accurate insights into project profitability.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-16 gradient-primary text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">Ready to streamline your invoicing process?</h2>
        <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">
          Join Acme Design Studio and thousands of other businesses that trust InvoiceHub to handle their invoicing needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="register.php" class="px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl shadow-lg hover:bg-opacity-90 transition-all">
            Start Your Free Trial
          </a>
          <a href="contact-sales.php" class="px-8 py-4 border border-white text-white font-semibold rounded-xl hover:bg-white hover:bg-opacity-10 transition-all">
            Schedule a Demo
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