function popupChecker(){
    var popup = document.querySelectorAll(".alerta");
    console.log(popup[1]);
    var counter = 0;
    var interval = setInterval(function(){
        if(counter == 5){
            clearInterval(interval);
            for(pop of popup){
                console.log('ok');
                pop.style.opacity = 0;
                var innerInterval = setInterval(function(){
                    console.log('inner');
                    pop.style.display = "none";
                    clearInterval(innerInterval);
                },2000);                
            }
            
        }
        counter++;
    }, 1000);
    
}

popupChecker();
    