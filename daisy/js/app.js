
let cars = ['#suvCars','#minivanCars','#sedanCars','#coupeCars','#pickupCars']
let carModels = ['#SUV','#Minivan','#Sedan','#Coupe','#Pickup']


    $("#SUV").on('click', function() {
        $(this).addClass('selected');
        $(carModels[1]).removeClass('selected');
        $(carModels[2]).removeClass('selected');
        $(carModels[3]).removeClass('selected');
        $(carModels[4]).removeClass('selected');
       
        $(cars[0]).show();
        $(cars[2]).hide();
        $(cars[1]).hide();
        $(cars[3]).hide();
        $(cars[4]).hide();
    })

    $("#Minivan").on('click', function() {
        $(this).addClass('selected');
        $(carModels[0]).removeClass('selected');
        $(carModels[2]).removeClass('selected');
        $(carModels[3]).removeClass('selected');
        $(carModels[4]).removeClass('selected');
        $(cars[1]).show();
        $(cars[2]).hide();
        $(cars[0]).hide();
        $(cars[3]).hide();
        $(cars[4]).hide();
    })

    $("#Sedan").on('click', function() {
        $(this).addClass('selected');
        $(carModels[1]).removeClass('selected');
        $(carModels[0]).removeClass('selected');
        $(carModels[3]).removeClass('selected');
        $(carModels[4]).removeClass('selected');
        $(cars[2]).show();
        $(cars[0]).hide();
        $(cars[1]).hide();
        $(cars[3]).hide();
        $(cars[4]).hide();
     
    })

    $("#Coupe").on('click', function() {
        $(this).addClass('selected');
        $(carModels[1]).removeClass('selected');
        $(carModels[2]).removeClass('selected');
        $(carModels[0]).removeClass('selected');
        $(carModels[4]).removeClass('selected');
        $(cars[3]).show();
        $(cars[2]).hide();
        $(cars[0]).hide();
        $(cars[1]).hide();
        $(cars[4]).hide();
    })
        
    $("#Pickup").on('click', function() {
        $(this).addClass('selected');
        $(carModels[1]).removeClass('selected');
        $(carModels[2]).removeClass('selected');
        $(carModels[3]).removeClass('selected');
        $(carModels[0]).removeClass('selected');
        $(cars[4]).show();
        $(cars[2]).hide();
        $(cars[1]).hide();
        $(cars[3]).hide();
        $(cars[0]).hide();
    })
