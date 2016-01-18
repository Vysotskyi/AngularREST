<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_130351dd001a6dcd06bc28766f2aa096a22af2b9e06bc9629fa3c16baaedfab0 extends Twig_Template
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
        $__internal_f336c17651b24a740088d7b1fc984e5dcffa6d2e08727033fb749ba1364c1990 = $this->env->getExtension("native_profiler");
        $__internal_f336c17651b24a740088d7b1fc984e5dcffa6d2e08727033fb749ba1364c1990->enter($__internal_f336c17651b24a740088d7b1fc984e5dcffa6d2e08727033fb749ba1364c1990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f336c17651b24a740088d7b1fc984e5dcffa6d2e08727033fb749ba1364c1990->leave($__internal_f336c17651b24a740088d7b1fc984e5dcffa6d2e08727033fb749ba1364c1990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
