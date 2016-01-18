<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_846b23a6d40d43e54d6edcad2fa3c81188561fca91dbd54d1eb952063f6915ef extends Twig_Template
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
        $__internal_24ce630ac582238bf429f25ffa44346d9c74a85843aa970f93ddb6b1446dcf17 = $this->env->getExtension("native_profiler");
        $__internal_24ce630ac582238bf429f25ffa44346d9c74a85843aa970f93ddb6b1446dcf17->enter($__internal_24ce630ac582238bf429f25ffa44346d9c74a85843aa970f93ddb6b1446dcf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_24ce630ac582238bf429f25ffa44346d9c74a85843aa970f93ddb6b1446dcf17->leave($__internal_24ce630ac582238bf429f25ffa44346d9c74a85843aa970f93ddb6b1446dcf17_prof);

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
