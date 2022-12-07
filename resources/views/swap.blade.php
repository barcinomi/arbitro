<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arbitro</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <img src="{{ url('Arbitro.png') }}" width="400" height="5f00">
                <!-- <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div> -->

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                            <svg width="40" height="40" viewBox="0 0 198 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M99 198C153.676 198 198 153.676 198 99C198 44.3238 153.676 0 99 0C44.3238 0 0 44.3238 0 99C0 153.676 44.3238 198 99 198Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M135.021 60.8918C134.575 60.4607 134.318 59.8701 134.306 59.2496C134.308 58.9417 134.372 58.6374 134.495 58.355C134.618 58.0727 134.797 57.8184 135.021 57.6075C135.497 57.1734 136.117 56.9328 136.76 56.9328C137.404 56.9328 138.024 57.1734 138.499 57.6075C138.731 57.8141 138.916 58.067 139.043 58.35C139.171 58.6329 139.237 58.9395 139.238 59.2496C139.233 59.5592 139.165 59.8646 139.038 60.147C138.911 60.4295 138.728 60.6829 138.499 60.8918C138.022 61.321 137.403 61.5584 136.76 61.5584C136.118 61.5584 135.499 61.321 135.021 60.8918" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M128.969 67.1791C128.552 66.7328 128.316 66.1477 128.305 65.537C128.307 64.9245 128.545 64.3364 128.969 63.8948C129.408 63.4616 130 63.2186 130.616 63.2186C131.233 63.2186 131.824 63.4616 132.263 63.8948C132.687 64.3364 132.925 64.9245 132.927 65.537C132.917 66.1477 132.68 66.7328 132.263 67.1791C131.821 67.6059 131.231 67.8444 130.616 67.8444C130.002 67.8444 129.411 67.6059 128.969 67.1791" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M122.415 73.4433C121.984 73.011 121.742 72.4255 121.742 71.815C121.742 71.2046 121.984 70.619 122.415 70.1867C122.683 69.9215 123.013 69.7264 123.375 69.6186C123.737 69.5107 124.12 69.4934 124.49 69.5681C124.86 69.6428 125.207 69.8073 125.498 70.0471C125.79 70.2868 126.018 70.5946 126.164 70.9433C126.309 71.292 126.366 71.671 126.33 72.0469C126.294 72.4229 126.167 72.7843 125.959 73.0995C125.751 73.4147 125.469 73.6739 125.137 73.8545C124.805 74.0351 124.434 74.1315 124.057 74.1353C123.751 74.1346 123.448 74.0731 123.166 73.9543C122.884 73.8355 122.629 73.6618 122.415 73.4433" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M116.16 79.7584C115.932 79.5493 115.751 79.2954 115.627 79.0127C115.503 78.7301 115.439 78.4248 115.439 78.1162C115.439 77.8076 115.503 77.5023 115.627 77.2196C115.751 76.937 115.932 76.6831 116.16 76.474C116.64 76.04 117.265 75.7997 117.912 75.7997C118.56 75.7997 119.185 76.04 119.665 76.474C119.892 76.6831 120.073 76.937 120.197 77.2196C120.321 77.5023 120.385 77.8076 120.385 78.1162C120.385 78.4248 120.321 78.7301 120.197 79.0127C120.073 79.2954 119.892 79.5493 119.665 79.7584C119.188 80.1962 118.56 80.434 117.912 80.4226C117.265 80.4289 116.64 80.1918 116.16 79.7584" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M110.154 86.0456C109.935 85.8329 109.762 85.5786 109.643 85.2978C109.525 85.0169 109.464 84.7152 109.464 84.4104C109.464 84.1056 109.525 83.8039 109.643 83.523C109.762 83.2422 109.935 82.9879 110.154 82.7751C110.477 82.4538 110.888 82.2354 111.335 82.1474C111.782 82.0594 112.245 82.1058 112.666 82.2807C113.086 82.4556 113.446 82.7513 113.699 83.1303C113.952 83.5093 114.087 83.9547 114.087 84.4104C114.087 84.866 113.952 85.3114 113.699 85.6905C113.446 86.0695 113.086 86.3651 112.666 86.54C112.245 86.715 111.782 86.7614 111.335 86.6734C110.888 86.5854 110.477 86.367 110.154 86.0456Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M102.875 90.6908C102.88 90.0736 103.129 89.4835 103.566 89.0486C104.002 88.6149 104.592 88.372 105.207 88.3733C105.821 88.3746 106.41 88.62 106.844 89.0555C107.278 89.4911 107.52 90.081 107.519 90.6957C107.518 91.3103 107.272 91.8993 106.837 92.333C106.399 92.7593 105.813 92.9978 105.202 92.9978C104.591 92.9978 104.004 92.7593 103.566 92.333C103.348 92.1188 103.174 91.8633 103.056 91.5814C102.937 91.2995 102.875 90.9967 102.875 90.6908V90.6908Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M91.2779 104.585C91.0608 104.368 90.889 104.111 90.7726 103.827C90.6562 103.544 90.5974 103.24 90.5998 102.933C90.5998 102.322 90.8428 101.735 91.2753 101.302C91.7079 100.87 92.2945 100.627 92.9062 100.627C93.5179 100.627 94.1046 100.87 94.5371 101.302C94.9696 101.735 95.2126 102.322 95.2126 102.933C95.2117 103.235 95.1499 103.534 95.031 103.811C94.9121 104.088 94.7386 104.339 94.5207 104.548C94.3129 104.767 94.0625 104.941 93.7849 105.06C93.5072 105.179 93.2083 105.24 92.9062 105.24C92.5998 105.242 92.296 105.182 92.0136 105.063C91.7312 104.945 91.4761 104.769 91.264 104.548" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M84.723 110.872C84.4997 110.666 84.321 110.417 84.198 110.139C84.075 109.861 84.0104 109.561 84.0081 109.257C84.0285 108.658 84.2855 108.091 84.723 107.68C85.2051 107.239 85.8345 106.995 86.4875 106.995C87.1404 106.995 87.7698 107.239 88.2519 107.68C88.4762 107.891 88.6553 108.145 88.7782 108.427C88.9011 108.71 88.9653 109.014 88.9668 109.322C88.9565 109.616 88.888 109.904 88.7652 110.171C88.6425 110.438 88.468 110.678 88.2519 110.877C87.7778 111.323 87.1503 111.571 86.499 111.568C85.8462 111.579 85.2159 111.33 84.7461 110.877" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M78.6987 117.182C78.2631 116.747 78.0185 116.156 78.0185 115.54C78.0185 114.924 78.2631 114.334 78.6987 113.898C79.1342 113.462 79.7249 113.218 80.3408 113.218C80.9568 113.218 81.5475 113.462 81.983 113.898C82.4102 114.338 82.6492 114.927 82.6492 115.54C82.6492 116.153 82.4102 116.742 81.983 117.182C81.7666 117.396 81.5101 117.564 81.2282 117.678C80.9464 117.792 80.6448 117.85 80.3408 117.847C80.0366 117.852 79.7344 117.795 79.4523 117.681C79.1702 117.567 78.9139 117.398 78.6987 117.182Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M72.4252 123.47C72.2056 123.254 72.0313 122.997 71.9124 122.714C71.7936 122.43 71.7327 122.126 71.7332 121.818C71.7391 121.362 71.8787 120.917 72.1347 120.539C72.3906 120.161 72.7518 119.867 73.1735 119.692C73.5952 119.517 74.0589 119.47 74.5072 119.556C74.9555 119.642 75.3687 119.858 75.6957 120.176C76.1127 120.622 76.3494 121.207 76.3599 121.818C76.3604 122.434 76.1223 123.026 75.6957 123.47C75.4792 123.683 75.2227 123.852 74.9409 123.966C74.6591 124.08 74.3575 124.137 74.0535 124.134C73.7516 124.137 73.452 124.08 73.1724 123.966C72.8928 123.852 72.6387 123.683 72.4252 123.47Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M65.8842 129.757C65.6521 129.549 65.4664 129.294 65.3392 129.01C65.2121 128.725 65.1463 128.417 65.1461 128.105C65.1492 127.796 65.2164 127.49 65.3434 127.207C65.4705 126.925 65.6546 126.671 65.8842 126.463C66.3617 126.034 66.9811 125.797 67.6232 125.797C68.2653 125.797 68.8847 126.034 69.3623 126.463C69.5854 126.669 69.7639 126.919 69.8869 127.197C70.0099 127.474 70.0746 127.774 70.0772 128.078C70.0815 128.388 70.0199 128.695 69.8967 128.98C69.7735 129.265 69.5913 129.52 69.3623 129.729C68.8847 130.158 68.2653 130.396 67.6232 130.396C66.9811 130.396 66.3617 130.158 65.8842 129.729" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M59.8367 136.049C59.5135 135.727 59.2931 135.316 59.2035 134.868C59.1139 134.42 59.1592 133.956 59.3335 133.534C59.5079 133.113 59.8035 132.752 60.183 132.498C60.5624 132.244 61.0086 132.109 61.4651 132.109C61.9216 132.109 62.3678 132.244 62.7472 132.498C63.1267 132.752 63.4223 133.113 63.5966 133.534C63.771 133.956 63.8162 134.42 63.7267 134.868C63.6371 135.316 63.4167 135.727 63.0934 136.049C62.6611 136.48 62.0755 136.722 61.4651 136.722C60.8546 136.722 60.2691 136.48 59.8367 136.049" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M63.098 60.8919C63.515 60.4455 63.7517 59.8604 63.7623 59.2497C63.7604 58.6372 63.5225 58.0491 63.098 57.6075C62.7742 57.2882 62.3632 57.0717 61.9167 56.9853C61.4702 56.8989 61.0081 56.9464 60.5885 57.1219C60.1689 57.2974 59.8106 57.593 59.5586 57.9716C59.3065 58.3502 59.1721 58.7949 59.1721 59.2497C59.1721 59.7045 59.3065 60.1491 59.5586 60.5277C59.8106 60.9063 60.1689 61.202 60.5885 61.3775C61.0081 61.553 61.4702 61.6005 61.9167 61.5141C62.3632 61.4277 62.7742 61.2112 63.098 60.8919" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M69.3623 67.1838C69.8086 66.7526 70.0658 66.1621 70.0772 65.5416C70.0757 65.2337 70.0115 64.9293 69.8886 64.647C69.7657 64.3647 69.5866 64.1103 69.3623 63.8994C68.8816 63.4654 68.257 63.2251 67.6094 63.2251C66.9618 63.2251 66.3372 63.4654 65.8565 63.8994C65.6295 64.1085 65.4483 64.3624 65.3244 64.645C65.2004 64.9277 65.1364 65.233 65.1364 65.5416C65.1364 65.8502 65.2004 66.1555 65.3244 66.4381C65.4483 66.7208 65.6295 66.9747 65.8565 67.1838C66.3395 67.613 66.9632 67.8502 67.6094 67.8502C68.2556 67.8502 68.8793 67.613 69.3623 67.1838" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M75.6957 73.4434C76.015 73.1196 76.2315 72.7085 76.3179 72.262C76.4043 71.8155 76.3568 71.3534 76.1813 70.9338C76.0058 70.5143 75.7101 70.1559 75.3315 69.9039C74.9529 69.6519 74.5083 69.5174 74.0535 69.5174C73.5987 69.5174 73.154 69.6519 72.7754 69.9039C72.3969 70.1559 72.1012 70.5143 71.9257 70.9338C71.7502 71.3534 71.7027 71.8155 71.7891 72.262C71.8755 72.7085 72.092 73.1196 72.4113 73.4434C72.6234 73.6646 72.8784 73.8401 73.1609 73.9591C73.4433 74.0781 73.747 74.1381 74.0535 74.1353C74.3594 74.1346 74.6622 74.0731 74.9441 73.9543C75.226 73.8355 75.4815 73.6619 75.6957 73.4434" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M81.983 79.7584C82.4102 79.3184 82.6492 78.7294 82.6492 78.1162C82.6492 77.503 82.4102 76.9139 81.983 76.474C81.7674 76.2584 81.5113 76.0873 81.2296 75.9706C80.9478 75.8539 80.6458 75.7938 80.3408 75.7938C80.0359 75.7938 79.7339 75.8539 79.4521 75.9706C79.1703 76.0873 78.9143 76.2584 78.6987 76.474C78.483 76.6897 78.3119 76.9457 78.1952 77.2275C78.0785 77.5092 78.0185 77.8112 78.0185 78.1162C78.0185 78.4212 78.0785 78.7232 78.1952 79.0049C78.3119 79.2867 78.483 79.5427 78.6987 79.7584C78.9139 79.9735 79.1702 80.1432 79.4523 80.2573C79.7344 80.3714 80.0366 80.4276 80.3408 80.4226C80.9543 80.4256 81.5442 80.187 81.983 79.7584Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M88.2472 86.0456C88.4786 85.839 88.6639 85.5861 88.7911 85.3031C88.9183 85.0202 88.9844 84.7137 88.9853 84.4035C88.9837 84.0974 88.9171 83.7952 88.7899 83.5168C88.6626 83.2385 88.4777 82.9904 88.2472 82.789C87.7849 82.3298 87.1598 82.0721 86.5082 82.0721C85.8566 82.0721 85.2315 82.3298 84.7692 82.789C84.5418 82.9915 84.3603 83.2404 84.237 83.5189C84.1137 83.7973 84.0513 84.0989 84.0542 84.4035C84.0504 84.7122 84.1121 85.0182 84.2354 85.3013C84.3586 85.5844 84.5406 85.8381 84.7692 86.0456C85.2467 86.4748 85.8661 86.7123 86.5082 86.7123C87.1503 86.7123 87.7697 86.4748 88.2472 86.0456" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M95.2219 90.6769C95.2165 90.0598 94.9678 89.4697 94.5299 89.0347C94.0976 88.6038 93.512 88.3618 92.9016 88.3618C92.2911 88.3618 91.7056 88.6038 91.2733 89.0347C91.0081 89.3036 90.813 89.6335 90.7052 89.9955C90.5973 90.3574 90.58 90.7402 90.6547 91.1104C90.7294 91.4806 90.8939 91.8268 91.1337 92.1185C91.3734 92.4103 91.6812 92.6387 92.0299 92.7837C92.3786 92.9288 92.7575 92.9859 93.1335 92.9502C93.5094 92.9146 93.8709 92.7871 94.1861 92.5791C94.5012 92.371 94.7605 92.0888 94.9411 91.7571C95.1217 91.4255 95.2181 91.0545 95.2219 90.6769Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M100.836 98.6202C101.157 98.2972 101.375 97.8862 101.463 97.4391C101.551 96.9921 101.505 96.5289 101.33 96.1082C101.155 95.6875 100.86 95.328 100.481 95.0751C100.102 94.8222 99.6561 94.6873 99.2004 94.6873C98.7448 94.6873 98.2994 94.8222 97.9203 95.0751C97.5413 95.328 97.2457 95.6875 97.0708 96.1082C96.8958 96.5289 96.8494 96.9921 96.9374 97.4391C97.0254 97.8862 97.2439 98.2972 97.5652 98.6202C98.0027 99.0422 98.5856 99.28 99.1935 99.2845C99.8069 99.2874 100.397 99.0488 100.836 98.6202" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M107.091 104.585C107.317 104.374 107.498 104.118 107.621 103.834C107.744 103.549 107.807 103.243 107.806 102.933C107.804 102.625 107.74 102.321 107.617 102.039C107.494 101.756 107.315 101.502 107.091 101.291C106.615 100.857 105.995 100.616 105.352 100.616C104.708 100.616 104.088 100.857 103.613 101.291C103.381 101.498 103.196 101.751 103.069 102.034C102.942 102.317 102.875 102.623 102.875 102.933C102.876 103.239 102.943 103.542 103.07 103.82C103.197 104.098 103.382 104.346 103.613 104.548C104.083 104.991 104.705 105.238 105.352 105.238C105.998 105.238 106.62 104.991 107.091 104.548" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M113.401 110.872C113.825 110.442 114.064 109.862 114.065 109.257C114.047 108.667 113.81 108.105 113.401 107.68C113.082 107.348 112.672 107.119 112.222 107.023C111.772 106.927 111.303 106.967 110.877 107.139C110.45 107.311 110.084 107.606 109.827 107.987C109.569 108.369 109.432 108.818 109.432 109.278C109.432 109.738 109.569 110.188 109.827 110.569C110.084 110.95 110.45 111.246 110.877 111.418C111.303 111.59 111.772 111.63 112.222 111.533C112.672 111.437 113.082 111.208 113.401 110.877" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M119.711 117.173C119.923 116.961 120.091 116.709 120.205 116.432C120.319 116.155 120.377 115.858 120.376 115.559C120.376 114.947 120.133 114.36 119.7 113.928C119.268 113.495 118.681 113.252 118.069 113.252C117.458 113.252 116.871 113.495 116.438 113.928C116.006 114.36 115.763 114.947 115.763 115.559C115.768 116.165 116.011 116.745 116.441 117.173C116.654 117.392 116.909 117.566 117.192 117.683C117.474 117.799 117.778 117.857 118.083 117.851C118.388 117.852 118.69 117.793 118.972 117.677C119.254 117.56 119.51 117.389 119.725 117.173" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M125.671 123.474C125.893 123.261 126.069 123.004 126.188 122.72C126.307 122.436 126.366 122.131 126.363 121.823C126.362 121.517 126.301 121.214 126.182 120.932C126.063 120.65 125.89 120.395 125.671 120.181C125.239 119.75 124.653 119.508 124.043 119.508C123.432 119.508 122.847 119.75 122.415 120.181C121.985 120.62 121.742 121.208 121.736 121.823C121.736 122.441 121.979 123.035 122.415 123.474C122.63 123.689 122.886 123.859 123.168 123.973C123.45 124.087 123.752 124.143 124.057 124.138C124.357 124.142 124.654 124.085 124.932 123.971C125.209 123.857 125.461 123.688 125.671 123.474" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M132.263 129.762C132.488 129.545 132.666 129.284 132.785 128.995C132.904 128.706 132.962 128.395 132.955 128.082C132.954 127.777 132.893 127.474 132.774 127.192C132.655 126.91 132.481 126.654 132.263 126.44C131.831 126.009 131.245 125.767 130.635 125.767C130.024 125.767 129.439 126.009 129.006 126.44C128.79 126.656 128.619 126.912 128.503 127.193C128.386 127.475 128.327 127.777 128.328 128.082C128.322 128.389 128.38 128.694 128.496 128.978C128.613 129.262 128.786 129.52 129.006 129.734C129.439 130.165 130.024 130.407 130.635 130.407C131.245 130.407 131.831 130.165 132.263 129.734" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M138.55 136.058C138.777 135.849 138.958 135.595 139.081 135.312C139.204 135.03 139.267 134.724 139.265 134.416C139.26 134.118 139.194 133.824 139.071 133.553C138.948 133.282 138.771 133.039 138.55 132.838C138.075 132.404 137.455 132.164 136.811 132.164C136.168 132.164 135.547 132.404 135.072 132.838C134.838 133.043 134.65 133.296 134.522 133.579C134.393 133.862 134.327 134.169 134.327 134.48C134.327 134.792 134.393 135.099 134.522 135.382C134.65 135.665 134.838 135.918 135.072 136.123C135.55 136.552 136.169 136.789 136.811 136.789C137.453 136.789 138.073 136.552 138.55 136.123" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M78.3112 63.249C84.3853 59.0626 91.5881 56.8209 98.9652 56.8209C106.342 56.8209 113.545 59.0626 119.619 63.249L132.867 49.4105C123.388 41.3968 111.376 37 98.9629 37C86.5499 37 74.5381 41.3968 65.0585 49.4105L78.3112 63.249Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M65.0862 117.422C60.8243 111.388 58.5361 104.181 58.5361 96.7936C58.5361 89.4059 60.8243 82.1995 65.0862 76.165L51.2154 62.9861C43.3215 72.4836 39 84.4439 39 96.7936C39 109.143 43.3215 121.104 51.2154 130.601L65.0862 117.422Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M119.716 130.601C113.724 134.968 106.511 137.338 99.0966 137.377C91.5956 137.451 84.2731 135.089 78.2282 130.647L65.0862 144.555C74.5944 152.639 86.7002 157.02 99.1797 156.894C111.513 156.796 123.424 152.39 132.853 144.44L119.716 130.601Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M132.6 76.1742C136.986 82.2831 139.295 89.6385 139.187 97.158C139.11 104.427 136.811 111.498 132.6 117.422L146.48 130.601C154.424 121.193 158.829 109.305 158.934 96.9919C159.059 84.5321 154.677 72.4468 146.595 62.963L132.6 76.1742Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M147.135 134.873C147.13 135.937 146.703 136.955 145.948 137.705C145.193 138.455 144.172 138.874 143.108 138.872C142.044 138.869 141.024 138.445 140.273 137.692C139.521 136.939 139.099 135.918 139.099 134.854C139.099 133.79 139.521 132.77 140.273 132.016C141.024 131.263 142.044 130.839 143.108 130.836C144.172 130.834 145.193 131.254 145.948 132.003C146.703 132.753 147.13 133.772 147.135 134.836" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M51.1277 134.873C53.6414 134.967 56.0204 136.033 57.7652 137.845C59.5101 139.656 60.4848 142.074 60.4848 144.589C60.4848 147.105 59.5101 149.522 57.7652 151.334C56.0204 153.146 53.6414 154.212 51.1277 154.306C48.6141 154.212 46.235 153.146 44.4902 151.334C42.7454 149.522 41.7706 147.105 41.7706 144.589C41.7706 142.074 42.7454 139.656 44.4902 137.845C46.235 136.033 48.6141 134.967 51.1277 134.873" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M147.282 39.027C149.189 39.0115 151.057 39.5617 152.651 40.6079C154.245 41.6542 155.493 43.1495 156.237 44.9049C156.981 46.6602 157.188 48.5968 156.831 50.4697C156.475 52.3427 155.571 54.0679 154.234 55.4273C152.898 56.7866 151.188 57.7191 149.321 58.1069C147.454 58.4946 145.514 58.3201 143.747 57.6055C141.979 56.8909 140.463 55.6683 139.391 54.0922C138.318 52.5161 137.736 50.6573 137.72 48.7508C137.7 46.1938 138.696 43.7336 140.489 41.9104C142.282 40.0872 144.725 39.0501 147.282 39.027" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50.9801 39.027C52.8642 39.0588 54.6968 39.6465 56.248 40.7164C57.7991 41.7863 58.9996 43.2906 59.6987 45.0405C60.3977 46.7904 60.5642 48.7078 60.1772 50.5519C59.7902 52.3961 58.867 54.0848 57.5235 55.406C56.1799 56.7273 54.476 57.6221 52.6256 57.9782C50.7752 58.3342 48.8609 58.1357 47.1229 57.4074C45.385 56.6791 43.901 55.4537 42.8572 53.8848C41.8135 52.316 41.2565 50.4737 41.2562 48.5894C41.2659 47.3227 41.5252 46.0704 42.0192 44.9041C42.5133 43.7378 43.2325 42.6803 44.1356 41.7922C45.0387 40.904 46.1081 40.2026 47.2826 39.7282C48.457 39.2537 49.7135 39.0154 50.9801 39.027" fill="black"/>
                                    <path d="M138.177 170.774C157.284 170.774 172.773 155.285 172.773 136.178C172.773 117.071 157.284 101.582 138.177 101.582C119.07 101.582 103.58 117.071 103.58 136.178C103.58 155.285 119.07 170.774 138.177 170.774Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M138.177 101.582C119.07 101.582 103.58 117.071 103.58 136.178C103.58 155.285 119.07 170.774 138.177 170.774C157.284 170.774 172.773 155.285 172.773 136.178C172.773 117.071 157.284 101.582 138.177 101.582ZM94.3546 136.178C94.3546 111.976 113.974 92.356 138.177 92.356C162.379 92.356 181.999 111.976 181.999 136.178C181.999 160.38 162.379 180 138.177 180C113.974 180 94.3546 160.38 94.3546 136.178Z" fill="white"/>
                                    <path d="M159.998 122L150.676 150H147.595L139.498 126.12L131.361 150H128.32L118.998 122H122L129.979 146.08L138.234 122H140.959L149.096 146.2L157.193 122H159.998Z" fill="white"/>
                                    </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a class="text-gray-900 dark:text-white">EGLD to UTK</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    You are swaping {{ $egldAmount }} EGLD.<br/><br/>

                                    <a href="https://{{ env('EXPLORER_URL') }}/transactions/{{ $transactionHash }}" class="bg-violet-700 hover:bg-violet-900 mt-2 text-white w-full font-bold py-2 px-4 rounded-full w-full mv-5" target="_blank">View Transaction</a>
                                    <p></p>
                                       
                                    <button onclick="location.href='/'" class="bg-blue-500 hover:bg-blue-700 mt-2 text-white w-full font-bold py-2 px-4 mt-5 rounded-full">
                                       Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Arbitro MultiversX Exchange v0.1
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
