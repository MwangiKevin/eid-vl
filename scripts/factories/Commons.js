app.factory('Commons', ['$location',function($location){
  var Commons={};
  Commons.getActiveClass = function (path) {
    // console.log(path+'-----'+$location.path());
    if ($location.path() == path) {
      return "active"
    } else {
      return ""
    }
  };
  Commons.getSpecActiveClass = function (path) {
    // console.log(path+'-----'+$location.path());
    // console.log($location.path().substr(-path.length));
    if ($location.path().substr(-path.length) == path) {
      return "active"
    } else {
      return ""
    }
  };
  return Commons;
}])