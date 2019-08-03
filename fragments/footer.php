<section class="footerBox">
  <a class="btn" href="mailto:<?php  echo $ini['site_email']; ?>"><span class="firstLink">Let's start a project</span></a>
</section>

<!-- Sticky Scripts -->
<script src="/scripts/jquery.waypoints.min.js"></script>
<script src="/scripts/sticky.min.js"></script>
<script src="/scripts/inview.js"></script>

<!-- Scroll Down Script -->
<!--
<script>
$(".scrollDown").click(function() {
$("html, body").animate({
scrollTop: $($(this).attr("href")).offset().top + "px"}, {duration: 250, easing: "swing"});
return false;
});
</script>
-->

<!-- Page Animation Scripts -->
<!--
<script>
$(document).ready(function() {

$('a').click(function (e) {
if (!$(this).hasClass('externalLink')) {
e.preventDefault();                   // prevent default anchor behavior
var goTo = this.getAttribute("href"); // store anchor href
$( '.m-scene' ).addClass( "is-exiting" );
setTimeout(function(){
window.location = goTo;
},150);
}
});

$('.samePage').click(function () {
if (location.pathname == '/design.php') {
location.reload();
}

});
});
</script>
-->

<!-- Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41519361-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- Waypoints: Sticky Nav -->
<script type="text/javascript">
  $(function () {
    var sticky = new Waypoint.Sticky({
      element: $('nav')[0],
    })
    });
</script>