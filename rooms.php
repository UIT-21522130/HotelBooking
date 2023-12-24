<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>    
    <title> <?php echo $settings_r['site_title']?>- ROOMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


</head>
<body class="bg-light">

    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <!-- check availability -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="d-flex align-items-center justify -contetn-between mb-3" style="font-size: 18px;">
                                    <span>CHECK AVAILABILITY</span>
                                    <button id="chk_avail_btn" onclick="chk_avail_clear()" class= 'btn shadow-none btn-sm text-secondary d-none'>Reset</button>
                                </h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3" id = "checkin" onchange="chk_avail_filter()">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none" id = "checkout" onchange="chk_avail_filter()">
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facilities one</label>                                    
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facilities two</label>                                    
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facilities three</label>                                    
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <label class="form-label" for="f1">Adults</label> 
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="f1">Children</label> 
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4" id = "rooms-data">

            </div>
            

        </div>
    </div>

    <script>
        let rooms_data = document.getElementById('rooms-data');
        let checkin =document.getElementById('checkin')
        let checkout =document.getElementById('checkout')
        let chk_avail_btn =document.getElementById('chk_avail_btn')

        function fetch_rooms()
        {
            let chk_avail = JSON.stringify(
                {
                    checkin:checkin.value,
                    checkout: checkout.value
                }
            )
            let xhr= new XMLHttpRequest();
            xhr.open("GET","ajax/rooms.php?fetch_rooms&chk_avail=" + chk_avail, true);

            xhr.onprogress = function()
            {
                rooms_data.innerHTML = `<div class="spinner-border text-info mb-3 d-block mx-auto" id="loader" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>`
            }

            xhr.onload = function()
            {
                rooms_data.innerHTML = this.responseText;
            }
            xhr.send();
        }

        function chk_avail_filter()
        {
            if(checkin.value != '' & checkout.value != '')
            {
                fetch_rooms();
                chk_avail_btn.classList.remove('d-none')
            }
        }
        function chk_avail_clear()
        {
            checkin.value = ''
            checkout.value = ''
            chk_avail_btn.classList.add('d-none')
            fetch_rooms();
        }


        fetch_rooms();
    </script>

        <!-- END -->
    <?php require('inc/footer.php');?>

</body> 
</html>