<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5be2f79c83228c800e4e64ede4c7cc43d29b57d53a58a31144a9037e1be8b4da extends Twig_Template
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
        $__internal_233765e7e84935dd4ea133a34be648d3e38ef43df389ef75332f8e511801e9ae = $this->env->getExtension("native_profiler");
        $__internal_233765e7e84935dd4ea133a34be648d3e38ef43df389ef75332f8e511801e9ae->enter($__internal_233765e7e84935dd4ea133a34be648d3e38ef43df389ef75332f8e511801e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_233765e7e84935dd4ea133a34be648d3e38ef43df389ef75332f8e511801e9ae->leave($__internal_233765e7e84935dd4ea133a34be648d3e38ef43df389ef75332f8e511801e9ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
