angular.module("myApp", []).controller("myCtrl", function ($scope) {
    $scope.aPictures = [{ url: "https://farm4.staticflickr.com/3088/2688916488_1a125cd0e7_z_d.jpg", author: "Ângela Antunes" },
                        { url: "https://farm4.staticflickr.com/3626/3390027827_56ca221e12_z_d.jpg?zz=1", author: "Jelene Morris"}];
    $scope.nextPicture = function () {
        $scope.n = $scope.n + 1;
        if ($scope.n >= $scope.aPictures.length) $scope.n = 0;
        $scope.currentPicture = $scope.aPictures[$scope.n].url;
        $scope.currentAuthor = $scope.aPictures[$scope.n].author;
    };
    $scope.n = -1;
    $scope.nextPicture();
});
