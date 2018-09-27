<?php
// TEMPLATE: HOME
get_header(); ?>

<?php if( have_rows('builder_gp') ): while ( have_rows('builder_gp') ) : the_row(); ?>


<?php if( get_row_layout() == 'main_slider' ): ?>
<!-- SECTION SLDIER -->
<div class="main-slider" style="background-image: url('<?php the_sub_field('obraz_w_tle');?>')">
    <div class="content"><?php the_sub_field('obraz_w_tle_tekst'); ?></div>
</div>

<!-- section content column -->
<?php elseif( get_row_layout() == 'tekst_2_kol' ): ?>

<div id="konferencja" class="two-columns" style="background-color:<?php the_sub_field('kolor_tla'); ?>">
<?php if( have_rows('tekst_2_kolumny') ): while ( have_rows('tekst_2_kolumny') ) : the_row(); ?>
    <div class="row">
        <div class="col col-12 col-md-6"><?php the_sub_field('kolumna_lewa'); ?></div>
        <div class="col col-12 col-md-6"><?php the_sub_field('kolumna_prawa'); ?></div>
    </div>
<?php endwhile; endif;?>
</div>

<!-- section 2 KOLUMNS: CONTENT+IMG -->
<?php elseif( get_row_layout() == '2_kolumny_tekst_obraz' ): ?>
<div class="column__content-image">
    <div class="row img-<?php the_sub_field('pozycja_obrazu'); ?>">
        <div class="col-content col col-12 col-lg-6"><?php the_sub_field('2_kolumny_tekst_obraz_tekst'); ?></div>
        <div class="col-img col col-12 col-lg-6">
		<div class="img-parallax" style="background-image: url('<?php the_sub_field("2_kolumny_tekst_obraz_obraz"); ?>')"></div>
	</div>
    </div>
</div>

<!-- section SPONSORZY: IMG COLUMNS -->
<?php elseif( get_row_layout() == 'sponsorzy' ): ?>
<div class="section-partners" id="sponsorzy">
<h2 class="partners__title">Sponsorzy</h2>
<ul class="partners__list">
    <?php if( have_rows('sponsorzy_lista_sponsorow') ): while ( have_rows('sponsorzy_lista_sponsorow') ) : the_row(); ?>
        <li class="partners__item"><img class="partners__img" src="<?php the_sub_field('sponsorzy_lista_sponsorow_logo'); ?>" alt=""></li>
<?php endwhile; endif;?>
    </ul>
</div>


<!-- section KOLUMNY -->
<?php elseif( get_row_layout() == 'kolumny' ): ?>
    <?php if( get_sub_field('kolumny_background') == 'kolortla' ): ?>
        <div id="maraton" class="section-columns" style="background-color:<?php the_sub_field('kolumny_kolor_tla'); ?>">
    <?php elseif( get_sub_field('kolumny_background') == 'obrazwtle' ): ?>
        <div id="maraton" class="section-columns" style="background-image: url('<?php the_sub_field('kolumny_bgi'); ?>')">
    <?php endif; ?>
        <div class="row">
        <?php if( have_rows('kolumny_kolumna') ): while ( have_rows('kolumny_kolumna') ) : the_row(); ?>
            <?php if( get_sub_field('obraz_czy_tekst') == 'tekst' ): ?>
                <div class="col-content col col-12 col-lg-6"><?php the_sub_field('kolumna_tekst'); ?></div>
            <?php elseif( get_sub_field('obraz_czy_tekst') == 'obraz' ): ?>
                <div class="col-img col col-12 col-lg-6" style="background-image: url('<?php the_sub_field("kolumna_obraz"); ?>')"></div>
            <?php endif;?>
        <?php endwhile; endif;?>
    </div>
</div>

