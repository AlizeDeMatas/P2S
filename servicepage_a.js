$("#car-type").hide();
$(".car-type-label").hide();
$(document).ready(function() {
  $("#car-models").change(function() {
    $("#car-type option").remove();
    switch ($("#car-models").val()) {
      case "Mini-Van":
        $("#car-type").show();
        $(".car-type-label").show();
        $('#car-type').append($('<option>', {
          id: 'Chevrolet-Express-1500',
          value: 'Chevrolet-Express-1500',
          text: 'Chevrolet Express 1500'
        }));
        $('#car-type').append($('<option>', {
          id: 'Chrysler-Pacifica',
          value: 'Chrysler-Pacifica',
          text: 'Chrysler Pacifica'
        }));
        $('#car-type').append($('<option>', {
          id: 'Toyota-Sienna',
          value: 'Toyota-Sienna',
          text: 'Toyota Sienna'
        }));
        $('#car-type').append($('<option>', {
          id: 'Honda-Odyssey',
          value: 'Honda-Odyssey',
          text: 'Honda Odyssey'
        }));
        $('#car-type').append($('<option>', {
          id: 'Nissan-Quest',
          value: 'Nissan-Quest',
          text: 'Nissan Quest'
        }));
        break;
      case "Truck":
        $("#car-type").show();
        $(".car-type-label").show();
        $('#car-type').append($('<option>', {
          id: 'Ford-Ranger',
          value: 'Ford-Ranger',
          text: 'Ford-Ranger'
        }));
        $('#car-type').append($('<option>', {
          id: 'Nissan-Titan',
          value: 'Nissan-Titan',
          text: 'Nissan Titan'
        }));
        $('#car-type').append($('<option>', {
          id: 'Ram-1500',
          value: 'Ram-1500',
          text: 'Ram 1500'
        }));
        $('#car-type').append($('<option>', {
          id: 'Toyota-Tundra',
          value: 'Toyota-Tundra',
          text: 'Toyota Tundra'
        }));
        $('#car-type').append($('<option>', {
          id: 'Chevrolet-Colorado',
          value: 'Chevrolet-Colorado',
          text: 'Chevrolet Colorado'
        }));
        break;
      case "Sedan":
        $("#car-type").show();
        $(".car-type-label").show();
        $('#car-type').append($('<option>', {
          id: 'Hyundai-Accent',
          value: 'Hyundai-Accent',
          text: 'Hyundai Accent'
        }));
        $('#car-type').append($('<option>', {
          id: 'Kia-Rio',
          value: 'Kia-Rio',
          text: 'Kia Rio'
        }));
        $('#car-type').append($('<option>', {
          id: 'Honda-Civic',
          value: 'Honda-Civic',
          text: 'Honda Civic'
        }));
        $('#car-type').append($('<option>', {
          id: 'Mercedes-Benz-A-Class',
          value: 'Mercedes-Benz-A-Class',
          text: 'Mercedes Benz A-Class'
        }));
        $('#car-type').append($('<option>', {
          id: 'Volkswagen-Jetta-GLI',
          value: 'Volkswagen-Jetta-GLI',
          text: 'Volkswagen Jetta GLI'
        }));
        break;
      case "Sports-Car":
        $("#car-type").show();
        $(".car-type-label").show();
        $('#car-type').append($('<option>', {
          id: 'BMW-M3',
          value: 'BMW-M3',
          text: 'BMW M3'
        }));
        $('#car-type').append($('<option>', {
          id: 'Subaru-BRZ',
          value: 'Subaru-BRZ',
          text: 'Subaru BRZ'
        }));
        $('#car-type').append($('<option>', {
          id: 'Ford-Mustang',
          value: 'Ford-Mustang',
          text: 'Ford Mustang'
        }));
        $('#car-type').append($('<option>', {
          id: 'Mazda-MX-5-Miata',
          value: 'Mazda-MX-5-Miata',
          text: 'Mazda MX-5 Miata'
        }));
        $('#car-type').append($('<option>', {
          id: 'Nissan-GT-R',
          value: 'Nissan-GT-R',
          text: 'Nissan GT-R'
        }));
        break;
      default:
        $("#car-type").hide();
        $(".car-type-label").hide();
        $('#car-type').append($('<option>', {
          value: 'None',
          text: 'None'
        }));

    }
  });
});


$("select.car-type").change(function(){
        var selectedcar = $(this).children("option:selected").attr('id');
        $(".car_img").attr("src","carimages/" +selectedcar + ".png");
    });
