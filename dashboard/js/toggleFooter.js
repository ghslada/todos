const scrollUp = "footer-up";
const scrollDown = "footer-down";
let lastScroll = 0;
const elementToBeToggled = document.getElementById("footer-container");

window.addEventListener("scroll", () => {

    const currentScroll = window.scrollY;
    
    if( currentScroll <=0 ) {

        console.log("Touched top of page.");

    }

    if (currentScroll > lastScroll &&
        elementToBeToggled.classList.contains(scrollDown)) {
        
        console.log("Going Down!");
        elementToBeToggled.classList.remove(scrollDown);
        elementToBeToggled.classList.add(scrollUp);

    }
    else if (currentScroll < lastScroll &&
             elementToBeToggled.classList.contains(scrollUp)) {

        console.log("Going Up!");
        elementToBeToggled.classList.remove(scrollUp);
        elementToBeToggled.classList.add(scrollDown);

    }

    lastScroll = currentScroll;

    console.log(lastScroll);

});