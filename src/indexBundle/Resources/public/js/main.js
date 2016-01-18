var questApp = angular.module('questApp', ["ngRoute", 'ui.sortable', 'ui.bootstrap'])
    .config(function($routeProvider){
        $routeProvider.when('/',
            {
                templateUrl:'/views/main.html',
                controller:'mainController'
            });
    });

questApp.controller('mainController', ['$scope', '$http', '$uibModal', '$filter', function($scope, $http, $uibModal, $filter) {
    $http.get('api/project').success(function(projects) {
        $scope.projects = projects;
        $scope.taskHeaders = [
            'title', 'date', 'status'
        ];
        // setup and back-end save for custom (drag&drop) sorting
        $scope.sortableOptions = {
            cancel: '.task div.panel-body, .task div.panel-footer',
            stop: function(e, ui) {
                var sorted = [];
                console.log($scope.projects);
                angular.forEach($scope.projects,function(element, key) {
                    sorted.push({
                        id: element.id,
                        name: element.name,
                        ord: key
                    });
                });
                console.log(sorted);
                $http.post('api/positions/project', {projects: sorted});
            }
        };
        // delete project
        $scope.deleteProject = function(project){
            $http.delete('api/projects/' + project.id).success(function() {
                var elements = [];
                angular.forEach($scope.projects,function(element) {
                    if (project.id != element.id) {
                        elements.push(element);
                    }
                });
                $scope.projects = elements;
            });
        };
        // edit project
        $scope.editProject = function(project){
            var modalInstance = $uibModal.open({
                animation: false,
                templateUrl: '/views/modal.html',
                controller: 'modalController',
                size: '',
                resolve: {
                    item: function () {
                        return project
                    },
                    settings: {
                        title: 'Edit project "' + project.name + '"',
                        placeholder: 'Enter name of project',
                        type: 'project'
                    }
                }
            });
            modalInstance.result.then(function (selectedItem) {
                $http.put('api/project', {'project': selectedItem});
            });
        };
        // create new project
        $scope.addProject = function(){
            var modalInstance = $uibModal.open({
                animation: false,
                templateUrl: '/views/modal.html',
                controller: 'modalController',
                size: '',
                resolve: {
                    item: function () {
                        return {}
                    },
                    settings: {
                        title: 'Add new project',
                        placeholder: 'Enter name of project',
                        type: 'project'
                    }
                }
            });
            modalInstance.result.then(function (selectedItem) {
                $http.post('api/projects', {
                    'project': {
                        name: selectedItem.name,
                        sorted: 1,
                        ord: 0
                    }
                }).success(function(project) {
                    $scope.projects.push(project);
                    projectActions(project);
                });
            });
        };
        function projectActions(project){
            // get tasks for current project
            $http.get('api/tasks/' + project.id).success(function(tasks) {
                project.tasks = tasks;
            });
            // setup sort
            project.order = function(predicate) {
                project.reverse = (project.predicate === predicate) ? !project.reverse : false;
                project.predicate = predicate;
            };
            project.sortableOptions = {
                beforeStop: function(e, ui) {
                    project.predicate = undefined;
                    project.reverse = undefined;
                },
                stop: function(e, ui) {
                    var sorted = [];
                    angular.forEach(project.tasks,function(element, key) {
                        sorted.push({
                            id: element.id,
                            ord: key
                        });
                    });
                    $http.post('api/positions/task', {tasks: sorted});
                },
                axis: 'y',
                cursor: "move",
                cancel: 'tr.placeholder'
            };
            // delete task
            project.deleteTask = function(task){
                $http.delete('api/tasks/' + task.id).success(function() {
                    var elements = [];
                    angular.forEach(project.tasks,function(element) {
                        if (task.id != element.id) {
                            elements.push(element);
                        }
                    });
                    project.tasks = elements;
                });
            };
            // edit task
            project.editTask = function(task){
                var modalInstance = $uibModal.open({
                    animation: false,
                    templateUrl: '/views/modal.html',
                    controller: 'modalController',
                    size: '',
                    resolve: {
                        item: function () {
                            return task
                        },
                        settings: {
                            title: 'Edit task "' + task.title + '"',
                            type: 'task'
                        }
                    }
                });
                modalInstance.result.then(function (selectedItem) {
                    // fix for date. if string - convert to Date object
                    if (angular.isString(selectedItem.date)) {
                        selectedItem.date = new Date(selectedItem.date);
                    }
                    $http.put('api/task', {'task': selectedItem});
                });
            };
            // add new task
            project.addTask = function(){
                var modalInstance = $uibModal.open({
                    animation: false,
                    templateUrl: '/views/modal.html',
                    controller: 'modalController',
                    size: '',
                    resolve: {
                        item: function () {
                            return {}
                        },
                        settings: {
                            title: 'Add new task',
                            type: 'task'
                        }
                    }
                });
                modalInstance.result.then(function (selectedItem) {
                    $http.post('api/tasks', {
                        'task': {
                            title: selectedItem.title,
                            date: selectedItem.date,
                            status: selectedItem.status,
                            ord: 0,
                            father: 0,
                            project_id: project.id
                        }
                    }).success(function(test) {
                        project.tasks.push(test);
                    });
                });
            };
        }
        // display tasks for all project
        angular.forEach($scope.projects, function(project, key) {
            projectActions(project);
        });

    });
}]);

questApp.controller('modalController', function ($scope, $uibModalInstance, item, settings) {
    // setup DatePicker
    $scope.popup = {
        opened: false
    };
    $scope.open = function() {
        $scope.popup.opened = true;
    };
    $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
    $scope.format = $scope.formats[0];
    $scope.toggleMin = function() {
        $scope.minDate = $scope.minDate ? null : new Date();
    };
    $scope.toggleMin();
    $scope.maxDate = new Date(2020, 5, 22);
    $scope.dateOptions = {
        formatYear: 'yy',
        startingDay: 1
    };
    $scope.altInputFormats = ['M!/d!/yyyy'];
    // setup modal
    $scope.modal = settings;
    // save old data from entity
    var oldEntity = {
        name: item.name,
        title: item.title,
        date: item.date,
        status: item.status
    };
    $scope.selected = {
        item: item
    };
    $scope.save = function () {
        $uibModalInstance.close($scope.selected.item);
    };
    $scope.cancel = function () {
        switch ($scope.modal.type) {
            case 'project':
                $scope.selected.item.name = oldEntity.name;
                break;
            case 'task':
                $scope.selected.item.title = oldEntity.title;
                $scope.selected.item.date = oldEntity.date;
                $scope.selected.item.status = oldEntity.status;
                break;
        }
        $uibModalInstance.dismiss('cancel');
    };
});

questApp.filter('normalDate', function() {
    return function(input) {
        return new Date(input).toISOString();
    };
});