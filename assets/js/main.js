console.log('code js chargé');

      //MENU DEPLIANT
      var boutonMenu = document.querySelector("#menuClick");

        
      boutonMenu.addEventListener('click', function() {
        var menuDepliant = document.querySelector('#menu');
        var header = document.querySelector("header");
        menuDepliant.style.display = 'flex';
        header.style.display = 'none';
      });