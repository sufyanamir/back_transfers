@include('dashboard.layouts.header')

  <section>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        country
                    </th>
                    <th scope="col" class="px-6 py-3">
                        City
                    </th>
                    <th scope="col" class="px-6 py-3">
                        creation date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Google Pixel Phone
                    </th>
                    <td class="px-6 py-4">
                        Gray
                    </td>
                    <td class="px-6 py-4">
                        Phone
                    </td>
                    <td class="px-6 py-4">
                        $799
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple Watch 5
                    </th>
                    <td class="px-6 py-4">
                        Red
                    </td>
                    <td class="px-6 py-4">
                        Wearables
                    </td>
                    <td class="px-6 py-4">
                        $999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="float-end p-5">
        <button class="px-5 rounded-xl bg-black text-white py-2">Print</button>
    </div>
    {{--  --}}
    <div class="w-full px-10 flex flex-wrap bg-slate-100 py-5 justify-between font-montserrat mt-10">
        <div>
            <svg width="336" height="29" viewBox="0 0 336 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0H45C53.2843 0 60 6.71573 60 15V24H15C6.71573 24 0 17.2843 0 9V0Z" fill="white"/>
                <g filter="url(#filter0_d_265_22)">
                <path d="M10.8006 12.5709C9.98232 12.5714 9.18254 12.8144 8.50239 13.2694C7.82224 13.7244 7.29228 14.3709 6.97954 15.1271C6.66679 15.8833 6.5853 16.7152 6.74538 17.5177C6.90546 18.3202 7.29991 19.0572 7.87885 19.6355C8.45779 20.2138 9.19522 20.6075 9.99788 20.7667C10.8005 20.9259 11.6324 20.8435 12.3883 20.5299C13.1441 20.2164 13.79 19.6857 14.2442 19.0051C14.6985 18.3245 14.9407 17.5244 14.9403 16.7061C14.9415 16.1623 14.8352 15.6237 14.6275 15.1212C14.4198 14.6187 14.1149 14.1621 13.7302 13.7779C13.3455 13.3936 12.8886 13.0891 12.3859 12.882C11.8831 12.6749 11.3444 12.5691 10.8006 12.5709ZM10.8006 19.9512C10.1583 19.9521 9.5301 19.7624 8.99554 19.4062C8.46098 19.05 8.04407 18.5433 7.79753 17.9502C7.551 17.357 7.48592 16.7041 7.61053 16.0739C7.73514 15.4438 8.04384 14.8647 8.49758 14.41C8.95132 13.9554 9.52973 13.6455 10.1596 13.5195C10.7895 13.3936 11.4426 13.4574 12.0363 13.7027C12.6299 13.948 13.1375 14.3638 13.4948 14.8977C13.8521 15.4315 14.043 16.0593 14.0435 16.7016C14.0455 17.1276 13.9634 17.5498 13.8018 17.944C13.6402 18.3381 13.4023 18.6965 13.1018 18.9985C12.8013 19.3004 12.4441 19.54 12.0508 19.7035C11.6574 19.867 11.2356 19.9512 10.8096 19.9512H10.8006Z" fill="#588A87"/>
                <path d="M48.6368 12.5711C47.8184 12.5711 47.0184 12.8138 46.3379 13.2685C45.6575 13.7232 45.1272 14.3695 44.8141 15.1257C44.501 15.8818 44.4192 16.7138 44.579 17.5165C44.7389 18.3191 45.1331 19.0563 45.712 19.6349C46.2908 20.2134 47.0282 20.6073 47.831 20.7667C48.6337 20.9261 49.4657 20.8438 50.2216 20.5303C50.9776 20.2168 51.6236 19.6862 52.078 19.0055C52.5324 18.3248 52.7746 17.5246 52.7742 16.7062C52.7751 16.1628 52.6686 15.6245 52.461 15.1222C52.2534 14.62 51.9486 14.1637 51.5642 13.7795C51.1798 13.3953 50.7233 13.0908 50.221 12.8834C49.7186 12.676 49.1803 12.5699 48.6368 12.5711ZM48.6368 19.9513C47.9943 19.9526 47.3659 19.7634 46.8311 19.4075C46.2962 19.0516 45.879 18.545 45.6321 17.9519C45.3852 17.3588 45.3198 16.7057 45.4442 16.0754C45.5685 15.4451 45.8771 14.8659 46.3307 14.411C46.7844 13.9561 47.3627 13.646 47.9927 13.5199C48.6226 13.3938 49.2758 13.4574 49.8696 13.7026C50.4634 13.9478 50.9712 14.3637 51.3285 14.8976C51.6859 15.4314 51.8769 16.0593 51.8774 16.7018C51.8791 17.1275 51.7969 17.5494 51.6353 17.9433C51.4738 18.3372 51.2361 18.6953 50.9359 18.9972C50.6357 19.299 50.2788 19.5387 49.8859 19.7024C49.4929 19.8662 49.0714 19.9507 48.6457 19.9513H48.6368Z" fill="#588A87"/>
                <path d="M54.0064 10.594C51.5776 7.34444 44.1661 7.46297 42.6878 7.35115C38.5213 7.00897 35.4171 2.79999 26.6525 2.79999C17.8879 2.79999 14.5757 5.2243 13.3546 5.74986C12.4019 6.15913 7.98716 6.64443 6.10855 6.83229C6.07849 6.83634 6.05093 6.85115 6.03097 6.87397C6.01101 6.8968 6 6.92609 6 6.95642C6 6.98674 6.01101 7.01603 6.03097 7.03886C6.05093 7.06169 6.07849 7.0765 6.10855 7.08054L8.02518 7.46521C17.9639 9.68823 35.9114 9.03072 43.7098 9.03072C51.5083 9.03072 53.8163 11.0435 53.8163 11.0435L54.4 11.2314C54.2799 11.0122 54.1486 10.7995 54.0064 10.594ZM15.1706 7.46297C18.2323 3.10862 25.5857 3.377 25.5857 3.377L26.1023 7.52112L15.1706 7.46297ZM27.234 7.4831L26.7263 3.377C26.7263 3.377 34.5695 3.42396 38.4497 7.80515L27.234 7.4831Z" fill="#588A87"/>
                <path d="M6.48885 8.19207C7.0994 8.39335 7.70995 8.5991 8.32498 8.79591C11.5668 9.84242 14.8802 10.6526 18.2391 11.2202C21.1416 11.7232 24.0804 11.9873 27.0261 12.0097C28.643 12.0097 30.2577 11.9157 31.8725 11.8285C33.2143 11.7547 34.5361 11.634 35.8667 11.5221C37.1974 11.4103 38.5505 11.2716 39.8923 11.1598C42.6858 10.8971 45.4914 10.7852 48.2969 10.8244C49.6607 10.8439 51.0154 11.0517 52.3225 11.4416C52.874 11.6091 53.4005 11.8498 53.888 12.1573C53.7538 12.0387 53.6263 11.9113 53.4832 11.8062C52.7011 11.2705 51.8292 10.8796 50.909 10.6522C49.5371 10.2833 48.1285 10.068 46.709 10.0103C44.5207 9.89014 42.3277 9.88043 40.1383 9.98122C39.0201 10.026 37.9019 10.1042 36.7837 10.1736C35.3524 10.2585 33.921 10.3569 32.4897 10.4397C31.0584 10.5224 29.5823 10.6343 28.1331 10.6633C26.5162 10.6879 24.897 10.6633 23.2845 10.5895C21.8733 10.5247 20.4666 10.3905 19.0621 10.2317C17.4452 10.0483 15.826 9.84927 14.2202 9.57866C11.6617 9.13137 9.1122 8.64383 6.55818 8.17194C6.53737 8.16971 6.51637 8.16971 6.49556 8.17194L6.48885 8.19207Z" fill="#588A87"/>
                <path d="M6.60956 8.46279C9.61981 9.67941 15.9668 11.2248 15.9825 11.2293C14.4796 11.1152 14.001 11.0817 13.0192 10.9273C12.0145 10.7804 11.027 10.5331 10.0716 10.1893C8.8657 9.7243 7.70652 9.14621 6.60956 8.46279Z" fill="#588A87"/>
                <path d="M39.3935 18.9359L43.059 17.2138L18.5007 17.5873L39.3935 18.9359Z" fill="#588A87"/>
                <path d="M15.9825 18.2559L17.5614 17.453L38.698 17.7594L36.3565 18.9358L15.9825 18.2559Z" fill="#588A87" stroke="white" stroke-width="0.2" stroke-miterlimit="10"/>
                <path d="M30.9779 16.411L30.2712 14.6398C30.1527 14.3446 30.1527 14.3513 29.8239 14.3423C29.7779 14.3363 29.7313 14.348 29.6935 14.3749C29.6558 14.4019 29.6296 14.4422 29.6204 14.4877C29.4937 14.8276 29.364 15.1653 29.2313 15.5008L28.8399 16.4982L28.1578 15.55L28.2271 15.5276C28.3622 15.495 28.4801 15.4127 28.5572 15.2971C28.6343 15.1814 28.665 15.0409 28.6431 14.9037C28.6467 14.7662 28.5958 14.6329 28.5016 14.5328C28.4073 14.4326 28.2773 14.3738 28.1399 14.3692C27.7217 14.3401 27.3012 14.3692 26.8785 14.3692V16.5251H27.3124V15.6305C27.41 15.6056 27.513 15.6125 27.6064 15.6504C27.6997 15.6882 27.7785 15.7549 27.8313 15.8407C27.961 16.0443 28.0974 16.2455 28.2405 16.4401C28.2747 16.4875 28.3261 16.5196 28.3837 16.5296C28.6587 16.5296 28.9316 16.5296 29.2067 16.5296C29.2338 16.5251 29.2595 16.5142 29.2817 16.4979C29.3038 16.4816 29.3218 16.4602 29.3341 16.4356C29.399 16.3104 29.4102 16.1225 29.5086 16.0599C29.607 15.9973 29.7926 16.0353 29.938 16.0353C30.3472 16.0353 30.3472 16.0353 30.4948 16.42C30.4948 16.4379 30.4949 16.4647 30.5172 16.4781C30.5396 16.4915 30.5709 16.5318 30.5977 16.5318C30.7319 16.5318 30.8661 16.5318 31.0137 16.5318C31.0048 16.4669 30.9891 16.4401 30.9779 16.411ZM28.0146 15.2302C27.791 15.2593 27.5673 15.2637 27.3124 15.2772V14.7337C27.5495 14.7337 27.7821 14.7203 28.0146 14.7337C28.1309 14.7337 28.1891 14.8455 28.1913 14.9573C28.1936 15.0692 28.1466 15.2123 28.0146 15.2302ZM29.6271 15.6439L29.9111 14.8634C30.014 15.143 30.1035 15.3845 30.1974 15.6439H29.6271Z" fill="#588A87"/>
                <path d="M17.7782 15.4068C17.7536 15.3934 17.7313 15.3755 17.7045 15.3576C17.9415 15.1339 18.0176 14.9371 17.9281 14.7113C17.8907 14.6058 17.8211 14.5148 17.7292 14.451C17.6374 14.3873 17.5278 14.3539 17.4159 14.3557C17.0335 14.34 16.6488 14.3557 16.253 14.3557V16.4982C16.7003 16.4982 17.1274 16.4982 17.5568 16.4982C17.6815 16.4867 17.7987 16.4334 17.8892 16.3469C17.9798 16.2604 18.0384 16.1459 18.0556 16.0218C18.0884 15.903 18.0787 15.7765 18.028 15.6642C17.9774 15.5519 17.889 15.4608 17.7782 15.4068ZM16.6913 14.7247C16.915 14.7247 17.1386 14.7247 17.3444 14.7247C17.4741 14.7247 17.53 14.8343 17.5278 14.9483C17.5278 15.0076 17.5042 15.0645 17.4623 15.1065C17.4203 15.1484 17.3634 15.172 17.3041 15.172C17.1051 15.1831 16.906 15.172 16.6958 15.172L16.6913 14.7247ZM17.3623 16.1448C17.1386 16.1605 16.915 16.1448 16.6913 16.1448V15.5946C16.915 15.5946 17.152 15.579 17.3779 15.5946C17.5479 15.6103 17.6016 15.7109 17.6016 15.8831C17.604 15.9163 17.5997 15.9495 17.5888 15.9809C17.5779 16.0123 17.5608 16.0411 17.5383 16.0656C17.5159 16.0901 17.4888 16.1098 17.4585 16.1234C17.4282 16.137 17.3955 16.1443 17.3623 16.1448Z" fill="#588A87"/>
                <path d="M40.637 15.55L40.7063 15.5254C40.8413 15.4928 40.9589 15.4104 41.0357 15.2947C41.1124 15.1789 41.1425 15.0385 41.12 14.9015C41.1238 14.7699 41.0766 14.642 40.9882 14.5444C40.8999 14.4469 40.7772 14.3873 40.6459 14.3781C40.221 14.3468 39.7894 14.3781 39.3532 14.3781V16.5229H39.8005V15.6283C39.9002 15.599 40.0069 15.6053 40.1024 15.6461C40.1978 15.687 40.2761 15.7597 40.3239 15.8519C40.4558 16.0487 40.5855 16.2456 40.7197 16.4379C40.7454 16.4812 40.7872 16.5126 40.836 16.5251C40.9859 16.5251 41.1357 16.5251 41.337 16.5251L40.637 15.55ZM40.4871 15.2302C40.2635 15.2615 40.0398 15.2638 39.7983 15.2794V14.7292C40.0219 14.7292 40.2456 14.7292 40.4692 14.7292C40.5945 14.7292 40.6526 14.8411 40.6549 14.9663C40.6571 15.0915 40.6213 15.2123 40.4871 15.2302Z" fill="#588A87"/>
                <path d="M32.9637 14.3601V16.5228C32.8356 16.5295 32.7072 16.5295 32.579 16.5228C32.5365 16.5228 32.4918 16.4579 32.4628 16.4132L31.7605 15.2726C31.7404 15.2391 31.7158 15.2077 31.6666 15.1362V16.5183H31.2663V14.3512C31.3891 14.3422 31.5124 14.3422 31.6353 14.3512C31.6822 14.3512 31.7314 14.4205 31.7627 14.4697C32.0043 14.8589 32.2413 15.2502 32.4784 15.6394C32.4941 15.664 32.5119 15.6863 32.5522 15.7423V14.3579L32.9637 14.3601Z" fill="#588A87"/>
                <path d="M24.7919 16.5228C24.5951 16.5228 24.4251 16.5228 24.2574 16.5228C24.2171 16.5228 24.1747 16.4535 24.1456 16.4065C23.9711 16.1158 23.8012 15.8206 23.6357 15.5366C23.1884 15.7446 23.2488 16.1337 23.2711 16.5228H22.8238V14.3647H23.2532V15.2592L23.2913 15.2727C23.4635 15.0848 23.6401 14.9014 23.8101 14.7113C24.1501 14.3311 24.15 14.3289 24.6532 14.3513C24.6767 14.355 24.6998 14.3602 24.7226 14.3669L23.9219 15.1966L24.7919 16.5228Z" fill="#588A87"/>
                <path d="M38.964 16.147V16.5138H37.3291V14.3579H38.9282V14.7157H37.7786V15.1898H38.832V15.5611H37.7764V16.147H38.964Z" fill="#588A87"/>
                <path d="M35.0817 16.0196C35.0626 16.1462 35.0031 16.2631 34.912 16.353C34.8209 16.4429 34.7031 16.5009 34.5763 16.5183C34.3689 16.5519 34.1575 16.5519 33.9501 16.5183C33.7784 16.4973 33.6207 16.4129 33.5078 16.2819C33.3949 16.1508 33.3349 15.9823 33.3395 15.8094C33.4057 15.8067 33.4716 15.7985 33.5364 15.7848C33.6772 15.7445 33.76 15.7669 33.8159 15.9257C33.8513 15.9915 33.9012 16.0485 33.9618 16.0922C34.0224 16.136 34.0921 16.1654 34.1658 16.1784C34.2394 16.1913 34.315 16.1873 34.3869 16.1668C34.4588 16.1463 34.5251 16.1097 34.5808 16.0599C34.6062 16.0356 34.6255 16.0056 34.6372 15.9725C34.6489 15.9393 34.6526 15.9039 34.648 15.869C34.6435 15.8342 34.6307 15.8009 34.6109 15.7719C34.591 15.7429 34.5646 15.7189 34.5338 15.702C34.4039 15.6508 34.2709 15.6075 34.1357 15.5723C33.9943 15.5335 33.856 15.4842 33.722 15.4247C33.6202 15.378 33.5354 15.3008 33.4794 15.2039C33.4233 15.107 33.3987 14.995 33.4089 14.8835C33.4097 14.7742 33.4443 14.6678 33.508 14.5789C33.5716 14.49 33.6612 14.423 33.7645 14.387C33.9108 14.3259 34.0682 14.2958 34.2268 14.2985C34.3854 14.3012 34.5417 14.3366 34.6859 14.4027C34.7951 14.4494 34.8869 14.529 34.9487 14.6304C35.0104 14.7319 35.0389 14.85 35.0303 14.9685H34.6009C34.5834 14.9081 34.5527 14.8524 34.5112 14.8052C34.4696 14.758 34.4182 14.7206 34.3605 14.6956C34.3028 14.6706 34.2404 14.6587 34.1775 14.6606C34.1147 14.6625 34.0531 14.6783 33.9971 14.7068C33.9322 14.7337 33.8472 14.8164 33.845 14.8768C33.8512 14.9158 33.8668 14.9528 33.8906 14.9844C33.9144 15.016 33.9456 15.0412 33.9814 15.0579C34.205 15.1407 34.4287 15.1944 34.6523 15.2659C34.7305 15.2863 34.8039 15.3222 34.868 15.3714C34.9321 15.4206 34.9858 15.4821 35.0258 15.5523C35.0658 15.6225 35.0914 15.7001 35.101 15.7803C35.1106 15.8606 35.104 15.9419 35.0817 16.0196Z" fill="#588A87"/>
                <path d="M43.1888 15.8855C43.1916 16.0186 43.1516 16.1491 43.0747 16.2578C42.9978 16.3665 42.8881 16.4477 42.7616 16.4893C42.4857 16.5854 42.1854 16.5854 41.9095 16.4893C41.7679 16.4412 41.6456 16.3485 41.561 16.2252C41.4763 16.1018 41.4338 15.9544 41.4399 15.8049L41.8357 15.7647C41.9923 16.1382 42.2271 16.2634 42.5357 16.1426C42.5929 16.1299 42.6442 16.0987 42.6818 16.0538C42.7194 16.0089 42.7412 15.9529 42.7437 15.8944C42.7437 15.758 42.6565 15.6954 42.5469 15.6708C42.3367 15.6037 42.1242 15.5545 41.9162 15.4829C41.8089 15.4519 41.7128 15.3903 41.6398 15.3058C41.5667 15.2212 41.5198 15.1173 41.5047 15.0065C41.4829 14.8748 41.5088 14.7397 41.5776 14.6253C41.6465 14.511 41.7539 14.4249 41.8804 14.3826C42.1586 14.273 42.4678 14.273 42.746 14.3826C42.8627 14.4257 42.9623 14.5054 43.03 14.6098C43.0977 14.7142 43.1299 14.8377 43.1217 14.9618H42.6968C42.6781 14.9007 42.6462 14.8445 42.6033 14.7971C42.5604 14.7498 42.5076 14.7125 42.4487 14.688C42.3897 14.6634 42.326 14.6521 42.2622 14.655C42.1984 14.6579 42.136 14.6748 42.0795 14.7046C42.0169 14.7315 41.9386 14.8075 41.9364 14.8656C41.9399 14.9026 41.9526 14.9381 41.9733 14.969C41.994 14.9998 42.022 15.025 42.0549 15.0423C42.2061 15.102 42.3607 15.1528 42.5178 15.1944C42.5983 15.219 42.6811 15.2391 42.7594 15.266C42.8913 15.3041 43.0059 15.3866 43.0842 15.4994C43.1624 15.6122 43.1993 15.7486 43.1888 15.8855Z" fill="#588A87"/>
                <path d="M20.3547 16.4066L19.6435 14.6174C19.5316 14.3401 19.5316 14.3468 19.2364 14.3356C19.0933 14.3356 19.0374 14.3804 18.9904 14.5101C18.7847 15.0603 18.5677 15.6059 18.353 16.1539C18.3083 16.2702 18.2658 16.3775 18.2166 16.5162C18.3486 16.5162 18.4582 16.5162 18.5677 16.5162C18.5855 16.5197 18.6039 16.5196 18.6216 16.5158C18.6394 16.512 18.6562 16.5047 18.6711 16.4943C18.6859 16.4838 18.6985 16.4704 18.708 16.455C18.7175 16.4395 18.7238 16.4223 18.7265 16.4044C18.769 16.2769 18.7914 16.1002 18.8853 16.0398C18.9792 15.9794 19.1604 16.0152 19.3013 16.0152C19.724 16.0152 19.724 16.0152 19.8783 16.4111C19.8783 16.4245 19.8783 16.4446 19.8939 16.4536C19.9096 16.4625 19.9566 16.5095 19.9879 16.5117C20.1198 16.5117 20.2495 16.5117 20.3927 16.5117C20.377 16.467 20.3681 16.4379 20.3547 16.4066ZM19.0128 15.644C19.1045 15.3868 19.1939 15.143 19.2946 14.8634C19.3997 15.143 19.4869 15.3868 19.5831 15.644H19.0128Z" fill="#000"/>
                <path d="M22.088 15.7401L22.4301 15.8474C22.4036 16.0401 22.3094 16.217 22.1643 16.3465C22.0193 16.476 21.8328 16.5496 21.6384 16.5542C20.9272 16.5899 20.4665 16.0577 20.5538 15.2973C20.6141 14.7628 20.8646 14.4273 21.3007 14.3378C21.8531 14.2238 22.3071 14.4318 22.4346 14.9439L22.0141 15.0468C21.8777 14.7538 21.7346 14.6644 21.4618 14.6912C21.3488 14.7006 21.2433 14.7515 21.1656 14.8341C21.088 14.9167 21.0437 15.0251 21.0413 15.1385C21.0152 15.3573 21.0204 15.5787 21.057 15.796C21.0712 15.9043 21.1245 16.0036 21.2069 16.0753C21.2893 16.147 21.395 16.1861 21.5042 16.1851C21.6106 16.1947 21.7168 16.1659 21.8038 16.104C21.8907 16.042 21.9526 15.951 21.9784 15.8474L22.0186 15.7468C22.0414 15.7421 22.0647 15.7399 22.088 15.7401Z" fill="#000"/>
                <path d="M36.9402 14.7179H35.9048C35.9048 14.8633 35.9048 14.984 35.9048 15.1026C35.9048 15.2211 35.9383 15.2323 36.0322 15.23C36.238 15.23 36.4437 15.23 36.6495 15.23C36.7009 15.23 36.7524 15.23 36.8105 15.23V15.5901H35.9159V16.5048H35.4776V14.3489H36.938L36.9402 14.7179Z" fill="#000"/>
                <path d="M26.5696 14.3603V14.7159H25.9479V16.514H25.5073V14.7271H24.861V14.3603H26.5696Z" fill="#000"/>
                </g>
                <path d="M87.2617 12.6157C86.8329 12.2899 86.3596 12.0206 85.8742 11.705C85.912 11.6193 85.9171 11.585 85.936 11.5695C86.0271 11.502 86.1215 11.439 86.2189 11.3809C87.723 10.5234 88.6543 9.29541 88.5239 7.49291C88.3919 5.65439 87.2531 4.46759 85.6187 3.92907C84.1936 3.43441 82.703 3.15409 81.1956 3.09728C77.3711 3.02696 73.5448 3.16588 69.7169 3.20361C69.2212 3.20361 69 3.3391 69 3.87933C69.0137 9.3057 69.0137 14.7321 69 20.1584C69 20.6901 69.2075 20.8444 69.71 20.8444C71.2536 20.8444 72.7971 20.8873 74.3406 20.8976C76.9955 20.9148 79.6572 20.9937 82.3052 20.8976C84.2107 20.8342 86.0423 20.3454 87.5207 19.0111C89.5152 17.224 89.3918 14.2399 87.2617 12.6157ZM72.9137 6.71943C72.9 6.18948 73.0423 5.96138 73.6306 5.95795C75.9699 5.94766 78.3126 5.81561 80.6502 5.87563C81.645 5.90136 82.662 6.19634 83.607 6.53935C84.305 6.79318 84.7011 7.46204 84.6823 8.25438C84.6819 8.61719 84.5665 8.97053 84.3526 9.2636C84.1387 9.55667 83.8374 9.77436 83.492 9.88538C82.7508 10.1682 81.9739 10.3471 81.1836 10.417C79.9625 10.5045 78.7311 10.4411 77.5032 10.4411C76.2186 10.4411 74.9306 10.4205 73.6495 10.4513C73.0886 10.4668 72.8949 10.2678 72.9137 9.71216C72.9463 8.71744 72.9429 7.71758 72.9137 6.71943ZM84.1678 16.9942C83.4577 17.4933 82.5145 17.8843 81.6621 17.9135C78.9301 18.0009 76.1911 17.9135 73.4574 17.8449C73.2756 17.8449 72.9566 17.4881 72.9429 17.2875C72.8931 16.1212 72.9326 14.9516 72.912 13.7819C72.912 13.2674 73.1573 13.1697 73.598 13.1765C74.9392 13.192 76.2786 13.1765 77.618 13.1765V13.1851C78.8443 13.1851 80.0791 13.0925 81.2917 13.216C82.2219 13.2916 83.1293 13.5437 83.9654 13.9586C85.2277 14.6326 85.3323 16.1778 84.1678 16.9942Z" fill="#000"/>
                <path d="M308.187 14.7938C309.489 14.0855 310.842 13.559 311.943 12.7066C314.547 10.6932 314.54 7.37801 312.008 5.27023C311.339 4.73933 310.603 4.29879 309.818 3.95995C308.287 3.26193 306.649 3.02697 304.971 3.05269C301.541 3.10757 298.111 3.18132 294.681 3.19333C293.94 3.19333 293.707 3.38026 293.712 4.1486C293.745 9.40689 293.729 14.6635 293.729 19.9269C293.708 20.0985 293.716 20.2723 293.752 20.4414C293.8 20.5769 293.947 20.7741 294.054 20.7759C295.266 20.7981 296.48 20.7896 297.772 20.7896V14.7389C298.588 14.7389 299.324 14.7304 300.06 14.7389C301.313 14.7561 302.747 14.4165 303.768 14.9104C304.757 15.3924 305.311 16.7472 306.071 17.7162C306.858 18.7264 307.46 20.1173 308.496 20.6318C309.532 21.1463 311.01 20.7793 312.293 20.7879C312.691 20.7879 313.09 20.7518 313.665 20.7244C312.609 19.577 311.703 18.5909 310.794 17.6082C309.885 16.6255 308.985 15.6565 308.187 14.7938ZM306.028 11.916C303.431 11.9812 300.833 11.916 298.237 11.9006C298.086 11.8845 297.938 11.8534 297.794 11.8079V6.45704C297.953 6.40759 298.117 6.37314 298.283 6.35413C300.536 6.29411 302.793 6.15176 305.044 6.22722C306.177 6.24784 307.293 6.51531 308.312 7.01099C310.242 8.01943 310.199 10.2164 308.297 11.2763C307.601 11.6632 306.824 11.8822 306.028 11.916Z" fill="#000"/>
                <path d="M187.303 12.7066C189.905 10.676 189.9 7.39001 187.372 5.27022C186.703 4.73891 185.967 4.29886 185.183 3.96165C183.653 3.26192 182.016 3.02696 180.338 3.0544C176.941 3.10585 173.543 3.18646 170.144 3.1916C169.329 3.1916 169.077 3.40941 169.082 4.24292C169.119 9.41203 169.101 14.5811 169.101 19.7503V20.7347H173.116V14.7321C174.979 14.7321 176.744 14.6995 178.507 14.7595C178.935 14.8046 179.33 15.0091 179.614 15.3323C180.369 16.2241 181.028 17.1966 181.743 18.1244C182.419 19.0025 182.954 20.1824 183.852 20.6421C184.72 21.0846 185.972 20.7741 187.054 20.7878C187.653 20.7878 188.255 20.7878 189.094 20.7878L183.556 14.7852C184.856 14.0855 186.209 13.5624 187.303 12.7066ZM182.194 11.8148C179.206 11.8765 176.215 11.844 173.147 11.844V6.29581C174.118 6.29581 175.053 6.30953 175.987 6.29581C177.502 6.27009 179.014 6.21178 180.527 6.19634C181.719 6.18434 182.864 6.39529 183.87 7.08644C185.485 8.19779 185.49 10.1186 183.845 11.1802C183.355 11.4941 182.751 11.8028 182.194 11.8148Z" fill="#000"/>
                <path d="M229.81 17.0182V15.9978C229.81 12.0532 229.832 8.10861 229.793 4.1726C229.793 3.39912 230.028 3.15387 230.769 3.23277C231.282 3.29219 231.8 3.29219 232.312 3.23277C233.141 3.12815 233.295 3.49517 233.29 4.24635C233.259 8.93183 233.275 13.6156 233.275 18.3011V20.7827C231.273 20.7827 229.368 20.8067 227.466 20.7518C227.22 20.7518 226.951 20.3505 226.754 20.0847C223.781 15.9229 220.817 11.7588 217.86 7.59238C217.647 7.29568 217.308 7.08988 217.028 6.8412L216.778 7.00413V20.7861C215.689 20.7861 214.699 20.8153 213.716 20.7553C213.567 20.7467 213.334 20.3265 213.325 20.0916C213.286 18.891 213.306 17.6905 213.306 16.49C213.306 12.3739 213.322 8.25782 213.293 4.15031C213.293 3.45401 213.464 3.19846 214.195 3.22419C215.649 3.27907 217.11 3.26707 218.565 3.22419C218.815 3.20133 219.067 3.24994 219.291 3.36437C219.515 3.47881 219.702 3.65439 219.83 3.87076C222.791 8.10804 225.768 12.3333 228.762 16.5466C228.956 16.8193 229.277 16.9976 229.549 17.2206L229.81 17.0182Z" fill="#000"/>
                <path d="M278.937 6.34899V10.616H290.509V13.3892C290.193 13.4081 289.864 13.4441 289.536 13.4458C286.278 13.4458 283.019 13.463 279.761 13.4355C279.095 13.4355 278.846 13.607 278.881 14.305C278.934 15.3838 278.894 16.466 278.894 17.6339C279.301 17.6528 279.632 17.6837 279.963 17.6837C283.678 17.6837 287.392 17.7042 291.111 17.6699C291.848 17.6699 292.104 17.8414 292.09 18.6235C292.052 20.7947 292.09 20.7964 289.956 20.7964C285.24 20.7964 280.524 20.781 275.811 20.8119C275.082 20.8119 274.826 20.6575 274.833 19.872C274.87 14.6423 274.87 9.41262 274.833 4.18291C274.833 3.42829 275.032 3.22077 275.79 3.22592C280.907 3.26022 286.022 3.26022 291.136 3.22592C291.908 3.22592 292.1 3.45573 292.086 4.19834C292.05 6.34728 292.086 6.34899 289.922 6.34899H278.937Z" fill="#000"/>
                <path d="M235.058 14.7852C235.933 15.2998 236.624 15.7508 237.353 16.1264C240.851 17.9757 244.915 18.4457 248.742 17.4435C249.433 17.2617 250.076 16.9336 250.629 16.4814C251.749 15.5656 251.475 13.986 250.092 13.5847C249.063 13.288 247.962 13.2417 246.887 13.1714C244.755 13.0222 242.599 13.0513 240.493 12.7564C239.313 12.5583 238.187 12.1142 237.19 11.4529C234.779 9.9094 234.719 6.71944 237.037 5.03356C237.845 4.44614 238.754 4.01404 239.72 3.75929C243.995 2.66853 248.261 2.75771 252.457 4.20349C253.838 4.68026 253.829 4.71799 253.829 6.20664V7.75017C253.198 7.48263 252.716 7.25453 252.219 7.06416C249.027 5.83665 245.556 5.52596 242.198 6.1672C241.447 6.32386 240.738 6.63966 240.119 7.09332C239.179 7.77933 239.287 8.99872 240.359 9.43605C241.289 9.78593 242.267 9.99182 243.259 10.0466C245.588 10.2267 247.936 10.2061 250.255 10.4599C251.3 10.5731 252.366 11.0156 253.292 11.5387C255.815 12.969 256.16 16.0458 254.08 18.0644C252.341 19.7537 250.121 20.4054 247.811 20.769C243.476 21.455 239.408 20.5855 235.566 18.5274C235.353 18.4125 235.098 18.1381 235.087 17.9272C235.029 16.9393 235.058 15.9446 235.058 14.7852Z" fill="#000"/>
                <path d="M314.919 14.7972C315.742 15.2826 316.404 15.7148 317.102 16.0801C320.748 17.9838 324.585 18.4348 328.569 17.4521C329.258 17.2702 329.901 16.9446 330.455 16.4968C331.591 15.5827 331.335 14.01 329.941 13.5967C328.912 13.2949 327.811 13.2537 326.735 13.1765C324.576 13.0222 322.398 13.0325 320.256 12.7563C319.189 12.6191 318.1 12.1389 317.169 11.5713C314.576 9.98313 314.505 6.70399 316.978 4.92893C318.661 3.7284 320.633 3.36139 322.638 3.18474C325.943 2.89318 329.203 3.05954 332.352 4.22576C333.659 4.71112 333.657 4.71626 333.657 6.1123V7.709C332.676 7.33855 331.846 6.97153 330.983 6.70742C328.083 5.79122 325 5.60506 322.01 6.16547C321.426 6.29516 320.863 6.50526 320.336 6.78974C319.721 7.10359 319.294 7.59581 319.369 8.36243C319.441 9.09989 319.957 9.50292 320.58 9.64699C321.528 9.86026 322.491 9.99789 323.461 10.0586C325.679 10.2112 327.92 10.1992 330.117 10.4633C331.186 10.5903 332.28 11.0482 333.222 11.5987C335.602 12.993 335.966 15.876 334.079 17.8929C332.764 19.3026 331.047 19.9938 329.219 20.4431C324.351 21.6436 319.755 20.8427 315.38 18.5137C315.186 18.4108 314.951 18.1621 314.943 17.97C314.902 16.9633 314.919 15.9497 314.919 14.7972Z" fill="#000"/>
                <path d="M133.398 3.24478V10.2404C135.027 10.2404 136.583 10.261 138.136 10.2164C138.351 10.2164 138.581 9.89397 138.759 9.68474C140.419 7.72102 142.05 5.74016 143.733 3.79702C144.034 3.48744 144.439 3.29944 144.87 3.26879C146.171 3.20362 147.478 3.24478 149.061 3.24478L141.254 11.7736C143.906 14.7441 146.52 17.6734 149.305 20.7913C147.511 20.7913 145.954 20.8119 144.4 20.7673C144.182 20.7673 143.944 20.4586 143.769 20.2528C142.054 18.1947 140.364 16.1007 138.624 14.0615C138.307 13.7266 137.881 13.5166 137.423 13.4698C136.373 13.3858 135.31 13.4801 134.257 13.4287C133.556 13.3961 133.384 13.6756 133.4 14.3256C133.434 16.1247 133.412 17.9272 133.412 19.7228V20.7296H129.385V19.8343C129.385 14.636 129.4 9.43777 129.369 4.24122C129.369 3.46602 129.558 3.17447 130.367 3.23449C131.321 3.29795 132.292 3.24478 133.398 3.24478Z" fill="#000"/>
                <path d="M211.768 20.4054C209.262 14.8641 206.762 9.32114 204.222 3.79701C204.098 3.52947 203.634 3.2825 203.318 3.26878C201.775 3.2139 200.231 3.26878 198.687 3.23276C198.149 3.22076 197.878 3.40427 197.658 3.89648C195.222 9.24739 192.772 14.5937 190.31 19.9355C190.2 20.1756 190.128 20.4328 189.996 20.793C191.172 20.793 192.196 20.7656 193.218 20.805C193.733 20.8256 193.988 20.6095 194.168 20.1533C194.511 19.2769 194.932 18.4297 195.263 17.5482C195.456 17.0336 195.762 16.8896 196.292 16.8947C199.348 16.9164 202.405 16.9164 205.462 16.8947C206.031 16.8947 206.343 17.0371 206.547 17.5807C206.89 18.4897 207.278 19.3815 207.703 20.2528C207.815 20.4826 208.127 20.7536 208.359 20.7673C209.492 20.8204 210.631 20.7913 211.868 20.7913C211.843 20.6607 211.809 20.5318 211.768 20.4054ZM205.033 14.1112H196.698C197.118 13.1731 197.492 12.3207 197.881 11.4752C198.567 9.99857 199.226 8.51507 199.958 7.06415C200.084 6.81718 200.512 6.59595 200.802 6.59423C201.166 6.59423 201.744 6.72629 201.865 6.97668C202.972 9.25939 203.997 11.5798 205.042 13.8917C205.062 13.9363 205.038 14.0032 205.033 14.1112Z" fill="#000"/>
                <path d="M110.241 20.2751C107.748 14.7612 105.268 9.24567 102.733 3.74555C102.622 3.50202 102.184 3.27563 101.891 3.26706C100.378 3.21904 98.8622 3.27735 97.3495 3.22761C96.7013 3.20703 96.3994 3.44542 96.137 4.02167C93.6931 9.40174 91.2183 14.7664 88.7624 20.143C88.6852 20.3145 88.6475 20.4963 88.5497 20.7999C89.7005 20.7999 90.7501 20.7776 91.7963 20.8101C92.2765 20.8256 92.5166 20.6386 92.6881 20.2099C93.0568 19.282 93.4358 18.3542 93.8886 17.4658C93.9734 17.3236 94.0891 17.2023 94.2272 17.1109C94.3652 17.0195 94.5221 16.9602 94.6861 16.9376C97.8555 16.9021 101.026 16.9021 104.198 16.9376C104.363 16.9606 104.522 17.0207 104.661 17.1133C104.8 17.206 104.917 17.3288 105.002 17.4727C105.453 18.3611 105.794 19.3043 106.216 20.2167C106.323 20.4466 106.559 20.7656 106.757 20.7741C107.942 20.8256 109.13 20.7999 110.401 20.7999C110.357 20.6222 110.304 20.447 110.241 20.2751ZM95.2229 14.0924C96.3462 11.6553 97.4216 9.29026 98.5278 6.95095C98.797 6.37985 100.133 6.35755 100.402 6.92523C101.507 9.26968 102.574 11.633 103.7 14.0924H95.2229Z" fill="#000"/>
                <path d="M273.216 3.24477V6.39186H272.187C268.813 6.39186 265.442 6.40901 262.068 6.37814C261.365 6.37814 261.113 6.56679 261.144 7.29225C261.197 8.56995 261.159 9.85108 261.159 11.2368H272.214V14.1524H261.171V20.7433H257.139V19.8343C257.139 14.6326 257.155 9.4309 257.122 4.22749C257.122 3.44372 257.33 3.21562 258.125 3.22248C262.842 3.26021 267.558 3.24134 272.274 3.24134L273.216 3.24477Z" fill="#000"/>
                <path d="M127.436 8.17207C125.79 6.95783 123.92 6.4296 121.931 6.24266C120.161 6.06697 118.376 6.32175 116.726 6.98527C115.701 7.37154 114.82 8.06612 114.206 8.97339C113.592 9.88067 113.274 10.956 113.296 12.0515C113.306 14.3325 114.601 16.2653 116.791 17.0594C120.379 18.3628 123.848 18.1278 127.124 16.0561C127.218 15.9978 127.321 15.9532 127.56 15.8314C127.56 16.9668 127.622 18.0147 127.519 19.0471C127.491 19.3181 126.994 19.6131 126.661 19.7708C124.294 20.8702 121.785 21.1429 119.214 20.9199C117.235 20.7484 115.321 20.3145 113.581 19.3078C110.682 17.6322 109.195 15.1214 109.281 11.7616C109.367 8.40188 110.984 5.94939 113.942 4.52591C118.058 2.54162 122.313 2.55019 126.572 4.2172C127.342 4.51905 127.694 4.97696 127.601 5.83105C127.525 6.51706 127.58 7.20308 127.568 7.88909C127.565 7.96627 127.5 8.04001 127.436 8.17207Z" fill="#000"/>
                <path d="M149.608 3.28936H167.462V6.30096H161.782C160.665 6.30096 160.663 6.30096 160.663 7.41916C160.663 11.5044 160.663 15.5902 160.663 19.6765V20.7879C159.35 20.7879 158.127 20.8101 156.908 20.757C156.76 20.757 156.516 20.3265 156.511 20.0933C156.479 18.2067 156.492 16.3202 156.492 14.4337C156.492 12.0618 156.456 9.68987 156.513 7.31969C156.534 6.46217 156.246 6.25466 155.439 6.29067C153.755 6.34727 152.068 6.29067 150.382 6.31811C149.783 6.3284 149.564 6.12603 149.598 5.52748C149.639 4.81231 149.608 4.09886 149.608 3.28936Z" fill="#000"/>
                <defs>
                <filter id="filter0_d_265_22" x="2" y="2.79999" width="56.4" height="26.0459" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_265_22"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_265_22" result="shape"/>
                </filter>
                </defs>
                </svg>

        </div>
        {{--  --}}
        <div>
            <span class="capitalize font-semibold">Invoice #</span>
        </div>
        {{--  --}}
        <div>
            <span class="capitalize font-semibold">0043128641</span>
        </div>



    </div>
    {{--  --}}

    <div class="max-w-[900px] py-5 bg-slate-50 rounded-full flex justify-between px-10 mt-10 capitalize font-montserrat">
        <div class="w-64">
            <p >Invoice date:</p>
            <p class="font-semibold">22 April 2022</p>
        </div>
        <div class="w-64">
            <p>Due date:</p>
            <p class="font-semibold">22 April 2022</p>

        </div>






    </div>
    {{--  --}}
    <div class="max-w-[900px] bg-white shadow-2xl rounded-full py-5 flex justify-between px-10 mt-10 capitalize font-montserrat">
        <div class="w-64 flex flex-col gap-2 font-montserrat">
            <p class="font-semibold">Supplier</p>
            <div>
                <p>Realton LLC</p>
            <span>2301 Ravenswood Rd Madison,
                WI 53711</span>
            </div>
        </div>
        <div class="w-64 flex flex-col gap-2">
            <p class="font-semibold">Customer</p>
            <div>
                <p>John Doe</p>
            <span class=" text-justify">329 Queensberry Street, North Melbourne VIC 3051, Australia.</span>
            </div>

        </div>






    </div>
    {{-- table --}}
    <div>




<div class="relative overflow-x-auto p-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-lightGreen rounded-full dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
            </tr>
        </tbody>
    </table>
</div>

    </div>







  </section>

@include('dashboard.layouts.footer')
