<?php

use Illuminate\Database\Seeder;
use App\Models\Config;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $is_exist = Config::all();

        if (!$is_exist->count()) {
            Config::create([
                'id' => 1,
                'code' => 'pageHome',
                'option_key' => 'banner_title',
                'option_value' => 'Learn courses online'
            ]);

            Config::create([
                'id' => 2,
                'code' => 'pageHome',
                'option_key' => 'banner_text',
                'option_value' => 'Learn every topic. On time. Everytime.'
            ]);

            Config::create([
                'id' => 3,
                'code' => 'pageHome',
                'option_key' => 'instructor_text',
                'option_value' => 'We have more than 3,250 skilled & professional Instructors'
            ]);

            Config::create([
                'id' => 4,
                'code' => 'pageHome',
                'option_key' => 'learn_block_title',
                'option_value' => 'Learn every topic, everytime.'
            ]);

            Config::create([
                'id' => 5,
                'code' => 'pageHome',
                'option_key' => 'learn_block_text',
                'option_value' => '
            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.'
            ]);


            Config::create([
                'id' => 6,
                'code' => 'pageAbout',
                'option_key' => 'content',
                'option_value' => '<article class="container">
            <div class="row">
                <div class="col-12">
                   <h5 class="mt-3 underline-heading">OUR MISSION IS SIMPLE</h5>
                   <p>Cobem himself should be a pain, consectetuer adipiscing elit. Aeneans good fortune needs pain. Aeneas
                        mass Together with their companions, the mountains will give birth to feathers and great thrusts, and a ridiculous mouse will be born. Unfortunately
                        how to cook, ultricies and not, kids football, price who, sem. There is no mass effect for anyone.
                        Until the foot is just, let it be a pain in the mind, consectetuer adipiscing elit.</p>
                    <p>Aeneans good fortune needs pain. Jasmine mass. They will give birth to partners who are born strong and powerful
                        mountains, a funny mouse will be born. Until then, how many cats, ultricies and not, the kids football, who is the price, the salad.
                        There is no mass effect for anyone. Until the foot just, fringilla or, aliquet nor, vulputate needs, arcu.
                        For in the just, the age of the rhoncus, as, the imperdiet from, the poison of life, just. There is no such thing as a soccer ball
                        soft The pain itself is very important. Jasmine mass. He was born to his companions
                        the mountains will give birth to feathers and great thrusts, a ridiculous mouse will be born. Until the cat, and not even
                        kids football, price who, sem There is no mass effect for anyone. Until the foot is just right, fringilla
                        or, trucks nor, vulputate needs, bow. For in justice, let him be ready, that he may be scorned by the poison of life.
                        just There is no such thing as a soft-footed soccer ball. Im sorry for the pain,</p>

                    <ul class="ul-no-padding about-ul">
                        <li>The pain needs to be comfortable. Jasmine mass. Together with their partners, they will give birth to strong and powerful forces
                            mountains, a ridiculous mouse will be born. Jasmine mass. He was born to his fellow porters
                            the mountains will give birth to feathers and great thrusts, a ridiculous mouse will be born.</li>
                        <li>While the mountains will give birth to their allies and born with great strength and strength</li>
                        <li>A ridiculous mouse will be born, There is no mass of consequence for anyone, With companions born feathered and large
                            they will give birth to the mountains</li>
                        <li>The pain needs to be comfortable. Jasmine mass. Together with their partners, they will give birth to strong and powerful forces
                            mountains, a ridiculous mouse will be born. Jasmine mass. Born with his companions
                            the mountains will give birth to feathers and great thrusts, a ridiculous mouse will be born.</li>
                        <li>A funny mouse will be born, There is no consequence for anyone</li>
                        <li>When the mountains will give birth to their companions, the feathered ones and the great push, a ridiculous mouse will be born
                            mass effect for anyone</li>
                        <li>Hydrogen storage research. Aeneans good fortune needs pain</li>

                    </ul>
                </div>
            </div>
        </article><article class="count-block jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <h3 class="underline-heading">150</h3>
                    <h6>COUNTRIES REACHED</h6>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <h3 class="underline-heading">850</h3>
                    <h6>COUNTRIES REACHED</h6>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <h3 class="underline-heading">38300</h3>
                    <h6>PASSED GRADUATES</h6>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <h3 class="underline-heading">3400</h3>
                    <h6>COURSES PUBLISHED</h6>
                </div>
            </div>
        </div>
    </article><article class="about-features-block">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center seperator-head mt-3">
                <h3>Why chooseULEARN</h3>
                <p class="mt-3">Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
        </div>
                        <div class="row mt-4 mb-5">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-file-signature"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Hi-Tech Learning </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-users-cog"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Course Discussion </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-shield-alt"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Website Security </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Qualified teachers </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-building"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Equiped class rooms </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-digital-tachograph"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Advanced teaching </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-puzzle-piece"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Adavanced study plans </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-bullseye"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Focus on target </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-thumbs-up"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Focus on success </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-tablet-alt"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Responsive Design </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-credit-card"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">Payment Gateways </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="feature-box mx-auto text-center">
                    <main>
                        <i class="fas fa-search-plus"></i>
                        <div class="col-md-12">
                            <h6 class="instructor-title">SEO Friendly </h6>
                            <p>Aenean massa. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                        </div>
                    </main>
                </div>
            </div>
                        </div>
    </div>
</article>'
            ]);


            Config::create([
                'id' => 7,
                'code' => 'pageContact',
                'option_key' => 'telephone',
                'option_value' => '+61 (800) 123-54323'
            ]);

            Config::create([
                'id' => 8,
                'code' => 'pageContact',
                'option_key' => 'email',
                'option_value' => 'XYZ@example.com'
            ]);

            Config::create([
                'id' => 9,
                'code' => 'pageContact',
                'option_key' => 'address',
                'option_value' => '8432 Newyork United States'
            ]);

            Config::create([
                'id' => 10,
                'code' => 'pageContact',
                'option_key' => 'map',
                'option_value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.940622898076!2d-74.00543578509465!3d40.74133204375838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf14f1f51f%3A0xcc1b5ab35bd75df0!2sGoogle!5e0!3m2!1sen!2sin!4v1542693598934" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>'
            ]);

            Config::create([
                'id' => 11,
                'code' => 'settingGeneral',
                'option_key' => 'application_name',
                'option_value' => 'ULEARN'
            ]);

            Config::create([
                'id' => 12,
                'code' => 'settingGeneral',
                'option_key' => 'meta_key',
                'option_value' => 'Learn courses online'
            ]);

            Config::create([
                'id' => 13,
                'code' => 'settingGeneral',
                'option_key' => 'meta_description',
                'option_value' => 'Learn every topic. On time. Every time.'
            ]);

            Config::create([
                'id' => 14,
                'code' => 'settingGeneral',
                'option_key' => 'admin_commission',
                'option_value' => '20'
            ]);

            Config::create([
                'id' => 15,
                'code' => 'settingGeneral',
                'option_key' => 'admin_email',
                'option_value' => 'admin@KIAN.com'
            ]);

            Config::create([
                'id' => 16,
                'code' => 'settingGeneral',
                'option_key' => 'minimum_withdraw',
                'option_value' => '100'
            ]);

            Config::create([
                'id' => 17,
                'code' => 'settingGeneral',
                'option_key' => 'header_logo',
                'option_value' => 'config/logo.png'
            ]);

            Config::create([
                'id' => 18,
                'code' => 'settingGeneral',
                'option_key' => 'fav_icon',
                'option_value' => 'config/favicon.ico'
            ]);

            Config::create([
                'id' => 19,
                'code' => 'settingGeneral',
                'option_key' => 'footer_logo',
                'option_value' => 'config/logo_footer.png'
            ]);

            Config::create([
                'id' => 20,
                'code' => 'settingPayment',
                'option_key' => 'username',
                'option_value' => ''
            ]);

            Config::create([
                'id' => 21,
                'code' => 'settingPayment',
                'option_key' => 'password',
                'option_value' => ''
            ]);

            Config::create([
                'id' => 22,
                'code' => 'settingPayment',
                'option_key' => 'signature',
                'option_value' => ''
            ]);

            Config::create([
                'id' => 23,
                'code' => 'settingPayment',
                'option_key' => 'test_mode',
                'option_value' => '1'
            ]);

            Config::create([
                'id' => 24,
                'code' => 'settingPayment',
                'option_key' => 'is_active',
                'option_value' => '1'
            ]);

            Config::create([
                'id' => 25,
                'code' => 'settingEmail',
                'option_key' => 'smtp_host',
                'option_value' => NULL
            ]);

            Config::create([
                'id' => 26,
                'code' => 'settingEmail',
                'option_key' => 'smtp_port',
                'option_value' => NULL
            ]);

            Config::create([
                'id' => 27,
                'code' => 'settingEmail',
                'option_key' => 'smtp_secure',
                'option_value' => NULL
            ]);

            Config::create([
                'id' => 28,
                'code' => 'settingEmail',
                'option_key' => 'smtp_username',
                'option_value' => NULL
            ]);

            Config::create([
                'id' => 29,
                'code' => 'settingEmail',
                'option_key' => 'smtp_password',
                'option_value' => NULL
            ]);
        }
    }
}
