{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
        <!-- Beautiful Fonts CSS --> 
        <link rel="stylesheet" href="asset/css/beautiful-fonts.css">
        <!-- Owl Theme Default CSS --> 
        <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
        <!-- Owl Magnific CSS --> 
        <link rel="stylesheet" href="asset/css/magnific-popup.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="asset/css/animate.css">
        <!-- Boxicons CSS --> 
		<link rel="stylesheet" href="asset/css/boxicons.min.css"> 
        <!-- Flaticon CSS --> 
		<link rel="stylesheet" href="asset/css/flaticon.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="asset/css/meanmenu.css">
        <!-- Nice Select CSS -->
		<link rel="stylesheet" href="asset/css/nice-select.css">
		<!-- Date Picker CSS -->
        <link rel="stylesheet" href="asset/css/date-picker.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="asset/css/odometer.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="asset/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="asset/css/responsive.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="asset/img/favicon.png">
		
        <!-- TITLE -->
        <title>Ecorik - Hotel & Resort HTML Template</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->
	
		<!-- Start Ecorik Navbar Area -->
		<div class="eorik-nav-style fixed-top">
			<div class="navbar-area">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="index.html" class="logo">
						<img src="asset/img/mobile-manu-logo.png" alt="Logo">
					</a>
				</div>
				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href="index.html">
								<img src="asset/img/pbl/pbl.png" alt="Logo" style="width: 2rem; height: 2rem;">
							</a>
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle active">
											Home
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="index.html" class="nav-link active">Home One</a>
											</li>
											
										</ul>
									</li>
									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle">
											Pages
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="about.html" class="nav-link">About Us</a>
											</li>
											<li class="nav-item">
												<a href="team.html" class="nav-link">Team</a>
											</li>
											<li class="nav-item">
												<a href="pricing.html" class="nav-link">Pricing</a>
											</li>
											<li class="nav-item">
												<a href="faq.html" class="nav-link">FAQ</a>
											</li>
											<li class="nav-item">
												<a href="index.html#" class="nav-link dropdown-toggle">
													Shop
													<i class='bx bx-chevron-down'></i>
												</a>
												<ul class="dropdown-menu">
													<li class="nav-item">
														<a href="product-grid.html" class="nav-link">Product Grid</a>
													</li>
													<li class="nav-item">
														<a href="checkout.html" class="nav-link">Checkout</a>
													</li>
													<li class="nav-item">
														<a href="cart.html" class="nav-link">Cart</a>
													</li>
													<li class="nav-item">
														<a href="single-product.html" class="nav-link">Single Product</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="testimonial.html" class="nav-link">Testimonial</a>
											</li>
											<li class="nav-item">
												<a href="index.html#" class="nav-link dropdown-toggle">
													User
													<i class='bx bx-chevron-down'></i>
												</a>

												<ul class="dropdown-menu">
                                                    @if (Route::has('login'))
													<li class="nav-item">
                                                        @auth
														<a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
                                                        @else
														<a href="{{ route('login') }}" class="nav-link">Log In</a>
                                                        @endauth
													</li>
                                                    @endif

													<li class="nav-item">
														<a href="recover-password.html" class="nav-link">Recover Password</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>


									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle">
											Products
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="service-style-one.html" class="nav-link">Fixed Deposit</a>
											</li>
											<li class="nav-item">
												<a href="service-style-one.html" class="nav-link">Treasury Bill</a>
											</li>
											<li class="nav-item">
												<a href="service-style-one.html" class="nav-link">CIS</a>
											</li>
											
										</ul>
									</li>
									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle">
											News
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="news-grid.html" class="nav-link">News Grid</a>
											</li>
											<li class="nav-item">
												<a href="news-columns-two.html" class="nav-link">News Columns Two</a>
											</li>
											<li class="nav-item">
												<a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-details.html" class="nav-link">News Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="index.html#" class="nav-link dropdown-toggle">
											Contacts
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="contact-style-one.html" class="nav-link">Contact Style One</a>
											</li>
											<li class="nav-item">
												<a href="contact-style-two.html" class="nav-link">Contact Style Two</a>
											</li>
										</ul>
									</li>
								</ul>
								<!-- Start Other Option -->
								<div class="others-option">
									<a class="call-us" href="tel:+009-8765-4332">
										<i class="bx bx-phone-call bx-tada"></i>
										+009 8765 4332
									</a>
								</div>
								<!-- End Other Option -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Ecorik Navbar Area -->

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">  
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="bx bx-x"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a href="index.html">
									<img src="asset/img/home-one/logo.jpg" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">About Us</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore voluptate, autem pariatur? Dicta pariatur.</p>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Additional Links</h3>
								<ul>
									<li>
										<a href="log-in.html">Log In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li>
										<a href="faq.html">FAQ</a>
									</li>
									<li>
										<a href="index.html#">Logout</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>
								<ul class="contact-info">
									<li>
										<i class="bx bx-location-plus"></i>
										Address
										<span>New York - 1060, Str. First 78 Great Western Road</span>
									</li>
									<li>
										<i class="bx bx-envelope"></i>
										Email
										<span>hello@prevoz.com</span>
									</li>
									<li>
										<i class="bx bxs-phone-call"></i>
										Phone
										<span>+502-464-679, +265-497-466</span>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>
								<ul class="social-list">
									<li>
										<a href="index.html#">
											<i class='bx bxl-twitter'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-facebook'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-instagram'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-linkedin'></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class='bx bxl-youtube'></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Modal -->

		<!-- Start Ecorik Slider Area -->
		<section class="eorik-slider-area">
			<div class="eorik-slider owl-carousel owl-theme">
				<div class="eorik-slider-item slider-item-bg-1">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
									<h1>Relax Vacation</h1>
									<span>Discover the place where you have fun & enjoy a lot</span>
									<div class="slider-btn">
										<a class="default-btn" href="index.html#">
											Book To Stay
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-2">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden two eorik-slider-text-one">
									<h1>Take Vacations</h1>
									<span>Discover the place where you have fun & enjoy a lot</span>
									<div class="slider-btn">
										<a class="default-btn" href="index.html#">
											Book To Stay
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-3">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Favorite Vacation</h1>
									<span>Discover the place where you have fun & enjoy a lot</span>
									<div class="slider-btn">
										<a class="default-btn" href="index.html#">
											Book To Stay
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="white-shape">
				<img src="asset/img/home-one/slider/white-shape.png" alt="Image">
			</div>
			<div class="social-link">
				<ul>
					<li>
						<a href="index.html#">
							<i class="bx bxl-facebook"></i>
						</a>
					</li>
					<li>
						<a href="index.html#">
							<i class="bx bxl-twitter"></i>
						</a>
					</li>
					<li>
						<a href="index.html#">
							<i class="bx bxl-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- End Ecorik Slider Area -->

		<!-- Start Check Area -->
        <div class="check-area mb-minus-70">
            <div class="container">
                <form class="check-form">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Arrival Date</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-1">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2020">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
									
						<div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Departure Date</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-2">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2020">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div> 
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="check-content">
										<p>Adults</p>
										<div class="form-group">
											<select name="adult" class="form-content">
												<option value="1">01</option>
												<option value="2">02</option>
												<option value="3">03</option>
												<option value="4">04</option>
												<option value="5">05</option>
											</select>
										</div>
									</div> 
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="check-content">
										<p>Children</p>
										<div class="form-group">
											<select name="adult" class="form-content">
												<option value="1">01</option>
												<option value="2">02</option>
												<option value="3">03</option>
												<option value="4">04</option>
												<option value="5">05</option>
											</select>
										</div>
									</div> 
								</div>
							</div>
						</div>
                        <div class="col-lg-3">
							<div class="check-btn check-content mb-0">
								<button class="default-btn">
									Check Availability
									<i class="flaticon-right"></i>
								</button>
							</div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Check Section -->

		<!-- Start Explore Area -->
		<section class="explore-area pt-170 pb-100">
			<div class="container">
				<div class="section-title">
					<span>Explore</span>
					<h2>We are cool to give you pleasure</h2>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="explore-img">
							<img src="asset/img/explore-img.png" alt="Image">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="explore-content ml-30">
							<h2>As much as comfort want to get from us everything</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet reprehenderit ratione ad perspiciatis repudiandae iste ipsam temporibus sit quo! Incidunt, necessitatibus fugiat ut dignissimos pariatur odit natus ipsum! Obcaecati iste ipsam temporibus sit quo! Incidunt, necessitatibus Obcaecati iste ipsam temporibus.</p>

							<p>Konin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam, quis nostrud exercitation. dolor sit amet, consectetur adipisicing quis nostrud exercitation.</p>
							<a href="about.html" class="default-btn">
								explore More
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Explore Area -->

		<!-- End Facilities Area -->
		<section class="facilities-area pb-60">
			<div class="container">
				<div class="section-title">
					<span>Facilities</span>
					<h2>Giving entirely awesome</h2>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-pickup"></i>
								<h3>Pick Up & Drop​</h3>
								<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-coffee-cup"></i>
								<h3>Welcome Drink​​​​</h3>
								<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-garage"></i>
								<h3>​​Parking Space</h3>
								<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-water"></i>
								<h3>Cold Hot & Water​</h3>
								<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Facilities Area -->

		<!-- End Incredible Area -->
		<section class="incredible-area ptb-140 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="incredible-content">
					<a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
						<i class="flaticon-play-button"></i>
					</a>
					<h2><span>Incredible!</span> Are you coming today</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores sed obcaecati, magni excepturi, temporibus vero, inventore tenetur assumenda natus sequi labore. Voluptates eligendi dolores quod temporibus aperiam adipisci, quasi reprehenderit. Voluptates eligendi dolores quod temporibus.</p>
					<a href="index.html#" class="default-btn">
						Join Us Today
						<i class="flaticon-right"></i>
					</a>
				</div>
			</div>
			<div class="white-shape">
				<img src="asset/img/shape/white-shape-top.png" alt="Image">
				<img src="asset/img/shape/white-shape-bottom.png" alt="Image">
			</div>
		</section>
		<!-- End Incredible Area -->

		<!-- Start Our Rooms Area -->
		<section class="our-rooms-area pt-60 pb-100">
			<div class="container">
				<div class="section-title">
					<span>Our Rooms</span>
					<h2>Fascinating rooms & suites</h2>
				</div>
				<div class="tab industries-list-tab">
					<div class="row">
						<div class="col-lg-4">
							<ul class="tabs">
								<li class="single-rooms">
									<img src="asset/img/rooms/button-img-1.jpg" alt="Image">
									<div class="room-content">
										<h3>Double Room</h3>
										<span>From $75.9/night</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="asset/img/rooms/button-img-2.jpg" alt="Image">
									<div class="room-content">
										<h3>Luxury Room</h3>
										<span>From $50.9/night</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="asset/img/rooms/button-img-3.jpg" alt="Image">
									<div class="room-content">
										<h3>Best Room</h3>
										<span>From $70.9/night</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="asset/img/rooms/button-img-4.jpg" alt="Image">
									<div class="room-content">
										<h3>Classic Room</h3>
										<span>From $95.9/night</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="asset/img/rooms/button-img-5.jpg" alt="Image">
									<div class="room-content">
										<h3>Budget Room</h3>
										<span>From $95.9/night</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-lg-8">
							<div class="tab_content">
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-1">
									</div>
									<span class="preview-item">The Preview Of Double Room</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-2">
									</div>
									<span class="preview-item">The Preview Of Luxury Room</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-3">
									</div>
									<span class="preview-item">The Preview Of Best Room</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-4">
									</div>
									<span class="preview-item">The Preview Of Classic Room</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-5">
									</div>
									<span class="preview-item">The Preview Of Budget Room</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Rooms Area -->

		<!-- Start City View Area -->
		<section class="city-view-area ptb-100">
			<div class="container">
				<div class="city-wrap">
					<div class="single-city-item owl-carousel owl-theme">
						<div class="city-view-single-item">
							<div class="city-content">
								<span>The City View</span>
								<h3>A charming view of the city town</h3>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
		
								<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
							</div>
						</div>
						<div class="city-view-single-item">
							<div class="city-content">
								<span>The City View</span>
								<h3>The charming view of the city</h3>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
		
								<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End City View Area -->

		<!-- Start Exclusive Area -->
		<section class="exclusive-area pt-100 pb-70"> 
			<div class="container">
				<div class="section-title">
					<span>Exclusive Offers</span>
					<h2>You can get an exclusive offer </h2>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="exclusive-wrap">
							<div class="row">
								<div class="col-lg-6 pr-0">
									<div class="exclusive-img bg-1"></div>
								</div>
								<div class="col-lg-6 pl-0">
									<div class="exclusive-content">
										<span class="title">Up To 30% Off</span>
										<h3>Swimming for man</h3>
										<span class="review">
											4.5
											<a href="index.html#">(432 Reviews)</a>
										</span>
										<p>Swimming doller dolor sit aet odu tur adiing elitse</p>
										<ul>
											<li>
												<i class="bx bx-time"></i>
												Duration: 2Hours
											</li>
											<li>
												<i class="bx bx-target-lock"></i>
												18+ years
											</li>
										</ul>
										<a href="book-table.html" class="default-btn">
											Book Online
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="exclusive-wrap">
							<div class="row">
								<div class="col-lg-6 pr-0">
									<div class="exclusive-img bg-2"></div>
								</div>
								<div class="col-lg-6 pl-0">
									<div class="exclusive-content">
										<span class="title">This Month Only</span>
										<h3>$5 Breakfast package</h3>
										<span class="review">
											5.0
											<a href="index.html#">(580 Reviews)</a>
										</span>
										<p>Start $5 doller dolor sit aet odeu tur adiing elitse</p>
										<ul>
											<li>
												<i class="bx bx-time"></i>
												Duration: 2Hours
											</li>
											<li>
												<i class="bx bx-target-lock"></i>
												18+ years
											</li>
										</ul>
										<a href="book-table.html" class="default-btn">
											Book Online
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Exclusive Area -->

		<!-- Start Booking Area -->
		<section class="bokking-area pb-70">
			<div class="container">
				<div class="section-title">
					<span>Booking</span>
					<h2>Direct booking benefits</h2>
				</div>
				<div class="row">
					<div class="booking-col-2">
						<div class="single-booking">
							<a href="index.html#exampleModalCenter-1" data-toggle="modal">
								<i class="book-icon flaticon-online-booking"></i>
								<span class="booking-title">Free cost</span>
								<h3>No booking fee</h3>
							</a>
							<div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">No booking fee</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
										</div>
										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="booking-col-2">
						<div class="single-booking">
							<a href="index.html#exampleModalCenter-2" data-toggle="modal">
								<i class="book-icon flaticon-podium"></i>
								<span class="booking-title">Free cost</span>
								<h3>Best rate guarantee</h3>
							</a>
							<div class="modal fade" id="exampleModalCenter-2" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Best rate guarantee</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
										</div>
										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="booking-col-2">
						<div class="single-booking">
							<a href="index.html#exampleModalCenter-3" data-toggle="modal">
								<i class="book-icon flaticon-airport"></i>
								<span class="booking-title">Free cost</span>
								<h3>Reservations 24/7</h3>
							</a>
							<div class="modal fade" id="exampleModalCenter-3" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Reservations 24/7</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
										</div>
										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="booking-col-2">
						<div class="single-booking">
							<a href="index.html#exampleModalCenter-4" data-toggle="modal">
								<i class="book-icon flaticon-slow"></i>
								<span class="booking-title">Free cost</span>
								<h3>High-speed Wi-Fi</h3>
							</a>
							<div class="modal fade" id="exampleModalCenter-4" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">High-speed Wi-Fi</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
										</div>
										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="booking-col-2">
						<div class="single-booking">
							<a href="index.html#exampleModalCenter-5" data-toggle="modal">
								<i class="book-icon flaticon-coffee-cup-1"></i>
								<span class="booking-title">Free cost</span>
								<h3>Free breakfast</h3>
							</a>
							<div class="modal fade" id="exampleModalCenter-5" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Free breakfast</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
										</div>
										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Booking Area -->

		<!-- Start Restaurants Area -->
		<section class="restaurants-area pb-100">
			<div class="container-fluid p-0">
				<div class="section-title">
					<span>Restaurants</span>
					<h2>The area we cover under Ecorik</h2>
				</div>
				
				<div class="restaurants-wrap owl-carousel owl-theme">
					<div class="single-restaurants bg-1">
						<i class="restaurants-icon flaticon-coffee-cup"></i>
						<span>Restaurants</span>
						<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
						<a href="index.html#" class="default-btn">
							Explore More
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-2">
						<i class="restaurants-icon flaticon-swimming"></i>
						<span>Swimming Pool</span>
						<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
						<a href="index.html#" class="default-btn">
							Explore More
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-3">
						<i class="restaurants-icon flaticon-speaker"></i>
						<span>Conference Room</span>
						<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
						<a href="index.html#" class="default-btn">
							Explore More
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-4">
						<i class="restaurants-icon flaticon-podium"></i>
						<span>Best Rate</span>
						<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
						<a href="index.html#" class="default-btn">
							Explore More
							<i class="flaticon-right"></i> 
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Restaurants Area -->

		<!-- start Testimonials Area -->
		<section class="testimonials-area pb-100">
			<div class="container">
				<div class="section-title">
					<span>Testimonials</span>
					<h2>What customers say</h2>
				</div>
				<div class="testimonials-wrap owl-carousel owl-theme">
					<div class="single-testimonials">
						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>
						<h3>Excellent Room</h3>
						<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
						<div class="testimonials-content">
							<img src="asset/img/testimonials/2.jpg" alt="Image">
							<h4>Ayman Jenis</h4>
							<span>CEO@Leasuely</span>
						</div>
					</div>
					<div class="single-testimonials">
						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>
						<h3>Excellent hotel</h3>
						<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
						<div class="testimonials-content">
							<img src="asset/img/testimonials/3.jpg" alt="Image">
							<h4>Ayman Jenis</h4>
							<span>CEO@Leasuely</span>
						</div>
					</div>
					<div class="single-testimonials">
						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>
						<h3>Excellent Swimming</h3>
						<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
						<div class="testimonials-content">
							<img src="asset/img/testimonials/1.jpg" alt="Image">
							<h4>Ayman Jenis</h4>
							<span>CEO@Leasuely</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials Area -->

		<!-- End News Area -->
		<section class="news-area pb-60">
			<div class="container">
				<div class="section-title">
					<span>Our BLog</span>
					<h2>News & articles updates </h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-news">
							<div class="news-img">
								<a href="news-details.html">
									<img src="asset/img/news/1.jpg" alt="Image">
								</a>
								<div class="dates">
									<span>HOTEL</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="index.html#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="flaticon-conversation"></i>
											Comment
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>Celebrating Decade Years Of Hotel In 2020</h3>
								</a>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-news">
							<div class="news-img">
								<a href="news-details.html">
									<img src="asset/img/news/2.jpg" alt="Image">
								</a>
								<div class="dates">
									<span>PRICE</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="index.html#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="flaticon-conversation"></i>
											Comment
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>A Perfect Day With Businessman At Ecorik Hotel</h3>
								</a>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-news">
							<div class="news-img">
								<a href="news-details.html">
									<img src="asset/img/news/1.jpg" alt="Image">
								</a>
								<div class="dates">
									<span>STORE</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="index.html#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="flaticon-conversation"></i>
											Comment
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>Celebrating Decade Years Of Hotel In 2019</h3>
								</a>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End News Area -->

		<!-- Start Footer Area -->
		<footer class="footer-top-area pt-140 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="section-title">
					<h2>Subscribe newsletter</h2>
					<p>Newsletr dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreonsectetur adipiscinet dolore.</p>
				</div>
				<div class="footer-tops-area pb-60">
					<div class="row">
						<!-- Start Subscribe Area -->
						<div class="subscribe-wrap">
							<form class="newsletter-form" data-toggle="validator">
								<input type="email" class="input-tracking" placeholder="Your Email" name="EMAIL" required autocomplete="off">
			
								<button class="default-btn active" type="submit">
									Subscribe
									<i class="flaticon-right"></i>
								</button>
			
								<div id="validator-newsletter" class="form-result"></div>
							</form>
						</div>
						<!-- End Subscribe Area -->
					</div>
				</div>
				<div class="footer-middle-area pt-60">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<a href="index.html">
									<img src="asset/img/home-one/footer-logo.png" alt="Image">
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat molestiae corporis, magni maxime perferendis ducimus.</p>
								<ul class="social-icon">
									<li>
										<a href="index.html#">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="bx bxl-pinterest-alt"></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="bx bxl-youtube"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Quick Links</h3>
								<ul>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Big Data
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Wellness
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Spa Gallery
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Reservation
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											FAQ 
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Contact 
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Services</h3>
								<ul>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Restaurant
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Swimming Pool
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Wellness & Spa
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Conference Room
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Events
										</a>
									</li>
									<li>
										<a href="index.html#">
											<i class="right-icon bx bx-chevrons-right"></i>
											Adult Room
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Contact Info</h3>
								<ul class="information">
									<li class="address">
										<i class="flaticon-maps-and-flags"></i>
										<span>Address</span>
										205 Fida Walinton, Tongo Street Front The USA
									</li>
									<li class="address">
										<i class="flaticon-call"></i>
										<span>Phone</span>
										<a href="tel:+882-569-756">
											+882-569-756
										</a>
									</li>
									<li class="address">
										<i class="flaticon-envelope"></i>
										<span>Email</span>
										<a href="mailto:hello@ecorik.com">
											hello@ecorik.com
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom-area">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="copy-right">
								<p>Copyright <i class="bx bx-copyright"></i> 2020 <a href="index.html">Ecorik</a>. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="designed">
								<p>Designed By <i class='bx bx-heart'></i> <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-shape">
				<img src="asset/img/shape/white-shape-bottom.png" alt="Image">
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- End Go Top Area --> 

        
        <!-- Jquery Slim JS -->
        <script src="asset/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="asset/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="asset/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="asset/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="asset/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="asset/js/owl.carousel.js"></script>
        <!-- Owl Magnific JS -->
		<script src="asset/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="asset/js/jquery.nice-select.min.js"></script>
		<!-- Appear JS --> 
        <script src="asset/js/jquery.appear.js"></script>
		<!-- Odometer JS --> 
		<script src="asset/js/odometer.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="asset/js/bootstrap-datepicker.min.js"></script>
		<!-- Parallax JS --> 
		<script src="asset/js/parallax.min.js"></script>
		<!-- Mixitup JS -->
		<script src="asset/js/jquery.mixitup.min.js"></script>
		<!-- Form Ajaxchimp JS -->
		<script src="asset/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="asset/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="asset/js/contact-form-script.js"></script>
		<!-- Map JS FILE -->
        <script src="asset/js/map.js"></script>
        <!-- Custom JS -->
		<script src="asset/js/custom.js"></script>
    </body>
</html>