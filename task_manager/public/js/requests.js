$("#saveChangesModal").on("click",function(){
    let data = {
        cardName : $("#cardName").val(),
        descriptionInput : $("#descriptionInput").val(),
        members : $("#members").val(),
        requester : $("#requester").val(), 
        implementor : $("#implementor").val(), 
        developer : $("#developer").val(), 
        devlopmentType : $("#devlopmentType").val(), 
        priority : $("#priority").val(), 
        status : $("#status").val(), 
        labels : $("#labels").val(), 
        reservationtime : $("#reservationtime").val()
        
    };
//    let cardName = $("#cardName").val(); 
//    let descriptionInput = $("#DescriptionInput").val(); 
//    let members = $("#members").val(); 
//    let requester = $("#requester").val(); 
//    let implementor = $("#implementor").val(); 
//    let developer = $("#developer").val(); 
//    let devlopmentType = $("#devlopmentType").val(); 
//    let priority = $("#priority").val(); 
//    let status = $("#status").val(); 
//    let labels = $("#labels").val(); 
//    let reservationtime = $("#reservationtime").val(); 
    console.log(data);
    
});


