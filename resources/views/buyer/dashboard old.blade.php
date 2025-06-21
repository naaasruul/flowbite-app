<x-layouts.customer-layout>
    {{-- <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
          <div class="content-center justify-self-start md:col-span-7 md:text-start">
            <h1
              class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl">
              Limited Time Offer!<br />Up to 50% OFF!</h1>
            <p class="mb-4 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">Don't
              Wait - Limited Stock at Unbeatable Prices!</p>
            <a href="#"
              class="inline-block rounded-lg bg-primary-700 px-6 py-3.5 text-center font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Shop
              Now</a>
          </div>
          <div class="hidden md:col-span-5 md:mt-0 md:flex">
            <img class="dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list.svg"
              alt="shopping illustration" />
            <img class="hidden dark:block"
              src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list-dark.svg"
              alt="shopping illustration" />
          </div>
        </div>
        <div
          class="mx-auto grid max-w-screen-xl grid-cols-2 gap-8 text-gray-500 dark:text-gray-400 sm:grid-cols-3 sm:gap-12 lg:grid-cols-6 px-4">
          <a href="#" class="flex items-center md:justify-center">
            <svg class="h-10 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 106 48" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1005_171562)">
                <path
                  d="M92.1288 21.0435C90.3398 21.4564 85.6148 21.6858 85.6148 21.6858L85.0337 23.5513C85.0337 23.5513 87.3732 23.3525 89.0859 23.5207C89.0859 23.5207 89.6364 23.4748 89.6975 24.1324C89.7281 24.8052 89.6516 25.5086 89.6516 25.5086C89.6516 25.5086 89.6058 25.9214 89.04 26.0285C88.3825 26.1355 83.948 26.3343 83.948 26.3343L83.2293 28.7503C83.2293 28.7503 82.9694 29.3008 83.5657 29.1479C84.1162 28.995 88.7648 28.1081 89.3764 28.2304C90.0186 28.3833 90.7526 29.2702 90.5385 30.0654C90.2939 31.0287 85.6453 33.9952 82.8317 33.7964C82.8317 33.7964 81.3485 33.8882 80.1099 31.885C78.9172 29.9736 80.5228 26.3802 80.5228 26.3802C80.5228 26.3802 79.8041 24.6981 80.3393 24.0865C80.3393 24.0865 80.6451 23.8265 81.5626 23.7501L82.7094 21.3952C82.7094 21.3952 81.4097 21.4717 80.6451 20.5236C79.9417 19.6062 79.8805 19.2086 80.431 18.9639C81.0121 18.6581 86.3946 17.6947 90.0951 17.8171C90.0951 17.8171 91.3949 17.6642 92.5417 19.912C92.5417 19.912 93.0616 20.8295 92.1441 21.0435M78.1832 30.096C77.7245 31.2122 76.4553 32.3896 74.9262 31.671C73.3665 30.937 70.9046 25.9214 70.9046 25.9214C70.9046 25.9214 69.9871 24.0559 69.8036 24.1171C69.8036 24.1171 69.6048 23.7501 69.4978 25.7991C69.3449 27.8328 69.5284 31.7933 68.6873 32.4202C67.9228 33.0319 67.0053 32.7719 66.4854 32.0532C66.0572 31.3345 65.8737 29.6066 66.1184 26.5943C66.3937 23.5819 67.0818 20.3707 67.9534 19.3768C68.8708 18.3676 69.6048 19.1015 69.8801 19.3768C69.8801 19.3768 71.0575 20.4472 73.0453 23.6125L73.3818 24.1935C73.3818 24.1935 75.1861 27.2059 75.3696 27.1906C75.3696 27.1906 75.5225 27.3435 75.6449 27.2212C75.8284 27.1753 75.7672 26.1967 75.7672 26.1967C75.7672 26.1967 75.4308 22.9396 73.7487 17.4348C73.7487 17.4348 73.5041 16.7314 73.6723 16.0586C73.8252 15.4469 74.4827 15.7528 74.4827 15.7528C74.4827 15.7528 77.0211 16.9761 78.2597 21.1047C79.483 25.2333 78.6572 28.9797 78.1985 30.096M65.7361 19.4991C65.4915 19.9273 65.3844 20.5236 64.3293 20.6918C64.3293 20.6918 54.0842 21.4105 53.5796 22.1292C53.5796 22.1292 53.2432 22.5574 53.7937 22.6644C54.3747 22.7867 56.699 23.0926 57.8 23.1537C58.9927 23.1537 62.999 23.1843 64.467 24.9887C64.467 24.9887 65.308 25.845 65.2774 27.787C65.2468 29.7748 64.8951 30.4782 64.1153 31.1969C63.3048 31.8697 56.3626 34.9892 51.8823 30.2183C51.8823 30.2183 49.8332 27.9246 52.6009 26.1814C52.6009 26.1814 54.5888 24.9581 59.6808 26.3802C59.6808 26.3802 61.2099 26.9307 61.1488 27.4964C61.057 28.1081 59.8796 28.7197 58.167 28.6892C56.5155 28.6433 55.2922 27.8481 55.5369 27.9858C55.7662 28.0622 53.7478 27.0071 53.1208 27.7258C52.5092 28.3986 52.6621 28.7962 53.2738 29.2091C54.8029 30.096 60.8123 29.7748 62.6014 27.7717C62.6014 27.7717 63.3201 26.9612 62.2344 26.3037C61.164 25.6921 58.0446 25.3098 56.8366 25.2639C55.6898 25.2028 51.3929 25.2639 50.7507 24.1477C50.7507 24.1477 50.1391 23.3525 50.8119 21.1812C51.5153 18.8875 56.5155 18.0006 58.6869 17.8171C58.6869 17.8171 64.6504 17.5724 65.7667 18.7957C65.7667 18.7957 65.9196 19.071 65.7361 19.4838M48.824 32.9401C48.1053 33.4753 46.5762 33.246 46.1327 32.6343C45.7046 32.0991 45.5517 29.9889 45.6281 26.6707C45.7352 23.2761 45.781 19.1168 46.5456 18.444C47.3102 17.7865 47.7689 18.3676 48.0747 18.811C48.3806 19.2697 48.7781 19.7744 48.8393 20.8295C48.931 21.8998 49.191 27.4047 49.191 27.4047C49.191 27.4047 49.5274 32.4202 48.8393 32.9401M50.3531 15.0494C48.2429 15.7681 46.8056 15.5387 45.5823 15.0035C45.0471 15.9668 44.7259 16.2574 44.3284 16.3185C43.7167 16.3797 43.1815 15.4011 43.1051 15.0952C42.9827 14.8659 42.6922 14.453 43.0439 13.5202C41.8512 12.4498 41.7594 11.0125 41.9735 10.0491C42.2488 8.91757 44.2672 4.6666 50.3837 4.16199C50.3837 4.16199 53.3808 3.94791 53.9007 5.5382H53.9924C53.9924 5.5382 56.8978 5.5382 56.8366 8.13771C56.8366 10.7372 53.6255 13.979 50.3531 15.0952M53.075 7.64839C51.1483 7.95422 48.1818 10.5231 46.7597 12.6486C48.9463 13.0462 52.7691 12.8933 54.4818 9.43747C54.4818 9.43747 55.2922 7.26611 53.075 7.64839ZM44.6189 9.33043C44.0073 10.3244 43.9767 10.9207 44.2672 11.3183C44.9859 10.2479 46.2551 8.56587 48.1665 7.25082C46.6985 7.40373 45.4599 8.01538 44.6189 9.33043ZM96.7162 32.8331C95.3094 36.2889 94.1167 39.7906 93.4286 45.0355C93.4286 45.0355 93.2757 46.06 92.4347 45.7236C91.5936 45.4178 90.2174 44.0416 89.9116 42.0996C89.6058 39.5612 90.7373 35.2797 93.0463 30.3559C92.3735 29.2855 91.8995 27.6952 92.2817 25.4627C92.2817 25.4627 92.8934 21.3341 97.022 17.603C97.022 17.603 97.5114 17.1901 97.7866 17.3278C98.123 17.4807 97.9854 18.7957 97.7101 19.4685C97.4655 20.1108 95.6305 23.2913 95.6305 23.2913C95.6305 23.2913 94.4837 25.4627 94.8048 27.16C96.9762 23.8265 101.915 17.0678 104.973 19.2086C106.915 20.5848 106.915 25.0193 105.463 27.5882C104.316 29.6219 101.074 33.827 96.7468 32.8484M103.108 22.4503C101.976 23.6736 99.9579 25.9979 98.3677 29.1479C100.05 28.9644 101.686 28.0316 102.19 27.5576C103.001 26.8389 104.866 24.8969 104.576 22.328C104.576 22.328 104.392 20.9824 103.108 22.4503ZM34.6031 34.6375C29.19 36.2889 24.0828 35.5244 21.2998 34.7904C21.2233 35.9219 21.101 36.396 20.9175 36.5794C20.7034 36.8241 18.9296 37.8333 17.951 36.396C17.5228 35.7078 17.3087 34.4693 17.1864 33.3377C10.917 30.4935 8.01165 26.3037 7.91991 26.1508C7.76699 25.9979 6.34491 24.5146 7.76699 22.6797C9.09733 21.0282 13.5012 19.3615 17.4464 18.704C17.5993 15.3399 17.9663 12.7404 18.4403 11.5935C19.0061 10.2173 19.7248 11.4406 20.367 12.3581C20.8869 13.0462 21.208 15.9974 21.2386 18.3523C23.8075 18.2299 25.3672 18.4134 28.2267 18.9639C31.9883 19.6062 34.4961 21.5329 34.2973 23.7042C34.1138 25.845 32.1565 26.7319 31.392 26.793C30.6274 26.8542 29.4041 26.2884 29.4041 26.2884C28.5478 25.8909 29.3277 25.5239 30.3216 25.0957C31.4226 24.5605 31.1779 24.0253 31.1779 24.0253C30.7803 22.802 25.9024 21.9916 21.0551 21.9916C21.0551 24.6676 21.1621 29.102 21.2386 31.6862C24.6332 32.3285 27.1716 32.1909 27.1716 32.1909C27.1716 32.1909 39.5575 31.8392 39.9092 23.9336C40.2915 16.0127 27.5233 8.42825 18.1192 6.04281C8.73034 3.58092 3.40899 5.32412 2.95025 5.55349C2.44564 5.79815 2.90438 5.8899 2.90438 5.8899C2.90438 5.8899 3.40899 5.96636 4.32646 6.27218C5.24394 6.57801 4.50996 7.03674 4.50996 7.03674C2.90438 7.58723 1.1153 7.26611 0.763601 6.53213C0.411903 5.81344 0.99297 5.15592 1.68108 4.19257C2.32331 3.19864 3.05729 3.22922 3.05729 3.22922C14.6786 -0.822962 28.8689 6.44038 28.8689 6.44038C42.1417 13.138 44.4048 21.0129 44.1602 24.0712C43.9461 27.0836 42.784 32.1756 34.6031 34.6528M9.06675 23.7042C7.7517 24.3159 8.66918 25.2945 8.66918 25.2945C11.1464 27.9399 14.174 29.6066 17.0794 30.6464C17.4158 26.0591 17.3852 24.4229 17.3852 22.1139C12.8896 22.4197 10.2901 23.1537 9.06675 23.7042Z"
                  fill="currentColor" />
              </g>
            </svg>
          </a>
          <a href="#" class="flex items-center md:justify-center">
            <svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 210 33" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M198.522 14.8868V19.2429H201.583V23.5649C201.593 23.9511 201.572 24.3676 201.505 24.7009C201.384 25.507 200.618 26.8797 198.445 26.8797C196.285 26.8797 195.533 25.507 195.402 24.7009C195.347 24.3676 195.324 23.9511 195.324 23.5649V9.91396C195.324 9.4311 195.356 8.9026 195.459 8.50258C195.607 7.77503 196.252 6.34025 198.429 6.34025C200.713 6.34025 201.283 7.85289 201.414 8.50258C201.5 8.9329 201.505 9.6547 201.505 9.6547V11.3123H209.027V10.3324C209.027 10.3324 209.061 9.30991 208.97 8.35569C208.405 2.75274 203.788 0.980072 198.495 0.980072C193.192 0.980072 188.669 2.76923 188.01 8.35569C187.951 8.86655 187.86 9.78548 187.86 10.3324V22.8898C187.86 23.4368 187.877 23.8602 187.979 24.8596C188.469 30.3084 193.192 32.2399 198.474 32.2399C203.788 32.2399 208.478 30.3084 208.977 24.8596C209.066 23.8602 209.075 23.4368 209.087 22.8898H198.522ZM146.655 1.78356H139.101V23.8797C139.113 24.2648 139.101 24.6974 139.035 25.0146C138.877 25.7563 138.249 27.1838 136.165 27.1838C134.108 27.1838 133.462 25.7563 133.317 25.0146C133.241 24.6974 133.232 24.2648 133.241 23.8797V1.78356H125.689V23.194C125.68 23.7459 125.723 24.8735 125.756 25.1688C126.277 30.7479 130.674 32.5593 136.165 32.5593C141.666 32.5593 146.061 30.7479 146.591 25.1688C146.633 24.8735 146.688 23.7459 146.655 23.194V1.78356ZM77.2484 1.78356L73.4803 25.1312L69.7144 1.78356H57.5294L56.8831 31.6519H64.3481L64.5502 4.00188L69.6864 31.6519H77.2603L82.4011 4.00188L82.604 31.6519H90.0878L89.4197 1.78356H77.2484ZM32.1337 1.78356L26.6009 31.6519H34.6692L38.8385 4.00188L42.9078 31.6519H50.92L45.4103 1.78356H32.1337ZM173.055 25.8311L166.021 1.78356H154.937V31.3405H162.27L161.844 6.52358L169.398 31.3405H180.028V1.78356H172.648L173.055 25.8311ZM105.233 9.5569C105.1 8.96703 105.139 8.34035 105.207 8.01282C105.421 7.05668 106.063 6.01387 107.914 6.01387C109.639 6.01387 110.651 7.08928 110.651 8.70317V10.5295H118.014V8.44774C118.014 2.01214 112.245 1.00117 108.067 1.00117C102.806 1.00117 98.5093 2.73548 97.7246 7.5779C97.5171 8.8957 97.4657 10.0655 97.7959 11.5581C99.0754 17.596 109.587 19.3476 111.112 23.166C111.382 23.8893 111.305 24.8117 111.167 25.3552C110.939 26.3489 110.27 27.3484 108.288 27.3484C106.43 27.3484 105.311 26.2798 105.311 24.6694L105.309 21.8029H97.3829V24.0815C97.3829 30.6839 102.554 32.6759 108.124 32.6759C113.459 32.6759 117.865 30.853 118.572 25.9117C118.909 23.3585 118.654 21.6955 118.519 21.0692C117.284 14.8764 106.081 13.0136 105.233 9.5569ZM8.09575 9.48364C7.95116 8.88151 7.98491 8.246 8.06545 7.91463C8.26948 6.9631 8.91572 5.90188 10.7992 5.90188C12.5462 5.90188 13.5748 6.98765 13.5748 8.61457V10.4632H21.0248V8.3649C21.0248 1.86756 15.1668 0.832031 10.9438 0.832031C5.63849 0.832031 1.30348 2.59319 0.510349 7.47051C0.293273 8.8094 0.256059 9.98722 0.569784 11.4964C1.86304 17.6029 12.4783 19.3687 14.0228 23.2327C14.312 23.9511 14.2245 24.8735 14.0811 25.438C13.836 26.4421 13.1621 27.4557 11.164 27.4557C9.29811 27.4557 8.18204 26.3688 8.18204 24.7361L8.17169 21.862H0.156738V24.1459C0.156738 30.8239 5.40147 32.832 11.0148 32.832C16.4114 32.832 20.843 30.993 21.566 25.9945C21.9254 23.418 21.6557 21.7412 21.5346 21.1053C20.2739 14.8365 8.94603 12.9799 8.09575 9.48364Z"
                fill="currentColor" />
            </svg>
          </a>
        </div>
      </section> --}}


    
      <x-section>
        <!-- Section Title -->
        <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
              <!-- Heading & Filters -->
              <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                  <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                      <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white">
                          <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                          </svg>
                          Home
                        </a>
                      </li>
                    </ol>
                  </nav>
                  <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Electronics</h2>
                  
                  <form action="{{ route('buyer.dashboard') }}" method="GET" class="flex items-center mt-4 w-full">
                      <label for="search" class="sr-only">Search</label>
                      <div class="relative flex-1 w-full">
                          <input type="text" id="search" name="search" value="{{ request('search') }}"
                              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-3 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                              placeholder="Search products..." />
                      </div>
                      <button type="submit" class="ml-2 flex-shrink-0 inline-flex items-center rounded-lg border border-primary-700 bg-primary-700 p-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                          <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                          </svg>
                          <span class="sr-only">Search</span>
                      </button>
                  </form>
                  {{-- @if(isset($recommendedCategory) && $recommendedCategory)
                    <form action="{{ route('buyer.reset_recommendations') }}" method="POST" class="mt-2">
                        @csrf
                        <button type="submit"
                            class="inline-flex items-center rounded-lg border border-red-600 bg-red-600 px-3 py-2 text-sm font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400">
                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582M20 20v-5h-.581M5.635 19A9 9 0 1 1 19 5.635" />
                            </svg>
                            Reset Recommendations
                        </button>
                    </form>
                  @endif --}}
                </div>
                {{-- fILTTERS   --}}
                <div class="flex items-center space-x-4">
                  <button data-modal-toggle="filterModal" data-modal-target="filterModal" type="button" class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                    <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                    </svg>
                    Filters
                    <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                  </button>
                  <button id="sortDropdownButton1" data-dropdown-toggle="dropdownSort1" type="button" class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                    <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M7 4l3 3M7 4 4 7m9-3h6l-6 6h6m-6.5 10 3.5-7 3.5 7M14 18h4" />
                    </svg>
                    Sort
                    <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                  </button>
                  <div id="dropdownSort1" class="z-50 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700" data-popper-placement="bottom">
                    <ul class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="sortDropdownButton">
                      <li>
                        <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> The most popular </a>
                      </li>
                      <li>
                        <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Newest </a>
                      </li>
                      <li>
                        <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Increasing price </a>
                      </li>
                      <li>
                        <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Decreasing price </a>
                      </li>
                      <li>
                        <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> No. reviews </a>
                      </li>
                      <li>
                        <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Discount % </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- End Heading & Filters -->
                <!-- Products Grid -->
              @if(isset($recommendedCategory) && $recommendedCategory)
                <div class="mb-2">
                  <h3 class="text-lg font-bold text-primary-700 dark:text-primary-400">
                    Recommended for you: {{ $recommendedCategoryName ?? $recommendedCategory }}
                  </h3>
                </div>
              @endif
              <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                {{-- Products are already ordered: recommended category first --}}
                @foreach ($products as $product)
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="w-full aspect-w-1 aspect-h-1 flex items-center justify-center overflow-hidden bg-gray-100 dark:bg-gray-700" style="aspect-ratio: 1/1;">
                      <a href="{{ route('products.show', $product->id) }}">
                        <img class="mx-auto object-contain h-full w-full max-h-56" src="{{ asset($product->image) }}" alt="" />
                      </a>
                  </div>
          
                  <div class="pt-6">
                    
          
                    <a href="{{ route('products.show', $product->id) }}" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white"> {{ $product->name }}</a>
                    <p>{{$product->category->name}}</p>
                    <div class="mt-2 flex items-center gap-2">
                      <div class="flex items-center">
                          @for ($i = 1; $i <= 5; $i++)
                          <i class="fa-solid fa-star {{ $i < number_format($product->reviews->avg('rating'), 1) ? 'text-yellow-300' : 'text-gray-300 dark:text-gray-500' }}"></i>
                          @endfor
                      </div>
          
                        <p class="text-sm font-medium text-gray-900 dark:text-white">
                        {{ number_format($product->reviews->avg('rating'), 1) }}
                        </p>
                      <p class="text-sm font-medium text-gray-500 dark:text-gray-400">({{ $product->reviews->count() }})</p>
                    </div>
          
                    {{-- <ul class="mt-2 flex items-center gap-4">
                      <li class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Shipping Today</p>
                      </li>
          
                      <li class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price</p>
                      </li>
                    </ul> --}}
          
                    <div class="mt-4 flex items-center justify-between gap-4">
                      <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">RM{{ $product->price }}</p>
                      <form action="{{ route('cart.add') }}" method="POST" class="flex items-center">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1" min="1">
                      
                        <button type="submit"
                          class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-accent dark:text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                          <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                          </svg>
                          Add
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="w-full text-center">
                <button type="button" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                    Show more
                </button>
              </div>
            </div>

            {{-- <!-- Filter modal -->
            <form action="#" method="get" id="filterModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-modal w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
              <div class="relative h-full w-full max-w-xl md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between rounded-t p-4 md:p-5">
                    <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Filters</h3>
                    <button type="button" class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="filterModal">
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>
                  <!-- Modal body -->
                  <div class="px-4 md:px-5">
                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                      <ul class="-mb-px flex flex-wrap text-center text-sm font-medium" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-1" role="presentation">
                          <button class="inline-block pb-2 pr-1" id="brand-tab" data-tabs-target="#brand" type="button" role="tab" aria-controls="profile" aria-selected="false">Brand</button>
                        </li>
                        <li class="mr-1" role="presentation">
                          <button class="inline-block px-2 pb-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300" id="advanced-filers-tab" data-tabs-target="#advanced-filters" type="button" role="tab" aria-controls="advanced-filters" aria-selected="false">Advanced Filters</button>
                        </li>
                      </ul>
                    </div>
                    <div id="myTabContent">
                      <div class="grid grid-cols-2 gap-4 md:grid-cols-3" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                        <div class="space-y-2">
                          <h5 class="text-lg font-medium uppercase text-black dark:text-white">A</h5>
          
                          <div class="flex items-center">
                            <input id="apple" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Apple (56) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="asus" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="asus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Asus (97) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="acer" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="acer" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Acer (234) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="allview" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="allview" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Allview (45) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="atari" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="asus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Atari (176) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="amd" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="amd" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> AMD (49) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="aruba" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="aruba" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Aruba (16) </label>
                          </div>
                        </div>
          
                        <div class="space-y-2">
                          <h5 class="text-lg font-medium uppercase text-black dark:text-white">B</h5>
          
                          <div class="flex items-center">
                            <input id="beats" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="beats" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Beats (56) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="bose" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="bose" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Bose (97) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="benq" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="benq" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> BenQ (45) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="bosch" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="bosch" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Bosch (176) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="brother" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="brother" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Brother (176) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="biostar" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="biostar" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Biostar (49) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="braun" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="braun" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Braun (16) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="blaupunkt" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="blaupunkt" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Blaupunkt (45) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="benq2" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="benq2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> BenQ (23) </label>
                          </div>
                        </div>
          
                        <div class="space-y-2">
                          <h5 class="text-lg font-medium uppercase text-black dark:text-white">C</h5>
          
                          <div class="flex items-center">
                            <input id="canon" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="canon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Canon (49) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="cisco" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="cisco" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Cisco (97) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="cowon" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="cowon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Cowon (234) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="clevo" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="clevo" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Clevo (45) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="corsair" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="corsair" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Corsair (15) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="csl" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="csl" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Canon (49) </label>
                          </div>
                        </div>
          
                        <div class="space-y-2">
                          <h5 class="text-lg font-medium uppercase text-black dark:text-white">D</h5>
          
                          <div class="flex items-center">
                            <input id="dell" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="dell" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dell (56) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="dogfish" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="dogfish" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dogfish (24) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="dyson" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="dyson" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dyson (234) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="dobe" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="dobe" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dobe (5) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="digitus" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="digitus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Digitus (1) </label>
                          </div>
                        </div>
          
                        <div class="space-y-2">
                          <h5 class="text-lg font-medium uppercase text-black dark:text-white">E</h5>
          
                          <div class="flex items-center">
                            <input id="emetec" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="emetec" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Emetec (56) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="extreme" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="extreme" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Extreme (10) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="elgato" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="elgato" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Elgato (234) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="emerson" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="emerson" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Emerson (45) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="emi" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="emi" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> EMI (176) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="fugoo" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="fugoo" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Fugoo (49) </label>
                          </div>
                        </div>
          
                        <div class="space-y-2">
                          <h5 class="text-lg font-medium uppercase text-black dark:text-white">F</h5>
          
                          <div class="flex items-center">
                            <input id="fujitsu" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="fujitsu" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Fujitsu (97) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="fitbit" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Fitbit (56) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="foxconn" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="foxconn" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Foxconn (234) </label>
                          </div>
          
                          <div class="flex items-center">
                            <input id="floston" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                            <label for="floston" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Floston (45) </label>
                          </div>
                        </div>
                      </div>
                    </div>
          
                    <div class="space-y-4" id="advanced-filters" role="tabpanel" aria-labelledby="advanced-filters-tab">
                      <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                        <div class="grid grid-cols-2 gap-3">
                          <div>
                            <label for="min-price" class="block text-sm font-medium text-gray-900 dark:text-white"> Min Price </label>
                            <input id="min-price" type="range" min="0" max="7000" value="300" step="1" class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                          </div>
          
                          <div>
                            <label for="max-price" class="block text-sm font-medium text-gray-900 dark:text-white"> Max Price </label>
                            <input id="max-price" type="range" min="0" max="7000" value="3500" step="1" class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                          </div>
          
                          <div class="col-span-2 flex items-center justify-between space-x-2">
                            <input type="number" id="min-price-input" value="300" min="0" max="7000" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 " placeholder="" required />
          
                            <div class="shrink-0 text-sm font-medium dark:text-gray-300">to</div>

                            <input type="number" id="max-price-input" value="3500" min="0" max="7000" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary```blade
-500" placeholder="" required />
                          </div>
                        </div>

                        <div class="space-y-3">
                          <div>
                            <label for="min-delivery-time" class="block text-sm font-medium text-gray-900 dark:text-white"> Min Delivery Time (Days) </label>

                            <input id="min-delivery-time" type="range" min="3" max="50" value="30" step="1" class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                          </div>

                          <input type="number" id="min-delivery-time-input" value="30" min="3" max="50" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 " placeholder="" required />
                        </div>
                      </div>

                      <div>
                        <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Condition</h6>

                        <ul class="flex w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                          <li class="w-full border-r border-gray-200 dark:border-gray-600">
                            <div class="flex items-center pl-3">
                              <input id="condition-all" type="radio" value="" name="list-radio" checked class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                              <label for="condition-all" class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300"> All </label>
                            </div>
                          </li>
                          <li class="w-full border-r border-gray-200 dark:border-gray-600">
                            <div class="flex items-center pl-3">
                              <input id="condition-new" type="radio" value="" name="list-radio" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                              <label for="condition-new" class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300"> New </label>
                            </div>
                          </li>
                          <li class="w-full">
                            <div class="flex items-center pl-3">
                              <input id="condition-used" type="radio" value="" name="list-radio" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                              <label for="condition-used" class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300"> Used </label>
                            </div>
                          </li>
                        </ul>
                      </div>

                      <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                        <div>
                          <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Colour</h6>
                          <div class="space-y-2">
                            <div class="flex items-center">
                              <input id="orange" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                              <label for="orange" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-primary-600"></div>
                                Blue
                              </label>
                            </div>

                            <div class="flex items-center">
                              <input id="gray" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                              <label for="gray" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-gray-400"></div>
                                Gray
                              </label>
                            </div>

                            <div class="flex items-center">
                              <input id="green" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                              <label for="green" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-green-400"></div>
                                Green
                              </label>
                            </div>

                            <div class="flex items-center">
                              <input id="orange" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                              <label for="orange" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-orange-400"></div>
                                Pink
                              </label>
                            </div>

                            <div class="flex items-center">
                              <input id="red" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                              <label for="red" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-red-500"></div>
                                Red
                              </label>
                            </div>
                          </div>
                        </div>

                        <div>
                          <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Rating</h6>
                          <div class="space-y-2">
                            <div class="flex items-center">
                              <input id="five-stars" type="radio" value="" name="rating" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                              <label for="five-stars" class="ml-2 flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>First star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Second star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Third star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Fourth star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Fifth star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                              </label>
                            </div>
          
                            <div class="flex items-center">
                              <input id="four-stars" type="radio" value="" name="rating" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                              <label for="four-stars" class="ml-2 flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>First star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Second star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Third star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Fourth star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                              </label>
                            </div>
          
                            <div class="flex items-center">
                              <input id="two-stars" type="radio" value="" name="rating" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                              <label for="two-stars" class="ml-2 flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>First star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <title>Second star</title>
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                              </label>
                            </div>
                          </div>
                        </div>
          
                        <div>
                          <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Weight</h6>
          
                          <div class="space-y-2">
                            <div class="flex items-center">
                              <input id="under-1-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                              <label for="under-1-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Under 1 kg </label>
                            </div>
          
                            <div class="flex items-center">
                              <input id="1-1-5-kg" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                              <label for="1-1-5-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 1-1,5 kg </label>
                            </div>
          
                            <div class="flex items-center">
                              <input id="1-5-2-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                              <label for="1-5-2-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 1,5-2 kg </label>
                            </div>
          
                            <div class="flex items-center">
                              <input id="2-5-3-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                              <label for="2-5-3-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 2,5-3 kg </label>
                            </div>
          
                            <div class="flex items-center">
                              <input id="over-3-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
          
                              <label for="over-3-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Over 3 kg </label>
                            </div>
                          </div>
                        </div>
                      </div>
          
                      <div>
                        <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Delivery type</h6>
          
                        <ul class="grid grid-cols-2 gap-4">
                          <li>
                            <input type="radio" id="delivery-usa" name="delivery" value="delivery-usa" class="peer hidden" checked />
                            <label for="delivery-usa" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                              <div class="block">
                                <div class="w-full text-lg font-semibold">USA</div>
                                <div class="w-full">Delivery only for USA</div>
                              </div>
                            </label>
                          </li>
                          <li>
                            <input type="radio" id="delivery-europe" name="delivery" value="delivery-europe" class="peer hidden" />
                            <label for="delivery-europe" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                              <div class="block">
                                <div class="w-full text-lg font-semibold">Europe</div>
                                <div class="w-full">Delivery only for USA</div>
                              </div>
                            </label>
                          </li>
                          <li>
                            <input type="radio" id="delivery-asia" name="delivery" value="delivery-asia" class="peer hidden" checked />
                            <label for="delivery-asia" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                              <div class="block">
                                <div class="w-full text-lg font-semibold">Asia</div>
                                <div class="w-full">Delivery only for Asia</div>
                              </div>
                            </label>
                          </li>
                          <li>
                            <input type="radio" id="delivery-australia" name="delivery" value="delivery-australia" class="peer hidden" />
                            <label for="delivery-australia" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                              <div class="block">
                                <div class="w-full text-lg font-semibold">Australia</div>
                                <div class="w-full">Delivery only for Australia</div>
                              </div>
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>
          
                  <!-- Modal footer -->
                  <div class="flex items-center space-x-4 rounded-b p-4 dark:border-gray-600 md:p-5">
                    <button type="submit" class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 dark:focus:ring-primary-800">Show 50 results</button>
                    <button type="reset" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Reset</button>
                  </div>
                </div>
              </div>
            </form> --}}
          </section>

    </x-section>
</x-layouts.customer-layout>