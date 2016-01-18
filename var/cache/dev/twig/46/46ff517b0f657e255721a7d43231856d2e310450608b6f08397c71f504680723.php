<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6f68e57d51d0e46325701775320d67fe653a74419b1e961f111d7791351e2dfa extends Twig_Template
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
        $__internal_93a9806a9c1b3f939a1b1652b2383ce5bd36224a9374424ab14dad2daf7da46c = $this->env->getExtension("native_profiler");
        $__internal_93a9806a9c1b3f939a1b1652b2383ce5bd36224a9374424ab14dad2daf7da46c->enter($__internal_93a9806a9c1b3f939a1b1652b2383ce5bd36224a9374424ab14dad2daf7da46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_93a9806a9c1b3f939a1b1652b2383ce5bd36224a9374424ab14dad2daf7da46c->leave($__internal_93a9806a9c1b3f939a1b1652b2383ce5bd36224a9374424ab14dad2daf7da46c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
