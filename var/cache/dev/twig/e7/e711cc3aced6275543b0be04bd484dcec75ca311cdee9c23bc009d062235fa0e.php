<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_79f9303f4b696edeac2d99e0b8a6c72603abe17db0dc823ab01276e85b7bf220 extends Twig_Template
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
        $__internal_5cd9bbde093eddc9d298e3c81873d54df8a14106f4cd4c96355cb994ebe39554 = $this->env->getExtension("native_profiler");
        $__internal_5cd9bbde093eddc9d298e3c81873d54df8a14106f4cd4c96355cb994ebe39554->enter($__internal_5cd9bbde093eddc9d298e3c81873d54df8a14106f4cd4c96355cb994ebe39554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5cd9bbde093eddc9d298e3c81873d54df8a14106f4cd4c96355cb994ebe39554->leave($__internal_5cd9bbde093eddc9d298e3c81873d54df8a14106f4cd4c96355cb994ebe39554_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
