<!-- include this file to get the code for login nav bar. -->
<?php
session_start();
echo "
<style>
  /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content Box */
.modal-content {
    background-color: rgba(0,0,0,0.1);
    margin: 5px auto; /* 15% from the top and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    /* Position it in the top right corner outside of the modal */
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

/* Close button on hover */
.close:hover, .close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    padding-left: 15%;
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}
</style>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = \"none\";
    }
}
</script>
<!-- Modal -->
<div class=\"modal fade\" id=\"Login\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h3 class=\"modal-title\">Login Page</h3>
            </div>

                <div class=\"col-md12 jumbotron\">
                  <form class=\" animate\" action=\"login.php\" method=\"post\">
                      <label><b>Username</b></label>
                      <input type=\"text\" placeholder=\"Enter Username\" name=\"username\" required> <br> <br>

                      <label><b>Password</b></label>
                      <input type=\"password\" placeholder=\"Enter Password\" name=\"password\" required> <br> <br>

                       &nbsp; &nbsp; <button type=\"submit button\" class=\"btn btn-default\">Login</button> &nbsp; &nbsp;
                      <input type=\"checkbox\" checked=\"checked\"> Remember me
                  </form>
                </div>

            <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

" ;



?>
