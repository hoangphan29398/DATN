/**
 * Created by Quyen Luu - 27/12/2017
 */

SOUGOU_ZYANARU_MODULE
	/**
	 * [ Show and delete release number ]
	 * @param  {[type]} $scope          [description]
	 * @return {[type]}                 [description]
	 */
	.controller('ReleaseCtrl', function ($scope, ReleaseService, popupService, $window, toastr) {
	  // Pagination
	  $scope.currentPage = 1;
		$scope.lastPage    = 0;
		$scope.totalPages  = 0;

		//Get Paginate and show data
		$scope.getImages = function(pageNumber) { 
      if (pageNumber === undefined) {
        pageNumber = '1';
      }
      ReleaseService.get({ page:pageNumber },function(res) {
        if(res.data != undefined) {
        	//Get data
        	$scope.releases = res.data.data;
        	// Get paginate params
					$scope.total       = res.data.total;
					$scope.currentPage = res.data.current_page;
					$scope.lastPage    = res.data.last_page;
					$scope.totalPages  = [];
          for($i = 1; $i <= $scope.lastPage; $i++) {
            $scope.totalPages.push($i);  
          }
          $scope.prePage  = ($scope.currentPage == 1) ? 1 : $scope.currentPage-1;
          $scope.nextPage = ($scope.currentPage == $scope.lastPage) ? $scope.currentPage : $scope.currentPage+1;
        }
      });  
    };

	  //Delete release number
	  $scope.delete = function (id) {
	  	if (popupService.showPopup('本当に削除する')) {
		  	var release = ReleaseService.get({ id: id }, function (res) {
		  		if (typeof res != 'undefined') {
		  			var release = res.data;
		  			$scope.deleteRelease = ReleaseService.delete({ id: release.id_release_number }, function () {
              if($scope.deleteRelease.is_success == true) {
		            $window.location.href = APP_CONFIGURATION.BASE_URL +'/admin/release';
		            toastr.success('Xóa thành công!');
		          } else { 
		            toastr.error('Try again!');
		          }   
            });
		  		} 
		  	});
	  	}
	  }

    //Ridirect Edit page
    $scope.redirectEdit = function (id) { 
      $window.location.href = '/admin/release/edit#id='+id;
    }

	})

	/**
   * [ Add new release number ]
   * @param  {[type]} $scope          [description]
   * @return {[type]}                 [description]
   */
  .controller('ReleaseAddCtrl', function ($scope, ReleaseService, toastr, popupService, $window) {
  	//Get Friday of next 2 week
  	var friday = moment().day(19).format('LL'); //Friday: 5 + 7 + 7
  	$scope.date = friday+'号';

    //Add new release number function
  	$scope.release = new ReleaseService();
  	$scope.addRelease = function () { 
      //Validate form
      var constraints = {
        name: {
          presence: true,
        },
      };
      var form = document.querySelector("form#main");
      validate.validators.presence.message = '空白のところで入力してください。';
      $scope.error = validate(form, constraints);

      // Check success
      if ($scope.error == undefined) {
        if (popupService.showPopup('発売号の情報を登録します。よろしいですか?')) {
          $scope.release.$save(function () {
            if($scope.release.is_success == true) {
              $window.location.href = APP_CONFIGURATION.BASE_URL +'/admin/release';
              toastr.success('Thêm thành công !');
            } else { 
              toastr.error('Error! Please try again.');
            }   
          });
        }
      } 
  	}//END ADD RELEASE

  })
  
  /**
   * [Edit release number]
   * @param  {[type]} $scope     [description]
   * @return {[type]}            [description]
   */
  .controller('ReleaseEditCtrl', function ($scope, ReleaseService, toastr, popupService, $window) {
    //Get id from url
    var url   = new URL(window.location.href); 
    var id    = url.hash.match(/\d/g);
    $scope.id = id.join('');

    $scope.updateRelease = function (release) { 
      //Validate form
      var constraints = {
        name: {
          presence: true,
        },
      };
      var form = document.querySelector("form#main");
      validate.validators.presence.message = '空白のところで入力してください。';
      $scope.error = validate(form, constraints);

      // If clean data -> Edit
      if ($scope.error == undefined) {
        //Get value from ng-model
        var getName = release.name;

        // Update relase
        ReleaseService.update({
          id:     $scope.id,
          name:   getName,
          is_deleted: false
        }, function (){
          // Redirect
          //$window.location.href = APP_CONFIGURATION.BASE_URL + '/admin/user';
        });
      }
    }

  // Show user 
  $scope.loadRelease = function () { 
    ReleaseService.get({ id: $scope.id },function(res) {
      $scope.release = res.data;
      console.log(res.data);
    });
  }
  $scope.loadRelease(); 

})  


