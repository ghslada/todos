<style>
    <?php include __DIR__.'/css/headerStyle.css'; ?>
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<div id="header" class="header">

    <div class="image-container">
        <img src="assets/logo.jpg" alt="" class="image">
    </div>
    <div class="title-container">
        <p class="title">My tasks - Manager</p>
    </div>
    <div class="navigation-divisor">
        </div>

        <button id="nav-toggle-button" class="nav-filter-button">
        <i class="bi bi-list-ul"></i>      
        </button>
        <div id="nav-toggle" class="header-filter-container nav-toggle">

            <div class="my-work-filter-divisor">
                <div class="my-work-filter">
                    <div class="my-work-filter-label">
                        <i class="bi bi-pc-display-horizontal"></i>
                        <label for="">Filter tasks</label>
                    </div>
                    <ul>
                        <li>
                            Backlog
                        </li>
                        <li>
                            Todos
                        </li>
                        <li>
                            Doing
                        </li>
                        <li>
                            Done
                        </li>
                        <li>
                            All
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    <?php include __DIR__.'/js/toggleNav.js'; ?>
    toggleNav();


    //   document.getElementById("nav-toggle").addEventListener("focusout", (e) => {

    //         const element = document.getElementById("nav-toggle");
    //         if(element.className.includes("nav-toggled")){
    //             element.classList.remove("nav-toggled");
    //             element.offSetWidth;
    //             element.classList.add("nav-toggle");
    //             console.log("Added toggle");
    //         }

    //     });

</script>