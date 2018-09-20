<div id="get-directions" class="map-container-full">
    <div class="map-container-full--disable-zoom-overlay clearfix">
        <button class="brand-button brand-button--hover-fill-white map-container-full--main-button map-container-full--show-options"><em class="fa fa-eye"></em> View Map</button>
        <div class="map-container-full--button-options">
            <h3>Which campus?</h3>
            <a href="<?php echo $sbu_site_url['directions']['stony-brook']; ?>" class="brand-button brand-button--hover-fill-white map-container-full--button-options--option" target="_blank"><em class="fa fa-map-marker"></em> Stony Brook, NY</a>
            <a href="<?php echo $sbu_site_url['directions']['southampton']; ?>" class="brand-button brand-button--hover-fill-white map-container-full--button-options--option" target="_blank"><em class="fa fa-map-marker"></em> Southampton, NY</a>
            <a href="<?php echo $sbu_site_url['directions']['manhattan']; ?>" class="brand-button brand-button--hover-fill-white map-container-full--button-options--option" target="_blank"><em class="fa fa-map-marker"></em> Manhattan, NY</a>
        </div>
    </div>
    <iframe
        width="100%"
        height="100%"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJvzh05jM_6IkRhcy9aqUcTHM&amp;destination=Stony+Brook+University,+Stony+Brook,+NY,+United+States&amp;key=AIzaSyDgtykitNyBPhZYhLriPLO6Q85xtybtiLM">
    </iframe>
</div>