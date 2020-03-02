console.log('code js chargé');

      //MENU DEPLIANT
      var boutonMenu = document.querySelector("#menuClick");
        
      boutonMenu.addEventListener('click', function() {
        var menuDepliant = document.querySelector('#menu');
        if(menuDepliant.style.display == 'none'){
        menuDepliant.style.display = 'block';
        } else {
          menuDepliant.style.display = 'none';
        }

      });