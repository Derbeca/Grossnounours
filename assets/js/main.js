console.log('code js chargé');

      //MENU DEPLIANT
      var boutonMenu = document.querySelector("#menuClick");
      var fermer = document.querySelector('#btn-fermer');
      var fermer2 = document.querySelector('#btn-fermer2');
      var boutonLogin= document.querySelector("#loginClick");

        
      boutonMenu.addEventListener('click', function() {
        var menuDepliant = document.querySelector('#menu');
        menuDepliant.style.display = 'flex';
        menuDepliant.classList.add('flipInX');
        menuDepliant.classList.remove('flipOutX');
      });

      fermer2.addEventListener('click', function() {
        console.log('tu as clické');
        var menuDepliant = document.querySelector('#menu');
        menuDepliant.classList.add('flipOutX');
        menuDepliant.classList.remove('flipInX');
      });

      boutonLogin.addEventListener('click', function() {
        var loginDepliant = document.querySelector('#login');
        loginDepliant.style.display = 'flex';
        loginDepliant.classList.add('flipInX');
        loginDepliant.classList.remove('flipOutX');
      });

      fermer.addEventListener('click', function() {
        console.log('tu as clické');
        var loginDepliant = document.querySelector('#login');
        loginDepliant.classList.add('flipOutX');
        loginDepliant.classList.remove('flipInX');
      });