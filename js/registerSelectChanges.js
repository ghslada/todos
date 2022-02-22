function onCountryChange() {

    document.getElementById("country").addEventListener('click', (event) => {
        const element = document.querySelector("#country");
        const result = element.options[element.selectedIndex].value;
        console.log(result);

        if(result){
            
            var formData = new FormData();
            formData.append("country", result);
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("test").innerHTML = this.responseText;
            }
            xmlhttp.open("POST", "../api/user/createUser.php");
            sessionStorage.Country=result;
            xmlhttp.send(formData);

        }

    });

    document.getElementById("country").addEventListener('change', (event) => {
        const element = document.querySelector("#country");
        const result = element.options[element.selectedIndex].value;
        console.log(result);

        if(result){
            var formData = new FormData();
            formData.append("country", result);
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("test").innerHTML = this.responseText;
            }
            xmlhttp.open("POST", "../api/user/createUser.php?country=" + result);
            sessionStorage.Country=result;
            xmlhttp.send(formData);

        }

    });

          

}


function onStateChange() {

    document.getElementById("state").addEventListener('click', (event) => {
        const element = document.querySelector("#state");
        const result = element.options[element.selectedIndex].value;
        console.log(result);

        if(result){
            var formData = new FormData();
            formData.append("country", sessionStorage.Country);
            formData.append("state", result);
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("test").innerHTML = this.responseText;
            }
            xmlhttp.open("POST", "../api/user/createUser.php");
            sessionStorage.State=result;
            xmlhttp.send(formData);

        }

    });

    document.getElementById("state").addEventListener('change', (event) => {
        const element = document.querySelector("#state");
        const result = element.options[element.selectedIndex].value;
        console.log(result);

        if(result){
            var formData = new FormData();
            formData.append("country", sessionStorage.Country);
            formData.append("state", result);
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("test").innerHTML = this.responseText;
            }
            xmlhttp.open("POST", "../api/user/createUser.php?");
            sessionStorage.State=result;
            xmlhttp.send(formData);

        }

    });

}

function onCityChange() {

    document.getElementById("city").addEventListener('change', (event) => {
        const element = document.querySelector("#city");
        const result = element.options[element.selectedIndex].value;
        console.log(result);

        if(result){
            var formData = new FormData();
            formData.append("country", sessionStorage.Country);
            formData.append("state", sessionStorage.State);
            formData.append("city", result);
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("test").innerHTML = this.responseText;
            }
            xmlhttp.open("POST", "../api/user/createUser.php?");
            sessionStorage.City=result;
            xmlhttp.send(formData);

        }

    });

    document.getElementById("city").addEventListener('click', (event) => {
        const element = document.querySelector("#city");
        const result = element.options[element.selectedIndex].value;
        console.log(result);

        if(result){
            var formData = new FormData();
            formData.append("country", sessionStorage.Country);
            formData.append("state", sessionStorage.State);
            formData.append("city", result);
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("test").innerHTML = this.responseText;
            }
            xmlhttp.open("POST", "../api/user/createUser.php?");
            sessionStorage.City=result;
            xmlhttp.send(formData);

        }

    });

}