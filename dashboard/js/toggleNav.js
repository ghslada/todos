function toggleNav() {

    window.addEventListener('load',function(){

        document.getElementById("nav-toggle-button").addEventListener("focus", (e) => {

            const element = document.getElementById("nav-toggle");
            if(element.className.includes("nav-toggle")){
                element.classList.remove("nav-toggle");
                element.offSetWidth;
                element.classList.add("nav-toggled");
                console.log("Added toggled");
            }

        });

        const ele = document.getElementById("body");
        ele.addEventListener("click", e => {
        const element = document.getElementById("nav-toggle");

            if(element.className.includes("nav-toggled")){

                document.getElementById("nav-toggle-button").addEventListener("focusout", (e) => {

                    removeToggled(element);
        
                });
        

            }

        });

    });

}


function removeToggled(element1) {

        if(element1.className.includes("nav-toggled")){
            element1.classList.remove("nav-toggled");
            element1.offSetWidth;
            element1.classList.add("nav-toggle");
            console.log("Added toggle");
        }
    
}