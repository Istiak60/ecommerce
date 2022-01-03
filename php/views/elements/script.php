<?php?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>

<script>

    //Carousel
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 1400,
        wrap: true
    });


    //Countdown timer
    $(".box-timer")
        .countdown("2022/12/01", function(event) {
            $('.day .number').text(
                event.strftime('%D')
            );
            $('.hour .number').text(
                event.strftime('%H')
            );
            $('.min .number').text(
                event.strftime('%M')
            );
            $('.sec .number').text(
                event.strftime('%S')
            );
        });

</script>