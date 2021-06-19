<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Document</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="font-body">


      <section id="navigation" class="bg-transparent fixed z-50 inset-x-0 " :class="{ 'bg-black shadow transition duration-300' : showBar }" x-data="{ showBar: false }" @scroll.window="showBar = (window.pageYOffset > 60) ? true : false" >
        <nav class="container mx-auto">
          <div x-data="{ isOpen: false }" class="container mx-auto py-3 md:py-6 px-4 md:px-4 md:flex md:justify-between md:items-center">
              <div class="flex justify-between">
                  <div class="flex items-center ">
                      <a href="http://"><img src="/img/kafwhite.png" alt="" ></a> 
                
                  </div>
                  <!-- Mobile menu button -->
                  <div class="flex md:hidden">
                      <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" 
                          aria-label="toggle menu"
                          @click="isOpen = !isOpen">

                          <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                              <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                          </svg>
                      </button>
                  </div>
              </div>
  
              <!-- Menu, if mobile set to hidden -->
              <div :class="isOpen ? 'show' : 'hidden' " class="md:flex items-center mt-4 md:mt-0">
                  <div class="flex flex-col md:flex-row ">
                      <a class="my-1 text-lg text-gray-200  hover:text-indigo-500 md:mx-6 md:my-0" href="#">Czym się zajmujemy</a>
                      <a class="my-1 text-lg text-gray-200  hover:text-indigo-500 md:mx-6 md:my-0" href="#">Dlaczego my</a>
                      <a class="my-1 text-lg text-gray-200  hover:text-indigo-500 md:mx-6 md:my-0" href="#">Realizacje</a>
                      <a class="my-1 text-lg text-gray-200  hover:text-indigo-500 md:mx-6 md:my-0" href="#">Blog</a>
                      <a class="my-1 text-lg text-gray-200  hover:text-indigo-500 md:mx-6 md:my-0" href="#">Kontakt</a>
                  </div>
              </div>
          </div>
      </nav>
      </section>

      <section id="hero">
        <div class="container h-screen mx-auto flex flex-row justify-items-center items-center px-4 py-24">
          <div class="hero__wrap grid grid-cols-1 lg:grid-cols-4  text-white">
            <div class="hero__content col-span-2">
              <h1 class="md:text-4xl leading-snug text-3xl font-semibold">Chcesz zaistnieć w sieci bez ogromnego budżetu?</h1>
              <p class="font-light text-lg mt-5">Zamierzasz założyć działalność gospodarczą?  Pamiętaj, <span class="text-primary">Strona internetowa</span> to obowiązek w biznesie a my chętnie Ci w tym pomożemy.</p>
              
              <div class="hero__buttons mt-14">
                <a href="#" class="py-3 px-10 bg-primary rounded-full uppercase font-semibold">Wycena</a>
                <a href="#" class="py-3 px-10 ml-6 bg-secondary  rounded-full uppercase font-semibold">oferta</a>
              </div>
            
            </div>
           
          </div>
        </div>
      </section>
      <section id="services" class="bg-black py-24">
        <div class="container mx-auto grid justify-items-center">
          <h2 class="text-4xl leading-snug font-semibold text-center  mb-24 text-white">W czym się specjalizujemy</h2>
        </div>
        <div class="container px-4 mx-auto">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center">
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/1.png" alt="">
              <h3 class="mt-3">Strona internetowa</h3>
            </div>
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/2.png" alt="">
              <h3 class="mt-3">Landing Page</h3>
            </div>
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/3.png" alt="">
              <h3 class="mt-3">Wordpress</h3>
            </div>
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/4.png" alt="">
              <h3 class="mt-3">Identyfikacja wizualna</h3>
            </div>
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/5.png" alt="">
              <h3 class="mt-3">Sklep Internetowy</h3>
            </div>
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/6.png" alt="">
              <h3 class="mt-3">Grafika Dla Internetu</h3>
            </div>
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/7.png" alt="">
              <h3 class="mt-3">Grafika Reklamowa</h3>
            </div>
            <div class="grid place-items-center text-center text-white w-full p-10 bg-gray-900 rounded-md">
              <img src="/img/8.png" alt="">
              <h3 class="mt-3">Obsługa WWW</h3>
            </div>
          
          </div>
        </div>

      </section>

      <section id="question" class="" style="background: linear-gradient(rgba(0, 0, 0, 0.96), rgba(0, 0, 0, 0.96)), url('/img/quest.jpg');background-position: center;background-size: cover; background-repeat: no-repeat;">
        <div class="container px-4 mx-auto">
          <div class="grid grid-cols-1  md:grid-cols-12 gap-4 justify-items-center items-center py-24">

            <div class="grid col-span-12 md:col-span-8 w-full">
              <h2 class="text-4xl leading-snug font-semibold text-center md:text-left text-white">Masz pytania?</h2>
              <p class="text-white font-light mt-5 md:mt-0 text-center md:text-left">Jeśli w dalszym ciągu coś jest dla Ciebie niejasne lub nie wiesz, czy będziemy w stanie rozwiązać właśnie Twój problem, skontaktuj się z nami, a w ciągu kilkunastu minut ustalimy, czy nasze usługi są tym, czego szukasz. Pamiętaj - wielkie rzeczy zawsze zaczynają się od małych kroczków.</p>
            </div>
            <div class="grid col-span-12 md:col-span-4">
              <a href="#" class="py-3 px-10 mt-5 md:mt-0 bg-primary rounded-full text-white uppercase font-semibold">Porozmawiajmy</a>
            </div>

          </div>
        </div>

      </section>

      <section id="blog__homepage" class="bg-black pt-24 pb-5">
        <div class="container mx-auto grid justify-items-center">
          <h2 class="text-4xl leading-snug font-semibold text-center  text-white">Dzielimy się wiedzą!</h2>
        </div>
          <div class="container px-4 mx-auto">
        
            <div class="grid grid-cols-1  md:grid-cols-12 gap-4 justify-items-center items-center py-24">
              <div class="grid col-span-4 w-full">
                  <div class="blog__miniatures">
                    <a href="" class="blog__miniature">
                      <div class="blog__card relative">

                        <div class="blog__card__image ">
                          <img src="img/blog_1.png" alt="">
                        </div>

                        <div class="blog__card__content absolute bottom-20 px-5">
                        <h4 class="blog__card__content__title text-white text-xl font-medium">Dlaczego twoja firma powinna posiadać stronę www</h4>
                        </div>

                        <div class="blog__card__footer absolute w-full flex flex-row justify-between items-center bottom-0">
                          <h5 class="blog__card__footer__category text-primary px-5 py-3">Programowanie</h5>
                          <div class="blog__card__footer__button px-4 py-4 bg-primary">
                            <img src="img/arrow.svg" height="20" width="20" alt="">
                          </div> 
                        </div>

                      </div> 
                    </a>
                  </div>
              </div>
              <div class="grid col-span-4 w-full">
                <a href="" class="blog__miniature">
                  <div class="blog__card relative">

                    <div class="blog__card__image ">
                      <img src="img/blog_1.png" alt="">
                    </div>

                    <div class="blog__card__content absolute bottom-20 px-5">
                    <h4 class="blog__card__content__title text-white text-xl font-medium">Dlaczego twoja firma powinna posiadać stronę www</h4>
                    </div>

                    <div class="blog__card__footer absolute w-full flex flex-row justify-between items-center bottom-0">
                      <h5 class="blog__card__footer__category text-primary px-5 py-3">Technologia</h5>
                      <div class="blog__card__footer__button px-4 py-4 bg-primary">
                        <img src="img/arrow.svg" height="20" width="20" alt="">
                      </div> 
                    </div>

                  </div> 
                </a>
              </div>
              <div class="grid col-span-4 w-full">
                <a href="" class="blog__miniature">
                  <div class="blog__card relative">

                    <div class="blog__card__image ">
                      <img src="img/blog_1.png" alt="">
                    </div>

                    <div class="blog__card__content absolute bottom-20 px-5">
                    <h4 class="blog__card__content__title text-white text-xl font-medium">Dlaczego twoja firma powinna posiadać stronę www</h4>
                    </div>

                    <div class="blog__card__footer absolute w-full flex flex-row justify-between items-center bottom-0">
                      <h5 class="blog__card__footer__category text-primary px-5 py-3">Ciekawostki</h5>
                      <div class="blog__card__footer__button px-4 py-4 bg-primary">
                        <img src="img/arrow.svg" height="20" width="20" alt="">
                      </div> 
                    </div>

                  </div> 
                </a>
            </div>

          </div>

        </div>
      </section>

      <section id="gallery">
        <div class="gallery__wrap grid grid-cols-1 md:grid-cols-12 gap-0 w-full">

            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/2.jpg" alt="">

            </div>
            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/3.jpg" alt="">

            </div>
            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/4.jpg" alt="">

            </div>
            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/5.jpg" alt="">

            </div>
            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/5.jpg" alt="">

            </div>
            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/4.jpg" alt="">

            </div>
            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/3.jpg" alt="">

            </div>
            <div class="gallery__wrap__item grid col-span-12 sm:col-span-6 xl:col-span-3 w-full">
              <img src="img/2.jpg" alt="">

            </div>
          
        </div>
       

      </section>



</body>
</html>