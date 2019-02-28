<?php
/*
Template Name: dang ki khoa hoc
*/
get_header();
?>
<div class="row">
<div class="column sixcol">
        <p><h1>Liên hệ</h1></p>
        <p><i class="fa fa-phone"></i> 091 286 32 19</p>
        <p><i class="fa fa-envelope"></i> msthanhtoeic.hcm@gmail.com</p>
        <p><i class="fa fa-building"></i> 64/11/2 Nguyễn Khoái, Phường 2, Quận 4, TP.HCM</p>
        <p><i class="fa fa-comment"></i> www.facebook.com/msthanhtoeic</p>
        <p><i class="fa fa-clock"></i> Mỗi ngày từ 9:00am – 10:00pm</p>
</div>

<div class="sixcol column last">
<?php 
echo do_shortcode('[contact-form-7 id="3546" title="Form đăng kí"]');
?>
</div>
</div>

<?php



get_footer();
?>