<script setup>
const missionElement = ref([
  {
    heading: 'Fitness for All',
    text: 'Join our community to improve your fitness, nutrition and overall wellness. You\'ll find a safe and nurturing environment where you can work at your own level and pace, and receive evidence-based advice - no fads here!'
  },
  {
    heading: 'In-Person or Online',
    text: 'Book yourself into classes in West and North Norfolk for in-person support, fun and comradery. Not local? Log onto an online class and benefit from exercising in your own time and own home.'
  },
  {
    heading: 'Women\'s Health Specialist',
    text: 'Discover effective exercises, nutrition and supplements to support you through all stages of menopause and beyond. Delivered online, you\'ll easily fit these programs into your already busy schedule.'
  }
])

const testimonials = ref([
  {
    quote: ['I\'ve never excelled at sport but I\'ve been going to Jaime\'s Fitness Pilates classes for over two years and I\'ve noticed a significant steady improvement in my strength, balance, posture and fitness as well as my general mental wellbeing. I can now do a range of exercises that I couldn\'t do when I first started. Jaime is talented, passionate and motivational - she tailors exercises to suit every ability and always makes classes fun so you\'re never clock-watching during the session and leave feeling energised and proud of what you have accomplished!'],
    author: 'Kat. P'
  },
  {
    quote: ['I hit 40 in July, beforehand I felt sluggish and not very motivated within myself, I was also getting a bit out of puff when doing activities with the kids.', 'Since keeping up with Jaimes Pilates and Lift and Lean classes it\'s helped me to keep the motivation going! I feel stronger, leaner and more confident in myself, not just in how I look but how I feel too.'],
    author: 'Carla. P'
  },
  {
    quote: ['The Fit Female Project totally surpassed my expectations. There was so much content which made it great value for money. Aimed at peri and post-menopausal women it included lots of advice on what to expect and ways to alleviate the symptoms through exercise, nutrition, HRT, supplements etc. Jaime delivered the programme in her usual friendly, professional and inspirational way. I feel motivated to continue on this journey towards a healthier, fitter, happier me and wished I had done this programme 20 years ago! I averaged 11,800 steps a day over the four weeks, did 21 classes, lost 6lbs in weight and 4 cm off my hips'],
    author: 'Nancy. W'
  }
])

const galleryImages = ref([
  {
    src: '/images/gallery/dark-neon.jpg'
  },
  {
    src: '/images/gallery/lift-lean.jpg'
  },
  {
    src: '/images/gallery/long-hall-1.jpg'
  },
  {
    src: '/images/gallery/long-hall-2.jpg'
  },
  {
    src: '/images/gallery/long-hall-3.jpg'
  },
  {
    src: '/images/gallery/seated.jpg'
  },
  {
    src: '/images/gallery/grassy-workout.jpg'
  },
  {
    src: '/images/gallery/tent-workout.jpg'
  },
  {
    src: '/images/gallery/stability-ball.jpg'
  },
  {
    src: '/images/gallery/equipment.jpg'
  }
])

const justSomeClasses = ref([
  'Lift Lean',
  'Dance Fitness',
  'Fitness Pilates',
  'Walkfit',
  'Lift Lean Seniors'
])

const { data: prices } = await useFetch('/api/prices')

const payAsYouGoPrice = computed(() => {
  return prices.value.filter(price => price.type === 'payg')[0]
})
</script>

