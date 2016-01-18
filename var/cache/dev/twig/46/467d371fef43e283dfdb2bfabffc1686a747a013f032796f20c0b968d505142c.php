<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_89c144e65a0923f7562a4ef17fcbefa59d8995256ccd0bdabf3e1ea4cafb7082 extends Twig_Template
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
        $__internal_6abf99ca69a22f59663362d3f87152d8fba61a830229e8561481118c608a8158 = $this->env->getExtension("native_profiler");
        $__internal_6abf99ca69a22f59663362d3f87152d8fba61a830229e8561481118c608a8158->enter($__internal_6abf99ca69a22f59663362d3f87152d8fba61a830229e8561481118c608a8158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6abf99ca69a22f59663362d3f87152d8fba61a830229e8561481118c608a8158->leave($__internal_6abf99ca69a22f59663362d3f87152d8fba61a830229e8561481118c608a8158_prof);

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
