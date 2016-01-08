$(document).ready(function (){
    var eventdata =[ 
        {
            "name":"Event Name",
            "details":"Event Details",
            "link":"Event Link"        
        },
        
        {
            "name":"Event Name",
            "details":"Event Details",
            "link":"Event Link" 
        },
        
        {
            "name":"Event Name",
            "details":"Event Details",
            "link":"Event Link" 
            
        }]
        console.log(eventdata.length);
        for(var i=0;i<eventdata.length;i++){
         $(".event-stuff").append('<div class="event-box">')
                $(".event-stuff").append("<br>"+eventdata[i].name + "<br>");
                $(".event-stuff").append(eventdata[i].details +"<br>");
                $(".event-stuff").append(eventdata[i].link +"<br><br>");
                
        
                console.log("itr");
            
            
        }
});