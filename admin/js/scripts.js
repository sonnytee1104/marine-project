/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// document.addEventListener('DOMContentLoaded', function() {
//     var deleteButtons = document.querySelectorAll('.btn-delete');
  
//     deleteButtons.forEach(function(button) {
//       button.addEventListener('click', function(e) {
//         e.preventDefault();
  
//         var confirmDelete = confirm('Are you sure you want to delete this?');
  
//         if (confirmDelete) {
//           var href = button.getAttribute('href');
//           window.location.href = 'code.php'; // Redirect to the specified URL
//         } else {
//           console.log("nothing here");
//         }
//       });
//     });
//   });
  

$(function getCateForPic()
{
    // Trigger the Ajax request when the category selection changes
    $('select[name="pic_category"]').on('change', function(){
        var selectedCategory = $(this).val();

        // Make an Ajax request
        $.ajax({
            url: 'img-view2.php', 
            method: 'POST',
            data: {category: selectedCategory},
            success: function(response){
                // Update the table body with the received data
                $('table tbody').html(response);
            },
            error: function(){
                alert('Error fetching data.');
            }
        });
    });
});




