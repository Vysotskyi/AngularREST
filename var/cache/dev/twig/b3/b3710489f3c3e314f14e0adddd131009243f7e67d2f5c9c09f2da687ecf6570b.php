<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5e302ed8d38a87c1e5abaae9c2e40a41cd5ce4c191e064c10837e23d6cc09cd3 extends Twig_Template
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
        $__internal_7eec497ec9c812b6a446a6932092814b02ad78d250dbb29eb38d17ea4677c3a0 = $this->env->getExtension("native_profiler");
        $__internal_7eec497ec9c812b6a446a6932092814b02ad78d250dbb29eb38d17ea4677c3a0->enter($__internal_7eec497ec9c812b6a446a6932092814b02ad78d250dbb29eb38d17ea4677c3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7eec497ec9c812b6a446a6932092814b02ad78d250dbb29eb38d17ea4677c3a0->leave($__internal_7eec497ec9c812b6a446a6932092814b02ad78d250dbb29eb38d17ea4677c3a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
