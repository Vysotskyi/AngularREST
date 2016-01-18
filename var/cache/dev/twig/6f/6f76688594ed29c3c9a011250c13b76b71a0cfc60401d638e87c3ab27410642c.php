<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_02d0ad2a1857327d5f360b5a8591a8f9652aabf026f195fd1c5e5f26a0df4364 extends Twig_Template
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
        $__internal_eeb1e6ff78c08aa90c57c8ab2379a97bf71e02c84b1a4d795e4560906999ea11 = $this->env->getExtension("native_profiler");
        $__internal_eeb1e6ff78c08aa90c57c8ab2379a97bf71e02c84b1a4d795e4560906999ea11->enter($__internal_eeb1e6ff78c08aa90c57c8ab2379a97bf71e02c84b1a4d795e4560906999ea11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eeb1e6ff78c08aa90c57c8ab2379a97bf71e02c84b1a4d795e4560906999ea11->leave($__internal_eeb1e6ff78c08aa90c57c8ab2379a97bf71e02c84b1a4d795e4560906999ea11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
