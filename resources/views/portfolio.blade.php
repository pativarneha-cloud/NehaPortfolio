<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neha Pativar - Laravel Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800 font-sans">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 border-b border-red-900/20 shadow-lg animate-slideDown">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-red-900 text-xl font-bold animate-pulse">&lt;Neha Pativar/&gt;</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-red-900 transition-all duration-300 hover:scale-105">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-red-900 transition-all duration-300 hover:scale-105">About</a>
                    <a href="#experience" class="text-gray-700 hover:text-red-900 transition-all duration-300 hover:scale-105">Experience</a>
                    <a href="#skills" class="text-gray-700 hover:text-red-900 transition-all duration-300 hover:scale-105">Skills</a>
                    <a href="#projects" class="text-gray-700 hover:text-red-900 transition-all duration-300 hover:scale-105">Projects</a>
                    <a href="#education" class="text-gray-700 hover:text-red-900 transition-all duration-300 hover:scale-105">Education</a>
                    <a href="#contact" class="text-gray-700 hover:text-red-900 transition-all duration-300 hover:scale-105">Contact</a>
                </div>
                <button id="mobile-menu" class="md:hidden text-red-900">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-red-50 via-white to-red-100">
        <div class="container mx-auto px-6 text-center">
            <div class="mb-8 animate-bounceIn">
                <div class="w-40 h-40 mx-auto mb-8 rounded-full bg-gradient-to-r from-red-900 to-red-700 flex items-center justify-center text-5xl font-bold text-white shadow-2xl animate-float">
                    NP
                </div>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fadeInUp">
                <span class="text-red-900">Hello,</span> I'm <span class="text-red-700 animate-pulse">Neha Pativar</span>
            </h1>
            <p class="text-2xl md:text-3xl text-gray-700 mb-8 animate-fadeInUp animation-delay-200">Laravel Developer</p>
            <div class="text-lg text-gray-600 mb-8 font-mono bg-gray-100 inline-block px-4 py-2 rounded-lg animate-fadeInUp animation-delay-400">
                <span class="text-red-900">$</span> php artisan make:developer --experience=1.8years
            </div>
            <a href="#about" class="inline-block bg-red-900 hover:bg-red-800 text-white font-bold py-4 px-10 rounded-full transition-all duration-300 hover:scale-105 hover:shadow-xl animate-fadeInUp animation-delay-600">
                Explore My Work
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-red-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 animate-fadeInUp">
                <span class="text-red-900">&lt;</span><span class="text-gray-800">About</span><span class="text-red-900">/&gt;</span>
            </h2>
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-10 shadow-2xl border border-red-200 animate-slideInLeft">
                    <div class="text-center mb-8">
                        <div class="w-24 h-1 bg-red-900 mx-auto rounded-full"></div>
                    </div>
                    <div class="space-y-6">
                        <p class="text-gray-700 text-lg leading-relaxed animate-fadeInUp animation-delay-200">
                            👋 Hi! I'm <strong class="text-red-900">Neha Pativar</strong>, a passionate Laravel developer with <strong>1 year and 8 months</strong> of hands-on experience in creating amazing web applications.
                        </p>
                        <p class="text-gray-700 text-lg leading-relaxed animate-fadeInUp animation-delay-400">
                            💡 I love turning complex problems into simple, beautiful solutions that make a real difference in people's lives.
                        </p>
                        <p class="text-gray-700 text-lg leading-relaxed animate-fadeInUp animation-delay-600">
                            🚀 Currently building innovative projects at <strong class="text-red-900">Hackberry Softech Pvt Ltd</strong> since June 2024, where I lead full-stack development from concept to deployment.
                        </p>
                        <p class="text-gray-700 text-lg leading-relaxed animate-fadeInUp animation-delay-800">
                            🛠️ My technical toolkit includes <strong class="text-red-900">Laravel, JavaScript, jQuery, AJAX, and MySQL</strong> - everything needed to build robust, scalable web applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 animate-fadeInUp">
                <span class="text-red-900">&lt;</span><span class="text-gray-800">Experience</span><span class="text-red-900">/&gt;</span>
            </h2>
            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-red-200"></div>
                    
                    <div class="space-y-12">
                        <!-- Current Job -->
                        <div class="relative animate-slideInRight">
                            <div class="absolute left-6 w-4 h-4 bg-red-900 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="ml-20 bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-300 hover:scale-105">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                                    <h3 class="text-2xl font-bold text-red-900">Laravel Developer</h3>
                                    <span class="text-red-700 bg-red-50 px-4 py-2 rounded-full text-sm font-semibold">June 2024 - Present</span>
                                </div>
                                <p class="text-red-800 font-bold text-lg mb-3">Hackberry Softech Pvt Ltd</p>
                                <p class="text-gray-700 leading-relaxed">Building innovative web solutions including warehouse management systems, educational platforms, and business websites. Leading full-stack development projects from concept to deployment.</p>
                            </div>
                        </div>

                        <!-- Previous Job -->
                        <div class="relative animate-slideInLeft">
                            <div class="absolute left-6 w-4 h-4 bg-red-700 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="ml-20 bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-300 hover:scale-105">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                                    <h3 class="text-2xl font-bold text-red-900">Laravel Developer</h3>
                                    <span class="text-red-700 bg-red-50 px-4 py-2 rounded-full text-sm font-semibold">October 2023 - April 2024</span>
                                </div>
                                <p class="text-red-800 font-bold text-lg mb-3">Urteci</p>
                                <p class="text-gray-700 leading-relaxed">Developed society management systems and e-commerce solutions. Gained solid foundation in Laravel development and project management.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-red-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 animate-fadeInUp">
                <span class="text-red-900">&lt;</span><span class="text-gray-800">Skills</span><span class="text-red-900">/&gt;</span>
            </h2>
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="skill-card bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-500 hover:scale-110 animate-bounceIn">
                        <div class="text-red-900 text-4xl mb-6 animate-bounce">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-900 mb-4">Laravel</h3>
                        <p class="text-gray-700 leading-relaxed">Expert in MVC architecture, Eloquent ORM, routing, and building scalable web applications</p>
                    </div>

                    <div class="skill-card bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-500 hover:scale-110 animate-bounceIn animation-delay-200">
                        <div class="text-red-800 text-4xl mb-6 animate-bounce">
                            <i class="fab fa-js-square"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-900 mb-4">JavaScript</h3>
                        <p class="text-gray-700 leading-relaxed">Modern JavaScript, DOM manipulation, ES6+, and asynchronous programming</p>
                    </div>

                    <div class="skill-card bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-500 hover:scale-110 animate-bounceIn animation-delay-400">
                        <div class="text-red-700 text-4xl mb-6 animate-bounce">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-900 mb-4">jQuery</h3>
                        <p class="text-gray-700 leading-relaxed">DOM manipulation, event handling, animations, and AJAX implementations</p>
                    </div>

                    <div class="skill-card bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-500 hover:scale-110 animate-bounceIn animation-delay-600">
                        <div class="text-red-900 text-4xl mb-6 animate-bounce">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-900 mb-4">MySQL</h3>
                        <p class="text-gray-700 leading-relaxed">Database design, complex queries, optimization, and data modeling</p>
                    </div>

                    <div class="skill-card bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-500 hover:scale-110 animate-bounceIn animation-delay-800">
                        <div class="text-red-800 text-4xl mb-6 animate-bounce">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-900 mb-4">AJAX</h3>
                        <p class="text-gray-700 leading-relaxed">Asynchronous requests, dynamic content loading, and seamless user experiences</p>
                    </div>

                    <div class="skill-card bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-500 hover:scale-110 animate-bounceIn animation-delay-1000">
                        <div class="text-red-700 text-4xl mb-6 animate-bounce">
                            <i class="fab fa-php"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-red-900 mb-4">PHP</h3>
                        <p class="text-gray-700 leading-relaxed">Server-side scripting, OOP principles, and modern PHP development</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 animate-fadeInUp">
                <span class="text-red-900">&lt;</span><span class="text-gray-800">Projects</span><span class="text-red-900">/&gt;</span>
            </h2>
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-10">
                    <!-- Hackberry Projects -->
                    <div class="bg-white rounded-2xl p-8 shadow-2xl border border-red-100 hover:shadow-3xl transition-all duration-500 hover:scale-105 animate-slideInLeft">
                        <div class="flex items-center mb-6">
                            <div class="w-4 h-4 bg-red-900 rounded-full mr-4 animate-pulse"></div>
                            <h3 class="text-2xl font-bold text-red-900">Hackberry Softech Projects</h3>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-900 hover:bg-red-100 transition-colors">
                                <h4 class="text-xl font-bold text-red-800 mb-3">🏭 Rachna Warehouse</h4>
                                <p class="text-gray-700 mb-4">Complete warehouse management system built entirely from scratch with inventory tracking, order management, and reporting features.</p>
                                <a href="https://rachnawarehouse.org/" target="_blank" class="inline-flex items-center text-red-900 hover:text-red-700 font-semibold transition-colors">
                                    <i class="fas fa-external-link-alt mr-2"></i>View Live Project
                                </a>
                            </div>
                            
                            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-700 hover:bg-red-100 transition-colors">
                                <h4 class="text-xl font-bold text-red-800 mb-3">💼 Kap9 Solutions</h4>
                                <p class="text-gray-700 mb-4">Dynamic business website with full CMS functionality, responsive design, and modern user interface.</p>
                                <a href="https://kap9solutions.com/" target="_blank" class="inline-flex items-center text-red-900 hover:text-red-700 font-semibold transition-colors">
                                    <i class="fas fa-external-link-alt mr-2"></i>View Live Project
                                </a>
                            </div>
                            
                            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-800 hover:bg-red-100 transition-colors">
                                <h4 class="text-xl font-bold text-red-800 mb-3">🎓 DigiSchool (SaaS)</h4>
                                <p class="text-gray-700 mb-4">Comprehensive school management SaaS platform with student, teacher, and administrative modules.</p>
                                <a href="https://digischool.hackberrysoftech.in/" target="_blank" class="inline-flex items-center text-red-900 hover:text-red-700 font-semibold transition-colors">
                                    <i class="fas fa-external-link-alt mr-2"></i>View Live Project
                                </a>
                            </div>
                            
                            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-900 hover:bg-red-100 transition-colors">
                                <h4 class="text-xl font-bold text-red-800 mb-3">📱 QR Pass</h4>
                                <p class="text-gray-700 mb-4">QR code-based pass management system for secure access control and visitor management.</p>
                                <a href="http://qrpassweb.teamtech24.com/" target="_blank" class="inline-flex items-center text-red-900 hover:text-red-700 font-semibold transition-colors">
                                    <i class="fas fa-external-link-alt mr-2"></i>View Live Project
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Urteci Projects -->
                    <div class="bg-white rounded-2xl p-8 shadow-2xl border border-red-100 hover:shadow-3xl transition-all duration-500 hover:scale-105 animate-slideInRight">
                        <div class="flex items-center mb-6">
                            <div class="w-4 h-4 bg-red-700 rounded-full mr-4 animate-pulse"></div>
                            <h3 class="text-2xl font-bold text-red-900">Urteci Projects</h3>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-700 hover:bg-red-100 transition-colors">
                                <h4 class="text-xl font-bold text-red-800 mb-4">🏘️ Society Management System</h4>
                                <p class="text-gray-700 mb-4">Comprehensive system for managing residential societies with advanced features:</p>
                                <ul class="text-gray-700 space-y-2 ml-4">
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Resident management & profiles</li>
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Maintenance fee tracking</li>
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Visitor management system</li>
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Online payment processing</li>
                                </ul>
                            </div>
                            
                            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-800 hover:bg-red-100 transition-colors">
                                <h4 class="text-xl font-bold text-red-800 mb-4">🛍️ Varmishades</h4>
                                <p class="text-gray-700 mb-4">E-commerce platform for window treatments with full functionality:</p>
                                <ul class="text-gray-700 space-y-2 ml-4">
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Product catalog & inventory</li>
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Shopping cart & checkout</li>
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Order processing system</li>
                                    <li class="flex items-center"><span class="text-red-900 mr-2">✓</span> Customer account management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-16 animate-fadeInUp animation-delay-800">
                    <div class="bg-red-50 rounded-2xl p-8 border border-red-200 max-w-2xl mx-auto">
                        <div class="text-2xl mb-4">📊</div>
                        <h3 class="text-2xl font-bold text-red-900 mb-4">Project Impact</h3>
                        <div class="grid grid-cols-3 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-red-900">6+</div>
                                <div class="text-gray-700">Projects Delivered</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-red-900">100%</div>
                                <div class="text-gray-700">Client Satisfaction</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-red-900">1.8</div>
                                <div class="text-gray-700">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-red-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 animate-fadeInUp">
                <span class="text-red-900">&lt;</span><span class="text-gray-800">Education</span><span class="text-red-900">/&gt;</span>
            </h2>
            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-red-200"></div>
                    
                    <div class="space-y-8">
                        <div class="relative animate-slideInRight">
                            <div class="absolute left-6 w-4 h-4 bg-red-900 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="ml-20 bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4">🎓</div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-red-900">Master of Computer Applications (MCA)</h3>
                                        <p class="text-red-700 font-semibold text-lg">Shree Swaminarayan Institute of Technology</p>
                                    </div>
                                </div>
                                <div class="bg-red-50 rounded-lg p-4">
                                    <p class="text-red-900 font-bold text-xl">CGPA: 8.01</p>
                                    <p class="text-gray-700">Advanced computer applications, software engineering, and system design</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative animate-slideInLeft">
                            <div class="absolute left-6 w-4 h-4 bg-red-700 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="ml-20 bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4">💻</div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-red-900">Bachelor of Computer Applications (BCA)</h3>
                                        <p class="text-red-700 font-semibold text-lg">President Institute of Computer Application</p>
                                    </div>
                                </div>
                                <div class="bg-red-50 rounded-lg p-4">
                                    <p class="text-red-900 font-bold text-xl">CGPA: 8.01</p>
                                    <p class="text-gray-700">Computer programming, database management, and web development fundamentals</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative animate-slideInRight">
                            <div class="absolute left-6 w-4 h-4 bg-red-600 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="ml-20 bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4">📚</div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-red-900">Higher Secondary (12th) - Commerce</h3>
                                        <p class="text-red-700 font-semibold text-lg">St Mary School</p>
                                    </div>
                                </div>
                                <div class="bg-red-50 rounded-lg p-4">
                                    <p class="text-red-900 font-bold text-xl">Percentage: 58%</p>
                                    <p class="text-gray-700">Commerce stream with business studies and mathematics</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative animate-slideInLeft">
                            <div class="absolute left-6 w-4 h-4 bg-red-500 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="ml-20 bg-white rounded-2xl p-8 shadow-xl border border-red-100 hover:shadow-2xl transition-all duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4">🏫</div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-red-900">Secondary (10th)</h3>
                                        <p class="text-red-700 font-semibold text-lg">St Mary School</p>
                                    </div>
                                </div>
                                <div class="bg-red-50 rounded-lg p-4">
                                    <p class="text-red-900 font-bold text-xl">Percentage: 64%</p>
                                    <p class="text-gray-700">Strong foundation in mathematics and science subjects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 animate-fadeInUp">
                <span class="text-red-900">&lt;</span><span class="text-gray-800">Contact</span><span class="text-red-900">/&gt;</span>
            </h2>
            <div class="max-w-4xl mx-auto text-center">
                <div class="bg-white rounded-2xl p-10 shadow-2xl border border-red-100 animate-bounceIn">
                    <div class="text-4xl mb-6">💬</div>
                    <h3 class="text-3xl font-bold text-red-900 mb-4">Let's Build Something Amazing Together!</h3>
                    <p class="text-xl text-gray-700 mb-12">Ready to turn your ideas into reality? I'd love to hear about your next project.</p>
                    
                    <div class="grid md:grid-cols-3 gap-8 mb-12">
                        <div class="text-center group hover:scale-105 transition-transform duration-300">
                            <div class="bg-red-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-100 transition-colors">
                                <i class="fas fa-envelope text-red-900 text-2xl"></i>
                            </div>
                            <h4 class="text-xl font-bold text-red-900 mb-3">Email Me</h4>
                            <a href="mailto:neha.pativar@example.com" class="text-gray-700 hover:text-red-900 transition-colors font-semibold">
                                neha.pativar@example.com
                            </a>
                        </div>
                        
                        <div class="text-center group hover:scale-105 transition-transform duration-300">
                            <div class="bg-red-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-100 transition-colors">
                                <i class="fab fa-linkedin text-red-900 text-2xl"></i>
                            </div>
                            <h4 class="text-xl font-bold text-red-900 mb-3">LinkedIn</h4>
                            <a href="https://linkedin.com/in/neha-pativar" target="_blank" class="text-gray-700 hover:text-red-900 transition-colors font-semibold">
                                Let's Connect
                            </a>
                        </div>
                        
                        <div class="text-center group hover:scale-105 transition-transform duration-300">
                            <div class="bg-red-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-100 transition-colors">
                                <i class="fab fa-github text-red-900 text-2xl"></i>
                            </div>
                            <h4 class="text-xl font-bold text-red-900 mb-3">GitHub</h4>
                            <a href="https://github.com/neha-pativar" target="_blank" class="text-gray-700 hover:text-red-900 transition-colors font-semibold">
                                View My Code
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-red-50 rounded-xl p-6 max-w-2xl mx-auto">
                        <div class="text-2xl mb-4">🚀</div>
                        <h4 class="text-xl font-bold text-red-900 mb-3">Ready to Start Your Project?</h4>
                        <p class="text-gray-700 mb-4">I'm available for freelance projects and full-time opportunities.</p>
                        <div class="bg-white rounded-lg p-4 font-mono text-sm">
                            <span class="text-red-900">$</span> 
                            <span class="text-gray-700">composer require</span> 
                            <span class="text-red-800 font-bold">neha-pativar/laravel-expertise</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-red-900 py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="mb-6">
                <div class="text-white text-2xl font-bold mb-2">&lt;Neha Pativar/&gt;</div>
                <p class="text-red-200">Laravel Developer • Problem Solver • Code Enthusiast</p>
            </div>
            <div class="border-t border-red-700 pt-6">
                <p class="text-red-200">&copy; 2024 Neha Pativar. Crafted with ❤️ using <span class="text-white font-semibold">Laravel</span> & <span class="text-white font-semibold">Tailwind CSS</span></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu').addEventListener('click', function() {
            // Add mobile menu functionality here
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>