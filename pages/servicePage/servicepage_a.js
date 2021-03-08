$("#car-type").hide();
$(".car-type-label").hide();
$(document).ready(function() {
  $("#car-models").change(function() {
    $("#car-type option").remove();
    switch ($("#car-models").val()) {
      case "Mini-Van":
        $("#car-type").show();
        $(".car-type-label").show();

        $('#car-type').append($('<option default>', {
        }));

        $('#car-type').append($('<option>', {
          id: 'Chevrolet-Express-1500',
          value: '40.00',
          text: 'Chevrolet Express 1500'
        }));
        $('#car-type').append($('<option>', {
          id: 'Chrysler-Pacifica',
          value: '45.00',
          text: 'Chrysler Pacifica'
        }));
        $('#car-type').append($('<option>', {
          id: 'Toyota-Sienna',
          value: '35.50',
          text: 'Toyota Sienna'
        }));
        $('#car-type').append($('<option>', {
          id: 'Honda-Odyssey',
          value: '50.5',
          text: 'Honda Odyssey'
        }));
        $('#car-type').append($('<option>', {
          id: 'Nissan-Quest',
          value: '34.60',
          text: 'Nissan Quest'
        }));
        break;
      case "Truck":
        $("#car-type").show();
        $(".car-type-label").show();

        $('#car-type').append($('<option default>', {
        }));

        $('#car-type').append($('<option>', {
          id: 'Ford-Ranger',
          value: '35.50',
          text: 'Ford-Ranger'
        }));
        $('#car-type').append($('<option>', {
          id: 'Nissan-Titan',
          value: '27.60',
          text: 'Nissan Titan'
        }));
        $('#car-type').append($('<option>', {
          id: 'Ram-1500',
          value: '37.00',
          text: 'Ram 1500'
        }));
        $('#car-type').append($('<option>', {
          id: 'Toyota-Tundra',
          value: '55.00',
          text: 'Toyota Tundra'
        }));
        $('#car-type').append($('<option>', {
          id: 'Chevrolet-Colorado',
          value: '33.50',
          text: 'Chevrolet Colorado'
        }));
        break;
      case "Sedan":
        $("#car-type").show();
        $(".car-type-label").show();

        $('#car-type').append($('<option default>', {
        }));

        $('#car-type').append($('<option>', {
          id: 'Hyundai-Accent',
          value: '47.00',
          text: 'Hyundai Accent'
        }));
        $('#car-type').append($('<option>', {
          id: 'Kia-Rio',
          value: '56.00',
          text: 'Kia Rio'
        }));
        $('#car-type').append($('<option>', {
          id: 'Honda-Civic',
          value: '25.50',
          text: 'Honda Civic'
        }));
        $('#car-type').append($('<option>', {
          id: 'Mercedes-Benz-A-Class',
          value: '38.00',
          text: 'Mercedes Benz A-Class'
        }));
        $('#car-type').append($('<option>', {
          id: 'Volkswagen-Jetta-GLI',
          value: '26.00',
          text: 'Volkswagen Jetta GLI'
        }));
        break;
      case "Sports-Car":
        $("#car-type").show();
        $(".car-type-label").show();

        $('#car-type').append($('<option default>', {
        }));


        $('#car-type').append($('<option>', {
          id: 'BMW-M3',
          value: '55.75',
          text: 'BMW M3'
        }));
        $('#car-type').append($('<option>', {
          id: 'Subaru-BRZ',
          value: '35.80',
          text: 'Subaru BRZ'
        }));
        $('#car-type').append($('<option>', {
          id: 'Ford-Mustang',
          value: '44.50',
          text: 'Ford Mustang'
        }));
        $('#car-type').append($('<option>', {
          id: 'Mazda-MX-5-Miata',
          value: '36.00',
          text: 'Mazda MX-5 Miata'
        }));
        $('#car-type').append($('<option>', {
          id: 'Nissan-GT-R',
          value: '43.00',
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
        var selectedprice = $(this).children("option:selected").attr('value');
        $(".car_img").attr("src","../../assets/carimages/" +selectedcar + ".png");
        $("figcaption").text("$ " + selectedprice);

    });
