<link rel="stylesheet" href="/global.css">
<link rel="stylesheet" href="/home/banner_home/search-bar.css">

<script>
/*
    function goToPage(){
        let input = document.getElementById('search').value;

        if(input !== "") {
            window.location.href = "/ricerca_ricette/ricette.php?input=" + input;
        }

    }
*/
</script>

<div class="bn-search">
    <div class="box">
        <input type="text" id="search"  placeholder="Trova qui la tua ispirazione..." maxlength="60">
        <!--
        onclick="goToPage()"
        !-->
        <button type="submit" id="search_button" onclick="submitFilter()" aria-label="Cerca"><i class="fas fa-search"></i></button>
    </div>
</div>
