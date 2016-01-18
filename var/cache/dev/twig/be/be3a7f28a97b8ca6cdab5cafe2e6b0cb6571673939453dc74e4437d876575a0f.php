<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_82bb59a874cba1e30a13b74c96d31521c23d1ce73248d1b8c989b4efd1eeb7c0 extends Twig_Template
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
        $__internal_eec9cb872cf1f9015d6a102d420372135af21b7c15e6f00e871937943c9f1c55 = $this->env->getExtension("native_profiler");
        $__internal_eec9cb872cf1f9015d6a102d420372135af21b7c15e6f00e871937943c9f1c55->enter($__internal_eec9cb872cf1f9015d6a102d420372135af21b7c15e6f00e871937943c9f1c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eec9cb872cf1f9015d6a102d420372135af21b7c15e6f00e871937943c9f1c55->leave($__internal_eec9cb872cf1f9015d6a102d420372135af21b7c15e6f00e871937943c9f1c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