<template>
  <main>
    <div class="flex-wrap justify-center max-w-[1600px] m-auto lg:flex lg:flex-nowrap">
      <UCard
        v-for="(elem, index) of missionElement"
        :key="index"
        class="rounded-md bg-[var(--theme-green)] shadow-md m-auto my-[20px] lg:m-[20px] w-[75%] sm:w-[50%] lg:w-300"
        :ui="{
          header: 'text-center border-0 border-b-2 border-gray-900 mx-5 font-bold'
        }"
      >
        <template #header>
          {{ elem.heading }}
        </template>
        {{ elem.text }}
      </UCard>
    </div>

    <div class="py-[20px] mb-[20px] bg-[var(--bg-lt-grey)]">
      <div class="max-w-[1000px] m-auto grid grid-cols-1 gap-5 lg:grid-cols-2">
        <div class="p-[20px] bg-[var(--theme-dk-green)] rounded-md shadow-lg w-[75%] m-auto sm-[50%] lg:w-[100%]">
          <div class="w-[100%] relative max-h-[400px] overflow-hidden mb-4">
            <NuxtImg
              src="/images/instructor/jaime-about-me.jpg"
              width="500"
              height="500"
              class=""
            />
            <svg
              class="absolute bottom-[-5px] left-0 w-[103%] fill-[var(--theme-dk-green)]"
              viewBox="0 0 3189 355"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              xml:space="preserve"
              xmlns:serif="http://www.serif.com/"
              style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"
            >
              <g transform="matrix(2.03592,0.0366734,-0.0742454,4.12173,-460.181,-3104.7)">
                <path
                  d="M267.03,829.976C422.362,815.476 749.537,769.178 997.731,780.288C1698.57,811.661 1817.06,710.168 1808.48,762.287C1808.44,762.552 1808.41,762.818 1808.41,763.084C1808.41,768.05 1808.41,817.158 1808.41,817.158L267.03,829.976Z"
                />
              </g>
            </svg>
          </div>
          <div class="text-2 my-2">
            <h2 class="font-bold ">
              Welcome to Putting Your Fitness & Wellness First
            </h2>
          </div>
          <div class="flex flex-col gap-2">
            <p>
              Hi, I'm Jaime, and as a lady in her 40s, mum to two young children, a wife and a business owner, I'm no
              stranger to putting everyone else first and myself last. However, as I approach my half-century (scary now
              I write it!) I realise the importance of focusing on my health and wellbeing. I make my lifestyle, fitness
              and wellness choices based on increasing longevity. I want to be able to move freely and stay strong and
              physically independent into my later years. And I now make it my mission to help you do the same.
            </p>
            <p>
              <b>My credentials</b><br> My passion for fitness and exercise began in my 20s when I became an
              entertainer and dancer. For the last ten years, I have been passionate about helping my local community as
              a fitness instructor, nutritional advisor, and women's health and wellbeing specialist.
            </p>
            <p>
              <b>My offering</b><br> You'll find a diverse range of community fitness classes in West and North
              Norfolk. Online, there are fitness and nutrition programs tailored for both men and women. Browse the
              timetable to find your perfect class.
            </p>
          </div>
        </div>
        <div
          class="text-center py-5 font-size-2 leading-[2.5] bg-[var(--theme-grey)] rounded-md shadow-lg w-[75%] sm-[50%] h-[100%] m-auto lg:w-[100%]"
        >
          <h2 class="text-4xl font-bold">
            Classes Include
          </h2>
          <div
            v-for="(FitnessClass, index) of justSomeClasses"
            :key="index"
            class="flex flex-col items-center m-5"
          >
            <div class="text-3xl leading-[2.5rem]">
              {{ FitnessClass }}
            </div>
            <svg
              class="w-[60%] fill-[var(--theme-divider)] mt-5"
              viewBox="0 0 576 32"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              xml:space="preserve"
              xmlns:serif="http://www.serif.com/"
              style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
            >
              <g transform="matrix(1,0,0,1,-224.226,-368)">
                <g transform="matrix(3.03763,0,0,3.03763,-875.717,-746.39)">
                  <circle
                    cx="456.842"
                    cy="372.129"
                    r="5.267"
                  />
                </g>
                <g transform="matrix(6.12323e-17,1,-1,6.12323e-17,1183.77,268.591)">
                  <path d="M115.409,384L121.858,671.774L108.959,671.774L115.409,384Z" />
                </g>
                <g transform="matrix(-6.12323e-17,1,1,6.12323e-17,-159.774,268.591)">
                  <path d="M115.409,384L121.858,671.774L108.959,671.774L115.409,384Z" />
                </g>
              </g>
            </svg>
          </div>
          <div
            class="flex justify-center items-center text-center w-[175px] h-[175px] sm:w-[250px] sm:h-[250px] my-[50px] mx-auto relative rotate-[-10deg]"
          >
            <NuxtImg
              src="images/icons/new-star.png"
              width="250"
              height="250"
              alt=""
              :placeholder="true"
              loading="eager"
              quality="80"
              class="absolute top-[0] left-[0] z-[-1]"
            />
            <div class="grid justify-center items-center">
              <span class="font-bold text-4xl sm:text-6xl">£{{ payAsYouGoPrice.cost }}</span>
              <span class="font-bold uppercase text-xl sm:text-2xl">per session</span>
              <span class="italic leading-[1.5]">
                <!-- <p><a href="/" class="underline">View the prices page</a></p> -->
                <p>Contact me</p>
                <p>for more details</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="text-center">
        <h2 class="font-bold text-xl">
          Testimonials
        </h2>
        <p>Dont take my word for it, see what others have to say...</p>
      </div>
      <div class="my-1 mx-auto justify-center items-center max-w-[1600px] flex flex-wrap lg:flex-nowrap">
        <div
          v-for="(testimonial, index) of testimonials"
          :key="index"
          class="w-[325px] m-[30px] p-[20px] relative rounded-md bg-[var(--theme-grey)] text-sm shadow-lg"
        >
          <UIcon
            name="bx:bxs-quote-alt-left"
            class="w-[50px] h-[50px] absolute left-[-15px] top-[-15px] rotate-180 bg-[var(--theme-dk-green)]"
          />
          <p
            v-for="(paragraph, indx) of testimonial.quote"
            :key="'quote_'+indx"
            class="italic text-center"
          >
            {{ paragraph }}
          </p>
          <span class="font-bold float-right"> - {{ testimonial.author }}</span>
        </div>
      </div>
    </div>

    <div class="w-[100%] py-[5px] my-[10px] text-center bg-[var(--theme-lt-green)]">
      <div class="m-3">
        <h2 class="font-bold text-xl">
          Gallery
        </h2>
        <p>Take a look at some of the fun we have in our classes!</p>
      </div>
      <div
        class="w-full max-w-[1000px] overflow-hidden my-[50px] mx-auto grid gap-y-0 gap-x-2.5 grid-cols-2 sm:grid-cols-3 sm:grid-rows-3 lg:grid-cols-5 lg:grid-rows-2"
      >
        <div
          v-for="(image, index) of galleryImages"
          :key="index"
          class="w-[100%] h-[100%] flex items-center"
          :class="(index == galleryImages.length-1) ? 'block sm:hidden lg:block' : 'block'"
        >
          <NuxtImg
            :src="image.src"
            width="250"
            height="250"
            alt=""
            :placeholder="true"
            loading="lazy"
            quality="80"
            class="w-[100%] h-[95%] object-cover rounded-md"
          />
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="grid grid-cols-1 lg:grid-cols-2 w-[100%] max-w-[1500px] mt-[45px] mb-[100px] mx-auto">
        <div class="flex justify-center text-center lg:text-left flex-col px-[10px] lg:px-[50px]">
          <h2 class="font-bold text-xl">
            Qualifications
          </h2>
          <p>
            I am a qualified Fitness Instructor, Nutritional Advisor, and Womens Health & Wellbeing Specialist with
            over a decade of experience. I hold the following qualifications:
          </p>
          <ul class="my-[10px] text-left ml-">
            <li>- Level 2 Exercise to music from Lifetime training.</li>
            <li>- Fitness Pilates and Lift Lean with Choreography To Go</li>
            <li>- Fitsteps dance fitness training with FitSteps Official</li>
            <li>- Level 3 Nutrition for Exercise and health with Active IQ</li>
            <li>- My qualifications are CIMSPA approved</li>
          </ul>
        </div>
        <div class="w-[100%] flex justify-center my-[50px] flex-col lg:flex-row">
          <div class="flex w-[90%] lg:w-[50%] m-auto my-3">
            <NuxtImg
              src="/images/certificates/fitness-pilates-2025.png"
              width="400"
              height="300"
              alt=""
              :placeholder="true"
              loading="lazy"
              quality="80"
              class="w-[400px] h-auto object-cover shadow-md lg:left-[50px] lg:rotate-[-12deg] relative m-auto"
            />
          </div>
          <div class="flex w-[90%] lg:w-[50%] m-auto my-3">
            <NuxtImg
              src="/images/certificates/lift-lean-cert.jpeg"
              width="400"
              height="300"
              alt=""
              :placeholder="true"
              loading="lazy"
              quality="80"
              class="w-[400px] h-auto object-cover shadow-md lg:right-[50px] lg:rotate-[12deg] relative m-auto"
            />
          </div>
        </div>
      </div>
    </div>
  </main>
</template>
