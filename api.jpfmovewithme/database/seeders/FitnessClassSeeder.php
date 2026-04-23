<?php

namespace Database\Seeders;

use App\Models\FitnessClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FitnessClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Lift Lean',
            'url_identifier' => 'lift-lean',
            'short_description' => 'Strength and conditioning class',
            'description' => 'Lift Lean – Strength, Energy &amp; Results for Every Body. Lift Lean is a dynamic strength and conditioning class designed for everyone—no matter your age or fitness level. Using a mix of dumbbells, resistance bands, and bodyweight exercises, you’ll enjoy a full-body workout that’s both effective and fun.This class is about so much more than just fitness. With regular attendance, you’ll support your:Muscle tone and strength - Bone density and joint health - Cardiovascular fitness - Weight management and body composition - Energy levels and confidence. &lt;div&gt;Each session is structured using interval-style training and set to motivating music, creating a lively and upbeat atmosphere. And while I always try to bring fun and laughter to the session, make no mistake—you’ll get a powerful, results-driven workout every time.Expect a mix of standing and mat-based exercises, so being able to get up and down from the floor is essential.The class format changes weekly to keep things fresh, exciting, and challenging—so you’ll never get bored!&lt;/div&gt;',
            'start_date' => '2025-05-29',
            'notes' => 'What to Bring:<br />Wear comfortable , breathable clothing and supportive footwear<br /><br />A mat, water bottle &amp;amp;amp; a small towel<br /><br />Any personal equipment (bands, weights, etc.)',
            'image' => '/images/uploads/IMG_0136.webp',
            'image_description' => '',
            'status' => 'active'
        ]);

        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Fitness Pilates',
            'url_identifier' => 'fitness-pilates',
            'short_description' => 'Fitness Pilates is a group class using the original teachings and principles of Joseph Pilates, delivered in a modern, safe and functional exercise session.',
            'description' => 'Fitness Pilates is a group class using the original teachings &amp; principles of Joseph Pilates, delivered in a modern, safe and functional exercise session.&lt;br /&gt;&lt;br /&gt;It&#039;s an inclusive class designed to strengthen weaker areas of the body, address postural imbalances, improve core and back health and enhance mobility and flexibility.&lt;br /&gt;&lt;br /&gt;The aim of Fitness Pilates is to identify basic postural imbalances and through Pilates based exercises:&lt;br /&gt;• Increase muscular balance and strength&lt;br /&gt;• Improve client&#039;s posture&lt;br /&gt;• Facilitate the client&#039;s ability to optimally function occupationally and recreationally&lt;br /&gt;&lt;br /&gt;My objective is to support you throughout your session. Your experience is unique to you and your capabilities and therefore I am able to adapt the exercises where required, offering regressions and progressions.&lt;br /&gt;&lt;br /&gt;The protocol/objective/theme of the class changes after a six week course to keep it fresh &amp; interesting.&lt;br /&gt;We often use a variety of kit to assist and enhance our Pilates session, small pilates ball, resistance bands, light hand weights and a yoga block. Each new term you will be advised which to bring to class.&lt;br /&gt;&lt;br /&gt;I want you to always enjoy your class and leave feeling like you&#039;ve worked your body in a strong but kind way.&lt;br /&gt;Classes are often set to music and always delivered with an element of fun.',
            'start_date' => '2025-05-31',
            'notes' => 'Please wear comfortable clothing for example:<br />Sports wear<br />Leggings<br />Joggers<br />Shorts<br />T- shirts<br />Pilates socks are an option but not necessary. Bare foot is best for Pilates.<br />JP Fitness has a limited amount of kit and it would be helpful if you are able to purchase your own.<br /><br />Always bring your mat, a small cushion if required, a blanket during the colder months and most importantly, please remember to bring water.',
            'image' => '/images/uploads/IMG_0170.jpeg',
            'image_description' => '',
            'status' => 'active'
        ]);

        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Walkfit',
            'url_identifier' => 'walkfit',
            'short_description' => 'Cardio, class - low or high impact options',
            'description' => 'Walkfit…..it’s a little bit more than walking…it’s a great way to get moving and increase your step count for the day with an average of 4000 steps per 45 minute class.&lt;br /&gt;It’s a combination of line dancing and low impact aerobics. The choreography is designed to be simple to follow, with motivational music ranging from the 60’s through to today’s latest hits.  It’s great fun and incredibly joyful. No kit required, however you could invest in a light set of wrist or hand weights, or ankle weights to increase the intensity of your workout if you wish to.&lt;br /&gt;We start with a gentle warm up and end with standing or mat based cool down with stretches.',
            'start_date' => '2025-06-13',
            'notes' => 'Please wear comfortable clothing and sensible footwear like trainers.<br />A mat is required for floor based cool down and stretches. ( Standing cool down/stretch options if the floor is not accessible for you)',
            'image' => '/images/uploads/IMG_0655.jpeg',
            'image_description' => '',
            'status' => 'active'
        ]);

        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Stability Ball',
            'url_identifier' => 'stability-ball',
            'short_description' => 'Strength and Conditioning',
            'description' => 'Stability ball group exercise class, known also as swiss ball  or yoga ball, is a low impact full body workout class. The class involves the usage of a large inflatable ball to perform variety of exercises which aims to improve strength, balance, posture, and flexibility. &lt;br /&gt;We use bands and weights to increase resistance.&lt;br /&gt;This class typically incorporate movements that engage the core muscles as the stability of the ball requires constant activation to maintain balance. &lt;br /&gt;&lt;br /&gt;',
            'start_date' => '2025-06-13',
            'notes' => 'You will need a yoga mat, stability ball and a set of hand weights',
            'image' => '/images/uploads/IMG_0613.jpeg',
            'image_description' => '',
            'status' => 'active'
        ]);

        FitnessClass::create([
            'category_id' => 1,
            'name' => 'FitSteps',
            'url_identifier' => 'fitsteps',
            'short_description' => 'Dance Fitness - Latin and Ballroom themed',
            'description' => 'FitSteps® is for absolutely everyone! If you love BBC’s &quot;Strictly Come Dancing&quot; you&#039;ll love this fabulous exercise class created by Ian Waite and Natalie Lowe. The dance workout mixes all the moves you see on the show, from the graceful, slow controlled moves of the Rumba and the Waltz, to the fast, energetic steps of the the latin dances, like the Cha Cha Cha, Samba and Jive, plus a lot more!! Transform your body and have fun dancing to music that will get your heart pumping!  It’s a fantastic way to lose weight, get fit and release those happy endorphins, making it a great class for mind as well as body.',
            'start_date' => '2025-06-17',
            'notes' => 'No partner needed to join this class.<br />Please wear comfortable clothing and supportive footwear, such as trainers. A drink to stay hydrated.<br /><br />If you would like to stay for the optional 15-minute stretch session at the end, please bring a yoga mat.',
            'image' => '/images/uploads/IMG_0169.jpeg',
            'image_description' => '',
            'status' => 'active'
        ]);

        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Lean and Strong - Seniors',
            'url_identifier' => 'lean-and-strong-seniors',
            'short_description' => 'Slow and controlled Strength and conditioning class',
            'description' => 'What is Lean &amp; Strong Seniors? Slow and controlled strength and conditioning class for older adults. Supporting bone health, posture, balance and coordination by using weights and resistance bands to improve strength, and help maintain muscle mass. This class can also support healthy weight management. As we age , it’s common to notice a bit more weight around the midsection - particularly visceral fat, which sits deeper around our internal organs and can impact overall health. Incorporating resistance training, like we do in this class, helps boost metabolism, improve cardiovascular health, and support long-term weight control as part of a balanced routine.Standing, chair &amp; mat based options.This is a small group session, allowing me to be more available for any adaptations, regressions or alternative exercises should you need.This class uses an interval style format, guided by motivating music to keep you moving but also allowing for a little rest between sets. It’s structured, uplifting and fun with just the right amount of challenge to help you feel stronger and more confident each week. Consistency is really key.',
            'start_date' => '2025-06-17',
            'notes' => 'Wear comfortable workout clothing and supportive footwear such as trainers.<br />Bring a drink to stay hydrated and a sweat towel.',
            'image' => '/images/uploads/IMG_0168.jpeg',
            'image_description' => '',
            'status' => 'active'
        ]);

        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Flow Pilates',
            'url_identifier' => 'flow-pilates',
            'short_description' => 'Gentle Fitness Pilates',
            'description' => 'Flow Pilates – Gentle Movement for Strength, Flexibility &amp; BalanceFlow Pilates is a calm, low-impact class designed to improve mobility, flexibility, and core strength, while gently supporting balance, posture, and joint health.Through fluid, controlled movements—both on the mat and standing—you’ll build strength and stability in a way that feels natural and kind to your body. A chair can be used for support when needed, making this class adaptable and accessible.We also incorporate simple equipment like bands and balls, to enhance the experience and help you get the most from each session.This is a wonderful class for anyone looking to move more mindfully, feel stronger, and stay mobile—all in a supportive and welcoming environment.',
            'start_date' => '2025-06-17',
            'notes' => 'Wear comfortable clothing. Bare foot or Pilates socks.<br />Please bring your own mat and a cushion if required for comfort.',
            'image' => '/images/uploads/IMG_0180.jpeg',
            'image_description' => '',
            'status' => 'active'
        ]);

        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Circuit training',
            'url_identifier' => 'circuit-training',
            'short_description' => 'Strength - Cardio - Interval Training',
            'description' => '&lt;div class=&quot;relative basis-auto flex-col -mb-(--composer-overlap-px) [--composer-overlap-px:28px] grow flex overflow-hidden&quot;&gt;&lt;div class=&quot;relative h-full&quot;&gt;&lt;div class=&quot;flex h-full flex-col overflow-y-auto @w-xl/main:pt-(--header-height) [scrollbar-gutter:stable_both-edges]&quot;&gt;&lt;div class=&quot;flex flex-col text-sm @w-xl/main:pt-header-height keyboard-open:pb-[calc(var(--composer-height,100px)+var(--screen-keyboard-height,0))] pb-25&quot;&gt;&lt;article class=&quot;text-token-text-primary w-full focus:outline-none [--shadow-height:45px] has-data-writing-block:pointer-events-none has-data-writing-block:-mt-(--shadow-height) has-data-writing-block:pt-(--shadow-height) [&amp;:has([data-writing-block])&gt;*]:pointer-events-auto scroll-mt-[calc(var(--header-height)+min(200px,max(70px,20svh)))]&quot; tabindex=&quot;-1&quot; dir=&quot;auto&quot; data-turn-id=&quot;request-WEB:d8a37d82-3d01-4c69-82d8-ccc2b62639d3-1&quot; data-testid=&quot;conversation-turn-4&quot; data-scroll-anchor=&quot;true&quot; data-turn=&quot;assistant&quot;&gt;&lt;div class=&quot;text-base my-auto mx-auto pb-10 [--thread-content-margin:--spacing(4)] @w-sm/main:[--thread-content-margin:--spacing(6)] @w-lg/main:[--thread-content-margin:--spacing(16)] px-(--thread-content-margin)&quot;&gt;&lt;div class=&quot;[--thread-content-max-width:40rem] @w-lg/main:[--thread-content-max-width:48rem] mx-auto max-w-(--thread-content-max-width) flex-1 group/turn-messages focus-visible:outline-hidden relative flex w-full min-w-0 flex-col agent-turn&quot; tabindex=&quot;-1&quot;&gt;&lt;div class=&quot;flex max-w-full flex-col grow&quot;&gt;&lt;div data-message-author-role=&quot;assistant&quot; data-message-id=&quot;530033d5-6d9d-4b5d-ad58-72c832fcbdf3&quot; dir=&quot;auto&quot; class=&quot;min-h-8 text-message relative flex w-full flex-col items-end gap-2 text-start break-words whitespace-normal [.text-message+&amp;]:mt-1&quot; data-message-model-slug=&quot;gpt-5-1&quot;&gt;&lt;div class=&quot;flex w-full flex-col gap-1 empty:hidden first:pt-[1px]&quot;&gt;&lt;div class=&quot;markdown prose dark:prose-invert w-full break-words dark markdown-new-styling&quot;&gt;&lt;p data-start=&quot;119&quot; data-end=&quot;365&quot;&gt;My circuit training sessions are fun, fast-paced, and designed to boost your strength, fitness, and overall energy. Each class runs for about an hour, starting with a dynamic warm-up and finishing with stretches and flexibility work to cool down.&lt;/p&gt;&lt;p data-start=&quot;367&quot; data-end=&quot;698&quot;&gt;When the weather is good, I take these sessions outdoors; otherwise, we train indoors. You’ll move through a series of stations using battle ropes, slam balls, free weights, resistance bands, core stability balls, an ab roller, and even a hula hoop. Cardio moves like skipping, jumping jacks, and high knees keep the heart rate up.&lt;/p&gt;&lt;p data-start=&quot;700&quot; data-end=&quot;966&quot;&gt;I use an interval format—&lt;strong data-start=&quot;725&quot; data-end=&quot;750&quot;&gt;45–50 seconds of work&lt;/strong&gt; with &lt;strong data-start=&quot;756&quot; data-end=&quot;787&quot;&gt;10–15 seconds to transition&lt;/strong&gt; to the next station—so the workout stays energetic and efficient. It’s a high-energy strength and conditioning class that leaves you feeling strong, confident, and full of oomph.&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/article&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;',
            'start_date' => '2025-06-17',
            'notes' => 'Wear comfortable clothing. Trainers.<br />Layers for outdoor sessions.<br />Water to stay hydrated.<br />Your own mat for stretch.',
            'image' => '/images/uploads/IMG_0172.jpeg',
            'image_description' => '',
            'status' => 'active'
        ]);
        
        FitnessClass::create([
            'category_id' => 1,
            'name' => 'Seated Fitness',
            'url_identifier' => 'seated-fitness',
            'short_description' => 'Seated Fitness',
            'description' => '&lt;p&gt;Seated fitness is a fun, welcoming way to stay active, improve mobility, and build strength — all at your own pace. Designed to be accessible for all abilities, these sessions use gentle, chair-based exercises to help you feel more confident, energised, and supported.&lt;/p&gt;&lt;p&gt;Each class offers a relaxed and sociable atmosphere, making it just as much about enjoying time together as it is about keeping fit. Whether you’re returning to exercise, looking for a low-impact option, or simply want to stay moving in a friendly environment, this class is ideal.&lt;/p&gt;',
            'start_date' => '2025-06-17',
            'notes' => 'Comfortable clothing is recommended and trainers or pumps would be ideal. Bring a drink to stay hydrated, and a cushion for added comfort and support during the session if required.',
            'image' => '/images/uploads/543.jpg',
            'image_description' => '',
            'status' => 'active'
        ]);
    }
}

