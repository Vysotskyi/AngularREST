<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_45529dcb70070c55372decfb6ea78ad0f319cc8c0eb7e4293d6d42eed67e0bdf extends Twig_Template
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
        $__internal_0da14efba43b6440c8910081800ad7ec6ef2ecaa0793463a866fd6098ab1d6b2 = $this->env->getExtension("native_profiler");
        $__internal_0da14efba43b6440c8910081800ad7ec6ef2ecaa0793463a866fd6098ab1d6b2->enter($__internal_0da14efba43b6440c8910081800ad7ec6ef2ecaa0793463a866fd6098ab1d6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0da14efba43b6440c8910081800ad7ec6ef2ecaa0793463a866fd6098ab1d6b2->leave($__internal_0da14efba43b6440c8910081800ad7ec6ef2ecaa0793463a866fd6098ab1d6b2_prof);

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