<?php elseif( get_row_layout() == 'bilety' ): ?>
<!-- // setion BILETY -->
<div class="section-ticket" id="oplaty-zjazdowe">
    <div class="ticket__col ticket__col-left">
        <div class="ticket-list">
            <?php if( have_rows('bilet_zwykly') ): while ( have_rows('bilet_zwykly') ) : the_row(); ?>
                <div class="ticket__item">
                    <h2 class="ticket__title"><?php the_sub_field('bilet_zwykly_tytul'); ?></h2>
                    <div class="ticket__date"><?php the_sub_field('bilet_zwykly_data'); ?></div>
                    <div class="ticket__wrapper">
                        <div class="ticket__desc"><?php the_sub_field("bilet_zwykly_opis"); ?></div>
                        <div class="ticket_dropdown">
                            <div>Rodzaj oplaty</div>
                            <select name="" id="select_discount">
                                <?php if( have_rows('bilet_zwykly_znizka') ): while ( have_rows('bilet_zwykly_znizka') ) : the_row(); ?>
                                    <option value="<?php the_sub_field("bilet_zwykly_cena"); ?>"><?php the_sub_field("bilet_zwykly_nazwa"); ?></option>
                                <?php endwhile; endif;?>
                            </select>
                        </div>
                        <div class="ticket__price">550 PLN</div>
                        <div class="btn-wrapper">
                            <a class="btn-link" href="<?php the_sub_field("ticket_url"); ?>">Przejdz do rejestracji</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif;?>
        </div>
        <div class="ticket__extra-list">
            <hr/>
            <h2 class="extra-list__title">Dodatkowe stawki</h2>
            <div class="row extra-list__list">
                <div class="extra-list__col price-food col-12 col-md-6">
                    <div class="price-food__item row">
                        <div class="col-3 price-food__icon"><img src="<?php the_sub_field("dodatkowe_stawki_posilki_ikona"); ?>" /></div>
                        <div class="col-9 price-food__cont"><?php the_sub_field("dodatkowe_stawki_posilki"); ?></div>
                    </div>
                </div>
                <div class="extra-list__col col-12 col-md-6">
                    <?php if( have_rows('dodatkowe_stawki') ): while ( have_rows('dodatkowe_stawki') ) : the_row(); ?>
                        <div class="extra-list__item row">
                            <div class="extra-list__icon col-3"><img src="<?php the_sub_field('dodatkowe_stawki_ikona'); ?>" /></div>
                            <div class="extra-list__cont col-9"><?php the_sub_field("dodatkowe_stawki_tekst"); ?></div>
                        </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
            <div class="ticket__netto">Wszystkie podane ceny sa cenami netto</div>
        </div>
    </div>
    <?php if( have_rows('bilet_all_inclusive') ): while ( have_rows('bilet_all_inclusive') ) : the_row(); ?>
        <div class="ticket__col ticket__col-right">
            <div class="ticket__item">
                <h2 class="ticket__title"><?php the_sub_field('ticket_tytul'); ?></h2>
                <div class="ticket__date"><?php the_sub_field('ticket_date'); ?></div>
		        <div class="ticket__variations">
                    <?php if( have_rows('ilosc_osob') ): while ( have_rows('ilosc_osob') ) : the_row(); ?>
			        <div class="ticket__detail">
                        <div class="variations__title">
                            <div><?php the_sub_field('dla_ilu_osob'); ?></div>
                        </div>
                        <div class="ticket__info">
                            <div class="ticket__desc"><?php the_sub_field("ticket_opis"); ?></div>
                            <div class="ticket__price"><?php the_sub_field("ticket_cena"); ?></div>
                        </div>
			        </div>
                    <?php endwhile; endif;?>
                </div>
                <div class="btn-wrapper">
                    <a class="btn-link" href="<?php the_sub_field("ticket_url"); ?>">Przejdz do rejestracji</a>
                </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif;?>
</div>

<?php elseif( get_row_layout() == 'kalendarz' ): ?>
<!-- SECTION KALENDARZ -->
<div id="program" class="section-calendar">
    <?php if( have_rows('kalendarz_dzien') ): while ( have_rows('kalendarz_dzien') ) : the_row(); ?>
        <div class="calendar__row">
            <div class="calendar__date">
                <div class="wrapper">
                    <div class="calendar__day"><?php the_sub_field("kalendarz_podaj_dzien"); ?></div>
                    <span><?php the_sub_field("kalendarz_data"); ?></span>
                </div>
            </div>
            <div class="row">
                <?php if( have_rows('kalendarz_sala') ): while ( have_rows('kalendarz_sala') ) : the_row(); ?>
                    <div class="calendar__column col-12 col-lg-2">
                        <div class="calendar__loc-item"><?php the_sub_field("kalendarz_nazwa_sali"); ?></div>
                        <ul class="calendar__list">
                            <?php if( have_rows('kalendarz_kolumna') ): while ( have_rows('kalendarz_kolumna') ) : the_row(); ?>
                                <li class="calendar__list-item"><?php the_sub_field("kalendarz_wiersz"); ?></li>
                            <?php endwhile; endif;?>
                        </ul>
                    </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    <?php endwhile; endif;?>
</div>

<?php elseif( get_row_layout() == 'map' ): ?>
<!-- SECTION MAPS -->
<div id="lokalizacja" class="section-map">
	<div class="map" id="map">
		<script>
            function initMap() {
            var myLatLng = {lat: 49.2946909, lng: 19.931194900000037};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: myLatLng
            });
            var image ='<?php echo esc_url( get_template_directory_uri() ); ?>/img/pin.svg'
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
            icon: image
            });
            }
		</script>
    </div>
	<div class="map__address"><?php the_sub_field("adres"); ?></div>
</div>

<?php endif; ?>
<?php endwhile; endif; ?>

<div class="contact" id="kontakt">
    <div class="contact__wrapper row">
        <div class="contact__info contact__col col-12 col-lg-6">
            <h2 contact__title>Kontakt</h2>
            <?php the_field("contact_content",'option'); ?>
        </div>
        <div class="contact__form contact__col col-12 col-lg-6">
            <h4 class="form__title">Formularz kontaktowy</h4>
            <?php the_field("contact_form", 'option'); ?>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOYqQpxW0Z1C9wduP9CA3wSq7VnvMOvsw&callback=initMap"></script>
<?php get_footer(); ?>