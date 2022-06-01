@props([
'itemName' => null,
'description' => null
])

<div x-data='{ Open: false }'  x-on:show-addon.window="Open = true" >
    <div x-show='Open'
        @keydown.esc.window="Open = false" 
        x-trap.noscroll="Open";
        x-transition.enter.duration.300ms x-transition.out.opacity.0.duration.300ms
        class="fixed z-10 inset-0 transition overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!--
          Background overlay, show/hide based on modal state.
    
          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

            <!--
          Modal panel, show/hide based on modal state.
    
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
            <div
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                <div>
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                        <!-- Heroicon name: outline/check -->
                        <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" version="1.0" width="1280.000000pt" height="1280.000000pt"
                            viewBox="0 0 1280.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#673ab7" stroke="none">
                                <path
                                    d="M6095 12794 c-952 -56 -1765 -271 -2575 -679 -1764 -890 -3018 -2541 -3399 -4475 -85 -430 -115 -757 -115 -1240 0 -402 11 -570 60 -910 223 -1562 1012 -2977 2228 -3997 950 -797 2117 -1302 3346 -1447 281 -33 416 -41 760 -41 359 0 485 7 795 46 2119 261 3975 1576 4933 3494 306 613 508 1261 606 1945 49 339 60 508 60 905 0 398 -12 583 -60 915 -401 2808 -2618 5025 -5424 5425 -298 42 -488 56 -830 59 -179 2 -352 2 -385 0z m723 -711 c322 -339 466 -501 659 -739 427 -530 802 -1108 1075 -1664 82 -166 208 -443 203 -448 -9 -9 -259 -81 -445 -127 -293 -74 -513 -117 -840 -165 -150 -22 -358 -42 -677 -65 l-83 -5 0 1650 c0 1304 3 1650 12 1650 7 0 50 -39 96 -87z m-728 -1583 l0 -1631 -72 6 c-40 3 -138 10 -218 15 -300 22 -624 67 -945 131 -264 53 -745 179 -745 195 0 3 34 82 76 177 356 802 850 1568 1473 2284 145 166 412 453 423 453 4 0 8 -734 8 -1630z m-956 1528 c-5 -7 -42 -53 -84 -103 -594 -702 -1114 -1533 -1455 -2326 -40 -94 -76 -173 -79 -176 -14 -14 -585 249 -828 382 -279 153 -638 375 -638 395 0 20 496 508 625 614 640 530 1305 890 2069 1121 69 20 378 103 394 105 2 0 0 -6 -4 -12z m2726 -39 c907 -241 1699 -668 2394 -1288 133 -120 468 -458 487 -492 8 -16 -5 -28 -105 -93 -246 -160 -559 -336 -831 -467 -183 -88 -432 -199 -449 -199 -6 0 -40 66 -76 148 -329 752 -800 1509 -1374 2206 -72 87 -141 172 -154 187 -13 16 -20 29 -15 29 4 0 60 -14 123 -31z m-5793 -2548 c333 -200 660 -366 1024 -521 107 -46 198 -86 202 -90 4 -4 -3 -42 -17 -86 -103 -332 -201 -741 -255 -1074 -43 -260 -91 -705 -91 -838 0 -33 -3 -74 -6 -91 l-7 -31 -1141 2 -1141 3 3 60 c23 482 138 1045 319 1560 154 437 422 967 659 1302 l44 62 130 -84 c71 -47 196 -125 277 -174z m9156 136 c329 -501 570 -1027 737 -1609 93 -326 173 -772 195 -1088 3 -47 8 -104 11 -127 l5 -43 -1104 0 -1104 0 -7 128 c-33 588 -150 1239 -327 1817 -28 94 -52 178 -53 188 -1 14 40 35 183 97 389 169 799 387 1162 618 96 61 183 117 194 125 11 9 23 13 27 11 5 -3 41 -55 81 -117z m-2222 -1002 c164 -517 265 -1015 313 -1540 8 -88 16 -196 18 -240 l3 -80 -1312 -3 -1313 -2 0 768 0 768 198 12 c635 38 1347 165 1917 341 72 22 136 39 144 38 7 -1 22 -29 32 -62z m-4949 1 c591 -172 1225 -281 1841 -318 l197 -12 0 -768 0 -768 -1270 0 -1270 0 0 44 c0 73 29 400 51 566 41 313 109 656 190 956 47 176 98 344 104 344 2 0 73 -20 157 -44z m-1128 -2508 c3 -13 6 -50 6 -83 0 -84 26 -369 50 -560 62 -480 180 -1003 330 -1458 27 -83 46 -155 42 -158 -4 -4 -63 -30 -132 -57 -411 -164 -877 -403 -1303 -670 -93 -57 -172 -101 -176 -96 -22 24 -157 222 -219 321 -400 633 -668 1317 -801 2043 -33 176 -66 430 -76 570 -3 47 -8 104 -11 128 l-5 42 1144 0 1145 0 6 -22z m3166 -837 l0 -859 -97 -6 c-602 -39 -995 -94 -1506 -211 -141 -33 -514 -132 -528 -141 -7 -4 -84 228 -138 416 -141 494 -235 1037 -267 1553 l-7 107 1272 0 1271 0 0 -859z m3245 787 c-22 -289 -29 -365 -51 -538 -44 -338 -115 -687 -205 -1010 -52 -182 -148 -480 -155 -480 -2 0 -55 15 -117 34 -354 107 -792 204 -1177 260 -280 41 -455 58 -822 82 l-98 6 0 859 0 859 1315 0 1316 0 -6 -72z m2831 35 c-3 -21 -8 -78 -11 -128 -54 -790 -324 -1664 -737 -2385 -103 -178 -313 -503 -359 -554 -4 -5 -83 38 -176 96 -411 257 -916 518 -1275 659 -49 19 -88 39 -88 46 0 7 9 35 20 64 35 89 150 477 196 664 116 469 188 930 216 1383 l12 192 1104 0 1104 0 -6 -37z m-6076 -3845 l-1 -1533 -111 115 c-701 727 -1313 1605 -1708 2449 -44 96 -79 179 -77 185 9 21 450 132 757 190 360 68 788 118 1058 124 l82 2 0 -1532z m1055 1506 c481 -47 1005 -146 1420 -270 50 -14 98 -29 108 -31 9 -3 17 -10 17 -17 0 -23 -273 -559 -378 -741 -318 -554 -681 -1055 -1140 -1573 -206 -233 -421 -452 -443 -452 -19 0 -19 38 -19 1556 l0 1557 143 -7 c78 -4 210 -14 292 -22z m-3390 -839 c336 -693 751 -1331 1275 -1960 71 -85 127 -155 124 -155 -16 0 -237 56 -352 89 -958 278 -1800 779 -2516 1500 l-139 139 84 55 c327 212 860 485 1269 650 l85 34 24 -51 c14 -28 79 -163 146 -301z m5712 248 c315 -134 828 -403 1102 -580 l84 -55 -144 -145 c-636 -640 -1384 -1112 -2223 -1402 -197 -68 -536 -166 -536 -154 0 2 53 68 118 146 537 643 997 1359 1322 2056 52 111 100 201 106 201 7 0 84 -30 171 -67z" />
                                <circle cx="12" cy="7" r="4"></circle>
                            </g>
                        </svg>

                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            {{ $itemName }}
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                {{ $description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-6">
                    <button @click="Open = false" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>