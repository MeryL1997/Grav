<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/var/www/html/grav/user/pages/07.contact/_main */
class __TwigTemplate_4bd83651873e7132f4b000dba976c980a05f5eac67a7a157d61053154968ea8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"modular-row contact borderbottom\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            


                            




<form name=\"contact\"
      action=\"/formulario-contacto\"
      method=\"POST\"
      id=\"contact\"            class=\" \"
                  >

  
    
            
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Nombre
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[name]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control \"
                                                                                                                                                                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Email
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"email\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[email]\"
                                value=\"\"
                                                                    type=\"email\"
                                            class=\" form-control \"
                                                                                                                                                placeholder=\"Ingrese&#x20;su&#x20;email\"                                                                                                                                                                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Tel&#x00E9;fono
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[tel]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control \"
                                                                                                                                                placeholder=\"Ingrese&#x20;su&#x20;n&#x00FA;mero&#x20;celular\"                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Fecha&#x20;Nacimiento
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"date\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[dateb]\"
                                value=\"\"
                                                                    type=\"date\"
                                                class=\" form-control \"
                                                                                                                                                                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Mensaje
                                                    
                        
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"textarea\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                        <div class=\"form-textarea-wrapper  \">
        <textarea
                        name=\"data[message]\"
                                        class=\" form-control \"
                                                                placeholder=\"Ingrese su mensaje\"                                                                                                                                                                                                                        ></textarea>
    </div>
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        G&#x00E9;nero
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                    data-grav-selectize=\"&#x5B;&#x5D;\"
                    data-grav-field=\"select\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                
            >
                                        <div class=\"form-select-wrapper  \">
        <select name=\"data[genero]\"
                class=\" form-control \"
                                                                                                required=\"required\"                                                                                                >
            
                        
                                                                                        <option  value=\"Masculino\">Masculino</option>
                                                                                                        <option  value=\"Femenino\">Femenino</option>
                                                                                                        <option  value=\"Otro\">Otro</option>
                            
        </select>
    </div>
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Estado&#x20;Civ&#x00ED;l
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                    data-grav-selectize=\"&#x5B;&#x5D;\"
                    data-grav-field=\"select\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                
            >
                                        <div class=\"form-select-wrapper  \">
        <select name=\"data[ecivil]\"
                class=\" form-control \"
                                                                                                required=\"required\"                                                                                                >
            
                        
                                                                                        <option  value=\"Soltero\">Soltero</option>
                                                                                                        <option  value=\"Casado\">Casado</option>
                                                                                                        <option  value=\"Unión_Libre\">Unión libre</option>
                            
        </select>
    </div>
                                
            </div>
            </div>

                    
  

                    
    


<input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />

  

                    
    


    

  
    <div class=\"buttons\">
  
                            <button
                                                class=\"button btn btn-primary btn-lg\"
                                
                type=\"submit\"

                            >
                              Enviar
                        </button>
                  
    </div>
  
  

                    
    


<input type=\"hidden\" name=\"__unique_form_id__\" value=\"dSzi12gwsCZJlmY4hN9y\" />


  <input type=\"hidden\" name=\"form-nonce\" value=\"e9c2fc632758ff46c65918da55b8b87a\" />
</form>

        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            <h4>Our Location</h4>
<p>We just moved to our new location down the block right beside Subway.</p>
<p>9 - 3815 Thatcher Avenue <br />
Saskatoon, Saskatchewan <br />
S7R 1A3 <br /></p>
<h4>Contact Information</h4>
<p><strong>Email:</strong>                  info@yastech.ca <br />
<strong>Primary Phone:</strong>          1 (306) 249 - 9609 <br />
<strong>Alternate Phone:</strong>        1 (306) 249 - 9612 <br />
<strong>Fax:</strong>                1 (306) 931 - 6739 <br /></p>
<h4>Office Hours</h4>
<p>Monday - Friday         8 am - 5 pm <br />
Saturday - Sunday           Closed <br />
Holidays                    Closed <br /></p>
<ul>
<li>Feel free to email or call us after hours.</li>
</ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/pages/07.contact/_main";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row contact borderbottom\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            


                            




