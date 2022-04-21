<div class="pane-one">
    <section class="accordion">
        <section class="accordion-tabs">
            <button class="accordion-tab accordion-active" data-actab-group="4" data-actab-id="4">USDT</button>
            <button class="accordion-tab" data-actab-group="4" data-actab-id="5">HT</button>
            <button class="accordion-tab" data-actab-group="4" data-actab-id="6">BTC</button>
            <button class="accordion-tab" data-actab-group="4" data-actab-id="7">ETH</button>
        </section>
        <section class="accordion-content">
            <article class="accordion-item accordion-active" data-actab-group="4" data-actab-id="4">
                <h4 class="accordion-item__label">
                    <div class="ilksira">
                        <div class="ufakyazikap">
                            <a href="#">
                                <div class="ufak-yazi" style="color: #b0b8db;">Para Birimi</div>
                            </a>
                        </div>
                        <div class="ufakyazikapi">
                            <a href="#">
                                <div class="ufak-yazi" style="color: #b0b8db;">Son Fiyatı</div>
                            </a>
                        </div>
                        <div class="ufakyazikapi">
                            <a href="#">
                                <div class="ufak-yazi" style="color: #b0b8db;">Değişim</div>
                            </a>
                        </div>
                    </div>


                    <?

                    $SatirDizisi = ['PB' => 'BTC', 'SF' => '4614.28', 'D' => -3.97];
                    $SatirDizisi2 = ['PB' => 'ETH', 'SF' => '3242.94', 'D' => -4.01];
                    $SatirDizisi3 = ['PB' => 'HT', 'SF' => '9.2234', 'D' => 0.34];
                    $SatirDizisi4 = ['PB' => 'DOT', 'SF' => '21.0356', 'D' => 3.74];
                    $SatirDizisi5 = ['PB' => 'XPR', 'SF' => '0.82543', 'D' => -0.24];
                    $SatirDizisi6 = ['PB' => 'BCH', 'SF' => '324.35', 'D' => 2.32];
                    $SatirDizisi7 = ['PB' => 'XMR', 'SF' => '43.562', 'D' => 0.325];
                    $SatirDizisi8 = ['PB' => 'TRX', 'SF' => '494.11', 'D' => 1.22];
                    $SatirDizisi9 = ['PB' => 'PAX', 'SF' => '0.301', 'D' => 0.1963];

                    //$foreach_page = [$SatirDizisi, $SatirDizisi2,$SatirDizisi];
                    for($i=0;$i<8;$i++) {
                        $foreach_page[] = $SatirDizisi;
                        $foreach_page[] = $SatirDizisi2;
                        $foreach_page[] = $SatirDizisi3;
                        $foreach_page[] = $SatirDizisi4;
                        $foreach_page[] = $SatirDizisi5;
                        $foreach_page[] = $SatirDizisi6;
                        $foreach_page[] = $SatirDizisi7;
                        $foreach_page[] = $SatirDizisi8;
                        $foreach_page[] = $SatirDizisi9;
                    }

                    //echo '<pre>';print_r($satır);
                    foreach ($foreach_page as $indis=>$satır) {

                        $DegisimDegeri=$satır['D'];
                        $ClassRenkKirmiziYesil='renk_kirmizi';
                        if($DegisimDegeri>0){
                            $ClassRenkKirmiziYesil='renk_yesil';
                        }

                        ?>
                        <a href="#">
                            <div class="ilksira">
                                <div class="ufakyazikap">
                                    <i class="bi bi-star-fill"
                                       style="font-size: 12px; color: #b0b8db; margin-left: 1px;"></i>
                                    <div class="ufak-yazi"
                                         style="color: #b0b8db;  margin-left: 3px; font-size: 12px;"><? echo $satır['PB'] ?> </div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi" style="font-size: 12px;"><? echo $satır['SF'] ?></div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi <?=$ClassRenkKirmiziYesil?>"
                                         style=" font-size: 12px;"><? echo $satır['D'].'%' ?></div>
                                </div>
                            </div>
                        </a>
                        <?
                    }
                    ?>

                </h4>
                <div class="accordion-item__container"></div>
            </article>
        </section>
        <section class="accordion-content">
            <article class="accordion-item" data-actab-group="4" data-actab-id="5">
                <h4 class="accordion-item__label">
                    <a href="#">
                        <div class="ilksira">
                            <div class="ufakyazikap">
                                <div class="ufak-yazi" style="color: #b0b8db">Para Birimi</div>
                            </div>
                            <div class="ufakyazikapi">
                                <div class="ufak-yazi" style="color: #b0b8db">Son Fiyatı</div>
                            </div>
                            <div class="ufakyazikapi">
                                <div class="ufak-yazi" style="color: #b0b8db">Değişim</div>
                            </div>
                        </div>
                    </a>

                    <?

                    $SatirDizisi = ['PB' => 'XPR', 'SF' => '0.82543', 'D' => -0.24];
                    $SatirDizisi2 = ['PB' => 'BCH', 'SF' => '324.35', 'D' => 2.32];
                    $SatirDizisi3 = ['PB' => 'XMR', 'SF' => '43.562', 'D' => 0.325];
                    $SatirDizisi4= ['PB' => 'BTC', 'SF' => '4614.28', 'D' => -3.97];
                    $SatirDizisi5 = ['PB' => 'ETH', 'SF' => '3242.94', 'D' => -4.00];
                    $SatirDizisi6 = ['PB' => 'TRX', 'SF' => '494.11', 'D' => 1.22];
                    $SatirDizisi7 = ['PB' => 'PAX', 'SF' => '0.301', 'D' => 0.1963];
                    $SatirDizisi8 = ['PB' => 'HT', 'SF' => '9.2234', 'D' => 0.34];
                    $SatirDizisi9 = ['PB' => 'DOT', 'SF' => '21.0356', 'D' => 3.74];

                    //$foreach_page = [$SatirDizisi, $SatirDizisi2,$SatirDizisi];
                    for($i=0;$i<8;$i++) {
                        $foreach_page2[] = $SatirDizisi;
                        $foreach_page2[] = $SatirDizisi2;
                        $foreach_page2[] = $SatirDizisi3;
                        $foreach_page2[] = $SatirDizisi4;
                        $foreach_page2[] = $SatirDizisi5;
                        $foreach_page2[] = $SatirDizisi6;
                        $foreach_page2[] = $SatirDizisi7;
                        $foreach_page2[] = $SatirDizisi8;
                        $foreach_page2[] = $SatirDizisi9;
                    }

                    //echo '<pre>';print_r($satır);
                    foreach ($foreach_page2 as $indis=>$satır) {

                        $DegisimDegeri=$satır['D'];
                        $ClassRenkKirmiziYesil='renk_kirmizi';
                        if($DegisimDegeri>0){
                            $ClassRenkKirmiziYesil='renk_yesil';
                        }

                        ?>
                        <a href="#">
                            <div class="ilksira">
                                <div class="ufakyazikap">
                                    <i class="bi bi-star-fill"
                                       style="font-size: 12px; color: #b0b8db; margin-left: 1px;"></i>
                                    <div class="ufak-yazi"
                                         style="color: #b0b8db;  margin-left: 3px; font-size: 12px;"><? echo $satır['PB'] ?> </div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi" style="font-size: 12px;"><? echo $satır['SF'] ?></div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi <?=$ClassRenkKirmiziYesil?>"
                                         style=" font-size: 12px;"><? echo $satır['D'].'%' ?></div>
                                </div>
                            </div>
                        </a>
                        <?
                    }
                    ?>

                </h4>
                <div class="accordion-item__container"></div>
            </article>
        </section>
        <section class="accordion-content">
            <article class="accordion-item" data-actab-group="4" data-actab-id="6">
                <h4 class="accordion-item__label">
                    <a href="#">
                        <div class="ilksira">
                            <div class="ufakyazikap">
                                <div class="ufak-yazi" style="color: #b0b8db">Para Birimi</div>
                            </div>
                            <div class="ufakyazikapi">
                                <div class="ufak-yazi" style="color: #b0b8db">Son Fiyatı</div>
                            </div>
                            <div class="ufakyazikapi">
                                <div class="ufak-yazi" style="color: #b0b8db">Değişim</div>
                            </div>
                        </div>
                    </a>

                    <?

                    $SatirDizisi = ['PB' => 'PAX', 'SF' => '0.301', 'D' => 0.1963];
                    $SatirDizisi2 = ['PB' => 'BCH', 'SF' => '324.35', 'D' => 2.32];
                    $SatirDizisi3 = ['PB' => 'XMR', 'SF' => '43.562', 'D' => 0.325];
                    $SatirDizisi4= ['PB' => 'BTC', 'SF' => '4614.28', 'D' => -3.97];
                    $SatirDizisi5 = ['PB' => 'HT', 'SF' => '9.2234', 'D' => 0.34];
                    $SatirDizisi6 = ['PB' => 'DOT', 'SF' => '21.0356', 'D' => 3.74];
                    $SatirDizisi7 = ['PB' => 'XPR', 'SF' => '0.82543', 'D' => -0.24];
                    $SatirDizisi8 = ['PB' => 'ETH', 'SF' => '3242.94', 'D' => -4.00];
                    $SatirDizisi9 = ['PB' => 'TRX', 'SF' => '494.11', 'D' => 1.22];

                    //$foreach_page = [$SatirDizisi, $SatirDizisi2,$SatirDizisi];
                    for($i=0;$i<8;$i++) {
                        $foreach_page3[] = $SatirDizisi;
                        $foreach_page3[] = $SatirDizisi2;
                        $foreach_page3[] = $SatirDizisi3;
                        $foreach_page3[] = $SatirDizisi4;
                        $foreach_page3[] = $SatirDizisi5;
                        $foreach_page3[] = $SatirDizisi6;
                        $foreach_page3[] = $SatirDizisi7;
                        $foreach_page3[] = $SatirDizisi8;
                        $foreach_page3[] = $SatirDizisi9;
                    }

                    //echo '<pre>';print_r($satır);
                    foreach ($foreach_page3 as $indis=>$satır) {

                        $DegisimDegeri=$satır['D'];
                        $ClassRenkKirmiziYesil='renk_kirmizi';
                        if($DegisimDegeri>0){
                            $ClassRenkKirmiziYesil='renk_yesil';
                        }

                        ?>
                        <a href="#">
                            <div class="ilksira">
                                <div class="ufakyazikap">
                                    <i class="bi bi-star-fill"
                                       style="font-size: 12px; color: #b0b8db; margin-left: 1px;"></i>
                                    <div class="ufak-yazi"
                                         style="color: #b0b8db;  margin-left: 3px; font-size: 12px;"><? echo $satır['PB'] ?> </div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi" style="font-size: 12px;"><? echo $satır['SF'] ?></div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi <?=$ClassRenkKirmiziYesil?>"
                                         style=" font-size: 12px;"><? echo $satır['D'].'%' ?></div>
                                </div>
                            </div>
                        </a>
                        <?
                    }
                    ?>
                </h4>
                <div class="accordion-item__container"></div>
            </article>
        </section>
        <section class="accordion-content">
            <article class="accordion-item" data-actab-group="4" data-actab-id="7">
                <h4 class="accordion-item__label">
                    <a href="#">
                        <div class="ilksira">
                            <div class="ufakyazikap">
                                <div class="ufak-yazi" style="color: #b0b8db">Para Birimi</div>
                            </div>
                            <div class="ufakyazikapi">
                                <div class="ufak-yazi" style="color: #b0b8db">Son Fiyatı</div>
                            </div>
                            <div class="ufakyazikapi">
                                <div class="ufak-yazi" style="color: #b0b8db">Değişim</div>
                            </div>
                        </div>
                    </a>

                    <?

                    $SatirDizisi = ['PB' => 'TRX', 'SF' => '494.11', 'D' => 1.22];
                    $SatirDizisi2 = ['PB' => 'PAX', 'SF' => '0.301', 'D' => 0.1963];
                    $SatirDizisi3= ['PB' => 'BTC', 'SF' => '4614.28', 'D' => -3.97];
                    $SatirDizisi4 = ['PB' => 'ETH', 'SF' => '3242.94', 'D' => -4.00];
                    $SatirDizisi5 = ['PB' => 'BCH', 'SF' => '324.35', 'D' => 2.32];
                    $SatirDizisi6 = ['PB' => 'XMR', 'SF' => '43.562', 'D' => 0.325];
                    $SatirDizisi7 = ['PB' => 'HT', 'SF' => '9.2234', 'D' => 0.34];
                    $SatirDizisi8 = ['PB' => 'DOT', 'SF' => '21.0356', 'D' => 3.74];
                    $SatirDizisi9 = ['PB' => 'XPR', 'SF' => '0.82543', 'D' => -0.24];


                    //$foreach_page = [$SatirDizisi, $SatirDizisi2,$SatirDizisi];
                    for($i=0;$i<8;$i++) {
                        $foreach_page4[] = $SatirDizisi;
                        $foreach_page4[] = $SatirDizisi2;
                        $foreach_page4[] = $SatirDizisi3;
                        $foreach_page4[] = $SatirDizisi4;
                        $foreach_page4[] = $SatirDizisi5;
                        $foreach_page4[] = $SatirDizisi6;
                        $foreach_page4[] = $SatirDizisi7;
                        $foreach_page4[] = $SatirDizisi8;
                        $foreach_page4[] = $SatirDizisi9;
                    }

                    //echo '<pre>';print_r($satır);
                    foreach ($foreach_page4 as $indis=>$satır) {

                        $DegisimDegeri=$satır['D'];
                        $ClassRenkKirmiziYesil='renk_kirmizi';
                        if($DegisimDegeri>0){
                            $ClassRenkKirmiziYesil='renk_yesil';
                        }

                        ?>
                        <a href="#">
                            <div class="ilksira">
                                <div class="ufakyazikap">
                                    <i class="bi bi-star-fill"
                                       style="font-size: 12px; color: #b0b8db; margin-left: 1px;"></i>
                                    <div class="ufak-yazi"
                                         style="color: #b0b8db;  margin-left: 3px; font-size: 12px;"><? echo $satır['PB'] ?> </div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi" style="font-size: 12px;"><? echo $satır['SF'] ?></div>
                                </div>
                                <div class="ufakyazikapi">
                                    <div class="ufak-yazi <?=$ClassRenkKirmiziYesil?>"
                                         style=" font-size: 12px;"><? echo $satır['D'].'%' ?></div>
                                </div>
                            </div>
                        </a>
                        <?
                    }
                    ?>
                </h4>
                <div class="accordion-item__container"></div>
            </article>
        </section>

    </section>
</div>