<?php

/* @index/FrontEnd/modal.html */
class __TwigTemplate_ba8e009c9e2ac79c28b9cdefc1944984487384392c4005119b95e71f0bebc488 extends Twig_Template
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
        $__internal_5c48573f32768b0c2171291cfa158983082d00492de95b471ca8bf3f714f0db9 = $this->env->getExtension("native_profiler");
        $__internal_5c48573f32768b0c2171291cfa158983082d00492de95b471ca8bf3f714f0db9->enter($__internal_5c48573f32768b0c2171291cfa158983082d00492de95b471ca8bf3f714f0db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@index/FrontEnd/modal.html"));

        // line 1
        echo "<form name=\"editNameForm\" novalidate ng-submit=\"save()\">
    <div class=\"modal-header\">
        <h3 class=\"modal-title\" data-ng-bind=\"modal.title\"></h3>
    </div>
    <div class=\"modal-body\">
        <div data-ng-if=\"modal.type == 'project'\">
            <input type=\"text\"
                   name=\"name\"
                   class=\"form-control\"
                   data-ng-model=\"selected.item.name\"
                   value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), "item", array()), "name", array()), "html", null, true);
        echo "\"
                   placeholder=\"Enter name of project\"
                   required>
        </div>
        <div data-ng-if=\"modal.type == 'task'\">
            <input type=\"text\"
                   name=\"name\"
                   class=\"form-control\"
                   data-ng-model=\"selected.item.title\"
                   value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), "item", array()), "title", array()), "html", null, true);
        echo "\"
                   placeholder=\"Enter title of task\"
                   required><br>
            <p class=\"input-group\">
                <input required name=\"date\" type=\"text\" class=\"form-control col-md-10\" uib-datepicker-popup=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "html", null, true);
        echo "\" date-type=\"string\" ng-model=\"selected.item.date\" is-open=\"popup.opened\" min-date=\"minDate\" max-date=\"maxDate\" datepicker-options=\"dateOptions\" date-disabled=\"disabled(date, mode)\" ng-required=\"true\" close-text=\"Close\" alt-input-formats=\"altInputFormats\" readonly/>
                <span class=\"input-group-btn col-md-2\">
                    <button type=\"button\" class=\"btn btn-default\" ng-click=\"open()\"><i class=\"glyphicon glyphicon-calendar\"></i></button>
                </span>
            </p>
            <select name=\"status\" class=\"form-control\" data-ng-model=\"selected.item.status\" required>
                <option value=\"1\" ng-selected=\"selected.item.status == 1 ? 'selected': ''\">Minor</option>
                <option value=\"2\" ng-selected=\"selected.item.status == 2 ? 'selected': ''\">Major</option>
                <option value=\"3\" ng-selected=\"selected.item.status == 3 ? 'selected': ''\">Critical</option>
            </select>
        </div>
    </div>
    <div class=\"modal-footer\">
        <button class=\"btn btn-info\" type=\"submit\"
                data-ng-if=\"modal.type == 'project'\"
                ng-disabled=\"!editNameForm.name.\$valid\">OK</button>
        <button class=\"btn btn-info\" type=\"submit\"
                ng-disabled=\"!editNameForm.name.\$valid || !editNameForm.date.\$valid || !editNameForm.status.\$valid\"
                data-ng-if=\"modal.type == 'task'\">OK</button>
        <button class=\"btn btn-primary\" type=\"button\" ng-click=\"cancel()\">Cancel</button>
    </div>
</form>";
        
        $__internal_5c48573f32768b0c2171291cfa158983082d00492de95b471ca8bf3f714f0db9->leave($__internal_5c48573f32768b0c2171291cfa158983082d00492de95b471ca8bf3f714f0db9_prof);

    }

    public function getTemplateName()
    {
        return "@index/FrontEnd/modal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  46 => 20,  34 => 11,  22 => 1,);
    }
}
/* <form name="editNameForm" novalidate ng-submit="save()">*/
/*     <div class="modal-header">*/
/*         <h3 class="modal-title" data-ng-bind="modal.title"></h3>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*         <div data-ng-if="modal.type == 'project'">*/
/*             <input type="text"*/
/*                    name="name"*/
/*                    class="form-control"*/
/*                    data-ng-model="selected.item.name"*/
/*                    value="{{selected.item.name}}"*/
/*                    placeholder="Enter name of project"*/
/*                    required>*/
/*         </div>*/
/*         <div data-ng-if="modal.type == 'task'">*/
/*             <input type="text"*/
/*                    name="name"*/
/*                    class="form-control"*/
/*                    data-ng-model="selected.item.title"*/
/*                    value="{{selected.item.title}}"*/
/*                    placeholder="Enter title of task"*/
/*                    required><br>*/
/*             <p class="input-group">*/
/*                 <input required name="date" type="text" class="form-control col-md-10" uib-datepicker-popup="{{format}}" date-type="string" ng-model="selected.item.date" is-open="popup.opened" min-date="minDate" max-date="maxDate" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" alt-input-formats="altInputFormats" readonly/>*/
/*                 <span class="input-group-btn col-md-2">*/
/*                     <button type="button" class="btn btn-default" ng-click="open()"><i class="glyphicon glyphicon-calendar"></i></button>*/
/*                 </span>*/
/*             </p>*/
/*             <select name="status" class="form-control" data-ng-model="selected.item.status" required>*/
/*                 <option value="1" ng-selected="selected.item.status == 1 ? 'selected': ''">Minor</option>*/
/*                 <option value="2" ng-selected="selected.item.status == 2 ? 'selected': ''">Major</option>*/
/*                 <option value="3" ng-selected="selected.item.status == 3 ? 'selected': ''">Critical</option>*/
/*             </select>*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button class="btn btn-info" type="submit"*/
/*                 data-ng-if="modal.type == 'project'"*/
/*                 ng-disabled="!editNameForm.name.$valid">OK</button>*/
/*         <button class="btn btn-info" type="submit"*/
/*                 ng-disabled="!editNameForm.name.$valid || !editNameForm.date.$valid || !editNameForm.status.$valid"*/
/*                 data-ng-if="modal.type == 'task'">OK</button>*/
/*         <button class="btn btn-primary" type="button" ng-click="cancel()">Cancel</button>*/
/*     </div>*/
/* </form>*/
