<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoices - InvoiceHub</title>
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
    
    @keyframes slideUp {
      from { transform: translateY(100%); }
      to { transform: translateY(0); }
    }
    
    .animate-slideUp {
      animation: slideUp 0.3s ease-out forwards;
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
    
    /* Add padding to main content when on mobile view to account for the bottom nav */
    @media (max-width: 768px) {
      .flex-1.overflow-auto {
        padding-bottom: 4rem;
      }
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
            <a href="dashboard.php" class="text-dark-600 hover:text-primary-600 font-medium transition-colors text-sm px-3 py-2 rounded-lg">Dashboard</a>
            <a href="invoices.php" class="text-primary-600 hover:text-primary-700 font-medium transition-colors text-sm px-3 py-2 rounded-lg bg-primary-50">Invoices</a>
            <a href="#" class="text-dark-600 hover:text-primary-600 font-medium transition-colors text-sm px-3 py-2 rounded-lg">Clients</a>
            <a href="#" class="text-dark-600 hover:text-primary-600 font-medium transition-colors text-sm px-3 py-2 rounded-lg">Reports</a>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <!-- Search (Hidden on mobile) -->
          <div class="hidden md:flex items-center relative">
            <input type="text" placeholder="Search invoices..." class="py-2 pl-10 pr-4 w-64 rounded-lg border border-dark-200 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm">
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
            <a href="dashboard.php" class="menu-item flex items-center px-3 py-3 text-sm font-medium rounded-md text-dark-700 hover:bg-gray-100">
              <i class="fas fa-th-large w-6 mr-3 text-center"></i>
              Dashboard
            </a>
            <a href="invoices.php" class="menu-item active flex items-center px-3 py-3 text-sm font-medium rounded-md">
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
          <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <div>
              <h1 class="text-2xl font-bold text-dark-900">Invoices</h1>
              <p class="mt-1 text-sm text-dark-500">Manage and track all your invoices in one place.</p>
            </div>
            <div class="mt-4 md:mt-0 flex space-x-3">
              <div class="relative">
                <button class="px-4 py-2 bg-white border border-dark-300 rounded-lg shadow-sm font-medium text-sm text-dark-700 hover:bg-gray-50 flex items-center">
                  <i class="fas fa-filter mr-2 text-dark-400"></i>
                  Filter
                  <i class="fas fa-chevron-down ml-2 text-dark-400"></i>
                </button>
                <!-- Filter dropdown would go here -->
              </div>
              <button class="px-4 py-2 gradient-primary hover:opacity-90 text-white font-medium rounded-lg text-sm transition-colors shadow-sm">
                <i class="fas fa-plus mr-2"></i> New Invoice
              </button>
            </div>
          </div>

          <!-- Invoice Stats -->
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 sm:gap-6 mb-6">
            <div class="bg-white rounded-xl shadow-sm p-4 sm:p-5">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-dark-500 text-xs sm:text-sm">All Invoices</p>
                  <p class="text-xl sm:text-2xl font-bold text-dark-900 mt-1">$26,780.00</p>
                </div>
                <div class="w-9 h-9 rounded-lg bg-primary-100 flex items-center justify-center text-primary-600">
                  <i class="fas fa-file-invoice-dollar"></i>
                </div>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-4 sm:p-5">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-dark-500 text-xs sm:text-sm">Paid</p>
                  <p class="text-xl sm:text-2xl font-bold text-green-600 mt-1">$18,230.00</p>
                </div>
                <div class="w-9 h-9 rounded-lg bg-green-100 flex items-center justify-center text-green-600">
                  <i class="fas fa-check-circle"></i>
                </div>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-4 sm:p-5">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-dark-500 text-xs sm:text-sm">Pending</p>
                  <p class="text-xl sm:text-2xl font-bold text-amber-600 mt-1">$6,550.00</p>
                </div>
                <div class="w-9 h-9 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600">
                  <i class="fas fa-clock"></i>
                </div>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-4 sm:p-5">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-dark-500 text-xs sm:text-sm">Overdue</p>
                  <p class="text-xl sm:text-2xl font-bold text-red-600 mt-1">$2,000.00</p>
                </div>
                <div class="w-9 h-9 rounded-lg bg-red-100 flex items-center justify-center text-red-600">
                  <i class="fas fa-exclamation-circle"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Tab Navigation -->
          <div class="border-b border-gray-200 mb-6">
            <nav class="-mb-px flex space-x-8 overflow-x-auto">
              <a href="#" class="whitespace-nowrap py-3 px-1 border-b-2 border-primary-500 font-medium text-sm text-primary-600">
                All Invoices
                <span class="ml-1 bg-primary-100 text-primary-700 py-0.5 px-2 rounded-full text-xs">24</span>
              </a>
              <a href="#" class="whitespace-nowrap py-3 px-1 border-b-2 border-transparent font-medium text-sm text-dark-500 hover:text-dark-700 hover:border-dark-300">
                Draft
                <span class="ml-1 bg-dark-100 text-dark-700 py-0.5 px-2 rounded-full text-xs">2</span>
              </a>
              <a href="#" class="whitespace-nowrap py-3 px-1 border-b-2 border-transparent font-medium text-sm text-dark-500 hover:text-dark-700 hover:border-dark-300">
                Pending
                <span class="ml-1 bg-amber-100 text-amber-700 py-0.5 px-2 rounded-full text-xs">5</span>
              </a>
              <a href="#" class="whitespace-nowrap py-3 px-1 border-b-2 border-transparent font-medium text-sm text-dark-500 hover:text-dark-700 hover:border-dark-300">
                Paid
                <span class="ml-1 bg-green-100 text-green-700 py-0.5 px-2 rounded-full text-xs">15</span>
              </a>
              <a href="#" class="whitespace-nowrap py-3 px-1 border-b-2 border-transparent font-medium text-sm text-dark-500 hover:text-dark-700 hover:border-dark-300">
                Overdue
                <span class="ml-1 bg-red-100 text-red-700 py-0.5 px-2 rounded-full text-xs">2</span>
              </a>
            </nav>
          </div>

          <!-- Search and Filters -->
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 space-y-3 sm:space-y-0">
            <!-- Left Side - Search -->
            <div class="relative flex-1 max-w-lg">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-dark-400"></i>
              </div>
              <input type="text" placeholder="Search by invoice number, client or amount..."
                class="w-full pl-10 pr-4 py-2 border border-dark-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
            </div>
            
            <!-- Right Side - Sort and View Options -->
            <div class="flex items-center space-x-3">
              <!-- Sort -->
              <div class="relative">
                <select class="appearance-none bg-white border border-dark-300 rounded-lg py-2 pl-3 pr-8 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                  <option>Date: Newest</option>
                  <option>Date: Oldest</option>
                  <option>Amount: High to Low</option>
                  <option>Amount: Low to High</option>
                  <option>Status</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-dark-500">
                  <i class="fas fa-chevron-down text-xs"></i>
                </div>
              </div>
              
              <!-- View Toggle -->
              <div class="flex bg-dark-100 rounded-lg p-1">
                <button class="p-1.5 rounded bg-white shadow-sm">
                  <i class="fas fa-list-ul text-primary-600"></i>
                </button>
                <button class="p-1.5 rounded text-dark-500 hover:text-dark-700">
                  <i class="fas fa-th-large"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Invoices Table -->
          <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
            <div class="overflow-x-auto">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">
                      <div class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
                      </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Invoice #</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Client</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Issue Date</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Due Date</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Amount</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-dark-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-dark-500 uppercase tracking-wider">Actions</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <!-- Invoice Row 1 -->
                  <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="text-sm font-medium text-dark-900">#INV-0024</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 font-medium text-xs">WE</div>
                        <div class="ml-3">
                          <p class="text-sm font-medium text-dark-900">Wayne Enterprises</p>
                          <p class="text-xs text-dark-500">bruce@wayne.com</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 12, 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Apr 11, 2023</td>
<td class="px-6 py-4 whitespace-nowrap">
  <span class="text-sm font-semibold text-dark-900">$3,450.00</span>
</td>
<td class="px-6 py-4 whitespace-nowrap">
  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Pending</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
  <div class="flex items-center justify-end space-x-2">
    <button class="text-dark-400 hover:text-dark-600">
      <i class="fas fa-eye"></i>
    </button>
    <button class="text-dark-400 hover:text-dark-600">
      <i class="fas fa-edit"></i>
    </button>
    <button class="text-dark-400 hover:text-red-600">
      <i class="fas fa-trash-alt"></i>
    </button>
    <button class="text-dark-400 hover:text-dark-600">
      <i class="fas fa-ellipsis-v"></i>
    </button>
  </div>
</td>
</tr>

<!-- Invoice Row 2 -->
<tr class="hover:bg-gray-50">
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-medium text-dark-900">#INV-0023</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-700 font-medium text-xs">SI</div>
      <div class="ml-3">
        <p class="text-sm font-medium text-dark-900">Stark Industries</p>
        <p class="text-xs text-dark-500">tony@stark.com</p>
      </div>
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 10, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 25, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-semibold text-dark-900">$4,800.00</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <div class="flex items-center justify-end space-x-2">
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-eye"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-edit"></i>
      </button>
      <button class="text-dark-400 hover:text-red-600">
        <i class="fas fa-trash-alt"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-ellipsis-v"></i>
      </button>
    </div>
  </td>
</tr>

<!-- Invoice Row 3 -->
<tr class="hover:bg-gray-50">
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-medium text-dark-900">#INV-0022</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <div class="h-8 w-8 rounded-full bg-amber-100 flex items-center justify-center text-amber-700 font-medium text-xs">GC</div>
      <div class="ml-3">
        <p class="text-sm font-medium text-dark-900">Globex Corporation</p>
        <p class="text-xs text-dark-500">hank@globex.com</p>
      </div>
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 08, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 23, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-semibold text-dark-900">$1,750.00</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <div class="flex items-center justify-end space-x-2">
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-eye"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-edit"></i>
      </button>
      <button class="text-dark-400 hover:text-red-600">
        <i class="fas fa-trash-alt"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-ellipsis-v"></i>
      </button>
    </div>
  </td>
</tr>

<!-- Invoice Row 4 -->
<tr class="hover:bg-gray-50">
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-medium text-dark-900">#INV-0021</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center text-green-700 font-medium text-xs">AI</div>
      <div class="ml-3">
        <p class="text-sm font-medium text-dark-900">Acme Inc.</p>
        <p class="text-xs text-dark-500">wile@acme.com</p>
      </div>
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 05, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 20, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-semibold text-dark-900">$2,500.00</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <div class="flex items-center justify-end space-x-2">
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-eye"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-edit"></i>
      </button>
      <button class="text-dark-400 hover:text-red-600">
        <i class="fas fa-trash-alt"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-ellipsis-v"></i>
      </button>
    </div>
  </td>
</tr>

<!-- Invoice Row 5 -->
<tr class="hover:bg-gray-50">
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-medium text-dark-900">#INV-0020</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center text-red-700 font-medium text-xs">IL</div>
      <div class="ml-3">
        <p class="text-sm font-medium text-dark-900">Initech LLC</p>
        <p class="text-xs text-dark-500">peter@initech.com</p>
      </div>
    </div>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-dark-600">Mar 02, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 font-medium">Mar 17, 2023</td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="text-sm font-semibold text-dark-900">$950.00</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap">
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Overdue</span>
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <div class="flex items-center justify-end space-x-2">
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-eye"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-edit"></i>
      </button>
      <button class="text-dark-400 hover:text-red-600">
        <i class="fas fa-trash-alt"></i>
      </button>
      <button class="text-dark-400 hover:text-dark-600">
        <i class="fas fa-ellipsis-v"></i>
      </button>
    </div>
  </td>
</tr>
</tbody>
</table>
</div>
</div>

<!-- Pagination -->
<div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 mb-6">
  <div class="text-sm text-dark-500">
    Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">24</span> results
  </div>
  <div class="flex items-center space-x-2">
    <button class="px-3 py-1 rounded-md bg-white border border-dark-300 text-dark-500 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="px-3 py-1 rounded-md bg-primary-500 text-white font-medium">1</button>
    <button class="px-3 py-1 rounded-md bg-white border border-dark-300 text-dark-700 hover:bg-gray-50">2</button>
    <button class="px-3 py-1 rounded-md bg-white border border-dark-300 text-dark-700 hover:bg-gray-50">3</button>
    <button class="px-3 py-1 rounded-md bg-white border border-dark-300 text-dark-700 hover:bg-gray-50">4</button>
    <button class="px-3 py-1 rounded-md bg-white border border-dark-300 text-dark-700 hover:bg-gray-50">5</button>
    <button class="px-3 py-1 rounded-md bg-white border border-dark-300 text-dark-500 hover:bg-gray-50">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>
</div>

</div>
</main>
</div>
</div>

<!-- Mobile Nav Bar (Fixed at Bottom) -->
<nav class="md:hidden fixed bottom-0 w-full bg-white border-t border-dark-200 z-40">
<div class="flex justify-around">
  <a href="dashboard.php" class="flex flex-col items-center py-3 px-2 text-dark-600">
    <i class="fas fa-th-large text-lg"></i>
    <span class="text-xs mt-1">Dashboard</span>
  </a>
  <a href="invoices.php" class="flex flex-col items-center py-3 px-2 text-primary-600">
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

<!-- Mobile Action Sheet (hidden by default) -->
<div class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-end justify-center hidden" id="mobileActionSheet">
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
</div>

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

// Handle mobile plus button click
const mobilePlusButton = document.querySelector('.md\\:hidden .rounded-full');
const mobileActionSheet = document.getElementById('mobileActionSheet');
const mobileCloseButton = document.querySelector('.mobile-close-sheet');

// Show action sheet when plus button is clicked
mobilePlusButton.addEventListener('click', () => {
  mobileActionSheet.classList.remove('hidden');
  document.body.style.overflow = 'hidden'; // Prevent scrolling
});

// Close action sheet when clicking close button
mobileCloseButton.addEventListener('click', () => {
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