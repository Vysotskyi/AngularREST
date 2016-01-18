<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_821e1eb38430b75cae3e85eda8c4bfd91d2c311cfd1f57c0d2e0de53a42688a9 extends Twig_Template
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
        $__internal_6baad07d19c77ea8c5cadddb8ec987444a2323b8e8a4b19a90843221627a270c = $this->env->getExtension("native_profiler");
        $__internal_6baad07d19c77ea8c5cadddb8ec987444a2323b8e8a4b19a90843221627a270c->enter($__internal_6baad07d19c77ea8c5cadddb8ec987444a2323b8e8a4b19a90843221627a270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6baad07d19c77ea8c5cadddb8ec987444a2323b8e8a4b19a90843221627a270c->leave($__internal_6baad07d19c77ea8c5cadddb8ec987444a2323b8e8a4b19a90843221627a270c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
