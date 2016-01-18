<?php

/* @index/FrontEnd/main.html */
class __TwigTemplate_0465904e0d31edc9f9c76826c5a80bb8677cfda86862633e976bb2f18ed4109e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0d6cbc2d6775e49c8544fa5de46d5ab4a509f2f666f5ececa40046054ac16e = $this->env->getExtension("native_profiler");
        $__internal_6d0d6cbc2d6775e49c8544fa5de46d5ab4a509f2f666f5ececa40046054ac16e->enter($__internal_6d0d6cbc2d6775e49c8544fa5de46d5ab4a509f2f666f5ececa40046054ac16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@index/FrontEnd/main.html"));

        // line 1
        echo "<div class=\"col-md-12 main\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            TO DO MANAGER - TEST TASK
        </div>
        <div class=\"panel-body\">
            <div ui-sortable=\"sortableOptions\" ng-model=\"projects\">
            <div class=\"col-md-3 task\" data-ng-repeat=\"project in projects\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading col-md-12\">
                        <div class=\"name col-md-9\" data-ng-bind=\"project.name\"></div>
                        <div class=\"active col-md-3\">
                            <a class=\"btn btn-default\" type=\"button\" data-ng-click=\"editProject(project)\">
                                <span class=\"glyphicon glyphicon glyphicon-pencil\"></span>
                            </a>
                            <a class=\"btn btn-info\" type=\"button\" data-ng-click=\"deleteProject(project)\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th data-ng-repeat=\"header in taskHeaders\" data-ng-click=\"project.order(header)\">
                                        ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "html", null, true);
        echo "
                                        <span class=\"glyphicon\"
                                              ng-if=\"project.tasks.length > 0\"
                                              ng-show=\"project.predicate == header\"
                                              ng-class=\"{'glyphicon-arrow-down' : project.reverse, 'glyphicon-arrow-up' : !project.reverse}\"></span>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody ui-sortable=\"project.sortableOptions\" ng-model=\"project.tasks\">
                                <tr ng-if=\"!project.tasks.length\" class=\"placeholder\">
                                    <td colspan=\"4\" class=\"no-tasks\">
                                        <div class=\"alert alert-info\">No tasks. You can create new task for this project!</div>
                                    </td>
                                </tr>
                                <tr data-ng-repeat=\"task in project.tasks  | orderBy:project.predicate:project.reverse\">
                                    <td data-ng-bind=\"task.title\"></td>
                                    <td data-ng-bind=\"task.date | normalDate | date:'medium'\"></td>
                                    <td>
                                        <span class=\"glyphicon glyphicon-flag\"
                                              ng-class=\"{'minor': task.status == 1, 'major': task.status == 2, 'critical': task.status == 3}\"></span>
                                    </td>
                                    <td>
                                        <a class=\"btn btn-default\" type=\"button\" data-ng-click=\"project.editTask(task)\">
                                            <span class=\"glyphicon glyphicon glyphicon-pencil\"></span>
                                        </a>
                                        <a class=\"btn btn-primary\" type=\"button\" data-ng-click=\"project.deleteTask(task)\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <a class=\"btn btn-default \" data-ng-click=\"project.addTask()\"> <i class=\"glyphicon glyphicon glyphicon-plus\"></i> Add new task</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class=\"panel-footer\">
            <a class=\"btn btn-default\" data-ng-click=\"addProject()\"> <i class=\"glyphicon glyphicon glyphicon-plus\"></i> Add new project</a>
        </div>
    </div>
</div>";
        
        $__internal_6d0d6cbc2d6775e49c8544fa5de46d5ab4a509f2f666f5ececa40046054ac16e->leave($__internal_6d0d6cbc2d6775e49c8544fa5de46d5ab4a509f2f666f5ececa40046054ac16e_prof);

    }

    public function getTemplateName()
    {
        return "@index/FrontEnd/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 26,  22 => 1,);
    }
}
/* <div class="col-md-12 main">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             TO DO MANAGER - TEST TASK*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div ui-sortable="sortableOptions" ng-model="projects">*/
/*             <div class="col-md-3 task" data-ng-repeat="project in projects">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading col-md-12">*/
/*                         <div class="name col-md-9" data-ng-bind="project.name"></div>*/
/*                         <div class="active col-md-3">*/
/*                             <a class="btn btn-default" type="button" data-ng-click="editProject(project)">*/
/*                                 <span class="glyphicon glyphicon glyphicon-pencil"></span>*/
/*                             </a>*/
/*                             <a class="btn btn-info" type="button" data-ng-click="deleteProject(project)">*/
/*                                 <span class="glyphicon glyphicon-remove"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <table class="table table-striped">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th data-ng-repeat="header in taskHeaders" data-ng-click="project.order(header)">*/
/*                                         {{header}}*/
/*                                         <span class="glyphicon"*/
/*                                               ng-if="project.tasks.length > 0"*/
/*                                               ng-show="project.predicate == header"*/
/*                                               ng-class="{'glyphicon-arrow-down' : project.reverse, 'glyphicon-arrow-up' : !project.reverse}"></span>*/
/*                                     </th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody ui-sortable="project.sortableOptions" ng-model="project.tasks">*/
/*                                 <tr ng-if="!project.tasks.length" class="placeholder">*/
/*                                     <td colspan="4" class="no-tasks">*/
/*                                         <div class="alert alert-info">No tasks. You can create new task for this project!</div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr data-ng-repeat="task in project.tasks  | orderBy:project.predicate:project.reverse">*/
/*                                     <td data-ng-bind="task.title"></td>*/
/*                                     <td data-ng-bind="task.date | normalDate | date:'medium'"></td>*/
/*                                     <td>*/
/*                                         <span class="glyphicon glyphicon-flag"*/
/*                                               ng-class="{'minor': task.status == 1, 'major': task.status == 2, 'critical': task.status == 3}"></span>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <a class="btn btn-default" type="button" data-ng-click="project.editTask(task)">*/
/*                                             <span class="glyphicon glyphicon glyphicon-pencil"></span>*/
/*                                         </a>*/
/*                                         <a class="btn btn-primary" type="button" data-ng-click="project.deleteTask(task)">*/
/*                                             <span class="glyphicon glyphicon-remove"></span>*/
/*                                         </a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         <a class="btn btn-default " data-ng-click="project.addTask()"> <i class="glyphicon glyphicon glyphicon-plus"></i> Add new task</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <a class="btn btn-default" data-ng-click="addProject()"> <i class="glyphicon glyphicon glyphicon-plus"></i> Add new project</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
