
$(document).ready(function() {
    $('#country-dropdown').on('change', function () {
      var country_id = this.value;
      $.ajax({
        url: "states-by-country.php",
        type: "POST",
        data: {
          country_id: country_id
        },
        cache: false,
        success: function (result) {
          $("#state-dropdown").html(result);
          $('#city-dropdown').html('<option value="">Select State First</option>');
        }
      });
    });
    $('#state-dropdown').on('change', function () {
      var state_id = this.value;
      $.ajax({
        url: "cities-by-state.php",
        type: "POST",
        data: {
          state_id: state_id
        },
        cache: false,
        success: function (result) {
          $("#city-dropdown").html(result);
        }
      });
    });
  });
  