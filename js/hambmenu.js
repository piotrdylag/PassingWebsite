<script>
$(document).ready(function(){
    $(".hamburger-btn .fa-times").hide();

    $(".hamburger-btn .fa-bars").click(function(){
        $(this).hide();
        $(".hamburger-btn .fa-times").show();
        $(".mob ul").addClass("active");
    });

    $(".hamburger-btn .fa-times").click(function(){
        $(this).hide();
        $(".hamburger-btn .fa-bars").show();
        $(".mob ul").removeClass("active");
    });
});
</script>