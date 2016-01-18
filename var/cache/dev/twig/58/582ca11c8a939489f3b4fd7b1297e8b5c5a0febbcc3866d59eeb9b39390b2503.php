<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5293eb3203ae8456806d63a0855c609d231f32bc28ffefc52cdfd4d95da9b3ff extends Twig_Template
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
        $__internal_b087504ec8c8c2eb75401c284ea5173f1139f7337e9c7fafc8987949f772a8b1 = $this->env->getExtension("native_profiler");
        $__internal_b087504ec8c8c2eb75401c284ea5173f1139f7337e9c7fafc8987949f772a8b1->enter($__internal_b087504ec8c8c2eb75401c284ea5173f1139f7337e9c7fafc8987949f772a8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b087504ec8c8c2eb75401c284ea5173f1139f7337e9c7fafc8987949f772a8b1->leave($__internal_b087504ec8c8c2eb75401c284ea5173f1139f7337e9c7fafc8987949f772a8b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
