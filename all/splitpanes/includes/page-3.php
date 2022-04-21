    <section class="accordion-tabs">
    <button class="accordion-tab accordion-active" data-actab-group="8" data-actab-id="8">Emir Defteri</button>
    <button class="accordion-tab" data-actab-group="8" data-actab-id="9">Son İşlemler</button>
</section>
    <section class="accordion-content">
    <article class="accordion-item accordion-active" data-actab-group="8" data-actab-id="8">
        <h4 class="accordion-item__label">
            <div class="ilksira">
                <div class="ufakyazikap">
                    <div class="ufak-yazi" style="color: #b0b8db;">Emir Fiyatı</div>
                </div>
                <div class="ufakyazikapi">
                    <div class="ufak-yazi" style="color: #b0b8db;">Miktar</div>
                </div>
                <div class="ufakyazikapi">
                    <div class="ufak-yazi" style="color: #b0b8db;">Toplam</div>
                </div>
            </div>

            <?
            //$Arda = 'Arda';
            //$Seyda = 'Şeyda';
            //$Ramazan = 'Ramazane';

            $SatirDizisi = ['ED' => '3.0538', 'M' => '189.228', 'T' => '4562.34'];
            $SatirDizisi2 = ['ED' => '3.2135', 'M' => '31.1294', 'T' => '13.1245'];
            $SatirDizisi3 = ['ED' => '3.0212', 'M' => '29.234', 'T' => '7.12353'];
            $SatirDizisi4 = ['ED' => '3.0124', 'M' => '221.356', 'T' => '5.72123'];
            $SatirDizisi5 = ['ED' => '3.1524', 'M' => '53.543', 'T' => '723.623'];
            $SatirDizisi6 = ['ED' => '3.1231', 'M' => '524.535', 'T' => '987.354'];
            $SatirDizisi7 = ['ED' => '3.2235', 'M' => '621.21', 'T' => '838.5432'];
            $SatirDizisi8 = ['ED' => '3.4254', 'M' => '34.2222', 'T' => '53.1245'];
            $SatirDizisi9 = ['ED' => '3.1246', 'M' => '180.0301', 'T' => '23.16413'];


            //$foreach_page = [$SatirDizisi, $SatirDizisi2,$SatirDizisi];
            for($i=0;$i<4;$i++) {
                $foreach_page5[] = $SatirDizisi;
                $foreach_page5[] = $SatirDizisi2;
                $foreach_page5[] = $SatirDizisi3;
                $foreach_page5[] = $SatirDizisi4;
                $foreach_page5[] = $SatirDizisi5;
                $foreach_page5[] = $SatirDizisi6;
                $foreach_page5[] = $SatirDizisi7;
                $foreach_page5[] = $SatirDizisi8;
                $foreach_page5[] = $SatirDizisi9;
            }

            //echo '<pre>';print_r($satır);
            foreach ($foreach_page5 as $indis=>$satır) {
                ?>
                <div class="ilksira">
                <div class="ufakyazikap">
                    <div class="ufak-yazi" style="color:#00B464;;  margin-left: 3px; font-size: 12px;"><? echo $satır['ED'] ?></div>
                </div>
                <div class="ufakyazikapi">
                    <div class="ufak-yazi" style="font-size: 12px;"><? echo $satır['M'] ?></div>
                </div>
                <div class="ufakyazikapi">
                    <div class="ufak-yazi" style=" font-size: 12px;"><? echo $satır['T'] ?></div>
                </div>
                </div>
                <?
            }
            ?>
        </h4>
        <div class="accordion-item__container"></div>
    </article>
</section>
    <article class="accordion-item" data-actab-group="8" data-actab-id="9">
    <h4 class="accordion-item__label">
        <div class="ilksira">
            <div class="ufakyazikap">
                <div class="ufak-yazi" style="color: #b0b8db">Tarih</div>
            </div>
            <div class="ufakyazikapi">
                <div class="ufak-yazi" style="color: #b0b8db">Emir Fiyatı</div>
            </div>
            <div class="ufakyazikapi">
                <div class="ufak-yazi" style="color: #b0b8db">Miktar</div>
            </div>
        </div>

        <?
        //$Arda = 'Arda';
        //$Seyda = 'Şeyda';
        //$Ramazan = 'Ramazane';

        $SatirDizisi = ['T' => '09:57:41', 'EM' => '3.0246', 'M' => '9.2400'];
        $SatirDizisi2 = ['T' => '09:56:20', 'EM' => '3.0081', 'M' => '2.9999'];
        $SatirDizisi3 = ['T' => '09:54:26', 'EM' => '3.6136', 'M' => '7.1232'];
        $SatirDizisi4 = ['T' => '09:50:54', 'EM' => '3.7131', 'M' => '5.7212'];
        $SatirDizisi5 = ['T' => '09:42:11', 'EM' => '3.6123', 'M' => '7.6223'];
        $SatirDizisi6 = ['T' => '09:32:31', 'EM' => '3.0012', 'M' => '18.2354'];
        $SatirDizisi7 = ['T' => '09:28:37', 'EM' => '3.0053', 'M' => '8.5432'];
        $SatirDizisi8 = ['T' => '09:17:29', 'EM' => '3.0512', 'M' => '3.1245'];
        $SatirDizisi9 = ['T' => '09:16:57', 'EM' => '3.8525', 'M' => '23.1613'];


        //$foreach_page = [$SatirDizisi, $SatirDizisi2,$SatirDizisi];
        for($i=0;$i<4;$i++) {
            $foreach_page6[] = $SatirDizisi;
            $foreach_page6[] = $SatirDizisi2;
            $foreach_page6[] = $SatirDizisi3;
            $foreach_page6[] = $SatirDizisi4;
            $foreach_page6[] = $SatirDizisi5;
            $foreach_page6[] = $SatirDizisi6;
            $foreach_page6[] = $SatirDizisi7;
            $foreach_page6[] = $SatirDizisi8;
            $foreach_page6[] = $SatirDizisi9;
        }

        //echo '<pre>';print_r($satır);
        foreach ($foreach_page6 as $indis=>$satır) {
            ?>
            <div class="ilksira">
                <div class="ufakyazikap">
                    <div class="ufak-yazi" style="color: #b0b8db;  margin-left: 3px; font-size: 12px;"><? echo $satır['T'] ?></div>
                </div>
                <div class="ufakyazikapi">
                    <div class="ufak-yazi" style="font-size: 12px; color: #FA4D56"><? echo $satır['EM'] ?></div>
                </div>
                <div class="ufakyazikapi">
                    <div class="ufak-yazi" style=" font-size: 12px;"><? echo $satır['M'] ?></div>
                </div>
            </div>
            <?
        }
        ?>

    </h4>
    <div class="accordion-item__container"></div>
</article>