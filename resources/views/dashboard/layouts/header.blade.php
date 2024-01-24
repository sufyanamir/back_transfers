<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('assets/style/dataTable.min.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
        aria-controls="separator-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="separator-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-black dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src={{asset('assets/icons/sidebarLogo.svg')}} alt="">
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_132_6246)">
                            <path d="M13.0625 13.4062L17.0088 9.515C17.1141 9.41332 17.1868 9.2825 17.2174 9.13929C17.248 8.99608 17.2351 8.847 17.1805 8.71114C17.1258 8.57528 17.0319 8.45881 16.9107 8.37666C16.7894 8.29451 16.6464 8.25041 16.5 8.25H14.3C14.1181 8.26765 13.9492 8.35242 13.8263 8.48777C13.7035 8.62313 13.6354 8.79938 13.6354 8.98219C13.6354 9.16499 13.7035 9.34124 13.8263 9.4766C13.9492 9.61196 14.1181 9.69672 14.3 9.71438H14.7194L12.045 12.375L9.52188 10.0306C9.3811 9.89421 9.21402 9.7879 9.03081 9.71816C8.8476 9.64842 8.65211 9.61672 8.45626 9.625C8.26178 9.63487 8.07116 9.68308 7.89536 9.76685C7.71957 9.85062 7.56206 9.9683 7.43188 10.1131L5.16313 12.6156C5.05308 12.763 5.00225 12.9463 5.02066 13.1293C5.03907 13.3124 5.12539 13.4819 5.26259 13.6044C5.39979 13.7269 5.57792 13.7936 5.76186 13.7913C5.94579 13.789 6.12219 13.7178 6.25626 13.5919L8.52501 11.0894L11.0481 13.4338C11.3236 13.6878 11.6861 13.8265 12.0608 13.8214C12.4355 13.8163 12.794 13.6677 13.0625 13.4062Z" fill="white"/>
                            <path d="M20.9275 1.07252C20.588 0.731077 20.184 0.460449 19.7391 0.276341C19.2942 0.0922336 18.8171 -0.00168889 18.3356 2.2986e-05H3.66438C2.69252 2.2986e-05 1.76047 0.38609 1.07327 1.07329C0.386067 1.7605 0 2.69255 0 3.6644L0 18.3356C0 19.3075 0.386067 20.2396 1.07327 20.9268C1.76047 21.614 2.69252 22 3.66438 22H18.3356C19.3075 22 20.2395 21.614 20.9267 20.9268C21.6139 20.2396 22 19.3075 22 18.3356V3.6644C22.0017 3.18289 21.9078 2.70583 21.7237 2.2609C21.5396 1.81598 21.2689 1.41204 20.9275 1.07252ZM20.5356 18.3288C20.5356 18.9123 20.3038 19.4718 19.8913 19.8844C19.4787 20.297 18.9191 20.5288 18.3356 20.5288H3.66438C3.0809 20.5288 2.52132 20.297 2.10874 19.8844C1.69616 19.4718 1.46438 18.9123 1.46438 18.3288V3.6644C1.46438 3.08092 1.69616 2.52134 2.10874 2.10876C2.52132 1.69618 3.0809 1.4644 3.66438 1.4644H18.3356C18.9191 1.4644 19.4787 1.69618 19.8913 2.10876C20.3038 2.52134 20.5356 3.08092 20.5356 3.6644V18.3288Z" fill="white"/>
                            <path d="M5.13564 4.75065H7.33564C7.51759 4.733 7.68644 4.64823 7.8093 4.51288C7.93217 4.37752 8.00023 4.20126 8.00023 4.01846C8.00023 3.83566 7.93217 3.65941 7.8093 3.52405C7.68644 3.38869 7.51759 3.30393 7.33564 3.28627H5.13564C5.03352 3.27637 4.93047 3.28793 4.83309 3.32022C4.73571 3.35251 4.64616 3.40481 4.57019 3.47376C4.49422 3.54271 4.43352 3.6268 4.39198 3.7206C4.35044 3.81441 4.32898 3.91587 4.32898 4.01846C4.32898 4.12106 4.35044 4.22251 4.39198 4.31632C4.43352 4.41013 4.49422 4.49421 4.57019 4.56316C4.64616 4.63212 4.73571 4.68442 4.83309 4.7167C4.93047 4.74899 5.03352 4.76056 5.13564 4.75065Z" fill="white"/>
                            <path d="M6.60001 16.1356H5.13564C5.03352 16.1257 4.93047 16.1373 4.83309 16.1696C4.73571 16.2019 4.64616 16.2542 4.57019 16.3231C4.49422 16.3921 4.43352 16.4762 4.39198 16.57C4.35044 16.6638 4.32898 16.7652 4.32898 16.8678C4.32898 16.9704 4.35044 17.0719 4.39198 17.1657C4.43352 17.2595 4.49422 17.3436 4.57019 17.4125C4.64616 17.4815 4.73571 17.5338 4.83309 17.5661C4.93047 17.5984 5.03352 17.6099 5.13564 17.6H6.60001C6.70213 17.6099 6.80518 17.5984 6.90256 17.5661C6.99994 17.5338 7.08949 17.4815 7.16546 17.4125C7.24142 17.3436 7.30213 17.2595 7.34367 17.1657C7.38521 17.0719 7.40667 16.9704 7.40667 16.8678C7.40667 16.7652 7.38521 16.6638 7.34367 16.57C7.30213 16.4762 7.24142 16.3921 7.16546 16.3231C7.08949 16.2542 6.99994 16.2019 6.90256 16.1696C6.80518 16.1373 6.70213 16.1257 6.60001 16.1356Z" fill="white"/>
                            <path d="M16.8644 16.1356H9.5356C9.43349 16.1257 9.33043 16.1373 9.23305 16.1696C9.13567 16.2019 9.04612 16.2542 8.97015 16.3231C8.89419 16.3921 8.83348 16.4762 8.79194 16.57C8.7504 16.6638 8.72894 16.7652 8.72894 16.8678C8.72894 16.9704 8.7504 17.0719 8.79194 17.1657C8.83348 17.2595 8.89419 17.3436 8.97015 17.4125C9.04612 17.4815 9.13567 17.5338 9.23305 17.5661C9.33043 17.5984 9.43349 17.6099 9.5356 17.6H16.8644C16.9665 17.6099 17.0695 17.5984 17.1669 17.5661C17.2643 17.5338 17.3538 17.4815 17.4298 17.4125C17.5058 17.3436 17.5665 17.2595 17.608 17.1657C17.6495 17.0719 17.671 16.9704 17.671 16.8678C17.671 16.7652 17.6495 16.6638 17.608 16.57C17.5665 16.4762 17.5058 16.3921 17.4298 16.3231C17.3538 16.2542 17.2643 16.2019 17.1669 16.1696C17.0695 16.1373 16.9665 16.1257 16.8644 16.1356Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_132_6246">
                            <rect width="22" height="22" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">DashBoard</span>
                        <span
                            class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.2615 10.6134C11.2943 10.6134 10.3489 10.3266 9.54474 9.78926C8.74058 9.25194 8.11381 8.48822 7.74369 7.59468C7.37358 6.70114 7.27674 5.71792 7.46542 4.76935C7.65411 3.82078 8.11984 2.94946 8.80372 2.26557C9.4876 1.58169 10.3589 1.11596 11.3075 0.927276C12.2561 0.738593 13.2393 0.835432 14.1328 1.20555C15.0264 1.57566 15.7901 2.20243 16.3274 3.00659C16.8647 3.81075 17.1515 4.75619 17.1515 5.72335C17.15 7.0198 16.6343 8.26272 15.7176 9.17945C14.8009 10.0962 13.5579 10.6119 12.2615 10.6134ZM12.2615 2.05439C11.5358 2.05439 10.8265 2.26957 10.2231 2.67272C9.61977 3.07587 9.14951 3.64888 8.87182 4.3193C8.59412 4.98971 8.52147 5.72742 8.66303 6.43912C8.8046 7.15083 9.15404 7.80458 9.66715 8.31769C10.1803 8.8308 10.834 9.18024 11.5457 9.32181C12.2574 9.46337 12.9951 9.39072 13.6655 9.11302C14.336 8.83533 14.909 8.36507 15.3121 7.76171C15.7153 7.15835 15.9304 6.449 15.9304 5.72335C15.9305 4.74975 15.5441 3.81595 14.8562 3.12697C14.1683 2.438 13.2351 2.05018 12.2615 2.04866V2.05439Z" fill="white"/>
                            <path d="M17.3464 19.1724H7.18225C6.896 19.1728 6.61361 19.1063 6.35768 18.9781C6.10174 18.8499 5.87936 18.6635 5.70832 18.434C5.53729 18.2045 5.42234 17.9381 5.37267 17.6562C5.32301 17.3743 5.34 17.0846 5.4223 16.8105L5.99557 14.8843C6.25633 14.0006 6.79696 13.2254 7.53615 12.6754C8.27534 12.1254 9.17313 11.8303 10.0945 11.8345H14.417C15.3383 11.8303 16.2361 12.1254 16.9753 12.6754C17.7145 13.2254 18.2551 14.0006 18.5159 14.8843L19.0892 16.8105C19.1711 17.0833 19.1883 17.3714 19.1396 17.652C19.0908 17.9326 18.9774 18.198 18.8083 18.4271C18.6392 18.6563 18.4191 18.843 18.1653 18.9723C17.9116 19.1017 17.6312 19.1702 17.3464 19.1724ZM10.1002 13.0555C9.44183 13.0522 8.80018 13.2629 8.27185 13.6557C7.74353 14.0486 7.35712 14.6025 7.17079 15.234L6.59751 17.1602C6.57114 17.2504 6.56583 17.3454 6.58201 17.4379C6.59818 17.5305 6.63541 17.6181 6.6908 17.694C6.7462 17.7699 6.81829 17.832 6.90151 17.8757C6.98473 17.9193 7.07686 17.9432 7.17079 17.9456H17.3464C17.441 17.9434 17.5338 17.9195 17.6176 17.8755C17.7013 17.8316 17.7738 17.7688 17.8293 17.6922C17.8848 17.6156 17.9219 17.5272 17.9376 17.4339C17.9532 17.3406 17.9471 17.245 17.9197 17.1544L17.3464 15.2282C17.1601 14.5968 16.7737 14.0429 16.2453 13.65C15.717 13.2571 15.0754 13.0465 14.417 13.0498L10.1002 13.0555Z" fill="white"/>
                            <path d="M6.95301 10.5389H6.83836C5.71659 10.3293 4.70343 9.7341 3.97433 8.85622C3.24524 7.97834 2.84613 6.87311 2.84613 5.73195C2.84613 4.59079 3.24524 3.48556 3.97433 2.60768C4.70343 1.7298 5.71659 1.13456 6.83836 0.925046C6.91901 0.905818 7.00273 0.903142 7.08445 0.917181C7.16617 0.931219 7.2442 0.961681 7.31382 1.00672C7.38343 1.05177 7.44319 1.11046 7.48949 1.17925C7.53579 1.24804 7.56765 1.3255 7.58317 1.40695C7.59868 1.48841 7.59752 1.57216 7.57976 1.65315C7.56199 1.73415 7.52799 1.8107 7.47981 1.87818C7.43162 1.94566 7.37026 2.00267 7.29942 2.04577C7.22858 2.08886 7.14974 2.11715 7.06767 2.12892C6.23007 2.28988 5.47472 2.73764 4.93149 3.3952C4.38827 4.05275 4.09111 4.87903 4.09111 5.73195C4.09111 6.58488 4.38827 7.41115 4.93149 8.06871C5.47472 8.72627 6.23007 9.17402 7.06767 9.33498C7.21166 9.36918 7.33843 9.45428 7.42461 9.5746C7.51079 9.69492 7.55056 9.84233 7.53659 9.98967C7.52263 10.137 7.45587 10.2743 7.34862 10.3763C7.24137 10.4783 7.10086 10.5381 6.95301 10.5446V10.5389Z" fill="white"/>
                            <path d="M3.89179 19.1723H2.67072C2.38446 19.1728 2.10208 19.1062 1.84614 18.978C1.59021 18.8498 1.36783 18.6635 1.19679 18.434C1.02575 18.2044 0.910802 17.938 0.861136 17.6561C0.81147 17.3742 0.828466 17.0846 0.910764 16.8104L1.48404 14.8842C1.74506 13.9996 2.28656 13.2238 3.02691 12.6737C3.76726 12.1236 4.66635 11.829 5.58868 11.8344C5.67383 11.8261 5.75977 11.8358 5.84097 11.8627C5.92217 11.8896 5.99684 11.9332 6.06018 11.9907C6.12353 12.0482 6.17415 12.1184 6.20879 12.1966C6.24342 12.2748 6.26132 12.3594 6.26132 12.4449C6.26132 12.5305 6.24342 12.6151 6.20879 12.6933C6.17415 12.7715 6.12353 12.8416 6.06018 12.8991C5.99684 12.9566 5.92217 13.0003 5.84097 13.0272C5.75977 13.0541 5.67383 13.0637 5.58868 13.0555C4.9303 13.0522 4.28865 13.2628 3.76032 13.6557C3.23199 14.0486 2.84558 14.6024 2.65925 15.2339L2.08598 17.1601C2.0596 17.2503 2.0543 17.3453 2.07047 17.4379C2.08665 17.5305 2.12387 17.6181 2.17927 17.694C2.23466 17.7698 2.30675 17.832 2.38997 17.8756C2.47319 17.9192 2.56532 17.9431 2.65925 17.9455H3.89179C3.97694 17.9373 4.06287 17.9469 4.14408 17.9738C4.22528 18.0007 4.29995 18.0444 4.36329 18.1019C4.42664 18.1593 4.47725 18.2295 4.51189 18.3077C4.54653 18.3859 4.56443 18.4705 4.56443 18.5561C4.56443 18.6416 4.54653 18.7262 4.51189 18.8044C4.47725 18.8826 4.42664 18.9528 4.36329 19.0103C4.29995 19.0677 4.22528 19.1114 4.14408 19.1383C4.06287 19.1652 3.97694 19.1749 3.89179 19.1666V19.1723Z" fill="white"/>
                            </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Edit profile</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.8689 9.35001C17.5669 9.04678 17.2078 8.8064 16.8124 8.64277C16.4169 8.47914 15.993 8.39549 15.565 8.39668V5.78723C15.5875 5.1741 15.4861 4.56274 15.2669 3.98967C15.0478 3.4166 14.7154 2.89359 14.2895 2.45189C13.8637 2.01018 13.3532 1.65885 12.7885 1.41888C12.2239 1.17892 11.6166 1.05524 11.0031 1.05524C10.3895 1.05524 9.78229 1.17892 9.21762 1.41888C8.65295 1.65885 8.14245 2.01018 7.71662 2.45189C7.29079 2.89359 6.95837 3.4166 6.73922 3.98967C6.52007 4.56274 6.41868 5.1741 6.44113 5.78723V8.39668C6.01287 8.39587 5.58866 8.47953 5.19277 8.64286C4.79688 8.80619 4.43708 9.04599 4.13397 9.34853C3.83086 9.65107 3.59039 10.0104 3.42632 10.406C3.26225 10.8016 3.17779 11.2256 3.1778 11.6539V17.5206C3.1778 18.3844 3.52097 19.2129 4.13181 19.8238C4.74266 20.4346 5.57115 20.7778 6.43502 20.7778H15.565C16.4289 20.7778 17.2574 20.4346 17.8682 19.8238C18.4791 19.2129 18.8222 18.3844 18.8222 17.5206V11.6539C18.8238 11.2259 18.7403 10.8018 18.5766 10.4063C18.413 10.0109 18.1724 9.6518 17.8689 9.35001ZM7.7428 5.78723C7.7428 5.35909 7.82713 4.93513 7.99097 4.53958C8.15481 4.14402 8.39496 3.78461 8.69771 3.48187C9.00045 3.17912 9.35986 2.93897 9.75542 2.77513C10.151 2.61129 10.5749 2.52696 11.0031 2.52696C11.4312 2.52696 11.8552 2.61129 12.2507 2.77513C12.6463 2.93897 13.0057 3.17912 13.3084 3.48187C13.6112 3.78461 13.8513 4.14402 14.0152 4.53958C14.179 4.93513 14.2634 5.35909 14.2634 5.78723V8.39668H7.7428V5.78723ZM17.5206 17.5206C17.5206 18.0392 17.3145 18.5366 16.9478 18.9034C16.5811 19.2701 16.0837 19.4761 15.565 19.4761H6.43502C5.91637 19.4761 5.41897 19.2701 5.05223 18.9034C4.68549 18.5366 4.47946 18.0392 4.47946 17.5206V11.6539C4.47946 11.1353 4.68549 10.6379 5.05223 10.2711C5.41897 9.90438 5.91637 9.69834 6.43502 9.69834H15.565C16.0837 9.69834 16.5811 9.90438 16.9478 10.2711C17.3145 10.6379 17.5206 11.1353 17.5206 11.6539V17.5206Z" fill="white"/>
                            <path d="M11 11.6539C10.539 11.6519 10.0923 11.8134 9.73903 12.1095C9.38581 12.4057 9.14897 12.8175 9.07058 13.2718C8.99218 13.726 9.0773 14.1934 9.31081 14.5908C9.54432 14.9883 9.91112 15.2901 10.3461 15.4428V17.5206H11.6478V15.4428C12.0822 15.2903 12.4487 14.989 12.6822 14.5921C12.9158 14.1953 13.0013 13.7287 12.9237 13.2748C12.8461 12.821 12.6104 12.4092 12.2583 12.1125C11.9062 11.8158 11.4604 11.6534 11 11.6539ZM11 14.2633C10.8707 14.2633 10.7442 14.225 10.6367 14.1531C10.5292 14.0813 10.4454 13.9792 10.3959 13.8597C10.3464 13.7402 10.3334 13.6087 10.3587 13.4819C10.3839 13.355 10.4462 13.2385 10.5376 13.1471C10.6291 13.0556 10.7456 12.9933 10.8724 12.9681C10.9993 12.9429 11.1307 12.9558 11.2502 13.0053C11.3697 13.0548 11.4718 13.1386 11.5437 13.2462C11.6155 13.3537 11.6539 13.4801 11.6539 13.6094C11.6523 13.7818 11.5827 13.9466 11.4602 14.0679C11.3377 14.1892 11.1723 14.2572 11 14.2572V14.2633Z" fill="white"/>
                            </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">change password</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_141_6038)">
                            <path d="M11 22C7.4525 21.9381 2.93563 14.1281 2.93563 8.0644C2.91216 6.99894 3.10472 5.93977 3.50168 4.95075C3.89865 3.96172 4.4918 3.06334 5.24538 2.30977C5.99895 1.55619 6.89733 0.963041 7.88635 0.566076C8.87538 0.16911 9.93455 -0.0234448 11 2.1648e-05C12.0655 -0.0234448 13.1246 0.16911 14.1137 0.566076C15.1027 0.963041 16.0011 1.55619 16.7546 2.30977C17.5082 3.06334 18.1014 3.96172 18.4983 4.95075C18.8953 5.93977 19.0878 6.99894 19.0644 8.0644C19.0644 12.7119 16.5069 18.0056 14.0319 20.4394C12.98 21.4775 11.9694 22 11 22ZM11 1.4644C10.1253 1.43469 9.25375 1.58508 8.43956 1.90625C7.62538 2.22741 6.88589 2.7125 6.267 3.33139C5.64811 3.95028 5.16302 4.68977 4.84186 5.50396C4.52069 6.31815 4.37029 7.18966 4.4 8.0644C4.4 13.8738 8.71063 20.4944 11.0138 20.5288C11.792 20.3995 12.4988 19.9973 13.0075 19.3944C15.2144 17.2219 17.6 12.2719 17.6 8.0644C17.6297 7.18966 17.4793 6.31815 17.1582 5.50396C16.837 4.68977 16.3519 3.95028 15.733 3.33139C15.1141 2.7125 14.3746 2.22741 13.5604 1.90625C12.7463 1.58508 11.8747 1.43469 11 1.4644Z" fill="white"/>
                            <path d="M11 11.7356C10.2753 11.7356 9.5668 11.5207 8.96419 11.1181C8.36159 10.7154 7.89192 10.1431 7.61457 9.47353C7.33722 8.80396 7.26465 8.06717 7.40604 7.35635C7.54743 6.64553 7.89643 5.9926 8.4089 5.48013C8.92138 4.96766 9.57431 4.61866 10.2851 4.47727C10.9959 4.33588 11.7327 4.40845 12.4023 4.6858C13.0719 4.96314 13.6442 5.43282 14.0468 6.03542C14.4495 6.63802 14.6644 7.34649 14.6644 8.07124C14.6626 9.04253 14.2759 9.97352 13.5891 10.6603C12.9023 11.3471 11.9713 11.7338 11 11.7356ZM11 5.87124C10.5649 5.87124 10.1395 6.00026 9.77776 6.242C9.41597 6.48374 9.13399 6.82734 8.96747 7.22933C8.80096 7.63133 8.75739 8.07368 8.84228 8.50044C8.92717 8.92719 9.1367 9.3192 9.44437 9.62687C9.75205 9.93455 10.1441 10.1441 10.5708 10.229C10.9976 10.3139 11.4399 10.2703 11.8419 10.1038C12.2439 9.93726 12.5875 9.65528 12.8292 9.29349C13.071 8.9317 13.2 8.50636 13.2 8.07124C13.2009 7.78175 13.1447 7.49493 13.0345 7.22722C12.9244 6.95951 12.7625 6.71617 12.5581 6.51116C12.3537 6.30614 12.1109 6.14347 11.8435 6.03248C11.5761 5.92149 11.2895 5.86436 11 5.86436V5.87124Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_141_6038">
                            <rect width="22" height="22" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Saved Location</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
            <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.8222 2.5239H15.565V1.22223H14.2572V2.5239H7.74278V1.22223H6.43501V2.5239H3.17778C2.65914 2.5239 2.16174 2.72993 1.795 3.09666C1.42826 3.4634 1.22223 3.96081 1.22223 4.47945V18.8222C1.22223 19.3409 1.42826 19.8383 1.795 20.205C2.16174 20.5718 2.65914 20.7778 3.17778 20.7778H18.8222C19.3409 20.7778 19.8383 20.5718 20.205 20.205C20.5718 19.8383 20.7778 19.3409 20.7778 18.8222V4.47945C20.7778 3.96081 20.5718 3.4634 20.205 3.09666C19.8383 2.72993 19.3409 2.5239 18.8222 2.5239ZM3.17778 3.83167H6.43501V5.13334H7.73667V3.83167H14.2572V5.13334H15.5589V3.83167H18.8222C18.9957 3.83167 19.162 3.90057 19.2846 4.02319C19.4072 4.14582 19.4761 4.31214 19.4761 4.48556V7.74278H2.5239V4.47945C2.52551 4.30709 2.59511 4.14234 2.71756 4.02103C2.84002 3.89972 3.00542 3.83167 3.17778 3.83167ZM18.8222 19.4761H3.17778C3.00436 19.4761 2.83804 19.4072 2.71542 19.2846C2.59279 19.162 2.5239 18.9957 2.5239 18.8222V9.04445H19.4761V18.8222C19.4761 18.9957 19.4072 19.162 19.2846 19.2846C19.162 19.4072 18.9957 19.4761 18.8222 19.4761Z" fill="white"/>
                            <path d="M14.0189 12.98L12.5156 12.4056L11.5072 11.1528C11.4459 11.0774 11.3686 11.0167 11.2808 10.9749C11.1931 10.9332 11.0972 10.9116 11 10.9116C10.9029 10.9116 10.8069 10.9332 10.7192 10.9749C10.6314 11.0167 10.5541 11.0774 10.4928 11.1528L9.48446 12.4056L7.98113 12.98C7.89054 13.0152 7.80894 13.0701 7.74226 13.1408C7.67558 13.2115 7.62549 13.2962 7.59564 13.3887C7.56579 13.4811 7.55693 13.5791 7.5697 13.6754C7.58247 13.7718 7.61655 13.864 7.66946 13.9456L8.55557 15.2778L8.63502 16.885C8.64011 16.9823 8.6669 17.0773 8.71342 17.1629C8.75995 17.2486 8.82503 17.3227 8.9039 17.38C8.98366 17.4363 9.07464 17.4748 9.17061 17.4927C9.26659 17.5106 9.36531 17.5076 9.46002 17.4839L11 17.0744L12.5522 17.4961C12.6472 17.5209 12.7465 17.5241 12.8428 17.5053C12.9392 17.4865 13.03 17.4462 13.1087 17.3875C13.1873 17.3288 13.2518 17.2532 13.2972 17.1662C13.3426 17.0792 13.3679 16.9831 13.3711 16.885L13.4445 15.2778L14.3245 13.9272C14.3774 13.8457 14.4115 13.7534 14.4242 13.6571C14.437 13.5608 14.4281 13.4628 14.3983 13.3703C14.3684 13.2778 14.3183 13.1932 14.2517 13.1225C14.185 13.0518 14.1034 12.9969 14.0128 12.9617L14.0189 12.98ZM12.265 14.7278C12.2024 14.8247 12.1666 14.9364 12.1611 15.0517L12.1122 16.0294L11.1711 15.7728C11.059 15.7427 10.941 15.7427 10.8289 15.7728L9.88779 16.0294L9.8389 15.0517C9.83345 14.9364 9.79761 14.8247 9.73502 14.7278L9.20335 13.9089L10.1139 13.5606C10.2218 13.5188 10.3167 13.4493 10.3889 13.3589L11 12.595L11.6111 13.3589C11.6833 13.4493 11.7782 13.5188 11.8861 13.5606L12.7967 13.9089L12.265 14.7278Z" fill="white"/>
                            </svg>

                        <span class="ms-3">My Booking</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.9017 0.796674C16.5349 0.43086 16.0386 0.224448 15.5206 0.222229H4.32502C3.80699 0.224448 3.31072 0.43086 2.94391 0.796674L1.11058 2.63001C0.744764 2.99681 0.538353 3.49308 0.536134 4.01112V17.8222C0.535905 18.079 0.586553 18.3332 0.685151 18.5703C0.783749 18.8073 0.928342 19.0225 1.11058 19.2033C1.47438 19.5662 1.96567 19.7724 2.47947 19.7778H15.5206C16.0392 19.7778 16.5366 19.5718 16.9034 19.205C17.2701 18.8383 17.4761 18.3409 17.4761 17.8222V2.17778C17.4739 1.65975 17.2675 1.16348 16.9017 0.796674ZM2.02113 3.5589L3.85447 1.72556C3.97644 1.60468 4.14107 1.53663 4.3128 1.53612H4.4228V3.49167C4.41972 3.65984 4.35196 3.82036 4.2336 3.93986C4.11523 4.05936 3.95538 4.12865 3.78725 4.13334H1.83169V4.02334C1.83114 3.93727 1.8476 3.85193 1.88011 3.77223C1.91262 3.69253 1.96054 3.62003 2.02113 3.5589ZM16.1684 17.8222C16.1684 17.9957 16.0995 18.162 15.9768 18.2846C15.8542 18.4072 15.6879 18.4761 15.5145 18.4761H2.47947C2.30711 18.4745 2.14235 18.4049 2.02104 18.2825C1.89973 18.16 1.83168 17.9946 1.83169 17.8222V5.43501H3.78725C4.04405 5.43501 4.29834 5.38443 4.5356 5.28615C4.77286 5.18787 4.98844 5.04383 5.17003 4.86224C5.35162 4.68065 5.49567 4.46507 5.59394 4.22781C5.69222 3.99055 5.7428 3.73626 5.7428 3.47945V1.5239H15.5206C15.6929 1.52551 15.8577 1.59511 15.979 1.71756C16.1003 1.84002 16.1684 2.00542 16.1684 2.17778V17.8222Z" fill="white"/>
                            </svg>

                        <span class="ms-3">Invoice</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-white transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path d="M18 0H6a2 2 0 0 0-2 2h14v12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Z" />
                            <path
                                d="M14 4H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2ZM2 16v-6h12v6H2Z" />
                        </svg>
                        <span class="ms-3">Components</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-white transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 21">
                            <path
                                d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z" />
                        </svg>
                        <span class="ms-3">Help</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </aside>
    <div class=" sm:ml-64">
    <div class=" bg-slate-100 p-5 w-full flex  justify-between">
        {{-- search bar================ --}}


<form class="flex items-center">
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">

        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none  block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white  " placeholder="Search..." required>
    </div>
    <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-black rounded-lg border  hover:bg-gray-800 focus:ring-4 focus:outline-none  dark:bg-blue-600 dark:hover:bg-gray-800 dark:focus:ring-blue-800">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
    </button>
</form>


        {{-- search bar================= --}}

        {{-- avatar============== --}}

<div class="flex items-center gap-3 font-semibold font-montserrat">
    <span>Usman Mirza</span>
    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src={{asset('assets/icons/profile.svg')}} alt="User dropdown">
</div>

<!-- Dropdown menu -->
<div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div>Bonnie Green</div>
      <div class="font-medium truncate">name@flowbite.com</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
    </ul>
    <div class="py-1">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
    </div>
</div>




        {{-- avatar============== --}}


    </div>
