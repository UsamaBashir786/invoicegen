<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - InvoiceHub</title>
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

    /* For file input styling */
    .file-input-label {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }

    .file-input {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-gray-50">
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
          <a href="login.php" class="text-dark-600 hover:text-primary-600 font-medium transition-colors">Sign in</a>
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
          <a href="login.php" class="px-2 py-2 text-dark-600 hover:text-primary-600 font-medium transition-colors">Sign in</a>
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

  <!-- Registration Section -->
  <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8 relative">
    <div class="absolute top-0 right-0 -z-10 w-1/2 h-1/2 opacity-10">
      <div class="absolute top-0 right-0 w-full h-full blob bg-gradient-to-r from-primary-300 via-primary-400 to-secondary-400"></div>
    </div>
    <div class="absolute bottom-0 left-0 -z-10 w-1/2 h-1/2 opacity-10">
      <div class="absolute bottom-0 left-0 w-full h-full blob-2 bg-gradient-to-r from-secondary-300 via-secondary-400 to-primary-400"></div>
    </div>

    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
      <div class="md:flex">
        <div class="md:w-1/3 gradient-primary p-8 text-white">
          <h2 class="text-2xl font-bold mb-6">Join InvoiceHub</h2>
          <p class="mb-4">Create your account and start streamlining your invoicing process today.</p>

          <div class="space-y-4 mt-10">
            <div class="flex items-center">
              <div class="rounded-full bg-white/20 p-2 mr-3">
                <i class="fas fa-check text-sm"></i>
              </div>
              <span>Create professional invoices in seconds</span>
            </div>
            <div class="flex items-center">
              <div class="rounded-full bg-white/20 p-2 mr-3">
                <i class="fas fa-check text-sm"></i>
              </div>
              <span>Get paid faster with online payments</span>
            </div>
            <div class="flex items-center">
              <div class="rounded-full bg-white/20 p-2 mr-3">
                <i class="fas fa-check text-sm"></i>
              </div>
              <span>Track all your finances in one place</span>
            </div>
            <div class="flex items-center">
              <div class="rounded-full bg-white/20 p-2 mr-3">
                <i class="fas fa-check text-sm"></i>
              </div>
              <span>14-day free trial, no credit card required</span>
            </div>
          </div>

          <div class="mt-12">
            <p>Already have an account?</p>
            <a href="login.php" class="block mt-2 text-center py-2 px-4 bg-white/20 hover:bg-white/30 text-white font-medium rounded-lg transition-colors">
              Sign in
            </a>
          </div>
        </div>

        <div class="md:w-2/3 p-8">
          <h2 class="text-2xl font-bold text-dark-900 mb-6">Create your account</h2>

          <form class="space-y-6" action="#" method="POST" enctype="multipart/form-data">
            <!-- Personal Information -->
            <div class="space-y-4">
              <h3 class="text-lg font-semibold text-dark-800">Personal Information</h3>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="full-name" class="block text-sm font-medium text-dark-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                  <input id="full-name" name="full-name" type="text" required class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="John Doe">
                </div>

                <div>
                  <label for="email" class="block text-sm font-medium text-dark-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                  <input id="email" name="email" type="email" required class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="john@example.com">
                </div>

                <div>
                  <label for="phone" class="block text-sm font-medium text-dark-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                  <input id="phone" name="phone" type="tel" required class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="+1 (123) 456-7890">
                </div>

                <div>
                  <label for="dob" class="block text-sm font-medium text-dark-700 mb-1">Date of Birth <span class="text-red-500">*</span></label>
                  <input id="dob" name="dob" type="date" required class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                </div>
              </div>
            </div>

            <!-- Business Information -->
            <div class="space-y-4">
              <h3 class="text-lg font-semibold text-dark-800">Business Information</h3>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="business-name" class="block text-sm font-medium text-dark-700 mb-1">Business Name <span class="text-red-500">*</span></label>
                  <input id="business-name" name="business-name" type="text" required class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="Acme Inc.">
                </div>

                <div>
                  <label for="business-type" class="block text-sm font-medium text-dark-700 mb-1">Business Type</label>
                  <select id="business-type" name="business-type" class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                    <option value="">Select Business Type</option>
                    <option value="sole-proprietor">Sole Proprietor</option>
                    <option value="partnership">Partnership</option>
                    <option value="llc">LLC</option>
                    <option value="corporation">Corporation</option>
                    <option value="non-profit">Non-Profit</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

              <div>
                <label for="description" class="block text-sm font-medium text-dark-700 mb-1">Business Description</label>
                <textarea id="description" name="description" rows="3" class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="Tell us about your business..."></textarea>
              </div>
            </div>

            <!-- Document Uploads -->
            <div class="space-y-4">
              <h3 class="text-lg font-semibold text-dark-800">Document Uploads</h3>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="profile-image" class="block text-sm font-medium text-dark-700 mb-2">Profile Image</label>
                  <div class="file-input-label w-full">
                    <div class="flex items-center justify-center w-full px-3 py-2 border border-dark-300 border-dashed rounded-lg hover:bg-dark-50 cursor-pointer">
                      <input id="profile-image" name="profile-image" type="file" accept="image/*" class="file-input">
                      <div class="flex items-center">
                        <i class="fas fa-upload text-dark-400 mr-2"></i>
                        <span class="text-dark-500 text-sm">Upload profile image</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <label for="cnic-card" class="block text-sm font-medium text-dark-700 mb-2">CNIC Card <span class="text-red-500">*</span></label>
                  <div class="file-input-label w-full">
                    <div class="flex items-center justify-center w-full px-3 py-2 border border-dark-300 border-dashed rounded-lg hover:bg-dark-50 cursor-pointer">
                      <input id="cnic-card" name="cnic-card" type="file" accept="image/*, application/pdf" required class="file-input">
                      <div class="flex items-center">
                        <i class="fas fa-upload text-dark-400 mr-2"></i>
                        <span class="text-dark-500 text-sm">Upload CNIC card (front & back)</span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-1 text-xs text-dark-500">Upload front and back images in a single PDF or as separate images</p>
                </div>
              </div>
            </div>

            <!-- Account Information -->
            <div class="space-y-4">
              <h3 class="text-lg font-semibold text-dark-800">Account Information</h3>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="password" class="block text-sm font-medium text-dark-700 mb-1">Password <span class="text-red-500">*</span></label>
                  <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="••••••••">
                  <p class="mt-1 text-xs text-dark-500">Must be at least 8 characters with 1 uppercase, 1 number, and 1 special character</p>
                </div>

                <div>
                  <label for="confirm-password" class="block text-sm font-medium text-dark-700 mb-1">Confirm Password <span class="text-red-500">*</span></label>
                  <input id="confirm-password" name="confirm-password" type="password" required class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="••••••••">
                </div>

                <div>
                  <label for="referral-code" class="block text-sm font-medium text-dark-700 mb-1">Referral Code</label>
                  <input id="referral-code" name="referral-code" type="text" class="appearance-none relative block w-full px-3 py-2 border border-dark-300 placeholder-dark-500 text-dark-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="Enter referral code (if any)">
                </div>
              </div>
            </div>

            <!-- Terms and Privacy -->
            <div class="space-y-4">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-dark-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                  <label for="terms" class="font-medium text-dark-700">I agree to the <a href="#" class="text-primary-600 hover:text-primary-500">Terms of Service</a> and <a href="#" class="text-primary-600 hover:text-primary-500">Privacy Policy</a> <span class="text-red-500">*</span></label>
                </div>
              </div>

              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="marketing" name="marketing" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-dark-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                  <label for="marketing" class="font-medium text-dark-700">I agree to receive marketing emails and updates</label>
                </div>
              </div>
            </div>

            <div>
              <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white gradient-primary hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all shadow-md shadow-primary-200">
                Create Account
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white border-t border-dark-200 py-8 mt-12">
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
    // Show file name when a file is selected
    document.querySelectorAll('.file-input').forEach(fileInput => {
      fileInput.addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name;
        if (fileName) {
          const parent = this.parentElement;
          const textSpan = parent.querySelector('span');
          textSpan.textContent = fileName;
        }
      });
    });
  </script>
</body>

</html>