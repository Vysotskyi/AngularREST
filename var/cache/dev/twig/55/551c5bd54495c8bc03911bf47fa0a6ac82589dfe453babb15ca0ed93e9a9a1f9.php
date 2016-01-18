<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_dd9351c25e84673c63e9b5b8f33b601de8fb44410d5e019057718c7c46d8d294 extends Twig_Template
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
        $__internal_3938d327704694e700a1f5e5480ef48d4f3d951d7d10423e5f8a78e1011f6fc3 = $this->env->getExtension("native_profiler");
        $__internal_3938d327704694e700a1f5e5480ef48d4f3d951d7d10423e5f8a78e1011f6fc3->enter($__internal_3938d327704694e700a1f5e5480ef48d4f3d951d7d10423e5f8a78e1011f6fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3938d327704694e700a1f5e5480ef48d4f3d951d7d10423e5f8a78e1011f6fc3->leave($__internal_3938d327704694e700a1f5e5480ef48d4f3d951d7d10423e5f8a78e1011f6fc3_prof);

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
