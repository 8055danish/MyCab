function checkCarType()
{   
    if ($("#carType").val() == 'CabMicro'){
        $("#weight-div").hide();
    }
    else{
       $("#weight-div").show();
   }    
}

function validate(){
    var pickup = $("#pickup").val();
    var drop = $("#drop").val();
    var carType = $("#carType").val();
    var weight = $("#weight").val();
    if (!pickup)
    {
        alert("Please Select current Location");
        return false;
    }
    if (!drop) 
    {
        alert("Please Select Drop Location");
        return false;
    }
    if(pickup==drop)
    {
        alert("Both Location shouldn't be same");
        return false;
    }
    if (!carType) 
    {
        alert("Please Select Car Type");
        return false;
    }
    if(carType!="CabMicro")
    {
        if (!weight)
        {
            alert("Please Add Luggage Weight");
            return false;
        }
    }
    $.ajax({
        type:"POST",
        url:"ajax.php",
        data:{p:pickup,d:drop,c:carType,w:weight},
        success: function(response) {
            alert(response);
        }
    });
}