<form name=\"contact\"
      action=\"/formulario-contacto\"
      method=\"POST\"
      id=\"contact\"            class=\" \"
                  >

  
    
            
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Nombre
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[name]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control \"
                                                                                                                                                                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Email
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"email\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[email]\"
                                value=\"\"
                                                                    type=\"email\"
                                            class=\" form-control \"
                                                                                                                                                placeholder=\"Ingrese&#x20;su&#x20;email\"                                                                                                                                                                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Tel&#x00E9;fono
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[tel]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control \"
                                                                                                                                                placeholder=\"Ingrese&#x20;su&#x20;n&#x00FA;mero&#x20;celular\"                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Fecha&#x20;Nacimiento
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"date\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[dateb]\"
                                value=\"\"
                                                                    type=\"date\"
                                                class=\" form-control \"
                                                                                                                                                                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Mensaje
                                                    
                        
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"textarea\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                        <div class=\"form-textarea-wrapper  \">
        <textarea
                        name=\"data[message]\"
                                        class=\" form-control \"
                                                                placeholder=\"Ingrese su mensaje\"                                                                                                                                                                                                                        ></textarea>
    </div>
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        G&#x00E9;nero
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                    data-grav-selectize=\"&#x5B;&#x5D;\"
                    data-grav-field=\"select\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                
            >
                                        <div class=\"form-select-wrapper  \">
        <select name=\"data[genero]\"
                class=\" form-control \"
                                                                                                required=\"required\"                                                                                                >
            
                        
                                                                                        <option  value=\"Masculino\">Masculino</option>
                                                                                                        <option  value=\"Femenino\">Femenino</option>
                                                                                                        <option  value=\"Otro\">Otro</option>
                            
        </select>
    </div>
                                
            </div>
            </div>

                          
                          

                    
    


    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Estado&#x20;Civ&#x00ED;l
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                    data-grav-selectize=\"&#x5B;&#x5D;\"
                    data-grav-field=\"select\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                
            >
                                        <div class=\"form-select-wrapper  \">
        <select name=\"data[ecivil]\"
                class=\" form-control \"
                                                                                                required=\"required\"                                                                                                >
            
                        
                                                                                        <option  value=\"Soltero\">Soltero</option>
                                                                                                        <option  value=\"Casado\">Casado</option>
                                                                                                        <option  value=\"Unión_Libre\">Unión libre</option>
                            
        </select>
    </div>
                                
            </div>
            </div>

                    
  

                    
    


<input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />

  

                    
    


    

  
    <div class=\"buttons\">
  
                            <button
                                                class=\"button btn btn-primary btn-lg\"
                                
                type=\"submit\"

                            >
                              Enviar
                        </button>
                  
    </div>
  
  

                    
    


<input type=\"hidden\" name=\"__unique_form_id__\" value=\"dSzi12gwsCZJlmY4hN9y\" />


  <input type=\"hidden\" name=\"form-nonce\" value=\"e9c2fc632758ff46c65918da55b8b87a\" />
</form>

        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            <h4>Our Location</h4>
<p>We just moved to our new location down the block right beside Subway.</p>
<p>9 - 3815 Thatcher Avenue <br />
Saskatoon, Saskatchewan <br />
S7R 1A3 <br /></p>
<h4>Contact Information</h4>
<p><strong>Email:</strong>                  info@yastech.ca <br />
<strong>Primary Phone:</strong>          1 (306) 249 - 9609 <br />
<strong>Alternate Phone:</strong>        1 (306) 249 - 9612 <br />
<strong>Fax:</strong>                1 (306) 931 - 6739 <br /></p>
<h4>Office Hours</h4>
<p>Monday - Friday         8 am - 5 pm <br />
Saturday - Sunday           Closed <br />
Holidays                    Closed <br /></p>
<ul>
<li>Feel free to email or call us after hours.</li>
</ul>
        </div>
    </div>
</div>
", "@Page:/var/www/html/grav/user/pages/07.contact/_main", "");
    }
}
