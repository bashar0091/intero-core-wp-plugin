// product image light box js 
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'fitImagesInViewport' : true,
})

// popup code here 
var interoPopup = jQuery('#intero_popup')
jQuery('.intero_popup_btn').click(function() {
    interoPopup.addClass('show')
    jQuery('body').css('overflow', 'hidden');
});
jQuery('.intero_popup_cross a').click(function() {
    interoPopup.removeClass('show')
    jQuery('body').css('overflow', 'inherit');
});

// product count field 
function increamentShow(select1, select2) {
    jQuery(select1).click(function () {
        var price = jQuery('.intero_var_select .intero_product_price').val(); 
        var price2 = jQuery('.intero_var_select .intero_product_price_regular').val();
        var $priceDisplay = jQuery('.intero_main_price');
        var $priceDisplay2 = jQuery('.intero_regular_price');
    
        var count = parseInt(jQuery('.increament_num_field').val()) + 1;
        jQuery('.increament_num_field').val(count);
    
        $priceDisplay.text(`${price * count}$`);
        $priceDisplay2.text(`${price2 * count}$`);
    });
    jQuery(select2).click(function () {
        var price = jQuery('.intero_var_select .intero_product_price').val(); 
        var price2 = jQuery('.intero_var_select .intero_product_price_regular').val();
        var $priceDisplay = jQuery('.intero_main_price');
        var $priceDisplay2 = jQuery('.intero_regular_price');
    
        var count = parseInt(jQuery('.increament_num_field').val()) - 1;
        if (count < 1) {
        count = 1;
        }
        jQuery('.increament_num_field').val(count);
        $priceDisplay.text(`${price * count}$`);
        $priceDisplay2.text(`${price2 * count}$`);
    });
}
increamentShow('.plus', '.minus');
increamentShow('.plus1', '.minus1');




// // Define your basic authorization credentials
// var username = 'eshop'; // Replace with your actual username
// var password = 'Uqf26wC8jYNB9jOp#4'; // Replace with your actual password

// // Create an object to hold your data
// var dataToSend = {
//     CompanyID: 111,
//     CompanyName: 'kit',
//     CompanyCode: '133',
//     Email: 'kit@gmail.com',
//     FirstName: 'kit',
//     LastName: 'kitted',
//     Address: 'khulna',
//     City: 'band'
//   // Add more key-value pairs as needed
// };

// // Send the AJAX request
// jQuery.ajax({
//   url: 'https://adeso2.terrait.lt/companies', // Specify the URL to which you want to send the data
//   type: 'POST', // Specify the HTTP method for the request (in this case, POST)
//   data: dataToSend, // Include the data to send
//   headers: {
//     'Authorization': 'Basic ' + btoa(username + ':' + password) // Include basic authorization headers
//   },
//   success: function(data) { // Optional success callback function
//     // Handle the success response here
//     console.log('Data successfully sent:', data);
//   },
//   error: function(xhr, textStatus, errorThrown) { // Optional error callback function
//     // Handle the error response here
//     console.log('Error sending data:', textStatus, errorThrown);
//   }
// });