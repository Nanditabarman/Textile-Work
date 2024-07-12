<nav class="flex items-center justify-between bg-white  shadow h-20 px-10">
    <ul class="flex space-x-5 hidden sm:flex">
        <li class="dropdown relative">
            <a href="#" class="hover:text-orange-500">Home</a>
            <i class="fas fa-angle-down"></i>
            <div class="dropdown-content" >
                <a href="#" class="block px-4 py-2 hover:bg-orange-600 ">Home 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-orange-600">Home 2</a>
            </div>
        </li>
        <li class="dropdown relative">
            <a href="#" class="hover:text-orange-500">Pages</a>
            <i class="fas fa-angle-down"></i>
            <div class="dropdown-content">
                <a href="#" class="block px-4 py-2 hover:bg-orange-600">Page 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-orange-600">Page 2</a>
            </div>
        </li>
        <li>
            <a href="#" class="hover:text-orange-500">Services</a>
        </li>
        <li class="hover:text-orange-500">
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#" class="hover:text-orange-500">Blog</a>
        </li>
        <li>
            <a href="#" class="hover:text-orange-500">Contact</a>
        </li>
    </ul>

    <div class="flex ">
        <!-- Responsive margin adjustment -->
        <img src="../assets/img/header-logo.png" alt="Logo" class="h-14 md:mr-64">
    </div>

    <div class="flex items-center space-x-4">
        <button class="focus:outline-none"></button>
        <button id="hamburger" class="focus:outline-none bg-orange-500 hover:bg-black p-2 ">
            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </div>
</nav>


<div id="sidebar" class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg z-50">
    <div class="flex justify-end p-4">
        <button id="closeSidebar" class="focus:outline-none">
            <svg class="h-6 w-6 text-gray-500 hover:text-orange-500" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>
    </div>
    <ul class="space-y-4 p-4">
        <li><a href="#" class="block text-gray-700 hover:text-orange-500">Item 1</a></li>
        <li><a href="#" class="block text-gray-700 hover:text-orange-500">Item 2</a></li>
        <li><a href="#" class="block text-gray-700 hover:text-orange-500">Item 3</a></li>
        <li><a href="#" class="block text-gray-700 hover:text-orange-500">Item 4</a></li>
    </ul>
</div>


<style>
/* Custom styles for dropdown */

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            min-width: 160px;
            opacity: 0;
            transition: opacity 0.9s ease, transform 0.9s ease;
            transform: translateY(10px);
            z-index: 1000;
        }
        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
            padding: 12px 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .dropdown-content a:hover {
            background-color: #F56800;
            color: white;
        }

/* Custom styles for sidebar */
#sidebar {
    transform: translateX(100%);
    transition: transform 0.3s ease-in-out;
}

#sidebar.active {
    transform: translateX(0%);
}
</style>

<script>
// Check if sidebar should be initially open or closed
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    if (localStorage.getItem('sidebarOpen') === 'true') {
        sidebar.classList.add('active');
    }
});

document.getElementById('hamburger').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');

    // Store state in localStorage
    localStorage.setItem('sidebarOpen', sidebar.classList.contains('active'));
});

document.getElementById('closeSidebar').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('active');

    // Store state in localStorage
    localStorage.setItem('sidebarOpen', sidebar.classList.contains('active'));
});
</script>