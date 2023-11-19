<?php
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang = "vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard-Settings</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
   
    <?php require('inc/header.php'); ?>

    <div class="container_fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>
                <!-- General settings section -->
                <div class="card border-0 shadow-sm mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class = "bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>
                <!-- General settings modal -->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id = "general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >General Settings</h5>                    
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" row="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value= general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section -->
                <div class="card border-0 shadow-sm mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>

                        <p class="card-text">
                            No customer will be allowed to book hotel room, when shutdowm mode is turn on
                        </p>
                    </div>
                </div>
                <!-- Contact details section -->
                <div class="card border-0 shadow-sm mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contact-s">
                                <i class = "bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Gooogle map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone numbers</h6>
                                    <p class="card-text mb-1" >
                                        <i class = "bi bi-telephone-fill"></i>
                                        <span id = "pn1"></span>
                                    </p>
                                    <p class="card-text" >
                                        <i class = "bi bi-telephone-fill"></i>
                                        <span id = "pn2"></span>
                                    </p>
                                </div>                                
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1" >
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id = "fb"></span>
                                    </p>
                                    <p class="card-text mb-1" >
                                        <i class="bi bi-github me-1"></i>     
                                        <span id = "git"></span>
                                    </p>
                                    <p class="card-text mb-1" >
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id = "insta"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Map</h6>
                                    <iframe id = "iframe" class = "border p-2 w-100" loading = "lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Contacts details model -->

                 <div class="modal fade" id="contact-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog model-lg">
                        <form id = "contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Contact Settings</h5>                    
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Ađdres</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Google map link</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Phone numbers</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">@</span>
                                                        <input type="text" name = "pn1" id = "pn1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">@</span>
                                                        <input type="text" name = "pn2" id = "pn2_inp" class="form-control shadow-none" >
                                                    </div>
                                                </div>
                                                <!-- Không có email -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Social links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-facebook"></i>
                                                        </span>
                                                        <input type="text" name = "fb" id = "fb_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-github"></i>
                                                        </span>
                                                        <input type="text" name = "git" id = "git_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-instagram"></i>
                                                        </span>
                                                        <input type="text" name = "insta" id = "insta_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">iFrame Src</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" row="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                    <!-- Management Team section -->
                    <div class="card border-0 shadow-sm mb-4" >
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title m-0">Management Team</h5>
                                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                                        <i class = "bi bi-plus-square"></i> Add
                                    </button>
                                </div>

                            <div class="row" id="team-data">
                                <div class="col-md-2 mb-3">
                                    <div class="card bg-dark text-white">
                                        <img src="../images/about/team.jpg" class="card-img">
                                        <div class="card-img-overlay text-end">
                                            <button type="button" class="btn btn-danger btn-sm shadow-none">
                                               <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </div>
                                        <p class="card-text text-center px-3 py-2">Random Name</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                        <!-- Management Team modal -->
                        <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form id = "team_s_form">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" >Add Team Member</h5>                    
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Name</label>
                                                <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Picture</label>
                                                <input type="file" name="member_picture" id="member_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" onclick="" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                <?php echo $_SERVER['DOCUMENT_ROOT'] ?>    
            </div>
        </div>
    </div>

    <style>
    #dashboard-menu {
      position:fixed;
      height:100%;
    }
    </style>

    <?php require('inc/scripts.php');   ?>
    <script>
        let general_data, contacts_data;

        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');
        let contacts_s_form = document.getElementById('contacts_s_form');
        let team_s_form = document.getElementById('team_s_form');
        let member_name_inp = document.getElementById('member_name_inp');
        let member_picture_inp = document.getElementById('member_picture_inp');
       
        function get_general() 
        {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');
            
            let shutdown_toggle = document.getElementById('shutdown-toggle');
            
            let xhr= new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload= function(){
                general_data= JSON.parse(this.responseText); 
                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value= general_data.site_title;
                site_about_inp.value = general_data.site_about; 

                if(general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value =0;
                }
                else{
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value =1;
                }
            }
            
            xhr.send('get_general');
        }

        general_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        });

        function upd_general(site_title_val, site_about_val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onload= function(){

                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

               if(this.responseText == 1) {
                    alert('success','Changes saved');
                    get_general();
               }
               else {
                    alert('error','No changes made!');
               }
            }
            xhr.send('site_title='+site_title_val+'&site_about=' + site_about_val+'&upd_general');
        }

        function upd_shutdown(val) 
        {
            let xhr= new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xhr.onload= function(){
               if(this.responseText == 1 && general_data.shutdown==0) {
                    alert('success','Site has been Shutdown!');
               }
               else {
                    alert('success','Shutdown mode off!');
               }
               get_general();
            }
            xhr.send('upd_shutdown='+val);
        }

        function get_contacts() 
        {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'fb', 'git', 'insta'];
            let iframe =document.getElementById('iframe');

            let xhr= new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload= function(){
                contacts_data= JSON.parse(this.responseText); 
                contacts_data = Object.values(contacts_data);
                console.log(contacts_data);
                
                for (i = 0; i < contacts_p_id.length; i++){
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
                }
                iframe.src = contacts_data[8];
                contacts_inp(contacts_data);
            }
            
            xhr.send('get_contacts');
        }

        function contacts_inp(data)
        {
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'fb_inp', 'git_inp', 'insta_inp', 'iframe_inp'];

            for (i = 0; i< contacts_inp_id.length; i++){
                document.getElementById(contacts_inp_id[i]).value = data[i+1];
            }
        }

        contacts_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_contacts();
        });

        function upd_contacts()
        {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'fb', 'git', 'insta', 'iframe']
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'fb_inp', 'git_inp', 'insta_inp', 'iframe_inp'];
            let data_str = "";
            for (i = 0; i< index.length; i++){
                data_str += index[i] + "=" +document.getElementById(contacts_inp_id[i]).value +"&";
            }
            data_str += "upd_contacts";

            let xhr= new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload = function(){
                var myModal = document.getElementById('contact-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                if(this.responseText == 1) {
                    alert('success','Change saved!');
                    get_contacts();
               }
               else {
                    alert('error','No changes made!');
               }
            }
            xhr.send(data_str);
        }

        team_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_member();
        });

        function add_member()
        {
            let data = new FromData();
            data.append('name',member_name_inp.value);
            data.append('picture',member_picture_inp.files[0]);
            data.append('add_member','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            
            xhr.onload= function(){
                console.log(this.responseText);
                var myModal = document.getElementById('team-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 'inv_img'){
                    alert('error','Only JPG and PNG images are allowed!');
                }
                else if(this.responseText == 'inv_size'){
                    alert('error','Image size must be less than 2MB!');
                }
                else{
                    alert('success','New Member added!');
                    member_name_inp.value = '';
                    member_picture_inp.value = '';
                }

            }
            xhr.send(data);
        }

        function get_members(){
            let xhr= new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
            xhr.onload= function(){
                document.getElementById('team-data').innerHTML = this.responseText;
            }
            
            xhr.send('get_members');
        }

        window.onload = function(){
            get_general();
            get_contacts();
            get_members();
        }
    </script>
</body>
</html>