<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - InvoiceHub</title>
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

    /* For custom scrollbar */
    .custom-scrollbar::-webkit-scrollbar {
      width: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
      background: #f1f5f9;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
      background-color: #cbd5e1;
      border-radius: 20px;
    }

    /* For animations */
    .animate-fade-in {
      animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .menu-item {
      position: relative;
      transition: all 0.3s ease;
    }

    .menu-item.active {
      background-color: rgba(20, 184, 166, 0.1);
      color: #0f766e;
    }

    .menu-item.active::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 4px;
      background-color: #14b8a6;
      border-radius: 0 4px 4px 0;
    }

    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-5px);
    }
  </style>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
  <!-- Header Navigation -->
  <header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <div class="flex items-center">
          <a href="dashboard.php" class="flex items-center space-x-2">
            <div class="flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 rounded-xl gradient-primary">
              <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="text-xl sm:text-2xl font-bold text-dark-900">Invoice<span class="text-primary-600">Hub</span></span>
          </a>

          <!-- Desktop Navigation -->
          <div class="hidden lg:flex items-center ml-8 space-x-4">
            <a href="invoices.php" class="text-dark-600 hover:text-primary-600 font-medium transition-colors text-sm px-3 py-2 rounded-lg">Dashboard</a>
            <a href="#" class="text-dark-600 hover:text-primary-600 font-medium transition-colors text-sm px-3 py-2 rounded-lg">Invoices</a>
            <a href="#" class="text-dark-600 hover:text-primary-600 font-medium transition-colors text-sm px-3 py-2 rounded-lg">Clients</a>
            <a href="#" class="text-dark-600 hover:text-primary-600 font-medium transition-colors text-sm px-3 py-2 rounded-lg">Reports</a>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <!-- Search (Hidden on mobile) -->
          <div class="hidden md:flex items-center relative">
            <input type="text" placeholder="Search..." class="py-2 pl-10 pr-4 w-64 rounded-lg border border-dark-200 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg class="h-5 w-5 text-dark-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>

          <!-- Notifications -->
          <div class="relative">
            <button class="p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary-500">
              <svg class="h-6 w-6 text-dark-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
              <span class="absolute top-0 right-0 h-5 w-5 flex items-center justify-center text-xs text-white bg-red-500 rounded-full">3</span>
            </button>
          </div>

          <!-- Create New Button (Hidden on mobile) -->
          <div class="hidden md:block">
            <button class="px-4 py-2 gradient-primary hover:opacity-90 text-white font-medium rounded-lg text-sm transition-colors shadow-sm">
              <i class="fas fa-plus mr-2"></i> New Invoice
            </button>
          </div>

          <!-- User Profile -->
          <div class="relative">
            <button class="flex items-center focus:outline-none" id="user-menu-button">
              <div class="h-9 w-9 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 mr-2">
                <span class="font-medium text-sm">JS</span>
              </div>
              <span class="hidden md:block font-medium text-sm text-dark-700">John Smith</span>
              <svg class="hidden md:block ml-2 h-5 w-5 text-dark-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>

            <!-- Dropdown menu (hidden by default) -->
            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50" id="user-menu">
              <a href="#" class="block px-4 py-2 text-sm text-dark-700 hover:bg-gray-100">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-dark-700 hover:bg-gray-100">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-dark-700 hover:bg-gray-100">Billing</a>
              <div class="border-t border-gray-200 my-1"></div>
              <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Sign out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="flex-grow flex overflow-hidden">
    <!-- Sidebar (Hidden on mobile) -->
    <div class="hidden md:flex md:flex-shrink-0">
      <div class="flex flex-col w-64 border-r border-dark-200">
        <div class="h-full flex flex-col py-6 bg-white overflow-y-auto custom-scrollbar">
          <!-- Quick Action Buttons -->
          <div class="px-4 mb-6">
            <button class="w-full px-4 py-3 gradient-primary hover:opacity-90 text-white font-medium rounded-xl transition-colors shadow-sm text-sm">
              <i class="fas fa-plus mr-2"></i> Create New Invoice
            </button>
          </div>

          <!-- Sidebar Menu -->
          <nav class="flex-1 px-2 space-y-1">
            <a href="#" class="menu-item active flex items-center px-3 py-3 text-sm font-medium rounded-md">
              <i class="fas fa-th-large w-6 mr-3 text-center"></i>
              Dashboard
            </a>
            <a href="invoices.php" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-file-invoice w-6 mr-3 text-center"></i>
              Invoices
            </a>
            <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-clock w-6 mr-3 text-center"></i>
              Recurring
            </a>
            <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-users w-6 mr-3 text-center"></i>
              Clients
            </a>
            <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-credit-card w-6 mr-3 text-center"></i>
              Payments
            </a>
            <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-boxes w-6 mr-3 text-center"></i>
              Products & Services
            </a>
            <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-file-export w-6 mr-3 text-center"></i>
              Expenses
            </a>
            <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-chart-bar w-6 mr-3 text-center"></i>
              Reports
            </a>
          </nav>

          <!-- Settings Section -->
          <div class="mt-6 px-2">
            <h3 class="px-3 text-xs font-medium text-dark-500 uppercase tracking-wider">Settings</h3>
            <div class="mt-2 space-y-1">
              <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
                <i class="fas fa-user-cog w-6 mr-3 text-center"></i>
                Account Settings
              </a>
              <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
                <i class="fas fa-paint-brush w-6 mr-3 text-center"></i>
                Branding
              </a>
              <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
                <i class="fas fa-bell w-6 mr-3 text-center"></i>
                Notifications
              </a>
              <a href="#" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
                <i class="fas fa-plug w-6 mr-3 text-center"></i>
                Integrations
              </a>
            </div>
          </div>

          <!-- Help Section -->
          <div class="mt-6 px-4">
            <div class="rounded-xl bg-primary-50 p-4">
              <h4 class="text-primary-800 font-medium text-sm mb-2">Need Help?</h4>
              <p class="text-primary-700 text-xs mb-3">Contact our support team anytime for assistance with your account.</p>
              <a href="#" class="text-primary-600 text-xs font-medium hover:text-primary-700">
                Contact Support <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 overflow-auto">
      <main class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Page Header -->
          <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-8">
            <div>
              <h1 class="text-2xl font-bold text-dark-900">Dashboard</h1>
              <p class="mt-1 text-sm text-dark-500">Welcome back, John! Here's what's happening with your invoices.</p>
            </div>
            <div class="mt-4 md:mt-0">
              <div class="flex items-center space-x-2 text-sm">
                <span class="text-dark-600">Time Period:</span>
                <select class="form-select rounded-md border-dark-300 py-1 pl-3 pr-8 text-dark-900 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                  <option>Last 30 Days</option>
                  <option>This Month</option>
                  <option>Last Quarter</option>
                  <option>This Year</option>
                  <option>Custom Range</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Stats Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1: Total Invoiced -->
            <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
              <div class="flex justify-between items-start">
                <div>
                  <p class="text-dark-500 text-sm font-medium">Total Invoiced</p>
                  <h3 class="text-2xl font-bold text-dark-900 mt-2">$24,780.00</h3>
                  <div class="flex items-center mt-2">
                    <span class="text-green-500 text-xs font-medium flex items-center">
                      <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L10 9.586l3.293-3.293A1 1 0 0112 7z" clip-rule="evenodd"></path>
                      </svg>
                      12.5%
                    </span>
                    <span class="text-dark-500 text-xs ml-1">from last month</span>
                  </div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center text-primary-600">
                  <i class="fas fa-file-invoice-dollar"></i>
                </div>
              </div>
            </div>

            <!-- Card 2: Paid Invoices -->
            <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
              <div class="flex justify-between items-start">
                <div>
                  <p class="text-dark-500 text-sm font-medium">Paid Invoices</p>
                  <h3 class="text-2xl font-bold text-dark-900 mt-2">$18,230.00</h3>
                  <div class="flex items-center mt-2">
                    <span class="text-green-500 text-xs font-medium flex items-center">
                      <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L10 9.586l3.293-3.293A1 1 0 0112 7z" clip-rule="evenodd"></path>
                      </svg>
                      8.2%
                    </span>
                    <span class="text-dark-500 text-xs ml-1">from last month</span>
                  </div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center text-green-600">
                  <i class="fas fa-check-circle"></i>
                </div>
              </div>
            </div>

            <!-- Card 3: Outstanding Invoices -->
            <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
              <div class="flex justify-between items-start">
                <div>
                  <p class="text-dark-500 text-sm font-medium">Outstanding Invoices</p>
                  <h3 class="text-2xl font-bold text-dark-900 mt-2">$6,550.00</h3>
                  <div class="flex items-center mt-2">
                    <span class="text-red-500 text-xs font-medium flex items-center">
                      <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L10 10.414l3.293 3.293A1 1 0 0012 13z" clip-rule="evenodd"></path>
                      </svg>
                      2.5%
                    </span>
                    <span class="text-dark-500 text-xs ml-1">from last month</span>
                  </div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600">
                  <i class="fas fa-exclamation-circle"></i>
                </div>
              </div>
            </div>

            <!-- Card 4: Overdue Invoices -->
            <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
              <div class="flex justify-between items-start">
                <div>
                  <p class="text-dark-500 text-sm font-medium">Overdue Invoices</p>
                  <h3 class="text-2xl font-bold text-dark-900 mt-2">$1,250.00</h3>
                  <div class="flex items-center mt-2">
                    <span class="text-green-500 text-xs font-medium flex items-center">
                      <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L10 10.414l3.293 3.293A1 1 0 0012 13z" clip-rule="evenodd"></path>
                      </svg>
                      21.8%
                    </span>
                    <span class="text-dark-500 text-xs ml-1">from last month</span>
                  </div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center text-red-600">
                  <i class="fas fa-clock"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Invoices Overview & Cash Flow -->
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
            <!-- Revenue Chart -->
            <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 lg:col-span-2">
              <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 space-y-2 sm:space-y-0">
                <h2 class="text-base sm:text-lg font-bold text-dark-900">Revenue Overview</h2>
                <div class="flex flex-wrap gap-2">
                  <button class="px-3 py-1 text-xs font-medium rounded-lg bg-primary-100 text-primary-700">Monthly</button>
                  <button class="px-3 py-1 text-xs font-medium rounded-lg text-dark-600 hover:bg-dark-100">Quarterly</button>
                  <button class="px-3 py-1 text-xs font-medium rounded-lg text-dark-600 hover:bg-dark-100">Yearly</button>
                </div>
              </div>

              <!-- SVG Chart with responsive sizing -->
              <div class="h-56 sm:h-64 md:h-72">
                <svg class="w-full h-full" viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                  <!-- Chart Background -->
                  <rect width="800" height="300" fill="white" />

                  <!-- Grid Lines -->
                  <line x1="50" y1="50" x2="50" y2="250" stroke="#E2E8F0" stroke-width="1" />
                  <line x1="50" y1="250" x2="750" y2="250" stroke="#E2E8F0" stroke-width="1" />
                  <line x1="50" y1="200" x2="750" y2="200" stroke="#E2E8F0" stroke-width="1" stroke-dasharray="5,5" />
                  <line x1="50" y1="150" x2="750" y2="150" stroke="#E2E8F0" stroke-width="1" stroke-dasharray="5,5" />
                  <line x1="50" y1="100" x2="750" y2="100" stroke="#E2E8F0" stroke-width="1" stroke-dasharray="5,5" />
                  <line x1="50" y1="50" x2="750" y2="50" stroke="#E2E8F0" stroke-width="1" stroke-dasharray="5,5" />

                  <!-- Y-axis Labels -->
                  <text x="40" y="250" text-anchor="end" font-family="Inter, sans-serif" font-size="12" fill="#64748B">$0</text>
                  <text x="40" y="200" text-anchor="end" font-family="Inter, sans-serif" font-size="12" fill="#64748B">$5k</text>
                  <text x="40" y="150" text-anchor="end" font-family="Inter, sans-serif" font-size="12" fill="#64748B">$10k</text>
                  <text x="40" y="100" text-anchor="end" font-family="Inter, sans-serif" font-size="12" fill="#64748B">$15k</text>
                  <text x="40" y="50" text-anchor="end" font-family="Inter, sans-serif" font-size="12" fill="#64748B">$20k</text>

                  <!-- X-axis Labels - Hidden on small screens, visible on medium+ -->
                  <g class="chart-x-labels">
                    <text x="107.5" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Jan</text>
                    <text x="165" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Feb</text>
                    <text x="222.5" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Mar</text>
                    <text x="280" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Apr</text>
                    <text x="337.5" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">May</text>
                    <text x="395" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Jun</text>
                    <text x="452.5" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Jul</text>
                    <text x="510" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Aug</text>
                    <text x="567.5" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Sep</text>
                    <text x="625" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Oct</text>
                    <text x="682.5" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Nov</text>
                    <text x="740" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Dec</text>
                  </g>

                  <!-- Simplified X-axis Labels for small screens - Quarters -->
                  <g class="chart-x-labels-small">
                    <text x="140" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Q1</text>
                    <text x="320" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Q2</text>
                    <text x="500" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Q3</text>
                    <text x="680" y="270" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Q4</text>
                  </g>

                  <!-- Income Line -->
                  <path d="M107.5 170 L165 130 L222.5 150 L280 90 L337.5 70 L395 100 L452.5 60 L510 70 L567.5 50 L625 90 L682.5 110 L740 80"
                    stroke="#14B8A6" stroke-width="3" fill="none" class="chart-line income-line" />

                  <!-- Income Area -->
                  <path d="M107.5 170 L165 130 L222.5 150 L280 90 L337.5 70 L395 100 L452.5 60 L510 70 L567.5 50 L625 90 L682.5 110 L740 80 L740 250 L107.5 250 Z"
                    fill="url(#incomeGradient)" opacity="0.3" class="chart-area income-area" />

                  <!-- Expense Line -->
                  <path d="M107.5 190 L165 170 L222.5 190 L280 160 L337.5 180 L395 150 L452.5 170 L510 140 L567.5 160 L625 130 L682.5 150 L740 140"
                    stroke="#E879F9" stroke-width="3" fill="none" class="chart-line expense-line" />

                  <!-- Data Points (Income) -->
                  <g class="data-points income-points">
                    <circle cx="107.5" cy="170" r="4" fill="#14B8A6" />
                    <circle cx="165" cy="130" r="4" fill="#14B8A6" />
                    <circle cx="222.5" cy="150" r="4" fill="#14B8A6" />
                    <circle cx="280" cy="90" r="4" fill="#14B8A6" />
                    <circle cx="337.5" cy="70" r="4" fill="#14B8A6" />
                    <circle cx="395" cy="100" r="4" fill="#14B8A6" />
                    <circle cx="452.5" cy="60" r="4" fill="#14B8A6" />
                    <circle cx="510" cy="70" r="4" fill="#14B8A6" />
                    <circle cx="567.5" cy="50" r="4" fill="#14B8A6" />
                    <circle cx="625" cy="90" r="4" fill="#14B8A6" />
                    <circle cx="682.5" cy="110" r="4" fill="#14B8A6" />
                    <circle cx="740" cy="80" r="4" fill="#14B8A6" />
                  </g>

                  <!-- Data Points (Expenses) -->
                  <g class="data-points expense-points">
                    <circle cx="107.5" cy="190" r="4" fill="#E879F9" />
                    <circle cx="165" cy="170" r="4" fill="#E879F9" />
                    <circle cx="222.5" cy="190" r="4" fill="#E879F9" />
                    <circle cx="280" cy="160" r="4" fill="#E879F9" />
                    <circle cx="337.5" cy="180" r="4" fill="#E879F9" />
                    <circle cx="395" cy="150" r="4" fill="#E879F9" />
                    <circle cx="452.5" cy="170" r="4" fill="#E879F9" />
                    <circle cx="510" cy="140" r="4" fill="#E879F9" />
                    <circle cx="567.5" cy="160" r="4" fill="#E879F9" />
                    <circle cx="625" cy="130" r="4" fill="#E879F9" />
                    <circle cx="682.5" cy="150" r="4" fill="#E879F9" />
                    <circle cx="740" cy="140" r="4" fill="#E879F9" />
                  </g>

                  <!-- Gradients -->
                  <defs>
                    <linearGradient id="incomeGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#14B8A6" stop-opacity="0.5" />
                      <stop offset="100%" stop-color="#14B8A6" stop-opacity="0" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>

              <!-- Chart Legend -->
              <div class="flex items-center justify-center mt-4 space-x-6">
                <div class="flex items-center">
                  <div class="w-3 h-3 rounded-full bg-primary-500 mr-2"></div>
                  <span class="text-xs sm:text-sm text-dark-600">Income</span>
                </div>
                <div class="flex items-center">
                  <div class="w-3 h-3 rounded-full bg-secondary-500 mr-2"></div>
                  <span class="text-xs sm:text-sm text-dark-600">Expenses</span>
                </div>
              </div>
            </div>

            <!-- Invoice Status Breakdown -->
            <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6">
              <h2 class="text-base sm:text-lg font-bold text-dark-900 mb-4">Invoice Status</h2>

              <!-- Donut Chart - Responsive sizing -->
              <div class="flex justify-center mb-6">
                <svg width="160" height="160" viewBox="0 0 180 180" class="w-36 h-36 sm:w-44 sm:h-44">
                  <circle cx="90" cy="90" r="80" fill="transparent" stroke="#F1F5F9" stroke-width="20" />

                  <!-- Paid Section (70%) -->
                  <circle cx="90" cy="90" r="80" fill="transparent" stroke="#10B981" stroke-width="20"
                    stroke-dasharray="352 503" stroke-dashoffset="0" transform="rotate(-90 90 90)" />

                  <!-- Outstanding Section (20%) -->
                  <circle cx="90" cy="90" r="80" fill="transparent" stroke="#FBBF24" stroke-width="20"
                    stroke-dasharray="100 755" stroke-dashoffset="-352" transform="rotate(-90 90 90)" />

                  <!-- Overdue Section (10%) -->
                  <circle cx="90" cy="90" r="80" fill="transparent" stroke="#EF4444" stroke-width="20"
                    stroke-dasharray="50 805" stroke-dashoffset="-452" transform="rotate(-90 90 90)" />

                  <!-- Center Text -->
                  <text x="90" y="85" text-anchor="middle" font-family="DM Sans, sans-serif" font-size="20" font-weight="bold" fill="#1E293B">24</text>
                  <text x="90" y="105" text-anchor="middle" font-family="Inter, sans-serif" font-size="12" fill="#64748B">Invoices</text>
                </svg>
              </div>

              <!-- Legend - Using grid for smaller screens -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                    <span class="text-xs sm:text-sm text-dark-600">Paid</span>
                  </div>
                  <span class="text-xs sm:text-sm font-medium text-dark-800">17 (70%)</span>
                </div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <div class="w-3 h-3 rounded-full bg-amber-500 mr-2"></div>
                    <span class="text-xs sm:text-sm text-dark-600">Outstanding</span>
                  </div>
                  <span class="text-xs sm:text-sm font-medium text-dark-800">5 (20%)</span>
                </div>
                <div class="flex items-center justify-between sm:col-span-2">
                  <div class="flex items-center">
                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                    <span class="text-xs sm:text-sm text-dark-600">Overdue</span>
                  </div>
                  <span class="text-xs sm:text-sm font-medium text-dark-800">2 (10%)</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Add this script to toggle between monthly and quarterly x-axis labels based on screen size -->
          <script>
            function handleChartResponsiveness() {
              const isSmallScreen = window.innerWidth < 640;
              const monthlyLabels = document.querySelector('.chart-x-labels');
              const quarterlyLabels = document.querySelector('.chart-x-labels-small');

              // Show quarterly labels and hide monthly on small screens
              if (monthlyLabels && quarterlyLabels) {
                if (isSmallScreen) {
                  monthlyLabels.style.display = 'none';
                  quarterlyLabels.style.display = 'block';
                } else {
                  monthlyLabels.style.display = 'block';
                  quarterlyLabels.style.display = 'none';
                }
              }

              // Adjust data point size for small screens
              const dataPoints = document.querySelectorAll('.data-points circle');
              dataPoints.forEach(point => {
                point.setAttribute('r', isSmallScreen ? '3' : '4');
              });
            }

            // Run on page load and window resize
            window.addEventListener('load', handleChartResponsiveness);
            window.addEventListener('resize', handleChartResponsiveness);
          </script>
          <!-- Recent Invoices & Upcoming Payments -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Recent Invoices -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
              <div class="px-6 py-5 border-b border-dark-200">
                <div class="flex justify-between items-center">
                  <h2 class="text-lg font-bold text-dark-900">Recent Invoices</h2>
                  <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">View All</a>
                </div>
              </div>
              <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Invoice</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Client</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Amount</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Status</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Date</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-dark-900">#INV-0012</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">Acme Inc.</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">$2,500.00</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-500">Mar 15, 2023</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-dark-900">#INV-0011</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">Globex Corp</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">$1,750.00</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Pending</span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-500">Mar 12, 2023</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-dark-900">#INV-0010</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">Soylent Corp</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">$3,200.00</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-500">Mar 08, 2023</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-dark-900">#INV-0009</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">Initech LLC</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">$950.00</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Overdue</span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-500">Feb 28, 2023</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-dark-900">#INV-0008</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">Stark Industries</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-700">$4,800.00</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-500">Feb 25, 2023</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Upcoming Payments -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
              <div class="px-6 py-5 border-b border-dark-200">
                <div class="flex justify-between items-center">
                  <h2 class="text-lg font-bold text-dark-900">Upcoming Payments</h2>
                  <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">View All</a>
                </div>
              </div>
              <div class="p-6 space-y-6">
                <!-- Payment Item 1 -->
                <div class="flex items-center">
                  <div class="bg-amber-100 rounded-xl p-3">
                    <svg class="w-6 h-6 text-amber-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ml-4 flex-1">
                    <div class="flex items-center justify-between">
                      <h3 class="text-sm font-medium text-dark-900">Globex Corp</h3>
                      <p class="text-sm font-medium text-dark-900">$1,750.00</p>
                    </div>
                    <div class="flex items-center justify-between mt-1">
                      <p class="text-xs text-dark-500">Invoice #INV-0011</p>
                      <p class="text-xs text-dark-500">Due in 5 days</p>
                    </div>
                  </div>
                </div>

                <!-- Payment Item 2 -->
                <div class="flex items-center">
                  <div class="bg-red-100 rounded-xl p-3">
                    <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ml-4 flex-1">
                    <div class="flex items-center justify-between">
                      <h3 class="text-sm font-medium text-dark-900">Initech LLC</h3>
                      <p class="text-sm font-medium text-dark-900">$950.00</p>
                    </div>
                    <div class="flex items-center justify-between mt-1">
                      <p class="text-xs text-dark-500">Invoice #INV-0009</p>
                      <p class="text-xs text-red-500">Overdue by 3 days</p>
                    </div>
                  </div>
                </div>

                <!-- Payment Item 3 -->
                <div class="flex items-center">
                  <div class="bg-amber-100 rounded-xl p-3">
                    <svg class="w-6 h-6 text-amber-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ml-4 flex-1">
                    <div class="flex items-center justify-between">
                      <h3 class="text-sm font-medium text-dark-900">Wayne Enterprises</h3>
                      <p class="text-sm font-medium text-dark-900">$3,450.00</p>
                    </div>
                    <div class="flex items-center justify-between mt-1">
                      <p class="text-xs text-dark-500">Invoice #INV-0013</p>
                      <p class="text-xs text-dark-500">Due in 10 days</p>
                    </div>
                  </div>
                </div>

                <!-- Payment Item 4 -->
                <div class="flex items-center">
                  <div class="bg-amber-100 rounded-xl p-3">
                    <svg class="w-6 h-6 text-amber-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ml-4 flex-1">
                    <div class="flex items-center justify-between">
                      <h3 class="text-sm font-medium text-dark-900">Cyberdyne Systems</h3>
                      <p class="text-sm font-medium text-dark-900">$2,200.00</p>
                    </div>
                    <div class="flex items-center justify-between mt-1">
                      <p class="text-xs text-dark-500">Invoice #INV-0014</p>
                      <p class="text-xs text-dark-500">Due in 14 days</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Quick Action Cards Row -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Recent Activity -->
            <div class="col-span-2 bg-white rounded-xl shadow-sm overflow-hidden">
              <div class="px-6 py-5 border-b border-dark-200">
                <h2 class="text-lg font-bold text-dark-900">Recent Activity</h2>
              </div>
              <div class="p-6">
                <div class="relative">
                  <!-- Activity Timeline Line -->
                  <div class="absolute h-full w-0.5 bg-dark-200 left-1.5"></div>

                  <!-- Activity Item 1 -->
                  <div class="relative pl-8 pb-6">
                    <div class="absolute left-0 top-1 w-3 h-3 rounded-full bg-green-500 border-2 border-white"></div>
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-dark-900">Invoice #INV-0012 was paid</p>
                      <span class="text-xs text-dark-500">Today, 10:45 AM</span>
                    </div>
                  </div>

                  <!-- Activity Item 2 -->
                  <div class="relative pl-8 pb-6">
                    <div class="absolute left-0 top-1 w-3 h-3 rounded-full bg-blue-500 border-2 border-white"></div>
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-dark-900">Invoice #INV-0013 was sent to Wayne Enterprises</p>
                      <span class="text-xs text-dark-500">Today, 9:30 AM</span>
                    </div>
                  </div>

                  <!-- Activity Item 3 -->
                  <div class="relative pl-8 pb-6">
                    <div class="absolute left-0 top-1 w-3 h-3 rounded-full bg-amber-500 border-2 border-white"></div>
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-dark-900">Payment reminder sent for Invoice #INV-0011</p>
                      <span class="text-xs text-dark-500">Yesterday, 4:15 PM</span>
                    </div>
                  </div>

                  <!-- Activity Item 4 -->
                  <div class="relative pl-8 pb-6">
                    <div class="absolute left-0 top-1 w-3 h-3 rounded-full bg-green-500 border-2 border-white"></div>
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-dark-900">Invoice #INV-0010 was paid</p>
                      <span class="text-xs text-dark-500">Yesterday, 1:22 PM</span>
                    </div>
                  </div>

                  <!-- Activity Item 5 -->
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-1 w-3 h-3 rounded-full bg-purple-500 border-2 border-white"></div>
                    <div class="flex flex-col">
                      <p class="text-sm font-medium text-dark-900">New client "Cyberdyne Systems" was added</p>
                      <span class="text-xs text-dark-500">Yesterday, 11:08 AM</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick Actions Card -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
              <div class="px-6 py-5 border-b border-dark-200">
                <h2 class="text-lg font-bold text-dark-900">Quick Actions</h2>
              </div>
              <div class="p-6 space-y-4">
                <a href="#" class="flex items-center p-4 rounded-xl bg-primary-50 text-primary-800 hover:bg-primary-100 transition-colors">
                  <div class="rounded-full p-2 bg-primary-100">
                    <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="font-medium">New Invoice</p>
                    <p class="text-xs text-primary-700">Create and send an invoice</p>
                  </div>
                </a>

                <a href="#" class="flex items-center p-4 rounded-xl bg-dark-50 text-dark-800 hover:bg-dark-100 transition-colors">
                  <div class="rounded-full p-2 bg-dark-100">
                    <svg class="w-6 h-6 text-dark-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="font-medium">Add Client</p>
                    <p class="text-xs text-dark-600">Add a new client to your list</p>
                  </div>
                </a>

                <a href="#" class="flex items-center p-4 rounded-xl bg-secondary-50 text-secondary-800 hover:bg-secondary-100 transition-colors">
                  <div class="rounded-full p-2 bg-secondary-100">
                    <svg class="w-6 h-6 text-secondary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="font-medium">New Item</p>
                    <p class="text-xs text-secondary-700">Add product or service item</p>
                  </div>
                </a>

                <a href="#" class="flex items-center p-4 rounded-xl bg-blue-50 text-blue-800 hover:bg-blue-100 transition-colors">
                  <div class="rounded-full p-2 bg-blue-100">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="font-medium">Generate Report</p>
                    <p class="text-xs text-blue-700">Create financial reports</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Mobile Nav Bar (Fixed at Bottom) -->
  <nav class="md:hidden fixed bottom-0 w-full bg-white border-t border-dark-200 z-40">
    <div class="flex justify-around">
      <a href="#" class="flex flex-col items-center py-3 px-2 text-primary-600">
        <i class="fas fa-th-large text-lg"></i>
        <span class="text-xs mt-1">Dashboard</span>
      </a>
      <a href="#" class="flex flex-col items-center py-3 px-2 text-dark-600">
        <i class="fas fa-file-invoice text-lg"></i>
        <span class="text-xs mt-1">Invoices</span>
      </a>
      <a href="#" class="flex flex-col items-center py-3 px-2">
        <div class="w-12 h-12 rounded-full gradient-primary flex items-center justify-center text-white -mt-5 shadow-lg border-4 border-white">
          <i class="fas fa-plus"></i>
        </div>
      </a>
      <a href="#" class="flex flex-col items-center py-3 px-2 text-dark-600">
        <i class="fas fa-users text-lg"></i>
        <span class="text-xs mt-1">Clients</span>
      </a>
      <a href="#" class="flex flex-col items-center py-3 px-2 text-dark-600">
        <i class="fas fa-chart-bar text-lg"></i>
        <span class="text-xs mt-1">Reports</span>
      </a>
    </div>
  </nav>

  <script>
    // Toggle user dropdown menu
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenu = document.getElementById('user-menu');

    userMenuButton.addEventListener('click', () => {
      userMenu.classList.toggle('hidden');
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', (event) => {
      if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
        userMenu.classList.add('hidden');
      }
    });
    // Add this to the existing script at the bottom of your HTML file

    // Handle mobile plus button click
    const mobilePlusButton = document.querySelector('.md\\:hidden .rounded-full');
    const mobileActionSheet = document.createElement('div');

    // Create mobile action sheet
    mobileActionSheet.className = 'fixed inset-0 bg-black bg-opacity-50 z-50 flex items-end justify-center hidden';
    mobileActionSheet.innerHTML = `
  <div class="bg-white w-full max-w-md rounded-t-xl p-6 animate-slideUp">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-lg font-bold text-dark-900">Quick Actions</h3>
      <button class="mobile-close-sheet p-2 rounded-full hover:bg-gray-100">
        <svg class="w-5 h-5 text-dark-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div class="space-y-3">
      <a href="#" class="flex items-center p-3 rounded-xl bg-primary-50 text-primary-800 hover:bg-primary-100 transition-colors">
        <div class="rounded-full p-2 bg-primary-100">
          <i class="fas fa-file-invoice text-primary-600"></i>
        </div>
        <div class="ml-3">
          <p class="font-medium">New Invoice</p>
          <p class="text-xs text-primary-700">Create and send an invoice</p>
        </div>
      </a>
      <a href="#" class="flex items-center p-3 rounded-xl bg-dark-50 text-dark-800 hover:bg-dark-100 transition-colors">
        <div class="rounded-full p-2 bg-dark-100">
          <i class="fas fa-users text-dark-600"></i>
        </div>
        <div class="ml-3">
          <p class="font-medium">Add Client</p>
          <p class="text-xs text-dark-600">Add a new client to your list</p>
        </div>
      </a>
      <a href="#" class="flex items-center p-3 rounded-xl bg-secondary-50 text-secondary-800 hover:bg-secondary-100 transition-colors">
        <div class="rounded-full p-2 bg-secondary-100">
          <i class="fas fa-boxes text-secondary-600"></i>
        </div>
        <div class="ml-3">
          <p class="font-medium">New Item</p>
          <p class="text-xs text-secondary-700">Add product or service item</p>
        </div>
      </a>
      <a href="#" class="flex items-center p-3 rounded-xl bg-blue-50 text-blue-800 hover:bg-blue-100 transition-colors">
        <div class="rounded-full p-2 bg-blue-100">
          <i class="fas fa-chart-bar text-blue-600"></i>
        </div>
        <div class="ml-3">
          <p class="font-medium">Generate Report</p>
          <p class="text-xs text-blue-700">Create financial reports</p>
        </div>
      </a>
    </div>
  </div>
`;

    // Add action sheet to body
    document.body.appendChild(mobileActionSheet);

    // Add slideUp animation to style section
    const styleElement = document.createElement('style');
    styleElement.textContent = `
  @keyframes slideUp {
    from { transform: translateY(100%); }
    to { transform: translateY(0); }
  }
  .animate-slideUp {
    animation: slideUp 0.3s ease-out forwards;
  }
  /* Add padding to main content when on mobile view to account for the bottom nav */
  @media (max-width: 768px) {
    .flex-1.overflow-auto {
      padding-bottom: 4rem;
    }
  }
`;
    document.head.appendChild(styleElement);

    // Show action sheet when plus button is clicked
    mobilePlusButton.addEventListener('click', () => {
      mobileActionSheet.classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // Prevent scrolling
    });

    // Close action sheet when clicking close button
    document.querySelector('.mobile-close-sheet').addEventListener('click', () => {
      mobileActionSheet.classList.add('hidden');
      document.body.style.overflow = ''; // Re-enable scrolling
    });

    // Close action sheet when clicking outside
    mobileActionSheet.addEventListener('click', (event) => {
      if (event.target === mobileActionSheet) {
        mobileActionSheet.classList.add('hidden');
        document.body.style.overflow = ''; // Re-enable scrolling
      }
    });
  </script>
</body>

</html>