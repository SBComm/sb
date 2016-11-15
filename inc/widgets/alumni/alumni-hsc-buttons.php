<div class="rounded-image-buttons clearfix">
    <?php if($selected_sub_nav!="school-of-medicine") { ?>
    <a class="medicine<?php if($selected_sub_nav=="school-of-medicine") { ?> selected<?php } ?>" href="alumni/chapters/school-of-medicine"><div class="label"><span>School of</span> Medicine</div></a>
    <?php } if($selected_sub_nav!="school-of-dental-medicine") { ?>
    <a class="dental<?php if($selected_sub_nav=="school-of-dental-medicine") { ?> selected<?php } ?>" href="alumni/chapters/school-of-dental-medicine"><div class="label"><span>School of</span> Dental Medicine</div></a>
    <?php } if($selected_sub_nav!="school-of-social-welfare") { ?>
    <a class="social-welfare<?php if($selected_sub_nav=="school-of-social-welfare") { ?> selected<?php } ?>" href="alumni/chapters/school-of-social-welfare"><div class="label"><span>School of</span> Social Welfare</div></a>
    <?php } if($selected_sub_nav!="school-of-nursing") { ?>
    <a class="nursing<?php if($selected_sub_nav=="school-of-nursing") { ?> selected<?php } ?>" href="alumni/chapters/school-of-nursing"><div class="label"><span>School of</span> Nursing</div></a>
    <?php } if($selected_sub_nav!="school-of-health-technology-management") { ?>
    <a class="htm<?php if($selected_sub_nav=="school-of-htm") { ?> selected<?php } ?>" href="alumni/chapters/school-of-health-technology-management"><div class="label"><span>School of</span> Health Technology Management</div></a>
    <?php } ?>
</div>