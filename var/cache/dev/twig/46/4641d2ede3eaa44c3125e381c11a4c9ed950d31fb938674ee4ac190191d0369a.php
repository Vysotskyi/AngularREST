<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7bda0c82df922d59bf97e39da6b4230cd3c607b216c35428cc71dc91704bb12e extends Twig_Template
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
        $__internal_df96a056cfa79c826105f3c070c00d95a9b61789506382a4255631a8d67ae19f = $this->env->getExtension("native_profiler");
        $__internal_df96a056cfa79c826105f3c070c00d95a9b61789506382a4255631a8d67ae19f->enter($__internal_df96a056cfa79c826105f3c070c00d95a9b61789506382a4255631a8d67ae19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_df96a056cfa79c826105f3c070c00d95a9b61789506382a4255631a8d67ae19f->leave($__internal_df96a056cfa79c826105f3c070c00d95a9b61789506382a4255631a8d67ae19f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
