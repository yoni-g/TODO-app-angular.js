var app = angular.module('todoapp', []);

app.controller('TaskCtrl', function($scope, $http){
	getTask();
        
        
	function getTask(){
		$http.post("db_connection/getTasks.php").success(function(data){
                $scope.tasks = data;

               });
	};

	$scope.addTask = function (task, date) {
                if(task && date)
                {
                // -- conveting date to timestamp -- //
                var time = (new Date(date).getTime());
                $http.post("db_connection/addTasks.php?task="+task+"&date="+time).success(function(data){
                        getTask();
                        $scope.userInput = "";
                        $scope.date = ""; 
                                });
                 }

        }

        $scope.deleteTask = function (taskID) {
            if(confirm("Are you sure you want to delete this task?")){
            $http.post("db_connection/deleteTask.php?taskID="+taskID).success(function(data){
                getTask();
       		});
             }
  	};

  	$scope.changeStatus = function (taskID, status) {
  		status == 1? status = 0 : status = 1;
  		$http.post("db_connection/updateTask.php?taskID="+taskID+"&status="+status).success(function(data){
        	getTask();
      	});

  	};


});