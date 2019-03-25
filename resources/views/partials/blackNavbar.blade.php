<div class="container mx-auto px-4">
       <nav class="flex items-center justify-between flex-wrap pt-8">
              <div class="flex-1">
                     <div class="flex flex-no-shrink">
       	              <a href="{{ route('home', ['lang' => app()->getLocale()]) }}" title="Back home">
       	                     <picture>
       	                            <source src="/css/img/logo.webp" type="image/webp" class="h-10 lg:h-20 xl:h-20">
       	                            <source src="/css/img/logo.png" type="image/png" class="h-10 lg:h-20 xl:h-20">
       	                            <img src="/css/img/logo.png" class="h-10 lg:h-20 xl:h-20" alt="Logo | Travelcard Iceland">
       	                     </picture>
                            </a>
                     </div>
              </div>

              <div class="flex-1">
                     <div class="block sm:hidden float-right">
                            <button class="navbar-burger items-center px-3 py-2 rounded text-grey-darker" onclick="myFunction(this)">
                                   <div class="bar1 border-13 border-grey-darker w-6 mb-1"></div>
                                   <div class="bar2 border-13 border-grey-darker w-6 mb-1"></div>
                                   <div class="bar3 border-13 border-grey-darker w-6 mb-1"></div>
                            </button>
                     </div>

                     <div id="main-nav" class="w-full flex-grow sm:flex sm:w-auto hidden">
                            <ul class="list-reset flex flex-col lg:flex-row lg:items-center float-right text-right">
                                   <li class="pr-4 mb-3 lg:mb-0 lg:pr-16 xl:pr-16">
                                          <a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('camping', ['lang' => app()->getLocale()]) }}" title="Campingsites | Tjaldsvæði">@lang('header.camping_site')</a>
                                   </li>
                                   <li class="pr-4 mb-3 lg:mb-0 lg:pr-16 xl:pr-16">
                                          <a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('about', ['lang' => app()->getLocale()]) }}" title="About Us | Um Okkur">@lang('header.about_us')</a>
                                   </li>
                                   <li class="pr-4 mb-4 lg:mb-0 lg:pr-16 xl:pr-16">
                                          <a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('qAndA', ['lang' => app()->getLocale()]) }}" title="Q&A">@lang('header.qanda')</a>
                                   </li>
                                   <li class="pr-4 hidden lg:block">
                                          <a href="/is" title="Icelandic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="24px" width="24px"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><path fill="#0052b4" d="M8.819 322.783c14.812 54.959 47.457 102.593 91.355 136.322V322.783zm224.92 188.243A259.29 259.29 0 0 0 256 512c118.279 0 217.805-80.221 247.181-189.217H233.739zm269.442-321.809C473.805 80.221 374.279 0 256 0c-7.502 0-14.923.342-22.261.974v188.243zM100.174 52.895c-43.898 33.73-76.543 81.363-91.355 136.322h91.355z"/><path fill="#d80027" d="M509.833 222.609H200.348V6.085a254.258 254.258 0 0 0-66.783 25.042v191.481H2.167C.742 233.539 0 244.683 0 256s.742 22.461 2.167 33.391h131.398v191.481a254.258 254.258 0 0 0 66.783 25.042V289.392h309.485C511.256 278.461 512 267.317 512 256s-.744-22.461-2.167-33.391z"/></svg></a>
                                   </li>
                                   <li class="pr-4 hidden lg:block">
                                          <a href="/en" title="English"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="24px" width="24px"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><path fill="#0052b4" d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178zm450.261 89.077c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005zm89.075-450.26c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075zm133.566 494.362c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075zm47.222-180.397l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076z"/><path fill="#d80027" d="M509.833 222.609H289.392V2.167A258.556 258.556 0 0 0 256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 0 0 0 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0 0 66.783 0V289.392h220.442A258.533 258.533 0 0 0 512 256c0-11.317-.744-22.461-2.167-33.391z"/><path fill="#d80027" d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0 0 15.048-16.435l-97.802-97.802h-31.482zm-133.566 0h-.002L74.98 437.019a256.636 256.636 0 0 0 16.435 15.048l97.802-97.804zm0-133.565v-.002L74.981 74.98a256.636 256.636 0 0 0-15.048 16.435l97.803 97.803h31.481zm133.566 0L437.02 74.981a256.328 256.328 0 0 0-16.435-15.047l-97.802 97.803z"/></svg></a>
                                   </li>
                                   <li class="pr-4 block lg:hidden flex">
                                          <div class="flex-1">
                                                 <a href="/is" title="Icelandic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><path fill="#0052b4" d="M8.819 322.783c14.812 54.959 47.457 102.593 91.355 136.322V322.783zm224.92 188.243A259.29 259.29 0 0 0 256 512c118.279 0 217.805-80.221 247.181-189.217H233.739zm269.442-321.809C473.805 80.221 374.279 0 256 0c-7.502 0-14.923.342-22.261.974v188.243zM100.174 52.895c-43.898 33.73-76.543 81.363-91.355 136.322h91.355z"/><path fill="#d80027" d="M509.833 222.609H200.348V6.085a254.258 254.258 0 0 0-66.783 25.042v191.481H2.167C.742 233.539 0 244.683 0 256s.742 22.461 2.167 33.391h131.398v191.481a254.258 254.258 0 0 0 66.783 25.042V289.392h309.485C511.256 278.461 512 267.317 512 256s-.744-22.461-2.167-33.391z"/></svg></a>
                                          </div>
                                          <div class="flex-1">
                                                 <a href="/en" title="English"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><path fill="#0052b4" d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178zm450.261 89.077c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005zm89.075-450.26c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075zm133.566 494.362c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075zm47.222-180.397l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076z"/><path fill="#d80027" d="M509.833 222.609H289.392V2.167A258.556 258.556 0 0 0 256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 0 0 0 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0 0 66.783 0V289.392h220.442A258.533 258.533 0 0 0 512 256c0-11.317-.744-22.461-2.167-33.391z"/><path fill="#d80027" d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0 0 15.048-16.435l-97.802-97.802h-31.482zm-133.566 0h-.002L74.98 437.019a256.636 256.636 0 0 0 16.435 15.048l97.802-97.804zm0-133.565v-.002L74.981 74.98a256.636 256.636 0 0 0-15.048 16.435l97.803 97.803h31.481zm133.566 0L437.02 74.981a256.328 256.328 0 0 0-16.435-15.047l-97.802 97.803z"/></svg></a>
                                          </div>
                                   </li>
                            </ul>
                     </div>
              </div>
       </nav>
</div>