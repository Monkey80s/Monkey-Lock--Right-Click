<?php


class qa_html_theme_layer extends qa_html_theme_base {

	function head_script()
{
    parent::head_script();

    $this->output_raw('<script language="JavaScript">
    function click() { 
    if (event.button==2) { 
    alert(\'All rights are reserved. Please avoid copying. This is fraud.\'); 
    } 
    }
    

    document.onmousedown=click; 
    
    </script>');
}
	
}
/*
   Omit PHP closing tag to help avoid accidental output
 */


