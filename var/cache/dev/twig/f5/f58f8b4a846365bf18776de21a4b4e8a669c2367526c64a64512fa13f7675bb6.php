<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_28c2035ca75fe5ff05486bb2f85eddf7a6e7f56fcab6a1e21130c038e45c5893 extends Twig_Template
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
        $__internal_f0f709c55250a385be6be83a32ff5bc40e67ca8db7041e5f702b8cf93dc436d5 = $this->env->getExtension("native_profiler");
        $__internal_f0f709c55250a385be6be83a32ff5bc40e67ca8db7041e5f702b8cf93dc436d5->enter($__internal_f0f709c55250a385be6be83a32ff5bc40e67ca8db7041e5f702b8cf93dc436d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f0f709c55250a385be6be83a32ff5bc40e67ca8db7041e5f702b8cf93dc436d5->leave($__internal_f0f709c55250a385be6be83a32ff5bc40e67ca8db7041e5f702b8cf93dc436d5_prof);

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
