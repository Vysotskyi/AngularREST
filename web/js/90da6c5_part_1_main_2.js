var gets = function() {
    $.ajax({
        type: "GET",
        url: "app_dev.php/api/project",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
var posts = function() {
    $.ajax({
        type: "POST",
        data: {
            'project' : {
                id: undefined,
                name: 'stas',
                sorted: 1,
                ord: 0
            }
        },
        url: "app_dev.php/api/project",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
var deletes = function() {
    $.ajax({
        type: "DELETE",
        url: "app_dev.php/api/projects/6",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
var puts = function() {
    $.ajax({
        type: "PUT",
        data: {
            'project' : {
                id: 6,
                name: 'stas23',
                sorted: 2,
                ord: 0
            }
        },
        url: "app_dev.php/api/project",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
//gets();
//posts();
//deletes();
//puts();
var getTask = function() {
    $.ajax({
        type: "GET",
        url: "app_dev.php/api/tasks/7",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
var postTask = function() {
    $.ajax({
        type: "POST",
        data: {
            'task' : {
                id: undefined,
                title: 'inna',
                date: {
                    "date": {
                        "year": 2014,
                        "month": 11,
                        "day": 5
                    },
                    "time": {
                        "hour": 23,
                        "minute": 11
                    }
                },
                status: 1,
                father: 3,
                projectId: 7,
                ord: 0
            }
        },
        url: "app_dev.php/api/tasks",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
var putTask = function() {
    $.ajax({
        type: "PUT",
        data: {
            'task' : {
                id: 5,
                title: 'inna1',
                date: {
                    "date": {
                        "year": 2014,
                        "month": 11,
                        "day": 5
                    },
                    "time": {
                        "hour": 23,
                        "minute": 11
                    }
                },
                status: 2,
                father: 3,
                projectId: 7,
                ord: 1
            }
        },
        url: "app_dev.php/api/task",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
var deleteTask = function() {
    $.ajax({
        type: "DELETE",
        url: "app_dev.php/api/tasks/6",
        dataType: 'json',
        success: function(index){
            console.log(index);
        }
    });
};
getTask();
//postTask();
putTask();
//deleteTask();