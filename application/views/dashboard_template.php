<!DOCTYPE html>
<html>

  <head>
    
  </head>

  <body>
    <div class="container" ng-app="app">
      <header ng-include="'nav.html'"></header>
      <div ui-view></div>
      <footer ng-include="'footer.html'"></footer>
    </div>
  </body>
  
  <script src="app.js"></script>
  <script src="friends.js"></script>
  <script src="aboutCtrl.js"></script>
  <script src="homeCtrl.js"></script>
</html>