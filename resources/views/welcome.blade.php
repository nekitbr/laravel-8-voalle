<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guest page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, nam cumque eum animi mollitia perspiciatis inventore totam. Sunt officia at illo modi error dignissimos deserunt hic laboriosam voluptates voluptatibus iure, tenetur eum quo, asperiores illum libero magnam vero. Soluta facilis nostrum aperiam illo voluptatem adipisci alias repellat eligendi ullam mollitia nisi provident tempore in ea amet ad, cum, earum necessitatibus reiciendis. Deserunt sapiente dicta, maiores temporibus voluptatem provident, quis perspiciatis earum obcaecati explicabo ipsum voluptas aspernatur voluptatibus delectus amet neque quidem inventore fugiat et distinctio molestias sed error. Minima, ullam corrupti rem laboriosam ab quo ad voluptatum, voluptatibus deserunt debitis amet quis quibusdam dolore, iure itaque doloremque autem repellendus enim possimus atque ipsam temporibus laudantium? At deserunt inventore eos pariatur, accusantium voluptas necessitatibus velit aliquid dolorum nemo itaque. Blanditiis cupiditate eaque tenetur. Non esse exercitationem cum commodi, impedit ab rem veritatis minima ipsum sequi cumque nisi facilis accusantium reiciendis, ratione enim dolore nesciunt nulla minus dolores cupiditate culpa quas aspernatur est. Ad corrupti dolores, debitis hic vitae molestiae tenetur, dolorem temporibus non veritatis obcaecati a dicta rem deleniti beatae eius ducimus ipsa animi reprehenderit at nemo! Non voluptate tempora tenetur inventore excepturi accusamus porro omnis quisquam nesciunt quasi aliquid vel sunt odit nisi facilis consectetur, reiciendis dolor earum delectus velit ducimus libero corporis dolores. Harum, ipsam quibusdam? Ullam quia saepe magnam qui. Aspernatur nulla quia natus cumque non tempore perferendis sint quasi quisquam magni quibusdam, nobis ad fugit culpa pariatur iusto error quidem molestiae? Assumenda, necessitatibus. Rem sed veritatis odio, a dicta eos ad ullam quae iste nisi explicabo unde aut voluptatem maxime quia atque minima laborum illum enim hic? Quis vitae explicabo ea inventore optio omnis, officiis provident earum, fugit pariatur, dolores dignissimos corrupti autem voluptatibus similique aut modi? Officia id, incidunt adipisci maxime reiciendis soluta deserunt culpa necessitatibus.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, consequuntur alias. Corrupti ab similique distinctio dolore ipsa, error aut cum. Culpa quidem aperiam explicabo dignissimos praesentium deserunt consequuntur soluta consequatur, vero exercitationem iusto, tenetur ipsam esse ducimus necessitatibus velit odio magni sunt! Est, natus aspernatur quod asperiores neque, ipsam adipisci cupiditate corrupti doloremque blanditiis nostrum. Veritatis dolor optio inventore labore? Possimus reiciendis saepe veniam, minima magnam incidunt similique expedita nam. Architecto rerum fuga blanditiis optio explicabo facere illum temporibus tenetur illo veniam asperiores omnis ad est dolore eius exercitationem provident, voluptatum vero? Distinctio perspiciatis tempore inventore eum incidunt iste debitis officia nihil doloremque provident quos corporis voluptatum est cum vero perferendis, dolore dolores rerum? Ipsa ratione deserunt quis voluptates laborum possimus, iusto sapiente expedita, dolore earum aperiam reiciendis asperiores consectetur in natus voluptatum cupiditate id iste ab totam dolorem amet magni? Dolore possimus nisi neque repellat dolor libero exercitationem ea ipsa! Ullam corporis odio, exercitationem eum sequi consequuntur error numquam ducimus iure asperiores molestiae eius nesciunt consequatur repellat blanditiis. Soluta excepturi animi natus officia, vero suscipit aliquam, nisi, voluptas repudiandae odio hic veniam repellat! Enim, quos. Temporibus molestiae labore harum ea necessitatibus? Eaque aliquid necessitatibus, error totam mollitia tempora illo iure ex doloremque vel neque nostrum. Rem, consectetur doloribus consequuntur, laudantium distinctio iure voluptas laboriosam est tenetur ut ratione aliquid accusamus nostrum fuga! Velit, distinctio provident! Minus nisi accusantium vitae sunt facilis cupiditate molestiae eveniet ad qui voluptatem eaque accusamus quia voluptatum laboriosam, harum eum enim, voluptatibus doloribus tempore. Natus nam a sit quae neque reiciendis modi soluta quasi omnis, ea delectus adipisci itaque necessitatibus, debitis odio sint saepe illo? Voluptatum rerum, eligendi aperiam qui non fuga. Vitae, ipsum recusandae soluta quis itaque sapiente illum vel a quisquam repellendus. Dolores aliquid saepe ipsam natus odio magni necessitatibus optio, iure distinctio.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti natus, molestiae beatae rerum, facere, harum eaque temporibus voluptatibus accusamus dignissimos praesentium mollitia maiores recusandae exercitationem sapiente repellendus quas odit esse illum fugiat. Nisi vel fugiat eligendi, commodi aliquam ex impedit explicabo fugit illo culpa doloremque aut quas omnis officiis, distinctio autem reiciendis temporibus incidunt, facilis illum tenetur debitis? Earum libero distinctio illum unde necessitatibus totam recusandae id cupiditate, nobis nihil sed vitae. Odit ipsam repellendus magni, magnam tenetur architecto fugiat nemo esse consectetur porro nostrum debitis sapiente exercitationem numquam? Asperiores laboriosam quos, debitis ipsam qui ea quaerat quo nam eaque numquam libero in cumque corporis eligendi repellendus tempore animi voluptas consectetur at! Iure dolorum nihil numquam quia rem ullam mollitia nulla. Nobis qui, ipsa quas enim nemo repudiandae, nisi sit, repellendus harum animi unde atque at! Optio ratione dolore repellat illo repellendus ullam fugit provident corrupti consectetur? Nobis eaque nihil, libero dolor qui saepe unde quas magnam perferendis odio porro optio architecto et molestiae. Non quod sint laboriosam doloremque nihil sit blanditiis, soluta, excepturi eveniet aliquid praesentium ipsa illo voluptatem modi. Rem, minus vero velit fugit, mollitia quidem corrupti dolore facere asperiores accusamus iste reprehenderit veniam adipisci eius aspernatur voluptatibus ratione, suscipit quae recusandae illo expedita non! Quo a, consequatur, libero perspiciatis natus eos, iusto asperiores expedita quis ut facilis facere veniam! Omnis repellat iste dolore unde! Labore dolore cum dolorum reprehenderit neque provident eius, aspernatur rem deserunt vitae velit atque a quidem assumenda molestiae maxime dignissimos. Quaerat, cumque culpa libero numquam accusamus eligendi sed repellendus sunt doloremque nesciunt quas voluptatem aperiam nemo! Porro itaque excepturi optio. Suscipit ut impedit pariatur facilis corporis delectus molestias ipsum qui, repellat quasi cum perspiciatis nemo sit magni totam sunt quae nesciunt, debitis exercitationem blanditiis nulla quam consequuntur deserunt omnis? Quidem, fugiat quibusdam?
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laborum iure facilis veniam. Illum minima, expedita totam ratione impedit dignissimos, fuga eum non, eaque vero est nesciunt veniam sint reiciendis ipsam velit provident. Ut asperiores molestiae commodi veniam nesciunt. Quisquam atque, distinctio recusandae cupiditate molestiae nemo architecto incidunt officia repellat laborum earum. Corrupti aperiam nisi quibusdam molestias quis! Veniam, voluptatibus laudantium ex odio culpa dignissimos necessitatibus dicta! Nihil, impedit aliquid alias magnam accusantium commodi ab molestias maxime expedita labore, officia quos magni, similique molestiae libero nam quibusdam! Officiis aspernatur, dolore ratione consectetur distinctio eius alias atque assumenda nulla aliquam perspiciatis quos. Mollitia eligendi a voluptatem harum rerum placeat ipsam. Nostrum ratione quam, fuga atque deleniti in nulla et eaque unde, accusamus, molestiae quod laborum. Mollitia minus perspiciatis non consectetur totam voluptatem, ad omnis possimus ducimus delectus tempore doloribus iste aspernatur ea obcaecati doloremque corporis dolores dolor ipsam. Eveniet nam maiores tenetur! Quidem, quae. Eos beatae soluta ab ea quaerat animi cum sint consequatur dolorem sapiente impedit accusantium labore nostrum quisquam facilis, nihil reiciendis officiis est voluptatibus optio cumque. Harum natus dignissimos obcaecati. Amet possimus numquam assumenda ipsum consequatur labore sequi nihil quibusdam perferendis quis. Perspiciatis, doloremque repellat aspernatur sunt officia qui odit quasi. Impedit debitis molestias numquam ducimus praesentium cumque explicabo, amet et veritatis consequuntur, delectus tenetur eveniet earum iure dolores adipisci omnis distinctio illo cupiditate sequi laudantium. Aspernatur dicta repudiandae, quis facilis architecto dolorem aut saepe maiores error voluptatum consequatur, eaque, aperiam illo iusto porro rem corporis perspiciatis animi iste! Facilis ratione enim fuga doloribus impedit, illum cumque quibusdam, minus pariatur quidem esse in ipsum ad sequi magnam. Unde perferendis consequuntur vero sapiente, id itaque quas nesciunt nobis incidunt porro eligendi aperiam cupiditate natus dolorum enim distinctio iste ratione esse amet quibusdam architecto saepe in dignissimos iusto. Nihil, molestiae.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>