<?php
    if (!isset($_COOKIE['role']) || $_COOKIE['role'] == "regular" ) {
        header("Location: index.html");
        exit();
    }

    session_start();
    require_once 'config.php';
    require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar Finds</title>
    <link rel="shortcut icon" href="resources/sf-logo.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="./output.css" rel="stylesheet">
</head>
<body class="bg-[url('resources/lib-bg.jpg')] font-nunito text-white flex">
    <div class="fixed inset-0 bg-black/50 h-full z-0 max-tablet:hidden"></div>
    <!-- DESKTOP SIDE NAVIGATIONS -->
    <header class="group fixed top-0 left-0 pt-10 pb-10 w-20 hover:w-60 duration-500 ease-out h-screen flex max-tablet:hidden flex-col justify-between bg-ash/85 backdrop-blur-md shadow-[var(--around-shadow-md)] select-none text-off-white z-10">
        <div class="w-full h-35">
            <img src="resources/umak.svg" alt="UMak Logo" class="mt-3 ml-3.5 size-12 inline-block">
            <img src="resources/ccis.svg" alt="CCIS Logo" class="mt-3 ml-3.5 size-12 inline-block">  
            <img src="resources/sf-logo.svg" alt="Scholar Finds Logo" class="mt-3 ml-3.5 size-12 inline-block">
            <a href="index.html" class="outline-none"><h1 class=" m-3.5 whitespace-nowrap overflow-hidden text-3xl opacity-0 group-hover:opacity-100 duration-500 font-semibold">Scholar Finds</h1></a>
        </div>
        <nav>
            <ul class="flex flex-col gap-2">
                <li><a href="index.html" class="flex items-center gap-8 pl-5 py-2 hover:opacity-60 duration-200 ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="min-w-8 w-8">
                        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                    </svg> 
                    <p class="text-lg overflow-hidden text-clip">Home</p>
                </a></li>
                <li><a href="about.html" class="flex items-center gap-8 pl-5 py-2 hover:opacity-60 duration-200 ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="min-w-8 w-8">
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>                       
                    <p class="text-lg overflow-hidden text-clip">About</p>
                </a></li>
                <li><a href="contact.html" class="flex items-center gap-8 pl-5 py-2 hover:opacity-60 duration-200 ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="min-w-8 w-8">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>                      
                    <p class="text-lg overflow-hidden text-clip">Contact</p>
                </a></li>
                <li><a href="library.php" class="flex items-center gap-8 pl-5 py-2 hover:opacity-60 duration-200 ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="min-w-8 w-8">
                        <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                    </svg>                      
                    <p class="text-lg overflow-hidden text-clip">Library</p>
                </a></li>
            </ul>
        </nav>
        <menu class="flex flex-col gap-2">
            <li><a href="bookmarks.php" class="flex items-center gap-8 pl-5 py-2 hover:opacity-60 duration-200 ease-linear">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="min-w-8 w-8">
                    <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>
                <p class="text-lg overflow-hidden text-clip">Bookmarks</p>
            </a></li>
            <li><a href="profile.php" class="flex items-center gap-8 pl-5 py-2 hover:opacity-60 duration-200 ease-linear">                  
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="min-w-8 w-8">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>  
                <p class="text-lg overflow-hidden text-clip">Profile</p>
            </a></li>
            <li><a href="admin.php" class="flex items-center gap-8 pl-5 py-2 hover:opacity-60 duration-200 ease-linear">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" class="min-w-8 w-8"><path d="M680-80q-83 0-141.5-58.5T480-280q0-83 58.5-141.5T680-480q83 0 141.5 58.5T880-280q0 83-58.5 141.5T680-80Zm-200 0q-139-35-229.5-159.5T160-516v-244l320-120 320 120v227q-26-13-58.5-20t-61.5-7q-116 0-198 82t-82 198q0 62 23.5 112T483-81q-1 0-1.5.5t-1.5.5Zm200-200q25 0 42.5-17.5T740-340q0-25-17.5-42.5T680-400q-25 0-42.5 17.5T620-340q0 25 17.5 42.5T680-280Zm0 120q31 0 57-14.5t42-38.5q-22-13-47-20t-52-7q-27 0-52 7t-47 20q16 24 42 38.5t57 14.5Z"/></svg>
                <p class="text-lg overflow-hidden text-clip">Admin</p>
            </a></li>
        </menu>
        <script>
            const admin = document.querySelector('a[href="admin.php"]');
            const role = document.cookie.match(/role=([^;]+)/)?.[1];
            if (!role || role === "regular") admin?.classList.add("hidden");
        </script> 
    </header>
    <!-- MOBILE NAVIGATION-->
    <nav class="tablet:hidden z-50">
        <div onclick="toggleNav()" class="fixed right-0 top-50 pl-2.5 rounded-l-full bg-dirty-brown">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#eeeeee" class="p-1.5 size-8.5 cursor-pointer">
                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
            </svg>
        </div>
        <div onclick="toggleNav()" id="overlay" class="fixed top-0 left-0 w-screen h-screen bg-black/50 hidden"></div>
        <div id="mob-nav" class="fixed top-0 right-0 pt-20 overflow-clip w-70 h-screen bg-off-white hidden flex-col animate-header font-semibold text-dirty-brown **:select-none">
            <div onclick="toggleNav()" class="absolute top-5 right-5">
                <svg class="size-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#585345"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </div>
            <h1 class="px-7.5 text-2xl font-bold">Scholar Finds</h1>
            <hr class="my-5 w-full opacity-30 *:active:bg-neutral-300">
            <div class="w-full *:px-7.5 *:py-1 *:flex *:items-center *:gap-2 *:active:bg-neutral-300">
                <a href="index.html" class="block w-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"> <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" /></svg>Home</a>
                <a href="about.html" class="block w-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"> <path d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM1.49 15.326a.78.78 0 0 1-.358-.442 3 3 0 0 1 4.308-3.516 6.484 6.484 0 0 0-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 0 1-2.07-.655ZM16.44 15.98a4.97 4.97 0 0 0 2.07-.654.78.78 0 0 0 .357-.442 3 3 0 0 0-4.308-3.517 6.484 6.484 0 0 1 1.907 3.96 2.32 2.32 0 0 1-.026.654ZM18 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM5.304 16.19a.844.844 0 0 1-.277-.71 5 5 0 0 1 9.947 0 .843.843 0 0 1-.277.71A6.975 6.975 0 0 1 10 18a6.974 6.974 0 0 1-4.696-1.81Z" /> </svg>About</a>
                <a href="contact.html" class="block w-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"> <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" /> </svg>Contact</a>
            </div>
            <hr class="my-5 w-full opacity-30 *:active:bg-neutral-300">
            <div class="w-full *:px-7.5 *:py-1 *:flex *:items-center *:gap-2 *:active:bg-neutral-300">
                <a href="library.php" class="block w-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"> <path d="M10.75 16.82A7.462 7.462 0 0 1 15 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0 0 18 15.06v-11a.75.75 0 0 0-.546-.721A9.006 9.006 0 0 0 15 3a8.963 8.963 0 0 0-4.25 1.065V16.82ZM9.25 4.065A8.963 8.963 0 0 0 5 3c-.85 0-1.673.118-2.454.339A.75.75 0 0 0 2 4.06v11a.75.75 0 0 0 .954.721A7.506 7.506 0 0 1 5 15.5c1.579 0 3.042.487 4.25 1.32V4.065Z" /> </svg>Library</a>
                <a href="bookmarks.php" class="block w-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"> <path fill-rule="evenodd" d="M10 2c-1.716 0-3.408.106-5.07.31C3.806 2.45 3 3.414 3 4.517V17.25a.75.75 0 0 0 1.075.676L10 15.082l5.925 2.844A.75.75 0 0 0 17 17.25V4.517c0-1.103-.806-2.068-1.93-2.207A41.403 41.403 0 0 0 10 2Z" clip-rule="evenodd" /> </svg>Bookmarks</a>
                <a href="profile.php" class="block w-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"> <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z" clip-rule="evenodd" /> </svg>Profile</a>
               
            </div>
            <hr class="my-5 w-full opacity-30 *:active:bg-neutral-300">
            <div class="w-full *:px-7.5 *:py-1 *:flex *:items-center *:gap-2 *:active:bg-neutral-300">
                <a onclick="logOut()" class="block w-full text-red-700"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"> <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd" /> <path fill-rule="evenodd" d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z" clip-rule="evenodd" /> </svg>Logout</a>
                <a href="admin.php" class="block w-full"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" class="size-5"><path d="M680-80q-83 0-141.5-58.5T480-280q0-83 58.5-141.5T680-480q83 0 141.5 58.5T880-280q0 83-58.5 141.5T680-80Zm-200 0q-139-35-229.5-159.5T160-516v-244l320-120 320 120v227q-26-13-58.5-20t-61.5-7q-116 0-198 82t-82 198q0 62 23.5 112T483-81q-1 0-1.5.5t-1.5.5Zm200-200q25 0 42.5-17.5T740-340q0-25-17.5-42.5T680-400q-25 0-42.5 17.5T620-340q0 25 17.5 42.5T680-280Zm0 120q31 0 57-14.5t42-38.5q-22-13-47-20t-52-7q-27 0-52 7t-47 20q16 24 42 38.5t57 14.5Z"/></svg>Admin</a>
            </div>
        </div>
        <!-- SCRIPT -->
        <script>
            const mobNav = document.getElementById("mob-nav");
            const overlay = document.getElementById("overlay");
    
            function toggleNav() {
                mobNav.classList.toggle("hidden");
                mobNav.classList.toggle("flex");
                overlay.classList.toggle("hidden");
            }

            function logOut() {
                document.cookie = "id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "personalization=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "role=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                window.location.href= "index.html";
            }
        </script> 
    </nav>
    <!-- ================================================== MAIN ================================================== -->
    <main class="ml-25 m-5 p-15 w-[calc(100vw-80px)] min-h-[calc(100vh-40px)] h-auto rounded-4xl bg-off-white z-2 text-black drag-none
        max-tablet:m-0 max-tablet:p-5 max-tablet:min-h-screen max-tablet:size-full max-tablet:rounded-none">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-3xl font-bold text-dirty-brown select-none">Admin</h1>
            <div class="flex items-center gap-2.5 text-dirty-brown font-semibold *:select-none *:cursor-pointer">
                <input type="radio" name="admin-menu" id="db-amenu" checked class="peer/db-amenu" hidden>
                <input type="radio" name="admin-menu" id="log-amenu" class="peer/log-amenu" hidden>
                <label for="db-amenu" class="peer-checked/db-amenu:bg-dirty-brown peer-checked/db-amenu:text-off-white px-5 py-0.5 rounded-md border-2 border-dirty-brown">Database</label>
                <label for="log-amenu" class="peer-checked/log-amenu:bg-dirty-brown peer-checked/log-amenu:text-off-white px-5 py-0.5 rounded-md border-2 border-dirty-brown">Logs</label>
            </div>
        </div>
        
        <div class="relative">      
            <input type="radio" name="tb" id="thesestb" checked class="peer/thesestb" hidden>
            <label for="thesestb" class="absolute text-dirty-brown font-bold text-xl opacity-60 peer-checked/thesestb:opacity-100 peer-checked/thesestb:underline peer-checked/thesestb:decoration-3 peer-checked/thesestb:underline-offset-6 duration-300 select-none cursor-pointer z-5">Theses</label>
            <input type="radio" name="tb" id="userstb"  class="peer/userstb" hidden>
            <label for="userstb" class="absolute left-19 text-dirty-brown font-bold text-xl opacity-60 peer-checked/userstb:opacity-100 peer-checked/userstb:underline peer-checked/userstb:decoration-3 peer-checked/userstb:underline-offset-6 duration-300 select-none cursor-pointer z-5 <?php echo $_COOKIE["role"] !== "superadmin" ? "hidden" : ""; ?>">Users</label>

            <div class="flex items-center justify-end gap-2.5 *:px-5 *:py-0.5 *:rounded-md *:bg-dirty-brown text-off-white *:text-sm *:max-tablet:text-xs *:hover:opacity-85 *:active:scale-95 *:duration-50 *:cursor-pointer *:select-none *:flex *:items-center *:gap-1">
                <button onclick="openTCreator()" class="">
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M440-120v-480H120v-160q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H440Zm80-80h240v-160H520v160Zm0-240h240v-160H520v160ZM200-680h560v-80H200v80ZM120-80v-80h102q-48-23-77.5-68T115-330q0-79 55.5-134.5T305-520v80q-45 0-77.5 32T195-330q0 39 24 69t61 38v-97h80v240H120Z"/></svg>
                    Append Data
                </button>
                <button>
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M440-320v-326L336-542l-56-58 200-200 200 200-56 58-104-104v326h-80ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/></svg>
                    Import
                </button>
                <button>
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/></svg>
                    Export
                </button>
            </div>

            <!-- ================================================== THESES TABLE ================================================== -->
            <div id="all-ths" class="relative w-full h-160 hidden flex-col gap-2.5 peer-checked/thesestb:flex">
                <!-- CONTROLS -->
                <div class="mt-10 flex max-tablet:flex-col-reverse max-tablet:items-end justify-end gap-5 max-tablet:gap-1 text-sm max-tablet:text-xs">
                    <div class="flex items-center italic opacity-80 select-none">
                        <p>Showing table with <span id="tpage-info"></span> results</p>
                    </div>
                    <div class="px-2.5 py-1.5 rounded-md flex items-center gap-3 max-big-phone:gap-2 bg-lgreen">
                        <input type="text" placeholder="Search" id="tsearch-box" class="px-4 max-tablet:px-2 w-50 max-tablet:w-40 max-big-phone:w-30 rounded-md bg-slgreen outline-none">
                        <select id="tsearch-category" class="px-4 max-tablet:px-2 w-30 max-tablet:w-25 rounded-md bg-slgreen select-none outline-none">
                            <option value="title" selected disabled>Search by</option>
                            <option value="title">Title</option>
                            <option value="published_date">Date</option>
                            <option value="course">Course</option>
                            <option value="authors">Authors</option>
                            <option value="keywords">Keywords</option>
                        </select>
                        <span class="flex items-center gap-2 max-big-phone:gap-1">
                            <input type="checkbox" id="tarchive-mode" class="peer">
                            <label for="tarchive-mode" class="opacity-50 peer-checked:opacity-100 select-none cursor-pointer"><span class="max-big-phone:hidden">Archived Data</span><span class="big-phone:hidden"><svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="m480-240 160-160-56-56-64 64v-168h-80v168l-64-64-56 56 160 160ZM200-640v440h560v-440H200Zm0 520q-33 0-56.5-23.5T120-200v-499q0-14 4.5-27t13.5-24l50-61q11-14 27.5-21.5T250-840h460q18 0 34.5 7.5T772-811l50 61q9 11 13.5 24t4.5 27v499q0 33-23.5 56.5T760-120H200Zm16-600h528l-34-40H250l-34 40Zm264 300Z"/></svg></span></label>
                        </span>
                    </div>
                </div>

                <!-- CREATOR -->
                <div class="flex justify-end">
                    <a onclick="openTCreator()" id="tcreator-backdrop" class="fixed top-0 left-0 w-screen h-screen bg-black opacity-40 hidden peer-checked:block z-4"></a>

                    <div id="tcreator" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-10 max-big-phone:p-5 w-200 max-big-phone:w-screen h-150 max-big-phone:h-screen max-tablet:scale-80 max-big-phone:scale-100 bg-off-white big-phone:rounded-3xl shadow-2xl shadow-black/70 hidden peer-checked:block z-5">
                        <div class="relative w-full h-full flex flex-col gap-5">
                            <button onclick="openTCreator()" class="absolute -top-5 -right-5 p-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                            </button>
                            <span class="py-5 flex flex-col gap-2 select-none">
                                <h1 class="text-2xl font-bold text-center select-none">Append Thesis Data</h1>
                                <!--
                                <p class="text-justify text-sm leading-none"><b>Note:</b> Use a <b>plus (+)</b> for authors and a <b>comma (,)</b> for keywords to separate data properly.</p>
                                -->
                            </span>
                            
                            <form action="cms.php" method="post" class="flex-1 w-full grid grid-cols-2 grid-rows-[1fr_auto] max-big-phone:flex max-big-phone:flex-col gap-5">
                                <!-- LEFT COLUMN -->
                                <div class="*:relative *:flex *:flex-col flex flex-col gap-4">
                                    <span class="flex-row! gap-2 *:relative *:w-1/2 *:flex *:flex-col">
                                        <span>
                                            <select name="course" id="course" required class="px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none text-[#464644] valid:text-black">
                                                <option value="" disabled selected>Select here</option>
                                                <option class="text-black" value="BSIT-NS">BSIT-NS</option>
                                                <option class="text-black" value="BSCS-AD">BSCS-AD</option>
                                            </select>
                                            <label for="course" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex gap-1 select-none -translate-y-4 text-xs font-semibold">
                                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/></svg>
                                                Course
                                            </label>
                                        </span>
                                        <span>
                                            <input type="month" name="pdate" id="pdate" required class="px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none text-[#464644] valid:text-black">
                                            <label for="pdate" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex gap-1 select-none -translate-y-4 text-xs font-semibold">
                                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>
                                                Published Date
                                            </label>
                                        </span>
                                    </span>
                                    <span>
                                        <textarea name="title" id="title" required class="peer resize-none px-2 py-1.5 w-full h-16 rounded-md border-2 border-dirty-brown text-sm outline-none leading-4"></textarea>
                                        <label for="title" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-focus:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M120-760v-80h720v80H120Zm640 80q33 0 56.5 23.5T840-600v400q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-400q0-33 23.5-56.5T200-680h560Z"/></svg>
                                            Title
                                        </label>
                                    </span>
                                    <div class="flex-1 flex flex-row! gap-2.5">
                                        <div id="author-container" class="flex-1 *:relative flex flex-col gap-2.5">
                                            <span id="authorset1">
                                                <input type="text" name="author1" id="author1" required class="peer px-2 pr-8 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none">
                                                <label for="author1" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-focus:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M185-80q-17 0-29.5-12.5T143-122v-105q0-90 56-159t144-88q-40 28-62 70.5T259-312v190q0 11 3 22t10 20h-87Zm147 0q-17 0-29.5-12.5T290-122v-190q0-70 49.5-119T459-480h189q70 0 119 49t49 119v64q0 70-49 119T648-80H332Zm148-484q-66 0-112-46t-46-112q0-66 46-112t112-46q66 0 112 46t46 112q0 66-46 112t-112 46Z"/></svg>
                                                    Author 1
                                                </label>
                                            </span>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <button type="button" onclick="addAuthor()" class="p-1.5 rounded-md bg-dirty-brown text-off-white shadow-md cursor-pointer outline-none hover:opacity-85 active:scale-95 duration-200">
                                                <svg class="p-0.5 size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                                            </button>
                                        </div>
                                        <script>
                                            const authorContainer = document.getElementById('author-container');

                                            function addAuthor() {
                                                const usedNumbers = Array.from(authorContainer.querySelectorAll('[id^="authorset"]'))
                                                    .map(el => parseInt(el.id.replace('authorset', '')))
                                                    .sort((a, b) => a - b);

                                                let authorCount = null;
                                                for (let i = 1; i <= 5; i++) {
                                                    if (!usedNumbers.includes(i)) {
                                                        authorCount = i;
                                                        break;
                                                    }
                                                }

                                                if (authorCount === null) {
                                                    alert("You can only add up to 5 authors.");
                                                    return;
                                                }

                                                // Capture the values of existing authors
                                                const authorValues = {};
                                                for (let i = 1; i <= usedNumbers.length; i++) {
                                                    const authorInput = document.getElementById(`author${i}`);
                                                    if (authorInput) {
                                                        authorValues[i] = authorInput.value; // Save current values
                                                    }
                                                }

                                                // Append the new author input field
                                                authorContainer.innerHTML += `
                                                    <span id="authorset${authorCount}">
                                                        <input type="text" name="author${authorCount}" id="author${authorCount}" required class="peer px-2 pr-8 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none" value="${authorValues[authorCount] || ''}">
                                                        <label for="author${authorCount}" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-focus:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M185-80q-17 0-29.5-12.5T143-122v-105q0-90 56-159t144-88q-40 28-62 70.5T259-312v190q0 11 3 22t10 20h-87Zm147 0q-17 0-29.5-12.5T290-122v-190q0-70 49.5-119T459-480h189q70 0 119 49t49 119v64q0 70-49 119T648-80H332Zm148-484q-66 0-112-46t-46-112q0-66 46-112t112-46q66 0 112 46t46 112q0 66-46 112t-112 46Z"/></svg>
                                                            Author ${authorCount}
                                                        </label>
                                                        <button type="button" onclick="removeAuthor(${authorCount})" class="absolute bottom-1 right-1 p-0.5 text-red-800 cursor-pointer outline-none hover:opacity-85 active:scale-95 duration-200">
                                                            <svg class="p-0.5 size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                                        </button>
                                                    </span>
                                                `;

                                                // Reassign the values to the existing inputs (if any)
                                                for (let i = 1; i <= usedNumbers.length; i++) {
                                                    const authorInput = document.getElementById(`author${i}`);
                                                    if (authorInput && authorValues[i]) {
                                                        authorInput.value = authorValues[i]; // Restore previous values
                                                    }
                                                }
                                            }

                                            function removeAuthor(authorNumber) {
                                                document.getElementById('authorset' + authorNumber)?.remove();
                                            }

                                        </script>
                                    </div>
                                    
                                </div>
                                <!-- RIGHT COLUMN -->
                                <div class="flex-1 *:relative *:flex *:flex-col flex flex-col gap-4">
                                    <span class="flex-1">
                                        <textarea name="abstract" id="abstract" required class="peer resize-none px-2 py-2 w-full h-full rounded-md border-2 border-dirty-brown text-sm outline-none leading-4"></textarea>
                                        <label for="abstract" class="absolute top-2.5 left-2 px-1 py-0.5 bg-off-white leading-none flex gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-focus:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M280-280h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm-80 480q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
                                            Abstract
                                        </label>
                                    </span>
                                    <span>
                                        <textarea name="keywords" id="keywords" required class="peer resize-none px-2 py-1.5 w-full h-16 rounded-md border-2 border-dirty-brown text-sm outline-none leading-4"></textarea>
                                        <label for="keywords" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-focus:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="m240-160 40-160H120l20-80h160l40-160H180l20-80h160l40-160h80l-40 160h160l40-160h80l-40 160h160l-20 80H660l-40 160h160l-20 80H600l-40 160h-80l40-160H360l-40 160h-80Zm140-240h160l40-160H420l-40 160Z"/></svg>
                                            Keywords
                                        </label>
                                    </span>
                                </div>
                               
                                <span class="col-span-2 flex flex-col items-center justify-center gap-1 select-none">
                                    <input type="text" name="thesis-id" id="thesis-id" hidden>
                                    <i class="text-sm max-big-phone:text-xs">You are currently assigning new data with an ID of <b id="ths-id"></b>.</i>
                                    <button type="submit" name="new-thesis" class="px-8 py-1 rounded-md bg-dirty-brown text-off-white text-sm font-semibold hover:opacity-90 active:scale-95 duration-100 cursor-pointer">Submit</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- TABLE -->
                <div class="w-full overflow-x-auto">
                    <table class="w-full border-separate border-spacing-1 table-fixed text-sm max-[1440px]:text-xs">
                        <thead>
                            <tr class="*:rounded-md *:bg-lgreen *:py-0.5 *:whitespace-nowrap *:select-none">
                                <th class="w-25">Modify</th>
                                <th class="w-10">ID</th>
                                <th class="w-15">Pub Date</th>
                                <th class="w-20">Course</th>
                                <th class="w-30">Title</th>
                                <th class="w-40">Authors</th>
                                <th class="w-50">Abstract</th>
                                <th class="w-30">Keywords</th>
                            </tr>
                        </thead>
                        <tbody id="theses-container">
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="absolute bottom-0 w-full *:w-min-30">
                    <div class="relative w-full flex max-tablet:flex-col items-center justify-between gap-2 max-big-phone:gap-1 text-sm max-tablet:text-xs">
                        <div class="flex items-center *:flex *:items-center *:gap-2 select-none">
                            <span>
                                <input type="checkbox" id="ta-select-all">
                                <label for="ta-select-all">Select All</label>
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="tretrieve" onclick="toggleThesesBulkAction('retrieve')" class="px-5 py-0.5 w-30 max-tablet:w-25 rounded-md bg-lgreen text-center disabled:opacity-70 disabled:cursor-not-allowed enabled:hover:opacity-80 enabled:active:scale-95 duration-50 enabled:cursor-pointer hidden">Retrieve</button>
                            <button id="tarchive" onclick="toggleThesesBulkAction('archive')" class="px-5 py-0.5 w-30 max-tablet:w-25 rounded-md bg-lgreen text-center disabled:opacity-70 disabled:cursor-not-allowed enabled:hover:opacity-80 enabled:active:scale-95 duration-50 enabled:cursor-pointer">Archive</button>
                            <button id="tdelete" onclick="toggleThesesBulkAction('delete')" class="px-5 py-0.5 w-30 max-tablet:w-25 rounded-md bg-lred text-center disabled:opacity-70 disabled:cursor-not-allowed enabled:hover:opacity-80 enabled:active:scale-95 duration-50 enabled:cursor-pointer hidden">Delete</button>
                        </div>
                        <div class="max-tablet:static absolute left-1/2 tablet:-translate-x-1/2 px-5 py-1 rounded-md flex items-center justify-center gap-2 bg-lgreen">
                            <button class="cursor-pointer" onclick="firstTSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z"/></svg></button>
                            <button class="cursor-pointer" onclick="previousTSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg></button>
                            <select id="tsets-per-page" class="px-4 w-auto rounded-md bg-slgreen max-tablet:text-xs select-none outline-none">
                                <option value="1">1</option>
                            </select>
                            <button class="cursor-pointer" onclick="nextTSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg></button>
                            <button class="cursor-pointer" onclick="lastTSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M383-480 200-664l56-56 240 240-240 240-56-56 183-184Zm264 0L464-664l56-56 240 240-240 240-56-56 183-184Z"/></svg></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================================================== USERS TABLE ================================================== -->
            <div id="all-usr" class="w-full h-160 hidden flex-col gap-2.5 peer-checked/userstb:flex">
                <!-- CONTROLS -->
                <div class="mt-10 flex max-tablet:flex-col-reverse max-tablet:items-end justify-end gap-5 max-tablet:gap-2.5 text-sm max-tablet:text-xs">
                    <div class="flex items-center italic opacity-80 select-none">
                        <p>Showing table with <span id="upage-info"></span> of results</p>
                    </div>
                    <div class="px-2.5 py-1.5 rounded-md flex items-center gap-3 max-big-phone:gap-2 bg-lgreen">
                        <input type="text" placeholder="Search" id="usearch-box" class="px-4 max-tablet:px-2 w-50 max-tablet:w-40 rounded-md bg-slgreen outline-none">
                        <select name="" id="usearch-category" class="px-4 max-tablet:px-2 w-30 max-tablet:w-25 rounded-md bg-slgreen select-none outline-none">
                            <option value="username" selected disabled>Search by</option>
                            <option value="role">Role</option>
                            <option value="username">Username</option>
                            <option value="name">Name</option>
                            <option value="email">Email</option>
                        </select>
                        <span class="flex items-center gap-2 max-big-phone:gap-1">
                            <input type="checkbox" id="uarchive-mode" class="peer">
                            <label for="uarchive-mode" class="opacity-50 peer-checked:opacity-100 select-none cursor-pointer"><span class="max-big-phone:hidden">Archived Data</span><span class="big-phone:hidden"><svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="m480-240 160-160-56-56-64 64v-168h-80v168l-64-64-56 56 160 160ZM200-640v440h560v-440H200Zm0 520q-33 0-56.5-23.5T120-200v-499q0-14 4.5-27t13.5-24l50-61q11-14 27.5-21.5T250-840h460q18 0 34.5 7.5T772-811l50 61q9 11 13.5 24t4.5 27v499q0 33-23.5 56.5T760-120H200Zm16-600h528l-34-40H250l-34 40Zm264 300Z"/></svg></span></label>
                    </div>
                </div>

                <!-- CREATOR -->
                <div class="flex justify-end">
                    <button onclick="openUCreator()" class="px-5 py-0.5 rounded-md bg-lgreen text-sm max-tablet:text-xs hover:opacity-80 active:scale-95 duration-50 cursor-pointer select-none">Append Data</button>
                    <a id="ucreator-backdrop" onclick="openUCreator()" class="fixed top-0 left-0 w-screen h-screen bg-black opacity-40 hidden z-4"></a>

                    <div id="ucreator" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-10 max-big-phone:p-5 w-120 max-big-phone:w-screen max-big-phone:h-screen bg-off-white big-phone:rounded-3xl shadow-2xl shadow-black/70 hidden z-5">
                        <div class="relative w-full h-full flex flex-col justify-between max-big-phone:gap-5 max-big-phone:justify-center">
                            <button onclick="openUCreator()" class="absolute -top-5 -right-5 p-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                            </button>
                            <h1 class="py-5 text-2xl font-extrabold text-center select-none">Append User Data</h1>

                            <form action="" class="w-full flex flex-col *:relative *:flex *:flex-col gap-4">
                                <span>
                                    <input type="text" name="username" id="username" required class="peer px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none">
                                    <label for="username" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex items-center gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-foucs:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>    
                                        Username
                                    </label>
                                </span>
                                <span>
                                    <input type="text" name="name" id="name" required class="peer px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none">
                                    <label for="name" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex items-center gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-foucs:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M560-440h200v-80H560v80Zm0-120h200v-80H560v80ZM200-320h320v-22q0-45-44-71.5T360-440q-72 0-116 26.5T200-342v22Zm160-160q33 0 56.5-23.5T440-560q0-33-23.5-56.5T360-640q-33 0-56.5 23.5T280-560q0 33 23.5 56.5T360-480ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z"/></svg>
                                        Name
                                    </label>
                                </span>
                                <span>
                                    <input type="text" name="email" id="email" required class="peer px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none">
                                    <label for="email" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex items-center gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-foucs:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                                        UMak Email Address
                                    </label>
                                </span>
                                <span>
                                    <input type="text" name="password" id="password" required class="peer px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none">
                                    <label for="password" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex items-center gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-foucs:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M280-240q-100 0-170-70T40-480q0-100 70-170t170-70q66 0 121 33t87 87h432v240h-80v120H600v-120H488q-32 54-87 87t-121 33Zm0-80q66 0 106-40.5t48-79.5h246v120h80v-120h80v-80H434q-8-39-48-79.5T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Zm0-80q33 0 56.5-23.5T360-480q0-33-23.5-56.5T280-560q-33 0-56.5 23.5T200-480q0 33 23.5 56.5T280-400Zm0-80Z"/></svg>
                                        Password
                                    </label>
                                </span>
                                <span>
                                    <select name="membership" id="membership" required class="px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none text-[#464644] valid:text-black">
                                        <option value="" disabled selected>Select here</option>
                                        <option class="text-black" value="student">Student</option>
                                        <option class="text-black" value="faculty">Faculty</option>
                                        <option class="text-black" value="alumni">Alumni</option>
                                        <option class="text-black" value="guest">Guest</option>
                                        <option class="text-black" value="developer">Developer</option>
                                    </select>
                                    <label for="membership" class="absolute top-2.5 left-2 px-1 bg-off-white font-semibold leading-none flex items-center gap-1 select-none -translate-y-4 text-xs">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-320q48 0 85.5-28.5T620-422H340q17 45 54.5 73.5T480-320ZM380-480q25 0 42.5-17.5T440-540q0-25-17.5-42.5T380-600q-25 0-42.5 17.5T320-540q0 25 17.5 42.5T380-480Zm200 0q25 0 42.5-17.5T640-540q0-25-17.5-42.5T580-600q-25 0-42.5 17.5T520-540q0 25 17.5 42.5T580-480ZM305-704l112-145q12-16 28.5-23.5T480-880q18 0 34.5 7.5T543-849l112 145 170 57q26 8 41 29.5t15 47.5q0 12-3.5 24T866-523L756-367l4 164q1 35-23 59t-56 24q-2 0-22-3l-179-50-179 50q-5 2-11 2.5t-11 .5q-32 0-56-24t-23-59l4-165L95-523q-8-11-11.5-23T80-570q0-25 14.5-46.5T135-647l170-57Zm49 69-194 64 124 179-4 191 200-55 200 56-4-192 124-177-194-66-126-165-126 165Zm126 135Z"/></svg>
                                        Membership
                                    </label>
                                </span>
                                <div class="flex flex-row! items-center gap-2.5 *:relative *:flex-1">
                                    <span>
                                        <select name="college" id="college" required class="px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none text-[#464644] valid:text-black">
                                            <option value="" disabled selected>Select here</option>
                                            <option class="text-black" value="CCIS">CCIS</option>
                                            <option class="text-black" value="HSU">HSU</option>
                                        </select>
                                        <label for="college" class="absolute top-2.5 left-2 px-1 bg-off-white font-semibold leading-none flex items-center gap-1 select-none -translate-y-4 text-xs">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/></svg>
                                            College
                                        </label>
                                    </span>
                                    <span>
                                        <input type="text" name="yearsection" id="yearsection" required class="peer px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none">
                                        <label for="yearsection" class="absolute top-2.5 left-2 px-1 bg-off-white leading-none flex items-center gap-1 select-none opacity-70 peer-valid:-translate-y-4 peer-valid:text-xs peer-valid:opacity-100 peer-valid:font-semibold peer-foucs:font-semibold peer-focus:-translate-y-4 peer-focus:text-xs peer-focus:opacity-100 duration-200">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M40-160v-160q0-34 23.5-57t56.5-23h131q20 0 38 10t29 27q29 39 71.5 61t90.5 22q49 0 91.5-22t70.5-61q13-17 30.5-27t36.5-10h131q34 0 57 23t23 57v160H640v-91q-35 25-75.5 38T480-200q-43 0-84-13.5T320-252v92H40Zm440-160q-38 0-72-17.5T351-386q-17-25-42.5-39.5T253-440q22-37 93-58.5T480-520q63 0 134 21.5t93 58.5q-29 0-55 14.5T609-386q-22 32-56 49t-73 17ZM160-440q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T280-560q0 50-34.5 85T160-440Zm640 0q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T920-560q0 50-34.5 85T800-440ZM480-560q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-680q0 50-34.5 85T480-560Z"/></svg>
                                            Year and Section
                                        </label>
                                    </span>
                                </div>
                                <span class="flex flex-row! items-center gap-1">
                                    <select name="role" id="role" required class="flex-1 px-2 py-1.5 w-full rounded-md border-2 border-dirty-brown text-sm outline-none text-[#464644] valid:text-black">
                                        <option value="" disabled selected>Select here</option>
                                        <option class="text-black" value="regular">Regular</option>
                                        <option class="text-black" value="admin">Admin</option>
                                        <option class="text-black" value="superadmin">Super Admin</option>
                                    </select>
                                    <label for="role" class="absolute top-2.5 left-2 px-1 bg-off-white font-semibold leading-none flex items-center gap-1 select-none -translate-y-4 text-xs">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-8 18-13.5 37.5T404-360h-4q-71 0-127.5 18T180-306q-9 5-14.5 14t-5.5 20v32h252q6 21 16 41.5t22 38.5H80Zm560 40-12-60q-12-5-22.5-10.5T584-204l-58 18-40-68 46-40q-2-14-2-26t2-26l-46-40 40-68 58 18q11-8 21.5-13.5T628-460l12-60h80l12 60q12 5 22.5 11t21.5 15l58-20 40 70-46 40q2 12 2 25t-2 25l46 40-40 68-58-18q-11 8-21.5 13.5T732-180l-12 60h-80Zm40-120q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-560q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Z"/></svg>
                                        Role
                                    </label>
                                    <div class="relative">
                                        <svg class="peer p-0.5 size-8 text-dirty-brown" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-200q17 0 29.5-12.5T522-322q0-17-12.5-29.5T480-364q-17 0-29.5 12.5T438-322q0 17 12.5 29.5T480-280Zm-29-128h60v-22q0-11 5-21 6-14 16-23.5t21-19.5q17-17 29.5-38t12.5-46q0-45-34.5-73.5T480-680q-40 0-71.5 23T366-596l54 22q6-20 22.5-34t37.5-14q22 0 38.5 13t16.5 33q0 17-10.5 31.5T501-518q-12 11-24 22.5T458-469q-7 14-7 29.5v31.5Z"/></svg>
                                        <span class="absolute top-0 right-0 z-2 translate-y-10 hidden peer-hover:block hover:block p-2 w-max rounded-md bg-neutral-200 border border-neutral-400 shadow-md **:whitespace-nowrap **:leading-none text-sm select-none">
                                            <b>The user can:</b>
                                            <ul class="pl-5 list-disc">
                                                <li class="text-[#464644] line-through" id="ua1">View Library</li>
                                                <li class="text-[#464644] line-through" id="ua2">View and Edit "Theses" Table</li>
                                                <li class="text-[#464644] line-through" id="ua3">View and Edit "Users" Table</li>
                                            </ul>
                                        </span>
                                    </div>
                                </span>
                                <span class="py-5 flex flex-col items-center justify-center gap-1 select-none">
                                    <i class="text-sm max-big-phone:text-xs">You are currently assigning new data with an ID of <b id="new-usr-id"></b>.</i>
                                    <button type="submit" name="new-user" class="px-8 py-1 rounded-md bg-lgreen text-sm font-semibold hover:opacity-90 active:scale-95 duration-100 cursor-pointer">Submit</button>
                                </span>
                            </form>
                            <script>
                                document.getElementById('role').addEventListener('change', function() {
                                    const roles = {
                                        regular: ["ua2", "ua3"],
                                        admin: ["ua3"],
                                        superadmin: []
                                    };
                                    document.querySelectorAll("#ua1, #ua2, #ua3").forEach(el => el.classList.remove("text-[#464644]", "line-through"));
                                    roles[this.value].forEach(id => document.getElementById(id)?.classList.add("text-[#464644]", "line-through"));
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <!-- TABLE -->
                <div class="w-full overflow-x-auto">
                    <table class="w-full border-separate border-spacing-1 table-fixed text-sm max-[1440px]:text-xs">
                        <thead>
                            <tr class="*:rounded-md *:bg-lgreen *:py-0.5 *:whitespace-nowrap *:select-none">
                                <th class="w-25">Modify</th>
                                <th class="w-10">ID</th>
                                <th class="w-20">Date Joined</th>
                                <th class="w-20">Role</th>
                                <th class="w-20">Membership</th>
                                <th class="w-20">Username</th>
                                <th class="w-25">Name</th>
                                <th class="w-30">Email</th>
                                <th class="w-20">Password</th>
                                <th class="w-15">College</th>
                                <th class="w-25">YearSec</th>
                            </tr>
                        </thead>
                        <tbody id="users-container">
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="absolute bottom-0 w-full *:w-min-30">
                    <div class="relative w-full flex max-tablet:flex-col items-center justify-between gap-2 max-big-phone:gap-1 text-sm max-tablet:text-xs">
                        <div class="flex items-center *:flex *:items-center *:gap-2 select-none">
                            <span>
                                <input type="checkbox" id="ua-select-all">
                                <label for="ua-select-all">Select All</label>
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="uretrieve" onclick="toggleUsersBulkAction('retrieve')" class="px-5 py-0.5 w-30 max-tablet:w-25 rounded-md bg-lgreen text-center disabled:opacity-70 disabled:cursor-not-allowed enabled:hover:opacity-80 enabled:active:scale-95 duration-50 enabled:cursor-pointer hidden">Retrieve</button>
                            <button id="uarchive" onclick="toggleUsersBulkAction('archive')" class="px-5 py-0.5 w-30 max-tablet:w-25 rounded-md bg-lgreen text-center disabled:opacity-70 disabled:cursor-not-allowed enabled:hover:opacity-80 enabled:active:scale-95 duration-50 enabled:cursor-pointer">Archive</button>
                            <button id="udelete" onclick="toggleUsersBulkAction('delete')" class="px-5 py-0.5 w-30 max-tablet:w-25 rounded-md bg-lred text-center disabled:opacity-70 disabled:cursor-not-allowed enabled:hover:opacity-80 enabled:active:scale-95 duration-50 enabled:cursor-pointer hidden">Delete</button>
                        </div>
                        <div class="max-tablet:static absolute left-1/2 tablet:-translate-x-1/2 px-5 py-1 rounded-md flex items-center justify-center gap-2 bg-lgreen">
                            <button class="cursor-pointer" onclick="firstUSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z"/></svg></button>
                            <button class="cursor-pointer" onclick="previousUSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg></button>
                            <select id="usets-per-page" class="px-4 w-auto rounded-md bg-slgreen select-none outline-none">
                                <option value="1">1</option>
                            </select>
                            <button class="cursor-pointer" onclick="nextUSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg></button>
                            <button class="cursor-pointer" onclick="lastUSet()"><svg class="size-5 max-tablet:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#464644"><path d="M383-480 200-664l56-56 240 240-240 240-56-56 183-184Zm264 0L464-664l56-56 240 240-240 240-56-56 183-184Z"/></svg></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================================================== ACTION BOX ================================================== -->
        <div id="taction-box" class="absolute top-0 left-0 hidden">
            <div onclick="toggleThesisAction()" class="w-screen h-screen bg-black/40 z-15"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-10 w-100 h-50 rounded-2xl flex bg-off-white shadow-2xl text-black z-16 select-none">
                <form action="cms.php" method="post" class="relative w-full h-full flex flex-col items-center justify-center gap-">
                    <span class="mb-10 flex flex-col items-center *:leading-none">
                        <p id="ta-msg"></p>
                        <p id="ta-warning-msg" class="text-xs text-red-500"></p>
                    </span>
                    <input type="text" name="a-data" id="a-data" hidden>
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full flex justify-center gap-5">
                        <button type="button" onclick="toggleThesisAction()" class="px-5 py-0.5 rounded-md bg-lred text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Cancel</button>
                        <button type="submit" id="t-act" name="t-act" value="" class="px-5 py-0.5 rounded-md bg-lgreen text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Proceed</button>
                    </span>
                </form>
            </div>
        </div>

        <div id="uaction-box" class="absolute top-0 left-0 hidden">
            <div onclick="toggleUserAction()" class="w-screen h-screen bg-black/40 z-15"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-10 w-100 h-50 rounded-2xl flex bg-off-white shadow-2xl text-black z-16 select-none">
                <form action="cms.php" method="post" class="relative w-full h-full flex flex-col items-center justify-center gap-">
                    <span class="mb-10 flex flex-col items-center *:leading-none">
                        <p id="ua-msg"></p>
                        <p id="ua-warning-msg" class="text-xs text-red-500"></p>
                    </span>
                    <input type="text" name="ua-data" id="ua-data" hidden>
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full flex justify-center gap-5">
                        <button type="button" onclick="toggleUserAction()" class="px-5 py-0.5 rounded-md bg-lred text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Cancel</button>
                        <button type="submit" id="u-act" name="u-act" value="" class="px-5 py-0.5 rounded-md bg-lgreen text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Proceed</button>
                    </span>
                </form>
            </div>
        </div>

        <!-- ================================================== BULK ACTION BOX ================================================== -->
        <div id="tbulk-action-box" class="absolute top-0 left-0 hidden">
            <div onclick="toggleThesesBulkAction()" class="w-screen h-screen bg-black/40 z-15"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-10 w-120 h-70 rounded-2xl bg-off-white shadow-2xl text-black z-16 select-none">
                <form action="cms.php" method="post" class="relative w-full h-full flex flex-col items-center justify-between">
                    <span class="flex flex-col items-center *:leading-none">
                        <p id="tba-msg"></p>
                        <p id="tba-warning-msg" class="text-xs text-red-500"></p>
                    </span>
                    <span id="tba-selection" class="p-2.5 w-full h-30 rounded-xl flex items-center justify-center bg-zinc-200 border-1 border-zinc-300 select-text overflow-hidden text-ellipsis text-xs text-center">
                    </span>
                    <input type="text" name="ba-data" id="ba-data" hidden>
                    <span class="flex items-center gap-5">
                        <button type="button" onclick="toggleThesesBulkAction()" class="px-5 py-0.5 rounded-md bg-lred text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Cancel</button>
                        <button type="submit" id="t-bulk" name="t-bulk" value="" class="px-5 py-0.5 rounded-md bg-lgreen text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Proceed</button>
                    </span>
                </form>
            </div>
        </div>

        <div id="ubulk-action-box" class="absolute top-0 left-0 hidden">
            <div onclick="toggleUsersBulkAction()" class="w-screen h-screen bg-black/40 z-15"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-10 w-120 h-70 rounded-2xl bg-off-white shadow-2xl text-black z-16 select-none">
                <form action="cms.php" method="post" class="relative w-full h-full flex flex-col items-center justify-between">
                    <span class="flex flex-col items-center *:leading-none">
                        <p id="uba-msg"></p>
                        <p id="uba-warning-msg" class="text-xs text-red-500"></p>
                    </span>
                    <span id="uba-selection" class="p-2.5 w-full h-30 rounded-xl flex items-center justify-center bg-zinc-200 border-1 border-zinc-300 select-text overflow-hidden text-ellipsis text-xs text-center">
                    </span>
                    <input type="text" name="uba-data" id="uba-data" hidden>
                    <span class="flex items-center gap-5">
                        <button type="button" onclick="toggleUsersBulkAction()" class="px-5 py-0.5 rounded-md bg-lred text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Cancel</button>
                        <button type="submit" id="u-bulk" name="u-bulk" value="" class="px-5 py-0.5 rounded-md bg-lgreen text-sm hover:opacity-80 active:scale-95 duration-50 cursor-pointer">Proceed</button>
                    </span>
                </form>
            </div>
        </div>

        <!-- ================================================== ALERTS ================================================== -->
        <?php
            $success = $_SESSION['success'] ?? '';
            $error = $_SESSION['error'] ?? '';
            
            if ($success) {
                echo "<div class='absolute top-10 left-1/2 -translate-x-1/2 p-2 px-5 w-100 rounded-xl border-2 bg-[#d9ead3] border-[#b6d7a8] text-[#274e13] select-none leading-none z-5 animate-downfadeinout delay-200'>" . $success . "</div>";  
            } else if ($error) {
                echo "<div class='absolute top-10 left-1/2 -translate-x-1/2 p-2 px-5 w-100 rounded-xl border-2 bg-[#e6b8af] border-[#dd7e6b] text-[#5b0f00] select-none leading-none z-5 animate-downfadeinout delay-200'>" . $error . "</div>";
            } 

            session_unset();
        ?>
    </main>
    <script>
        fetch('data.json').then(res => res.json()).then(json => (data = json, displaySets())).catch(console.error);

        let data = { theses: [] }, thesesPerPage = 15, selectedSet = 0, searchQuery = "", searchCategory = "title", selectedThesis = [];
        const tarchiveMode = document.getElementById("tarchive-mode"), taSelectAll = document.getElementById("ta-select-all"), tsetsSelect = document.getElementById("tsets-per-page"),
        tarchive = document.getElementById("tarchive"), tretrieve = document.getElementById("tretrieve"), tdelete = document.getElementById("tdelete");

        [tarchiveMode, taSelectAll, tsetsSelect].forEach(el => el.addEventListener("change", e => {
            if (e.target === tarchiveMode) (selectedThesis = [], taSelectAll.checked = false, selectedSet = 0);
            if (e.target === tsetsSelect) selectedSet = +e.target.value - 1;
            if (e.target === taSelectAll) selectedThesis = taSelectAll.checked ? data.theses.filter(t => t.archived == tarchiveMode.checked).map(t => t.thesis_id) : [];
            displaySets();
        }));

        document.getElementById("theses-container").addEventListener("change", e => {
            if (!e.target.classList.contains("tcb")) return;
            selectedThesis = e.target.checked ? [...new Set([...selectedThesis, e.target.id])] : selectedThesis.filter(id => id != e.target.id);
            taSelectAll.checked = document.querySelectorAll('.tcb:checked').length === document.querySelectorAll('.tcb').length;
            tarchive.disabled = selectedThesis.length === 0;
            tretrieve.disabled = selectedThesis.length === 0;
            tdelete.disabled = selectedThesis.length === 0;

            console.log(selectedThesis);
        });

        function displaySets() {
            const tcontainer = document.getElementById("theses-container"), tpageInfo = document.getElementById("tpage-info");
            let filteredData = data.theses.filter(t => t.archived == tarchiveMode.checked && (!searchQuery || t[searchCategory]?.toLowerCase().includes(searchQuery.toLowerCase())));
            let totalSets = Math.ceil(filteredData.length / thesesPerPage);
            selectedSet = Math.max(0, Math.min(selectedSet, totalSets - 1));
            tsetsSelect.innerHTML = [...Array(totalSets)].map((_, i) => `<option value="${i + 1}">${i + 1}</option>`).join("");
            tsetsSelect.value = selectedSet + 1;
            tarchive.classList.toggle('hidden', tarchiveMode.checked);
            tretrieve.classList.toggle('hidden', !tarchiveMode.checked);
            tdelete.classList.toggle('hidden', !tarchiveMode.checked);
            tarchive.disabled = selectedThesis.length === 0;
            tretrieve.disabled = selectedThesis.length === 0;
            tdelete.disabled = selectedThesis.length === 0;

            tcontainer.innerHTML = filteredData.length ? filteredData.slice(selectedSet * thesesPerPage, (selectedSet + 1) * thesesPerPage).map(t => `
                <tr class="*:rounded-md *:bg-slgreen *:py-0.5 *:overflow-hidden *:text-ellipsis *:whitespace-nowrap">
                    <td class="flex items-center justify-center gap-0.5 select-none overflow-visible!">
                        <input type="checkbox" class="tcb mx-1 cursor-pointer" id="${t.thesis_id}" ${selectedThesis.includes(t.thesis_id) ? "checked" : ""}>
                        ${tarchiveMode.checked? 
                        '<span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="toggleThesisAction(\'retrieve\', \'' + t.thesis_id + '\');">↩️</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Retrieve</p>' +
                        '</span> <span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="toggleThesisAction(\'delete\', \'' + t.thesis_id + '\');">🗑️</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Delete</p>' +
                        '</span>' : 
                        '<span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="openTCreator(' + t.thesis_id +')">✏️</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Edit</p>' +
                        '</span>' +
                        '<span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="toggleThesisAction(\'archive\', \'' + t.thesis_id + '\');">📥</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Archive</p>' +
                        '</span>'}
                    </td>
                    <td class="text-center">${t.thesis_id.toString().padStart(4, '0')}</td>
                    <td class="text-center">${t.published_date}</td>
                    <td class="text-center">${t.course}</td>
                    <td>${t.title}</td>
                    <td>${t.authors}</td>
                    <td>${t.abstract || "N/A"}</td>
                    <td>${t.keywords || "N/A"}</td>
                </tr>`).join("") : "<tr><td colspan='8' class='text-center'>No results found.</td></tr>";

            tpageInfo.textContent = totalSets === 0 ? `no${tarchiveMode.checked ? " archived" : ""}` : `${selectedSet + 1} of ${totalSets + (tarchiveMode.checked ? " archived" : "")} set/s of`;
        }

        ["first", "previous", "next", "last"].forEach((fn, i) => window[fn + "TSet"] = () => {
            selectedSet = [0, Math.max(0, selectedSet - 1), Math.min(selectedSet + 1, tsetsSelect.options.length - 1), tsetsSelect.options.length - 1][i];
            displaySets();
        });

        function toggleThesesBulkAction(action) {      
            const box = document.getElementById("tbulk-action-box");
            box.classList.toggle('hidden');
            if (!action) return;
            document.getElementById("tba-msg").textContent = action.charAt(0).toUpperCase() + str.slice(1) + " selected theses?";
            document.getElementById("tba-warning-msg").textContent = action == "delete" ? "This action cannot be reverted!" : "";
            document.getElementById("tba-selection").textContent = selectedThesis.map(id => id.toString().padStart(4, '0')).join(', ');
            document.getElementById("ba-data").value = selectedThesis.join('-');
            document.getElementById("t-bulk").value = action;
        }

        function toggleThesisAction(action, id) {
            const box = document.getElementById("taction-box");
            box.classList.toggle('hidden');
            if (!action) return;
            document.getElementById("ta-msg").innerHTML = action.charAt(0).toUpperCase() + str.slice(1) + " the thesis with an ID of <b>" + id.toString().padStart(4, '0') + "</b>?";
            document.getElementById("ta-warning-msg").textContent = action == "delete" ? "This action cannot be reverted!" : "";
            document.getElementById("a-data").value = id;
            document.getElementById("t-act").value = action;
        }

        fetch('data.json').then(res => res.json()).then(json => (userData = json, displayUsers())).catch(console.error);

        let userData = { accounts: [] }, usersPerPage = 15, userSelectedSet = 0, userSearchQuery = "", userSearchCategory = "username", selectedUsers = [];
        const userArchiveMode = document.getElementById("uarchive-mode"), userSelectAll = document.getElementById("ua-select-all"), 
              userSetsSelect = document.getElementById("usets-per-page"), userArchive = document.getElementById("uarchive"), 
              userRetrieve = document.getElementById("uretrieve"), userDelete = document.getElementById("udelete");

        [userArchiveMode, userSelectAll, userSetsSelect].forEach(el => el.addEventListener("change", e => {
            if (e.target === userArchiveMode) (selectedUsers = [], userSelectAll.checked = false, userSelectedSet = 0);
            if (e.target === userSetsSelect) userSelectedSet = +e.target.value - 1;
            if (e.target === userSelectAll) selectedUsers = userSelectAll.checked ? userData.accounts.filter(u => u.archived == userArchiveMode.checked).map(u => u.user_id) : [];
            displayUsers();
        }));

        document.getElementById("users-container").addEventListener("change", e => {
            if (!e.target.classList.contains("ucb")) return;
            selectedUsers = e.target.checked ? [...new Set([...selectedUsers, e.target.id])] : selectedUsers.filter(id => id != e.target.id);
            userSelectAll.checked = document.querySelectorAll('.ucb:checked').length === document.querySelectorAll('.ucb').length;
            userArchive.disabled = selectedUsers.length === 0;
            userRetrieve.disabled = selectedUsers.length === 0;
            userDelete.disabled = selectedUsers.length === 0;
        });

        function displayUsers() {
            const userContainer = document.getElementById("users-container"), userPageInfo = document.getElementById("upage-info");
            let filteredUserData = userData.accounts.filter(u => u.archived == userArchiveMode.checked && (!userSearchQuery || u[userSearchCategory]?.toLowerCase().includes(userSearchQuery.toLowerCase())));
            let totalUserSets = Math.ceil(filteredUserData.length / usersPerPage);
            userSelectedSet = Math.max(0, Math.min(userSelectedSet, totalUserSets - 1));
            userSetsSelect.innerHTML = [...Array(totalUserSets)].map((_, i) => `<option value="${i + 1}">${i + 1}</option>`).join("");
            userSetsSelect.value = userSelectedSet + 1;
            userArchive.classList.toggle('hidden', userArchiveMode.checked);
            userRetrieve.classList.toggle('hidden', !userArchiveMode.checked);
            userDelete.classList.toggle('hidden', !userArchiveMode.checked);
            userArchive.disabled = selectedUsers.length === 0;
            userRetrieve.disabled = selectedUsers.length === 0;
            userDelete.disabled = selectedUsers.length === 0;

            const lastUserId = userData.accounts.length ? Math.max(...userData.accounts.map(u => u.user_id)) : 0;
            document.getElementById("new-usr-id").innerHTML = (lastUserId + 1).toString().padStart(4, '0');

            userContainer.innerHTML = filteredUserData.length ? filteredUserData.slice(userSelectedSet * usersPerPage, (userSelectedSet + 1) * usersPerPage).map(user => `
                <tr class="*:rounded-md *:bg-slgreen *:py-0.5 *:overflow-hidden *:text-ellipsis *:whitespace-nowrap">
                    <td class="flex items-center justify-center gap-0.5 select-none overflow-visible!">
                        <input type="checkbox" class="ucb mx-1 px-1" id="${user.user_id}" ${selectedUsers.includes(user.user_id) ? "checked" : ""}>
                        ${userArchiveMode.checked? 
                        '<span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="toggleUserAction(\'retrieve\', \'' + user.user_id + '\');">↩️</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Retrieve</p>' +
                        '</span> <span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="toggleUserAction(\'delete\', \'' + user.user_id + '\');">🗑️</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Delete</p>' +
                        '</span>' : 
                        '<span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="openUCreator(\'' + user.user_id + '\');">✏️</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Edit</p>' +
                        '</span>' +
                        '<span class="relative">' +
                            '<button class="peer opacity-65 hover:opacity-100 active:scale-95 cursor-pointer" onclick="toggleUserAction(\'archive\', \'' + user.user_id + '\');">📥</button>' +
                            '<p class="hidden peer-hover:block absolute -top-4 left-1/2 -translate-x-1/2 px-1 rounded-sm bg-zinc-700 text-off-white text-xs text-center select-none">Archive</p>' +
                        '</span>'}
                    </td>
                    <td class="text-center">${user.user_id.toString().padStart(4, '0')}</td>
                    <td class="text-center">${user.date_joined}</td>
                    <td class="text-center">${user.role}</td>
                    <td class="text-center">${user.membership}</td>
                    <td>${user.username}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.password}</td>
                    <td class="text-center">${user.college || "N/A"}</td>
                    <td class="text-center">${user.yearsection || "N/A"}</td>
                </tr>`).join("") : "<tr><td colspan='11' class='text-center'>No results found.</td></tr>";
            userPageInfo.textContent = totalUserSets === 0 ? `no${userArchiveMode.checked ? " archived" : ""}` : `${userSelectedSet + 1} of ${totalUserSets} set/s`;
        }

        ["first", "previous", "next", "last"].forEach((fn, i) => window[fn + "USet"] = () => {
            userSelectedSet = [0, Math.max(0, userSelectedSet - 1), Math.min(userSelectedSet + 1, userSetsSelect.options.length - 1), userSetsSelect.options.length - 1][i];
            displayUsers();
        });

        function toggleUsersBulkAction(action) {
            const box = document.getElementById("ubulk-action-box");
            box.classList.toggle('hidden');
            if (!action) return;
            document.getElementById("uba-msg").textContent = action.charAt(0).toUpperCase() + action.substr(1) + " selected users?";
            document.getElementById("uba-warning-msg").textContent = action == "delete" ? "This action cannot be reverted!" : "";
            document.getElementById("uba-selection").textContent = selectedUsers.map(id => id.toString().padStart(4, '0')).join(', ');
            document.getElementById("uba-data").value = selectedUsers.join('-');
            document.getElementById("u-bulk").value = action;
        }

        function toggleUserAction(action, id) {
            const box = document.getElementById("uaction-box");
            box.classList.toggle('hidden');
            if (!action) return;
            document.getElementById("ua-msg").innerHTML = action.charAt(0).toUpperCase() + action.substr(1) + " the user with an ID of <b>" + id.toString().padStart(4, '0') + "</b>?";
            document.getElementById("ua-warning-msg").textContent = action == "delete" ? "This action cannot be reverted!" : "";
            document.getElementById("ua-data").value = id;
            document.getElementById("u-act").value = action;
        }

        window.onload = () => {
            // Theses Data
            document.getElementById("tsets-per-page")?.addEventListener("change", e => { selectedSet = e.target.value - 1; displaySets(); });
            document.getElementById("tsearch-box")?.addEventListener("input", e => { searchQuery = e.target.value; selectedSet = 0; displaySets(); });
            document.getElementById("tsearch-category")?.addEventListener("change", e => { searchCategory = e.target.value; selectedSet = 0; displaySets(); });
            document.getElementById("tarchive-mode")?.addEventListener("change", e => {selectedSet = 0; displaySets(); });

            // Users Data
            document.getElementById("usets-per-page")?.addEventListener("change", e => { userSelectedSet = e.target.value - 1; displayUsers(); });
            document.getElementById("usearch-box")?.addEventListener("input", e => { userSearchQuery = e.target.value; userSelectedSet = 0; displayUsers(); });
            document.getElementById("usearch-category")?.addEventListener("change", e => { userSearchCategory = e.target.value; userSelectedSet = 0; displayUsers(); });
            document.getElementById("uarchive-mode")?.addEventListener("change", e => {userSelectedSet = 0; displayUsers(); });
        };

        function openTCreator(thesisId) {
            document.getElementById("tcreator").classList.toggle("hidden");
            document.getElementById("tcreator-backdrop").classList.toggle("hidden");

            ["title", "abstract", "keywords", "course", "pdate"].forEach(field => {
                document.getElementById(field).value = "";
            });

            let lastThesisId = data.theses.length ? Math.max(...data.theses.map(t => t.thesis_id)) : 0;
            document.getElementById("ths-id").innerHTML = (lastThesisId + 1).toString().padStart(4, '0');
            document.getElementById("thesis-id").value = lastThesisId + 1;

            if (!thesisId) return;

            let thesis = data.theses.find(t => t.thesis_id == thesisId);

            if (thesis && thesis.authors) {
                let authors = thesis.authors.split('-');

                document.querySelectorAll('[id^="authorset"]:not(#authorset1)').forEach(el => el.remove());

                const firstAuthorInput = document.getElementById('author1');
                if (firstAuthorInput) {
                    firstAuthorInput.value = authors[0];
                    console.log("First author set successfully:", firstAuthorInput.value);
                }

                for (let i = 1; i < authors.length; i++) {
                    addAuthor();
                    setTimeout(() => {
                        const input = document.getElementById(`author${i + 1}`);
                        if (input) input.value = authors[i];
                    }, 100);
                }
            }

            ['title', 'abstract', 'keywords', 'course'].forEach(field =>
                document.getElementById(field).value = thesis[field]
            );

            document.getElementById('pdate').value = thesis.published_date.length != 7 ? thesis.published_date + "-01" : thesis.published_date;
            document.getElementById('ths-id').innerHTML = thesis.thesis_id.toString().padStart(4, '0');
            document.getElementById('thesis-id').value = thesis.thesis_id;
        }

        function openUCreator(userId) {
            document.getElementById("ucreator").classList.toggle("hidden");
            document.getElementById("ucreator-backdrop").classList.toggle("hidden");

            ["username", "name", "email", "password", "membership", "college", "yearsection", "role"].forEach(field => {
                document.getElementById(field).value = "";
            });

            if (!userId) return;

            let user = userData.accounts.find(u => u.user_id == userId);

            ['username', 'name', 'email', 'password', 'membership', 'college', 'yearsection', 'role'].forEach(field => document.getElementById(field).value = user[field]);
        }


    </script>
</body>
</html>