<?php require_once LIB_PATH."initialize.php"; ?>

<section>
    <div class="photo-and-text">
        <div class="left-small">
            <div class="photo-container">
                <div class="figure" style="background-image: url('<?php echo URL; ?>public/img/bathroom_02.jpg');"></div>
            </div>
        </div>
        <div class="right-big">
            <div class="text">
                <h1>Lösungen für grosse und kleine Bäder.</h1>
                <p>
                    Badezimmer und Gästebad – gestalterisch gesehen, sind es zwei völlig ungleiche Räume. In Badezimmern ziehen Menschen sich zurück, das Element Wasser ist dominant, es ist ein Ort der Ruhe, der Pflege. Dies hat Einfluss auf die Wahl der Wand- und Bodenbeläge, der Farbentscheidung und auch die Haptik der Materialien spielt eine sehr wichtige Rolle.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="text-mid">
    <h2>Überraschendes Design im Gäste-Bad.</h2>
    <p>
        Im Gäste-Bad rate ich experimentierfreudigen Bauherren gerne zur ungewöhnlicheren, optischen Gestaltungselementen: Extravagante Einbauten, Materialien oder Farben dürfen überraschen. Das Gäste-Bad ist ein Ort, an dem sich niemand lange aufhält, entsprechend wird man des Designs nicht schnell überdrüssig.
    </p>
</section>

<section class="full-size">
    <?php buildGallery("bathroom_01", "bathroom_03"); ?>
</section>

<section class="text-mid">
    <h2>Lichtquellen im Bad.</h2>
    <p>
        Große Bedeutung hat im Bad die Lichtplanung -  egal ob Tages- oder aber auch Kunstlicht – sie sollte den besonderen Anforderungen entsprechen.
    </p>
</section>

<section class="full-size">
    <?php buildGallery("bathroom_04", "bathroom_05"); ?>
</section>

<section class="full-size">
    <div class="big-photo">
        <div style="background-image: url('<?php echo URL; ?>public/img/bathroom_06.jpg');" class="figure"></div>
    </div>
</section>

<section class="full-size">
    <?php buildGallery("bathroom_07", "bathroom_details_a_02", array("bathroom_details_b_02", "bathroom_details_c_02", "bathroom_details_d_02")); ?>
</section>